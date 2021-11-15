<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Calles;
use App\Models\Ciudades;
use App\Models\Provincias;
use App\Models\Regiones;

class CalleController extends Controller
{
    public function getAll()
    {
        return Calles::all();
    }
    public function getById($id)
    {
        return Calles::find($id);
    }
    public function store(Request $request)
    {
        $calle = new Calles();
        $calle->nombreCalle = $request->get('nombreCalle');
        $calle->idCiudad = $request->get('idCiudad');
        $calle->save();
        return response()->json([
            "message" => "Calle agregada exitosamente"
        ], 201);
    }
    public function update(Request $request, $id)
    {
        $calle = Calles::findOrFail($id);
        $calle->nombreCalle = $request->get('nombreCalle');
        $calle->idCiudad = $request->get('idCiudad');
        $calle->save();

        return response()->json([
            "message" => "Calle modificada exitosamente"
        ], 201);
    }
    public function delete($id)
    {
        Calles::findOrFail($id)->delete();
        return response()->json([
            "message" => "Calle eliminada exitosamente"
        ], 204);
    }
    public function getAllByCiudadId($id)
    {
        return Calles::all()->where('idCiudad', '=', $id);
    }
    public function getAllDatosCalleById($id)
    {
        $calle = Calles::find($id);
        $ciudad = Ciudades::find($calle['idCiudad']);
        $provincia = Provincias::find($ciudad['idProvincia']);
        $region = Regiones::find($provincia['idRegion']);

        $datos = new \stdClass();

        $datos->Calle = $calle;
        $datos->Ciudad = $ciudad;
        $datos->Provincia = $provincia;
        $datos->Region = $region;

        /*
        $datos->nombreCalle = $calle['nombreCalle'];
        $datos->nombreCiudad = $ciudad['nombreCiudad'];
        $datos->nombreProvincia = $provincia['nombreProvincia'];
        $datos->nombreRegion = $region['nombreRegion'];
        */

        return $datos;
    }
    public function getAllDatosCalle()
    {
        $calles = Calles::all();
        $datos = [];
        foreach ($calles as $key => $calle) {
            $ciudad = Ciudades::find($calle['idCiudad']);
            $provincia = Provincias::find($ciudad['idProvincia']);
            $region = Regiones::find($provincia['idRegion']);

            $datos[$key] = ['calle' => $calle, 'ciudad' => $ciudad, 'provincia' => $provincia, 'region' => $region];
        }

        return $datos;
    }
    public function getAllDatosCalleLista()
    {
        $calles = Calles::all();
        $datos = [];
        foreach ($calles as $key => $calle) {
            $ciudad = Ciudades::find($calle['idCiudad']);
            $provincia = Provincias::find($ciudad['idProvincia']);
            $region = Regiones::find($provincia['idRegion']);

            $datos[$key] = [
                'calle' => $calle['nombreCalle'],
                'idCalle' => $calle['id'],
                'ciudad' => $ciudad['nombreCiudad'],
                'idCiudad' => $ciudad['id'],
                'provincia' => $provincia['nombreProvincia'],
                'idProvincia' => $provincia['id'],
                'region' => $region['nombreRegion'],
                'idRegion' => $region['id'],
            ];
        }

        return $datos;
    }
    public function getAllDatosCalleListaById($id)
    {
        $calle = Calles::find($id);
        $datos = [];
        $ciudad = Ciudades::find($calle['idCiudad']);
        $provincia = Provincias::find($ciudad['idProvincia']);
        $region = Regiones::find($provincia['idRegion']);

        $datos = [
            'calle' => $calle['nombreCalle'],
            'idCalle' => $calle['id'],
            'ciudad' => $ciudad['nombreCiudad'],
            'idCiudad' => $ciudad['id'],
            'provincia' => $provincia['nombreProvincia'],
            'idProvincia' => $provincia['id'],
            'region' => $region['nombreRegion'],
            'idRegion' => $region['id'],
        ];

        return $datos;
    }
}
