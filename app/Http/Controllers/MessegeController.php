<?php

namespace App\Http\Controllers;

use App\Models\message;
use App\Models\messege;
use App\Models\newsletter;
use Illuminate\Http\Request;
use App\Http\Requests\StoremessegeRequest;
use App\Http\Requests\UpdatemessegeRequest;

class MessegeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(Request $request)
    {
        $request->validate([
            'nom' => ['required', 'string', 'max:255'],
            'prenom' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255'],
            'message' => ['required', 'string'],
            'sujet' => ['required', 'string', 'max:255'],
        ]);
        $rep = message::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'email' => $request->email,
            'phone' => $request->phone,
            'sujet' => $request->sujet,
            'message' => $request->message,
        ]);

        if ($rep) {
            return response()->json(['reponse' => true, 'msg' => "Enregistrement réussi"]);
        } else {
            return response()->json(['reponse' => false, 'msg' => "Erreur d'enregistrement."]);
        }
    }
    public function save(Request $request)
    {
        $request->validate([
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . newsletter::class],
        ]);
        $rep = newsletter::create([
            'email' => $request->email,
        ]);

        if ($rep) {
            return response()->json(['reponse' => true, 'msg' => "Enregistrement réussi"]);
        } else {
            return response()->json(['reponse' => false, 'msg' => "Erreur d'enregistrement."]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(messege $messege)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(messege $messege)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatemessegeRequest $request, messege $messege)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(messege $messege)
    {
        //
    }
}
