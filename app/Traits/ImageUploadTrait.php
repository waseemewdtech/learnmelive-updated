<?php
namespace App\Traits;

trait ImageUploadTrait{

    public function uploadImage($path,$request)
    {
        $imgName                 = time().'.'.$request->img->getClientOriginalExtension();
        $request->img->move(public_path($path), $imgName);
        return $imgName;
    }

}

?>