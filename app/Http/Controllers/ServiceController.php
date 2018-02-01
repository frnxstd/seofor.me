<?php

namespace App\Http\Controllers;

use App\Service;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return $services;
    }

    public function service($service)
    {
        $service = Service::where('code', $service)->first();
        return $service;
    }
}
