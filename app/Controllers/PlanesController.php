<?php

namespace App\Controllers;
use App\Models\PlanesModel;

class PlanesController extends BaseController
{
    public function index(): string
    {
        $planes = new PlanesModel();
        $datos['datos']=$planes->findAll();
        return view('planes',$datos);
    }
}