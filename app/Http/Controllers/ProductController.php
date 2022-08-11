<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $name   = 'Adolfo';
        $age    = 32;
        $job    = 'Desenvolvedor';

        return view(
            'welcome',
            [
                'nome'  => $name,
                'age'   => $age,
                'job'   => $job,
            ]
        );
    }

    public function create()
    {
        return view('products.create');
    }
}
