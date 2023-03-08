<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\PaymentCategory;
use App\Models\Post;
use App\Models\Type;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $post = Post::all();
        return view('admin.post.index',compact('post'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $payment = PaymentCategory::all();
        $type = Type::all();
        $category = Category::all();
        return view('admin.post.create',compact('payment','type','category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $post = new Post();
        $post->title = $request->title;
        $post->description = $request->description;
        $post->category = $request->category;
        $post->tags = $request->tags;
        $post->paymentcategory = $request->paymentcategory;
        $post->type = $request->type;
        $post->age = $request->age;
        $post->views = $request->views;
        uploadImage($request,$post,'image');
        $post->save();
        return redirect()->route('post.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $post = Post::find($id);
        $category = Category::all();
        $payment = PaymentCategory::all();
        $type = Type::all();
        return view('admin.post.edit',compact('post','payment','type','category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $post =  post::find($id);
        $post->title = $request->title;
        $post->description = $request->description;
        $post->category = $request->category;
        $post->tags = $request->tags;
        $post->paymentcategory = $request->paymentcategory;
        $post->type = $request->type;
        $post->age = $request->age;
        $post->views = $request->views;
        uploadImage($request,$post,'image');
        $post->update();
        return redirect()->route('post.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
