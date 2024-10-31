<?php

namespace App\Traits;

use Livewire\Attributes\Url;


 
trait UploadingFilesTrait  {

    public static function uploadSingleFile($uploadedFile,$folderName,$disk ) {

        if(! $uploadedFile) {
            return ;
        }

        $ex = $uploadedFile->getClientOriginalExtension();
        $filename = $folderName . time() . '_' . rand(00000, 99999) . '.' . $ex;
            $path=$uploadedFile->storeAs($folderName,$filename,$disk);
            $attchments=$path;
        
        return   $attchments;
    }

}



// function uploadsFile($request,$dbColumName,$disk)
// {
//     if(! $request->hasfile($dbColumName)) {
//     return ;
//     }

//     $files = $request->file($dbColumName);
//     foreach ($files as $file) {
//         if ($file->isValid()) {

//             $ex = $file->getClientOriginalExtension();
//             $filename = $disk . time() . '_' . rand(00000, 99999) . '.' . $ex;
//             $path = $file->storeAs('/', $filename, $disk);
//             $attchments_file[] = $path;
//         }

//         return  $attchments_file;
//     }

   
// }
