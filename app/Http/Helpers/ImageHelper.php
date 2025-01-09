<?php

namespace App\Http\Helpers;

use Illuminate\Support\Facades\Storage;

class ImageHelper
{
    public static function storeImage( $file, $folder = 'images', $disk = 'public' )
    {
        try{
            $filePath = $file->store($folder, $disk);
            return asset("storage/{$filePath}");
        } catch(\Exception $e) {
            // do nothing
        }
        
    }
}
