<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $name   = 'Adolfo';
        $age    = 32;
        $job    = 'Desenvolvedor';

        return view(
            'contacts/index',
            [
                'nome'  => $name,
                'age'   => $age,
                'job'   => $job,
            ]
        );
    }
}
