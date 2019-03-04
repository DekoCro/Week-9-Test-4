<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hero;
use App\Image;
use App\Emergency;

class HeroController extends Controller
{
    //
    public function show($hero_slug)
    {
        $hero = \App\Hero::where('slug', $hero_slug)->first();

        if (!$hero) {
            abort(404, 'Hero not found');
        }

        $view = view('hero/show');
        $view->hero = $hero;
        return $view;
    }

    public function index()
    {
        $heroes = Hero::orderBy('name' , 'asc')->get();

        return view('/hero/index', compact('heroes'));
    }

    public function create()
    {
        $emergency = new Emergency;
        
        //return view('hero/show', compact('emergency'));
        return redirect()->route('homepage');
    }

    public function store(Request $request, $id)
    {
        $emergency = new Emergency;

        $hero = Hero::findOrFail($id);

        $emergency->fill($request->only([
            'subject', 
            'description'
        ]));
        $emergency->hero_id = $hero->id;

        $emergency->save();

        session()->flash('success_message', 'Success!');

        return redirect()->route('emergency.create' , ['hero_slug' => $hero->name]);
    }
}
