<?php

namespace App\Http\Controllers;
use App\Coeff;
use Illuminate\Http\Request;

class CoeffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        
        Coeff::where('id', $id)->update([
            "conference" => $request->get('conference'),
            "ouvrage" => $request->get('ouvrage'),
            "chapter" => $request->get('chapter'),
            "article_index" => $request->get('article_index'),
            "article" => $request->get('article'),
            "doctorat" => $request->get('doctorat'),
            "brevet" => $request->get('brevet'),
            "manifestation_nat" => $request->get('manifestation_nat'),
            "manifestation_reg" => $request->get('manifestation_reg'),
            "membre_per" => $request->get('membre_per'),   
                
        ]);

        return redirect("/modifcoeff");
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
