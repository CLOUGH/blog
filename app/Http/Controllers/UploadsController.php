<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Image;
use Intervention\Image\Exception\NotReadableException;
class UploadsController extends Controller
{
    public function getImages($imageName,Request $request){
    	$imageLocation = storage_path()."/uploads/images/$imageName";

    	$height = $request->get('height') ;
    	$width = $request->get('width');
    	
    	if($request->get('size') ){
    		if(preg_match('/^\d+[x]\d+$/', $request->get('size'))==false){
    			abort(400);
    		}

    		$size = preg_split('/[x]/',$request->get('size'));
    		$width = $size[0];
    		$height = $size[1];
    	}
    	
    	$image=null;
    	try{
    		$image = Image::make($imageLocation);
            if($height || $width){
                if($request->get('fit')==true){                
                    $image = $image->fit($width,$height);  
                }else{
                    $image = $image->resize($width, $height, function($constraint) use($request){
                        $aspectRatio = $request->get('aspectRatio');
                        if($aspectRatio==true){
                             $constraint->aspectRatio();
                        }
                    });
                }
            }	    	
    	}catch(NotReadableException $e){
    		abort(404);
    	}
    	return $image->response();
    }
}
