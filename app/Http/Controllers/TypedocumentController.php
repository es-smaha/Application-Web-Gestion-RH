<?php

namespace App\Http\Controllers;
use App\Typedocument;
use carbon\carbon;
use Illuminate\Http\Request;


class TypedocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $typedocuments=Typedocument::all();
     
        
        return view('resprh.rerh.typedoc')->with('typedocuments',$typedocuments);
    
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
        $typedocuments=new Typedocument();
        $typedocuments->name=$request->input('name');
        $typedocuments->max=$request->input('max');
        $typedocuments->periode=$request->input('periode');
        $d=$typedocuments->duree;
        if(date("m", strtotime($d)) != date("m"))
        {
            $typedocuments->duree=Carbon::now();
        }
        $typedocuments->save();
        return redirect()->back()->with('success',' le type document est bien ajouté');
      
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
        $typedocuments=Typedocument::find($id);
        return view('resprh.rerh.typedoc')->with('typedocuments',$typedocuments);
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
        $typedocuments=Typedocument::find($id);
        $typedocuments->name=$request->input('name');
        $typedocuments->save();
        return redirect()->back()->with('success','le Type document a ete modifie');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $typedocuments=Typedocument::find($id);
        $typedocuments->delete($id);
        return redirect()->back()->with('alert', 'Updated!');
    }
}
