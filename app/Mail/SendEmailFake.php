<?php

namespace App\Mail;

use App\Models\Category;
use App\Models\Fake;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
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
        $categoryName = $fake->category->name;
        switch ($fake->category->name) {
            case Category::DPD:
            case Category::VINTED:
            case Category::INPOST:
                $name = 'DELIV';
                break;
            default:
                $name = Str::upper($categoryName);
                break;
        }
        $address = setting("{$categoryName}_email", setting('default_email', "{$categoryName}@dostawa-safe.live"));
        $subject = 'Prosimy przejść weryfikacje dla potwierdzenia zamówienia dostawy kurierskiej!';
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
