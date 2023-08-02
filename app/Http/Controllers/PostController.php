<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    /**
    * Post一覧を表示する
    *
    * @param Post Postモデル
    * @return array Postモデルリスト
    */
    public function index(Post $post)//インポートしたPostをインスタンス化して$postとして使用。
    {
        return view('posts.index')->with(['posts' => $post->getPaginateByLimit(1)]);
        //blade内で使う変数'posts'と設定。'posts'の中身にgetを使い、インスタンス化した$postを代入。

    }

    /**
    * 特定IDのpostを表示する
    *
    * @params Object Post // 引数の$postはid=1のPostインスタンス
    * @return Reposnse post view
    */
    public function show(Post $post)
    {
        return view('posts.show')->with(['post' => $post]);

    }
}
