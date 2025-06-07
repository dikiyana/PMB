<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Agama;

class AgamaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
           // return "hello, world";
           $agama = Agama::all();
           return view('agama.index', compact('agama'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('agama.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_agama' => 'required',
        ]);

        $agama = new Agama;

        $agama->nama_agama = $request->nama_agama;      
        $agama->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Agama  $agama
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $agama = Agama::findOrFail($id);
        return view ('agama.show', compact('agama'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Agama  $agama
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $agama = Agama::findOrFail($id);

        return view('agama.edit', compact('agama'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Agama  $agama
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        {
            $request->validate([
                'nama_agama' => 'required',
            ]);
    
            $agama = Agama::find($id);
    
            $agama->nama_agama = $request->nama_agama; 
            $agama->update();
            return redirect('/agama');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Agama  $agama
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $agama = Agama::find($id);
        $agama->delete();

        return redirect('/agama');
    }
}
