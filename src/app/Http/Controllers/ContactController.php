<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    //
    // public function index()
    // {
    //     return view('index');
    // }

    //初期画面表示
    public function index()
    {
        return view('index');
    }

    //確認画面表示
    public function confirm(ContactRequest $request){
        $contact = $request->only(['name', 'email', 'tel','content']);
        // return $contact; レスポンスボディーに返す
        // return view('confirm');　ビューを呼び出す
        // return view('confirm', ['contact' => $contact]);　ビューを呼び出し、値を渡す
        return view('confirm', compact('contact'));  //compactでシンプルに
    }

    //登録完了
    public function store(ContactRequest $request){
        $contact = $request->only(['name', 'email', 'tel','content']);
        // return view('thanks');　ビューを呼び出す
        // return view('thanks', compact('contact'));  //compactでシンプルに
        Contact::create($contact); //データ登録
        return view('thanks');
    }
}
