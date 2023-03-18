<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use Illuminate\Http\Request;

/**
 * Class HeroController
 * @package App\Http\Controllers
 */
class HeroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $heroes = Hero::paginate();

        return view('hero.index', compact('heroes'))
            ->with('i', (request()->input('page', 1) - 1) * $heroes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $hero = new Hero();
        return view('hero.create', compact('hero'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Hero::$rules);

        $hero = Hero::create($request->all());

        return redirect()->route('heroes.index')
            ->with('success', 'Hero created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $hero = Hero::find($id);

        return view('hero.show', compact('hero'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hero = Hero::find($id);

        return view('hero.edit', compact('hero'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Hero $hero
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hero $hero)
    {
        request()->validate(Hero::$rules);

        $hero->update($request->all());

        return redirect()->route('heroes.index')
            ->with('success', 'Hero updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $hero = Hero::find($id)->delete();

        return redirect()->route('heroes.index')
            ->with('success', 'Hero deleted successfully');
    }
}
