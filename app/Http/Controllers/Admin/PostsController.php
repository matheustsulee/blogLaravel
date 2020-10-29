<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
 use Illuminate\Support\Str;
use App\Post;
use App\Category;


class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $posts = Post::orderByDesc('id')->limit(10)->paginate(5);
        //$informes = Post::orderByDesc('id')->limit(2)->where('informe', "S")->get();

             return view('page.admin.post.index',
            [
                'posts' => $posts
            ]);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $categorias = Category::all();

        return view('page.admin.post.create', [
            'categorias' => $categorias
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        

       $i = 0;
       while ($i <= 15) {


        $postagem = $request->all();
        $postagem['link'] = Str::slug($postagem['title'], "-");
        $postagem['user_id'] = auth()->user()->id;

        if($request->hasFile('imagem') && $request->imagem->isValid()){
            $image_path = $request->imagem->store('fotos');
            $postagem['img'] = $image_path;

        }

       if(isset($postagem['date_hour']) && !empty($postagem['date_hour'])){
            $postagem['date_hour']= Carbon::parse($postagem['date_hour'])->format('Y-m-d H:i');
            $postagem['scheduled']='1'; // campo que coloca postagem com agendada
       }else{
        $postagem['date_hour'] = Carbon::parse(date('Y-m-d H:i'))->format('Y-m-d H:i');
       }

      if(Post::create($postagem)){
       //return redirect()->back();
      }

      $i++;
       }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($noticia)
    {


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
