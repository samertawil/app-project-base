<?php

function uploadsFile($request,$dbColumName,$disk)
{
    if(! $request->hasfile($dbColumName)) {
    return ;
    }

    $files = $request->file($dbColumName);
    foreach ($files as $file) {
        if ($file->isValid()) {

            $ex = $file->getClientOriginalExtension();
            $filename = $disk . time() . '_' . rand(00000, 99999) . '.' . $ex;
            $path = $file->storeAs('/', $filename, $disk);
            $attchments_file[] = $path;
        }

        return  $attchments_file;
    }

   
}
