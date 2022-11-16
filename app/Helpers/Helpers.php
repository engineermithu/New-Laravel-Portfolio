<?php

use App\Models\Language;
use App\Models\Star;
use App\Models\User;
use Cartalyst\Sentinel\Laravel\Facades\Activation;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Schema;
use GeoSot\EnvEditor\Facades\EnvEditor;



if (!function_exists('asset_directory')) {

    function asset_directory()
    {
        if (strpos(php_sapi_name(), 'cli') !== false || defined('LARAVEL_START_FROM_PUBLIC')) :
//            return null;
            return '';
        else:
            return 'public/';
        endif;
    }
}

if (!function_exists('is_file_exists')) {
    function is_file_exists($item, $storage = 'local')
    {
//        dd(asset_directory(). $item);
        if (!blank($item) and !blank($storage)) :
            if ($storage == 'local') :
                if (file_exists(asset_directory(). $item)) :
                    return true;
                endif;
            elseif ($storage == 'aws_s3') :
                if (Storage::disk('s3')->exists($item)) :
                    return true;
                endif;
            endif;

        endif;

        return false;
    }
}
