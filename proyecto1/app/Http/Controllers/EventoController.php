<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use Illuminate\Http\Request;
use Image;
use Session;
class EventoController extends Controller
{
    public function index()
    {
      $eventos = Evento::all();
      return view('eventos.index', compact('eventos')); //
    }
 //

    public function create()
    {
        return view('Eventos.create'); //
    }

    public function store(Request $request)
    {

        Session::flash('mensaje', 'El registro se ha creado satisfactoriamente');

        $request->validate([
            'nombre' => 'required',
            'desc' => 'required',
            'lugar' => 'required',
            'fecha' => 'required',
            'foto' => 'required'
        ]);
    $evento = Evento::create($request->all());
    $imagen = $request->file('foto');
    if ($imagen != null) {
        // ruta de las imagenes guardadas
        $ruta = public_path() . '/eventos/';
        // recogida del form
        // crear instancia de imagen
        $imagenCon = Image::make($imagen);

        // generar un nombre aleatorio para la imagen
        $temp_name = $request->nombre . '.' . $imagen->getClientOriginalExtension();

        // guardar imagen
        $imagenCon->save($ruta . $temp_name, 100);
        $evento->foto = $temp_name;
        $evento->save();
    } else {
        $evento->foto = 'default-event.png';
    }


    return redirect()->route('ruta-eventos'); //
    }

    public function show(Evento $evento)
    {
        return view('eventos.show', compact('evento'));
        //
    }

    public function edit(Evento $evento)
    {

       return view('eventos.edit', compact('evento')); //
    }

    public function update(Request $request)
    {
        Session::flash('mensaje', 'El registro se ha modificado satisfactoriamente');

        $request->validate([
            'nombre' => 'required|max:20',
            'desc' => 'required',
            'lugar' => 'required',
            'fecha' => 'required',
        ]);

        $update = [ 'title' => $request->title,
                    'desc' => $request->desc,
                    'lugar' => $request->lugar,
                    'fecha'=> $request->fecha,
                    'foto' => $request->foto,
                    ];


        dd($request->foto);
        $id = $request->prodId;
        $evento = Evento::find($id);
        $evento->update($update);
        return redirect()->route('ruta-eventos');
    }


    public function destroy(Evento $evento)
    {
    Session::flash('mensaje', 'El registro se ha eliminado satisfactoriamente');

       $evento->delete();
       return redirect()->route('ruta-eventos');//
    }
}

