<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Post;
use App\PostType;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image as InterventionImage;

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

        $post = null;
        DB::transaction(function() use($request, &$post){
            $post = Post::create($request->all());

            $tagIds = [];
            foreach ($request->get('tags') as $key => $tag) {
                array_push($tagIds,Tag::firstOrCreate(['name'=>$tag])->id);
            }
            $post->tags()->sync($tagIds);
        });

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
        
        DB::transaction(function() use($request, &$post){
            $post->update($request->all());

            $tagIds = [];
            foreach ($request->get('tags') as $key => $tag) {
                array_push($tagIds,Tag::firstOrCreate(['name'=>$tag])->id);
            }
            $post->tags()->sync($tagIds);

            if($post->type->slug=='image'){
                $img = $this->saveImage($request);
            }
        });

        return redirect("/admin/posts/$post->id/edit");
    }


    private function saveImage($request) {
        $img = InterventionImage::make($request->file('image'));

        if (!file_exists('public/uploads/images/')) {
            mkdir('public/uploads/images/', 0777, true);
        }
        $newImageName = 'image_' . date('Y-m-d-H-i-s') . '_' . uniqid() . '.jpg';
        $img->save('public/uploads/images/'.$newImageName);
        dd($img);

        return $img;
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
