<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Filesystem\Filesystem;
use Illuminate\Http\Request;
use League\Glide\Responses\LaravelResponseFactory;
use League\Glide\ServerFactory;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $server = ServerFactory::create([
        //     'source' => 'path/to/source/folder',
        //     'cache' => 'path/to/cache/folder',
        // ]);
        
        // // You could manually pass in the image path and manipulations options
        // $server->outputImage('users/1.jpg', ['w' => 300, 'h' => 400]);
        
        // // But, a better approach is to use information from the request
        // $server->outputImage($path, $_GET);

        // return "hello";
       //  return view('home');
    }


    public function show(Filesystem $filesystem, $path)
    {
       // return request()->all();
     // echo base_path(); 
    //  echo url('/');
    //  echo $filesystem->getDriver();
    //  dd($filesystem->getDriver());
    // die;

      $server = ServerFactory::create([
            'response' => new LaravelResponseFactory(app('request')),
            'source' => $filesystem->getDriver(),
            'cache' => $filesystem->getDriver(),
            'cache_path_prefix' => '.cache',
            // 'base_url' => url('/'),
        ]);

        return $server->getImageResponse($path, request()->all());

        // if(!empty($path)){
        //     $server = ServerFactory::create([
        //         'source' => '/',
        //         'cache' => 'cache/',
        //     ]);
         
        // $server->outputImage(''.$path.'',request()->all());
        // }else{
        //     abort(404);
        // }
    }

}
