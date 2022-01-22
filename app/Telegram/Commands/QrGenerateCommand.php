<?php

namespace App\Telegram\Commands;

use App\Models\Fake;
use Intervention\Image\Facades\Image;
use Intervention\Image\Imagick\Font;
use Log;
use QrCode;
use Telegram\Bot\Actions;
use Telegram\Bot\Exceptions\TelegramSDKException;
use Telegram\Bot\FileUpload\InputFile;


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
            $this->replyWithChatAction(['action' => Actions::TYPING]);
            $track_id = $this->getArguments()['track_id'] ?? null;
            $str = $this->getArguments()['str'] ?? null;
            $logo = public_path('images/safe.png');
            $text = [];
            if (is_null($str)) $text[] = "⛔️ <b>Напишите текст для получения QR кода.</b>\n\r<i>Пример: /qr text</i>";
            else $text[] = "♻️ <b>Генерирую QR код...</b>";
            $this->replyWithMessage([
                "text" => makeText($text),
                "parse_mode" => "html",
            ]);
            if ($track_id && $fake = Fake::whereTrackId($track_id)->first()) {
                $str = $fake->link(false, false);
                $categoryName = \Str::lower($fake->category->name);
                $img = file_exists(public_path("images/qr/logo{$categoryName}.png")) ? public_path("images/qr/logo{$categoryName}.png") : public_path("images/{$categoryName}_logo.png");
                if (file_exists($img)) $logo = $img;
            }

            if (!is_null($str)) {
                $this->replyWithChatAction(['action' => Actions::UPLOAD_PHOTO]);
                $fileName = 'code.png';
                $path = "images/qr";
                if (!is_dir(public_path($path))) mkdir(public_path($path));
                $fullPath = public_path("$path/$fileName");
                $qr = QrCode::encoding('UTF-8')
                    ->color(77, 164, 239, 1)
                    ->backgroundColor(255, 255, 255, 1)
                    ->eyeColor(0, 255, 65, 46, 1, 0, 0)
//                    ->eye('square')
//                    ->eyeColor(1, 255, 255, 255, 0, 0, 0)
//                    ->eyeColor(2, 255, 255, 255, 0, 0, 0)
//                    ->style('round', 0.3)
                    ->margin(2)
                    ->merge($logo, .1, true)
                    ->size(350)
                    ->errorCorrection('H')
//                    ->format('png')
                    ->generate($str);
//                Log::info(json_encode($qr));
                if (file_exists($fullPath)) {
                    $img = Image::canvas(450, 600,'009900');
                    $img->insert($fullPath,'top',0,100);
                    $img->text('This is a example ', 0, 0, function ($font) {
                        $font->size(12);
                        $font->color('#ff0000');
                        $font->align('center');
                        $font->valign('center');
                        $font->angle(45);
                    });
                    $img->save($fullPath);


//                    $img = Image::make($fullPath);
//                    $img->text('This is a example ', 0, 0, function ($font) {
//                        $font->size(24);
//                        $font->color('#ff0000');
//                        $font->align('center');
//                        $font->valign('top');
//                        $font->angle(45);
//                    });
//                    $img->insert($fullPath, 'top');
//                    $img->save($fullPath);
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
        } catch (\Exception $exception) {
            Log::error($exception->getMessage());
            $this->replyWithMessage([
                "text" => "⛔️ <b>Что то пошло не так, попробуйте позже.</b>",
                "parse_mode" => "html",
            ]);
        }
    }
}