<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Batch;
use \DB;
use Illuminate\Support\Facades\Log;

class BatchController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $batchs = \App\Batch::paginate(20);
        return view('batchs.index',compact('batchs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $projetos = \App\Projeto::all()->pluck('nome','id');
        return view('batchs.create', compact('projetos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(\App\Http\Requests\BatchRequest $request)
    {
        \App\Batch::create($request->all());
        return redirect()->route('batchs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($txt)
    {
        // se enviado parametro, entao processa busca
        /*
        if (!empty($txt)) {
            $rs = DB::table('batchs')
                ->where('batchs.nome', 'like', "%$txt%")
                ->get();
            $rs_ = collect($rs);
            $batchs = $rs_::paginate(20);
        }
        */
        try {
            $batchs = Batch::where('nome','like','%' . $txt . '%')->paginate(20);
            //dd($batchs);
        } catch (\Exception $e) {
            Log::info("Erro : " . $e);
        }
        return view('batchs.index', compact('batchs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $batch = \App\Batch::find($id);
        $projetos = \App\Projeto::all()->pluck('nome','id');
        return view('batchs.edit',compact('batch','projetos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(\App\Http\Requests\BatchRequest $request, $id)
    {
        \App\Batch::find($id)->update($request->all());
        return redirect()->route('batchs.index');
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
