<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ciudades;

class CiudadController extends Controller
{
    public function getAll()
    {
        return Ciudades::all();
    }
    public function getById($id)
    {
        return Ciudades::find($id);
    }
    public function getAllByProvinciaId($id)
    {
        return Ciudades::all()->where('idProvincia', '=', $id);
    }
}
