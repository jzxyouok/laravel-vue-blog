<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubscribeController extends Controller
{
    public function create(Request $request)
    {
        if (!$request->has('email')) {
            return [
                'ok' => false,
                'message' => 'Email не указан.'
            ];
        }
        $email = $request->input('email');
        if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return [
                'ok' => false,
                'message' => 'Email указан не верно.'
            ];
        }

        return [
            'ok' => true,
            'message' => 'Спасибо, Вы подписаны на рассылку.'
        ];
    }
}
