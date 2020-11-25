<?php

namespace App\Http\Controllers;

use App\Capa;
use App\File;
use App\Movie;
use Illuminate\Http\Request;
use App\Post;


class SiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        $capa = Capa::where('path_home', '!=', '')->first();
        $posts = Post::orderBy('id', 'DESC')->with('category')->with('imgs')->get();

        $mais_visitados = Post::orderBy('visity', 'DESC')->with('category')->with('imgs')->limit('3')->get();

        return view('page.site.index',[
            'posts' => $posts,
            'capa' =>$capa,
            'mais_visitados'=> $mais_visitados
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function show($noticia)
    {


        $post = Post::where('link', $noticia)->with(['imgs', 'files', 'movies'])->first();

        $post->visity += '1';
        $post->update();

        $capa = Capa::where('path_interna', '!=', '')->first();



        return view('page.site.noticia', [
            'post' => $post,
            'capa' => $capa, 

        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
