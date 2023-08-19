<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Shift;

class ShiftController extends Controller
{

    public function create(Request $request)
    {
        // リクエストから入力データを収集
        $uid = $request->input('uid');
        $date = $request->input('date');

        // ログを出力
        Log::info('This is an informational message.');
        Log::info($date);


        // ユーザーをデータベースに保存
        $shift = new Shift();
        $shift->uid = $uid;
        $shift->date = $date;
        $shift->save();

        Log::info("成功しました");

        return response()->json(['message' => 'Shift created successfully']);
    }
}
