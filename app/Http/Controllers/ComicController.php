<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        return view('home', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $form_data = $this->validation($request->all());
        // $request->validate([
        //     'title' =>'required| max:50',
        //     'thumb' =>' max:255',
        //     'description' =>'required',
        //     'price' =>'required| max:10',
        //     'series' =>'required| max:50',
        // ]);


        // $form_data =$request->all();

        $comic = new Comic();
        // $comic->title=$form_data['title'];
        // $comic->description=$form_data['description'];
        // $comic->price=$form_data['price'];
        // $comic->series=$form_data['series'];

        $comic->fill($form_data);
        $comic->save();

        return redirect()-> route('comics.show', ['comic' => $comic->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comics =Comic::findORFail($id);
        return view ('comics.show', compact ('comics'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact ('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {

        $form_data = $this->validation($request->all());
        // $request->validate([
        //     'title' =>'required| max:50',
        //     'thumb' =>' max:255',
        //     'description' =>'required',
        //     'price' =>'required| max:10',
        //     'series' =>'required| max:50',
        // ]);

        // $form_data =$request->all();

        $comic ->update($form_data);
        return redirect()-> route('comics.show', ['comic' => $comic->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic ->delete();
        return redirect()->route('comics.index');
    }

    // funzione personalizzazione messaggi di validazione

    private function validation($data){
        $valdiator = Validator::make($data,

        [
            'title' =>'required| max:50',
            'thumb' =>' max:255',
            'description' =>'required',
            'price' =>'required| max:10',
            'series' =>'required| max:50',
        ],

        [
            'title.required'=> 'Il tuo fumeto deve avere un titolo!',
            'title.max'=> 'Questo titolo è troppo lungo! Meglio non superare i :max caratteri.',
            'thumb.max' => 'Questo link è troppo lungo!Meglio non superare i :max caratteri.',
            'description'=> 'Ricordati di dirci di cosa parla il tuo fumetto! Bastano poche parole.',
            'price.required' => 'Il tuo fumetto deve avere un prezzo.',
            'price.max' => 'Il tuo fumetto deve avere un prezzo, ma cerchiamo di non esagerare! Non più di :max caratteri.',
            'series.required' => 'Ricodati di dirci a che serie appartiene il tuo fumetto!',
            'series.max'=> 'Le serie con nomi più corti sono più facili da ricordare! Non superare i :max caratteri.'
        ]

        )->validate();
        return $valdiator;
    }














}
