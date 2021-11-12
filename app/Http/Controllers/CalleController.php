<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Calles;
use App\Http\Controllers\CiudadController;
use App\Http\Controllers\ProvinciaController;
use App\Http\Controllers\RegionController;



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
    public function getAllByCiudadId($id)
    {
        return Calles::all()->where('idCiudad', '=', $id);
    }
    public function getAllDatosCalleById($id)
    {
        $calle = new CalleController();
        $ciudad = new CiudadController();
        $provincia = new ProvinciaController();
        $region = new RegionController();

        $calle = $calle->getById($id);
        $ciudad = $ciudad->getById($calle['idCiudad']);
        $provincia = $provincia->getById($ciudad['idProvincia']);
        $region = $region->getById($provincia['idRegion']);

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
}
