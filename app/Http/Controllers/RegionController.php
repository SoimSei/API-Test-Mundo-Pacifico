<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Regiones;

class RegionController extends Controller
{
    public function getAll()
    {
        return Regiones::all();
    }
    public function getById($id)
    {
        return Regiones::find($id);
    }
}
