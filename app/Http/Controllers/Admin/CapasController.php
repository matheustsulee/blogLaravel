<?php

namespace App\Http\Controllers\Admin;

use App\Capa;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class CapasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        $capas = Capa::all();
        $interna = Capa::where('path_interna', "!=", "null")->orderBy("id", "DESC")->first();
        $home = Capa::where('path_home', "!=", "null")->orderBy("id", "DESC")->first();


        return view('page.admin.capas.index', [
            'interna' => $interna,
            'home' => $home
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {

       if(isset($request->capa_home)){

           $capa = $request->all();

           if($request->hasFile('capa_home') && $request->capa_home->isValid()){
               $extension = $request->capa_home->extension();
               $image_path = $request->capa_home->storeAs('capas/home', 'capa_home.'.$extension);
               $capa = new Capa();
               $capa['path_home'] = $image_path;
               if($capa->save()){
                   return redirect()->back();
               }
           }

       }
        if(isset($request->capa_interna)){

            if($request->hasFile('capa_interna') && $request->capa_interna->isValid()){
                $extension = $request->capa_interna->extension();
                $image_path = $request->capa_interna->storeAs('capas/interna', 'capa_interna.'.$extension);
                $capa = new Capa();
                $capa['path_interna'] = $image_path;
                if($capa->save()){
                    return redirect()->back();
                }
            }

        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
