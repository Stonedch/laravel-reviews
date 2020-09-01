<?php

use Illuminate\Support\Facades\Storage;

if (!function_exists('storePictureOrNull')) {
    function storePictureOrNull($fileName, $uploadFile)
    {
        if (!$uploadFile) return NULL;

        $fileName .= '_'.time().'.'.$uploadFile->getClientOriginalExtension();
        Storage::putFileAs('public/pictures', $uploadFile, $fileName);

        return $fileName;
    }
}
