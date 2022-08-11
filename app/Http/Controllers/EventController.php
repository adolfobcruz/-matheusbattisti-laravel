<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $name   = 'Adolfo';
        $age    = 32;
        $job    = 'Desenvolvedor';

        $arr    = [10, 20, 30, 40, 50];

        $nomes  = ['Matheus', 'Maria', 'João', 'Saulo'];

        return view(
            'welcome',
            [
                'nome'  => $name,
                'age'   => $age,
                'job'   => $job,
                'arr'   => $arr,
                'nomes' => $nomes,
            ]
        );
    }

    public function create()
    {
        return view('events.create');
    }
}
