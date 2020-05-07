<?php

namespace App\Http\Controllers;
use App\Typeconge;
use Illuminate\Http\Request;

class TypecongeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $typeconges=Typeconge::all();
        return view('resprh.rerh.typecon')->with('typeconges',$typeconges);
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
        $typeconges=new Typeconge();
        $typeconges->nom=$request->input('nom');
        
        $typeconges->save();
        return redirect('typecon')->with('success','le type conge est bien ajouté');
     
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
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
        $typeconges=Typeconge::find($id);
        return view('resprh.rerh.typecon')->with('typeconges',$typeconges);
   
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
        
        $typeconges=Typeconge::find($id);
        $typeconges->nom=$request->input('nom');
        $typeconges->save();
       return redirect('typecon')->with('success','le type de conge a ete modifie');
   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $typeconges=Typeconge::find($id);
        $typeconges->delete($id);
        return redirect('typecon')->with('alert', 'Updated!');
    
    }
}
