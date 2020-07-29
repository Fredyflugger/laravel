<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Parsers;
use App\Http\Requests\ParserCreateRequest;

class ParsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $parsers = Parsers::all();
        $title = 'Parsers Menu';
        return view('admin.parserVeiw', ['title' => $title, 'parsers' =>  $parsers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $parsers = Parsers::all();
        $title = 'Parser Creation';
        return view('admin.parserCreate', ['title' => $title, 'parsers' => $parsers]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ParserCreateRequest $request)
    {
        $create = Parsers::create($request->validated());
        if ($create) {
            return redirect()->route('parsers.index');
        }

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $title = 'RSS Edit';
        $parserValue = Parsers::find($id);
        $parsers = Parsers::all();
        return view('admin.parserEdit', ['title' => $title, 'parserValue' => $parserValue, 'parsers' => $parsers]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(ParserCreateRequest $request, $id)
    {
        $parser = Parsers::find($id);
        $parser->name = $request->input('name');
        $parser->source_url = $request->input('source_url');
        if ($parser->save()) {
            return redirect()->route('parsers.index');
        }

        return back();
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
    public function delete(Parsers $parser)
    {
        $parser->delete();
        return redirect()->back();
    }
}
