<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Home extends Controller
{
    public function index()
    {
        return View('home');
    }
    public function Branch1()
    {
        return View('PTMultiNiagaAbadi');
    }
    public function Branch2()
    {
        return View('PTTalentaTigaMuda');
    }
    public function Branch3()
    {
        return View('PTAgriPrimeInternational');
    }
    public function Branch4()
    {
        return View('PTAgrochem');
    }
    public function Branch5()
    {
        return View('PTSAP');
    }
    public function Auth()
    {
    }
}
