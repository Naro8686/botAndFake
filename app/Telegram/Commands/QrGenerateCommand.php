<?php

namespace App\Telegram\Commands;

use Log;
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
    protected $pattern = '{str}';

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
            $str = $this->getArguments()['str'] ?? null;
            $text = [];
            if (is_null($str)) $text[] = "⛔️ <b>Напишите текст для получения QR кода.</b>\n\r<i>Пример: /qr text</i>";
            else $text[] = "♻️ <b>Генерирую QR код...</b>";
            $this->replyWithMessage([
                "text" => makeText($text),
                "parse_mode" => "html",
            ]);
            if (!is_null($str)) {
                $this->replyWithChatAction(['action' => Actions::UPLOAD_PHOTO]);
                $fileName = 'code.png';
                $path = "images/qr/$fileName";
                $fullPath = public_path($path);
                \QrCode::encoding('UTF-8')->format('png')->generate($str, $fullPath);
                if (file_exists($fullPath)) $this->replyWithPhoto([
                    "photo" => InputFile::create($fullPath)
                ]);
                else $this->replyWithMessage([
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