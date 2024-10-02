<?php

namespace App\Http\Controllers;

use App\Models\team;
use App\Models\accueil;
use App\Http\Requests\StoreaccueilRequest;
use App\Http\Requests\UpdateaccueilRequest;

class AccueilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('pages.home');
    }
    public function about()
    {
        return view('pages.about');
    }
    public function activites()
    {
        return view('pages.activites');
    }
    public function archives()
    {
        return view('pages.archives');
    }
    public function contact()
    {
        return view('pages.contact');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreaccueilRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return view('pages.detailActivites');
    }
    public function detailArchive($id)
    {
        return view('pages.detailArchives');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(accueil $accueil)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateaccueilRequest $request, accueil $accueil)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(accueil $accueil)
    {
        //
    }
}
