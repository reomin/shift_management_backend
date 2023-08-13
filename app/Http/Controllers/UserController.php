<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        return response()->json($users);
    }


    public function create(Request $request)
    {
        // リクエストから入力データを収集
        $name = $request->input('name');
        $level = $request->input('level');

        // ログを出力
        Log::info('This is an informational message.');
        Log::info($level);


        // ユーザーをデータベースに保存
        $user = new User();
        $user->name = $name;
        $user->level = $level;
        $user->status = 0;
        $user->save();

        return response()->json(['message' => 'User created successfully']);
    }
}
