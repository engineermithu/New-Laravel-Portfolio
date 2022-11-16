<?php

namespace App\Traits;
use App\Models\Student;
use App\Models\User;
use Cartalyst\Sentinel\Sentinel;
use Image;
use DB;
use File;
trait MediaTraits
{
    public function saveImage($image,$for = ''){

        $requestImage = $image;
        $fileType       = $requestImage->getClientOriginalExtension();
        $original       = date('YmdHis').'-'.rand(1,5).'.'.$fileType;
        $directory = 'images/';

        File::ensureDirectoryExists($directory, 0777, true);

        if($for == 'user_image'):
            $image =date('YmdHis').'-'.rand(1,50).'.'.$fileType;
            $imageUrl = $directory.$image;

            Image::make($requestImage)->resize(320, 320,
            function ($constraint){
                $constraint->aspectRatio();
            })
            ->ressizeCanvas(320,320, 'center', false ,'rgba(255,255,255,0.00)')->save('public/'.$imageUrl);
        else:
            $originalImageUrl       = $directory . $original;
            Image::make($requestImage)->save('images/',$originalImageUrl);
//            Image::make($requestImage)->save('public/'.$originalImageUrl);
            return $originalImageUrl;
        endif;

//        $imageName = '';
//        if($student_image = $image->file('image')){
//            $imageName = date('Y-m-d-H-is').'.'. $student_image->getClientOriginalExtension();
//            $student_image->move('images/students',$imageName);
//
//        }
//        $data             = new User();
//        $data->image      = $imageName;
//        $data->save();

    }
    public function updateImage($image,$oldImage,$for= ''){

        if(!blank($oldImage)):
            $this->removeOldFile($oldImage);
        endif;

        return $this->saveImage($image, $for);
    }

    public function removeOldFile($file)
    {
        File::delete($file);
    }

}
