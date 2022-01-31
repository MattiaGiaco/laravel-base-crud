<?php

namespace App\Http\Controllers;

use App\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comicList = Comic::orderBy('id', 'desc')->paginate(5);

        // dump($comicList);

        return view('comics.home', compact('comicList'));
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
        $request->validate( $this->validationData(), $this->validationErrors() );


        $data = $request->all();

        $new_comic = new Comic();

        $new_comic->fill($data);

        $new_comic->save();

        return redirect()->route('comics.show', $new_comic);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // dd($id);

        $comic = Comic::find($id);
        if ($comic) {
           return view('comics.show', compact('comic')); 
        }

        abort(404, 'Comic non trovato');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comic = Comic::find($id);
        if ($comic) {
            return view('comics.edit', compact('comic')); 
         }
 
         abort(404, 'Comic non trovato');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        $request->validate($this->validationData(), $this->validationErrors());

        $data = $request->all();
        $comic->update($data);

        return redirect()->route('comics.show', $comic);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route('comics.index')->with('deleted',"Il comic $comic->title è stato eliminato");
    }

    private function validationData(){
        return [
            'title' => "required|max:50|min:2",
            'description' => 'required|min:5',
            'type' => 'required|min:2|max:20',
            'thumb' => 'required|max:255',
            'sale_date' => 'required',
            'price' => 'required|numeric',
            'series' => 'required'
        ];
    }
    private function validationErrors(){
        return [
            'title.required' => 'Il titolo è obbligatorio',
            'title.max' => 'Il titolo deve essere di massimo :max caratteri',
            'title.min' => 'Il titolo deve essere di minimo :min caratteri',
            'description.required' => 'Il titolo è obbligatorio',
            'description.min' => 'La descrizione deve essere di minimo :min caratteri',
            'type.required' => 'Il tipo è obbligatorio',
            'type.max' => 'Il tipo deve essere di massimo :max caratteri',
            'type.min' => 'Il tipo deve essere di minimo :min caratteri',
            'thumb.required' => "Il link è obbligatorio",
            'thumb.max' => "Il link deve essere di massimo :max caratteri",
            'sale_date.required' => "La data è obbligatoria",
            'price.required' => "Il prezzo è obbligatorio",
            'price.numeric' => "Il prezzo deve essere un numero",
            'series.required' => "La serie è obbligatoria",
        ];
    }
}
