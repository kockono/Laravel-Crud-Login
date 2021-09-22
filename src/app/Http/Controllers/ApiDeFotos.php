<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiDeFotos extends Controller
{
    //
    public function index() {
        // Llamado de apis
        $randomNumber = rand(0, 500);
        $apiPic = "https://picsum.photos/id/$randomNumber/200/300";
        // $posts = Http::get("https://picsum.photos/id/$randomPic/200/300");
        // echo  $apiPic;
        return view("pics", [
            "apiPic" => $apiPic,
            "title" => "Test!!!"

        ]);
    
    }

}
