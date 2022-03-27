<?php

namespace App\Telegram\Dialogs;

use App\Models\Fake;
use Log;
use Telegram\Bot\Keyboard\Keyboard;
use Throwable;

class DeleteAllFakesDialog extends Dialog
{
    protected $steps = [
        'index',
        ['name' => 'answer', 'is_dich' => true]
    ];

    public function index()
    {
        try {
            $ids = $this->getData('ids');
            if (is_null($ids)) {
                $btns = $this->getConfig('btns');
                $text = "❗️ <b>Объявления нет</b>";
                $keyboard = Keyboard::make([
                    "keyboard" => [[["text" => $btns->get('start') ?? '']]],
                    "resize_keyboard" => true,
                    "one_time_keyboard" => false,
                ]);
                $this->end();
            } else {
                $text = "<b>Вы уверены ❔</b>";
                $keyboard = Keyboard::make([
                    "keyboard" => [[["text" => "да"], ["text" => "нет"]]],
                    "resize_keyboard" => true,
                    "one_time_keyboard" => false,
                ]);
            }
            $this->telegram->sendMessage([
                "chat_id" => $this->getChat()->getId(),
                "text" => $text,
                "parse_mode" => "html",
                "reply_markup" => $keyboard
            ]);
        } catch (Throwable $e) {
            Log::error($e->getMessage());
        }
    }

    public function answer()
    {
        try {
            $ids = explode(',', $this->getData('ids'));
            $btns = $this->getConfig('btns');
            if ($this->yes) {
                $fakes = Fake::whereIn('id', $ids)->get();
                $count = $fakes->count();
                foreach ($fakes as $fake) {
                    $img = $fake->img;
                    if ($fake->delete() && file_exists($img)) unlink($img);
                }
                $text = "♻️ <i>Вы успешно удалили ($count) объявления</i>";
            } else {
                $text = "❌ <i>Отмена действия</i>";
            }
            $keyboard = Keyboard::make([
                "keyboard" => [[["text" => $btns->get('start') ?? '']]],
                "resize_keyboard" => true,
                "one_time_keyboard" => false,
            ]);
            $this->telegram->sendMessage([
                "chat_id" => $this->getChat()->getId(),
                "text" => $text,
                "parse_mode" => "html",
                "reply_markup" => $keyboard
            ]);
            $this->end();
            $this->telegram->triggerCommand('start',$this->update);
        } catch (Throwable $e) {
            Log::error($e->getMessage());
        }
    }

}
