<?php

namespace App\Http\Controllers;

use App\Models\Cours;
use Illuminate\Http\Request;

class CoursController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listeCours = Cours::all();
        return  view('cours.index', compact('listeCours'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cours.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Cours::create($request->all());
        /*$cours = new Cours();
        $cours->titre = $request ->titre ;
        $cours->description = $request ->description ;
        $cours->duree = $request ->duree ;
        $cours->save();*/
        return redirect()->route('cours.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cours = Cours::find($id) ;
        return view('cours.edit', compact('cours'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $cours = Cours::findOrFail($id) ;
        $cours->update($request->all());
        return redirect()->route('cours.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cours = Cours::find($id) ;
        $cours->delete();
        return redirect()->route('cours.index')
            ->with('success','Cours supprimé avec succes');
    }
}
