<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Provincias;

class ProvinciaController extends Controller
{
    public function getAll()
    {
        return Provincias::all();
    }
    public function getById($id)
    {
        return Provincias::find($id);
    }
    public function getAllByRegionId($id)
    {
        return Provincias::all()->where('idRegion', '=', $id);
    }
}
