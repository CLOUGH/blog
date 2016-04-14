<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Post;
use App\PostType;
use Illuminate\Http\Request;

class ManagePostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$posts = Post::orderBy('created_at')->paginate(15);

        return view('admin.posts.index')
        	->with(['posts'=>$posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $postTypes = PostType::all();

        return view('admin.posts.create')
        	->with(compact('postTypes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'post_type_id' =>'required',
            'body' => 'required',
        ]);

        $post = Post::create($request->all());

        return redirect("/admin/posts/$post->id/edit");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return redirect("/admin/posts/$id/edit");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        $postTypes = PostType::all();


        return view('admin.posts.edit')
            ->with(compact('postTypes','post'));
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
        $this->validate($request, [
            'title' => 'required',
            'post_type_id' =>'required',
            'body' => 'required',
        ]);
        $post = Post::findOrFail($id);
        $post->update($request->all());
        $post->published = $request->get('published');
        $post->save();



        return redirect("/admin/posts/$post->id/edit");
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
