<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Models\Post;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    //return redirect(route('posts.index'));

    //-----新增資料-----
        //使用save方法
        //$post=new Post();
        //$post->title='test title';
        //$post->content='test content';
        //$post->save();

        //使用create方法
        /*Post::create([
            'title'=>'created title',
            'content'=>'created content',
        ]);*/

    //-----查詢資料-----
        //使用find方法
        /*$post=Post::find(1);
        echo '標題：'.$post->title.'<br>';
        echo '內容：'.$post->content.'<br>';
        dd($post);*/

        //使用all方法
        /*$posts=Post::all();
        foreach ($posts as $post){
            echo '編號：'.$post->id.'<br>';
            echo '標題：'.$post->title.'<br>';
            echo '內容：'.$post->content.'<br>';
            echo '張貼時間：：'.$post->created_at.'<br>';
        }
        dd($posts);*/

        //練習條件式
        /*$posts=Post::where('id','<',10)->orderBy('id','DESC')->get();
        dd($posts);*/


    //-----更新資料-----
        //使用updete方法
        /*$post=Post::find(1);
        $post->update([
        'title'=>'updated title',
        'content'=>'updated content',
        ]);*/

        //使用save方法
       /*$post=Post::find(1);
        $post->title='saved title';
        $post->content='saved content';
        $post->save();*/

    //-----刪除資料-----
        //使用delete方法
        /*$post=Post::find(1);
        $post->delete();*/

        //使用destroy方法
        //Post::destroy(2);
        //Post::destroy(3,5,7);   //刪除多筆資料

    //-----了解Model和Collection差異-----
        //取得Collection 多筆貼文的集合
        /*$allPosts=Post::all();
        dd($allPosts);*/
        $featuredPosts=Post::where('is_feature',1)->get();
        dd($featuredPosts);


});

Route::get('posts',[PostController::class,'index'])->name('posts.index');
Route::get('post',[PostController::class,'show'])->name('posts.show');
Route::get('contact',[PostController::class,'contact'])->name('posts.contact');
Route::get('about',[PostController::class,'about'])->name('posts.about');

