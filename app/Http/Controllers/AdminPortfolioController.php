<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests;
use App\Portfolio;
use App\PortfolioCategory;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Intervention\Image\Facades\Image as InterventionImage;

class AdminPortfolioController extends Controller
{
    public function index(){
    	$portfolios = Portfolio::paginate(15);
        

    	return view('admin.portfolios.index')
    		->with(compact('portfolios'));
    }

    public function create(){
    	return view('admin.portfolios.create');
    }
    
    public function show($id)
    {
        return redirect("/admin/portfolios/$id/edit");
    }

    public function edit($id){
    	$portfolio = Portfolio::findOrFail($id);

    	return view('admin.portfolios.edit')
    		->with(compact('portfolio'));
    }

    public function store(Request $request){
        $portfolio = null;
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'pictures' => 'array',
            'tags' => 'array',
            'category' => 'array',
        ]);

        
        DB::transaction(function() use($request,&$portfolio){
            $uploadsFolder = storage_path().'/uploads/images';
            if(!file_exists($uploadsFolder)){
                mkdir($uploadsFolder);
            }
            //create portfolio
            $portfolio = Portfolio::create($request->all());            
            //create images
            foreach ($request->file('pictures') as $key => $picture) {                
                $filename = md5(time()).".".$picture->getClientOriginalExtension();                
                $uploadedPicture = InterventionImage::make($picture)->save("$uploadsFolder/$filename");
                $image = $portfolio->images()->create([
                    'title' => '',
                    'caption' => '',
                    'description' => '',
                    'url' => "/images/$filename",
                ]);
            }
            //add tags
            $tagIds = [];
            foreach ($request->get('tags') as $key => $tag) {
                array_push($tagIds,Tag::firstOrCreate(['name'=>$tag])->id);
                
            }
            $portfolio->tags()->sync($tagIds);

            //add categories
            $categoryIds = [];
            foreach ($request->get('categories') as $key => $category) {
                array_push($categoryIds,Category::firstOrCreate(['name'=>$category])->id);               
            }
            $portfolio->categories()->sync($categoryIds);
        });
        return redirect('admin/portfolios/'.$portfolio->id);
    }

    public function update($id, Request $request){
       dd($request->all());
    }

    public function delete($id){

    }
}
