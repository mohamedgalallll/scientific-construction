<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function storeFile($file,$place = 'Images')
    {
            $path = $file->store('/public/' . $place);
//        dd($path);
//        $url = url('/');
            $path = str_replace('public', '', $path);
//        $serverPath = $url . '/storage/app/';
//        $path = $serverPath . $path;
            return $path;

    }
}
