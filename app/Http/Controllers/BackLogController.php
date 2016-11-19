<?php

namespace App\Http\Controllers;

use App\Backlog;
use Illuminate\Http\Request;

class BackLogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $backlogs = \App\Backlog::paginate(10);
        return view('backlogs.index', compact('backlogs'));
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
     * Efetua a busca no baco e retorna uma collection com os dados localizados.
     *
     * @param $txt
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function busca($txt)
    {
        try {
            $backlogs = Backlog::where('descricao','like','%' . $txt . '%')->paginate(20);
        } catch (\Exception $e) {
            Log::info("Erro : " . $e);
        }
        return view('backlogs.index', compact('backlogs'));

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
