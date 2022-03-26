<?php

namespace App\Telegram\Commands;

use App\Models\Country;
use Illuminate\Support\Facades\App;
use Log;
use QrCode;
use App\Models\Fake;
use Str;
use Telegram\Bot\Actions;
use Intervention\Image\AbstractFont;
use Intervention\Image\Facades\Image;
use Telegram\Bot\FileUpload\InputFile;
use Telegram\Bot\Exceptions\TelegramSDKException;
use Throwable;


/**
 * Class HelpCommand.
 */
class QrGenerateCommand extends BaseCommand
{
    /**
     * @var string Command Name
     */
    protected $name = 'qr';
    protected $pattern = '{str}{track_id?}';

    /**
     * @var string Command Description
     */
    protected $description = 'Сгенерировать QR';


    /**
     * {@inheritdoc}
     */
    public function handle()
    {
        try {
            $width = 476;
            $height = 600;
            $border = 5;
            $center_x = $width / 2;
            $center_y = $height / 1.2;
            $max_len = 32;
            $font_size = 24;
            $font_height = 14;


            $this->replyWithChatAction(['action' => Actions::TYPING]);
            $track_id = $this->getArguments()['track_id'] ?? null;
            $str = $this->getArguments()['str'] ?? null;
            $text = [];
            if (is_null($str)) $text[] = "⛔️ <b>Напишите текст для получения QR кода.</b>\n\r<i>Пример: /qr text</i>";
            else $text[] = "♻️ <b>Генерирую QR код...</b>";
            $this->replyWithMessage([
                "text" => makeText($text),
                "parse_mode" => "html",
            ]);
            if ($track_id && $fake = Fake::whereTrackId($track_id)->first()) {
                $locale = $fake->country->locale ?? Country::locale(Country::POLAND);
                if (!App::isLocale($locale)) App::setLocale($locale);
                $str = $fake->link(false, false);
                $categoryName = Str::lower($fake->category->name);
                $img = file_exists(public_path("images/qr/logo/{$categoryName}.png")) ? public_path("images/qr/logo/{$categoryName}.png") : public_path("images/{$categoryName}_logo.png");
                if (file_exists($img)) $logo = $img;
            }
            $imgText = __("YOUR SUBJECT IS PAID! SCAN AN INDIVIDUAL QR-CODE TO ACTIVATE \"BUY NOW\"");

            $lines = explode("\n", wordwrap($imgText, $max_len));
            $y = (int)($center_y - ((count($lines) - 1) * $font_height));

            if (!is_null($str)) {
                $this->replyWithChatAction(['action' => Actions::UPLOAD_PHOTO]);
                $fileName = 'code.png';
                $path = "images/qr";
                if (!is_dir(public_path($path))) mkdir(public_path($path));
                $fullPath = public_path("$path/$fileName");
                if (file_exists($fullPath)) unlink($fullPath);
                $format = 'png';
                $qr = QrCode::encoding('UTF-8')
                    ->format($format)
                    ->size($width - 100)
                    ->color(0, 180, 189)
                    ->eyeColor(0, 255, 65, 46, 1, 0, 0)
                    ->margin(3);
                if (isset($logo)) $qr = $qr->merge($logo, .15, true);

                $base64 = "data:image/$format;base64, " . base64_encode($qr->errorCorrection('H')->generate($str));
                $img = Image::canvas($width, $height, '00b4bd');
                $img->insert(imagecreatefrompng($base64), 'top', 0, 50);
                if (isset($categoryName)) {
                    foreach ($lines as $line) {
                        $img->text($line, $center_x, $y, function (AbstractFont $font) use ($font_size) {
                            $font->file(public_path('fonts/Roboto/Roboto-Regular.ttf'));
                            $font->size($font_size);
                            $font->color('#ffffff');
                            $font->align('center');
                        });
                        $y += $font_height * 2;
                    }
                    $img->text(Str::upper($categoryName) . ' ' . date('Y'), $center_x, $y + 20, function (AbstractFont $font) use ($font_size) {
                        $font->file(public_path('fonts/Roboto/Roboto-Bold.ttf'));
                        $font->size((int)($font_size / 1.5));
                        $font->color('#ffffff');
                        $font->align('center');
                        $font->valign('center');
                    });
                }

                $img->rectangle($border / 2, $border / 2, $width - $border / 2, $height - $border / 2, function ($draw) use ($border) {
                    $draw->border($border, '#ffffff');
                });

                $img->save($fullPath);

                if (file_exists($fullPath)) {
                    $this->replyWithPhoto([
                        "photo" => InputFile::create($fullPath)
                    ]);
                } else $this->replyWithMessage([
                    "text" => "⛔️ <b>Не удалось сгенерировать QR код.</b>",
                    "parse_mode" => "html",
                ]);
            }
        } catch (TelegramSDKException $telegramSDKException) {
            Log::error($telegramSDKException->getMessage());
        } catch (Throwable $exception) {
            Log::error($exception->getMessage());
            $this->replyWithMessage([
                "text" => "⛔️ <b>Что то пошло не так, попробуйте позже.</b>",
                "parse_mode" => "html",
            ]);
        }
    }
}
