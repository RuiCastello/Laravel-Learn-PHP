<?php

namespace App\Http\Controllers;

use App\photo;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Foto amarela";
        $description = "Tirada com uma objectiva antiga e amarelada";

        // 1
        // Forma de passar variáveis para uma view
        // Para passar variáveis podemos fazer inline com o compact()
        // compact aceita parametros string e arrays, se forem string, o nome tem de corresponder ao nome de variáveis existentes, se for em array , tem de ser as próprias variáveis.
        // return view('photo.listphotos', compact('title', 'description'));

        // 2
        // Outra forma de passar variáveis para uma view
        // Usar ->with()
        // return view('photo.listphotos') -> with( compact('title', 'description') );

        // 3
        // Outra forma de passar variáveis para uma view, é preencher um array com key value pairs e passá-lo no fim.

        //criar o array com os valores que queremos passar para a view
        // $data = [
        //     'title' => $title,
        //     'description' => $description
        // ];

        // com compact():
        // o compact faz exactamente o mesmo que o código acima com a criação de um array de key/value pairs
        // $data = compact('title', 'description');

        // Também podemos passar arrays de múltiplas dimensões nesta variável $data, mas não podemos é usar o compact(), por exemplo:
        $abertura = "2.8";
        $shutter = "1/50";
        $iso = "400";

        $exif = compact('abertura', 'shutter', 'iso');

        $data = [
            'title' => $title,
            'description' => $description,
            'exif' => $exif
        ];

        return view('photo.listphotos') -> with($data);

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
     * @param  \App\photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function show(photo $photo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function edit(photo $photo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, photo $photo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function destroy(photo $photo)
    {
        //
    }
}
