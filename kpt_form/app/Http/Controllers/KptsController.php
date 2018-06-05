<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Kpt;

class KptsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kpts = Kpt::all();

        return view('kpts.index', [
            'kpts' => $kpts,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kpt = new Kpt;

        return view('kpts.create', [
            'kpt' => $kpt,
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
        $this->validate($request, [
            'title' => 'required|max:191', 
            'content' => 'required|max:191',
        ]);
        
        $kpt = new Kpt;
        $kpt->title = $request->title;
        $kpt->content = $request->content;
        $kpt->save();

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kpt = Kpt::find($id);

        return view('kpts.show', [
            'kpt' => $kpt,
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
        $kpt = Kpt::find($id);

        return view('kpts.edit', [
            'kpt' => $kpt,
        ]);
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
        $this->validate($request, [
            'title' => 'required|max:191',
            'content' => 'required|max:191',
        ]);
        
        $kpt = Kpt::find($id);
        $kpt->title = $request->title;
        $kpt->content = $request->content;
        $kpt->save();

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kpt = Kpt::find($id);
        $kpt->delete();

        return redirect('/');
    }
}
