<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;

class AuthController extends Controller
{
    public function postRegister(Request $response) : RedirectResponse
    {
        return redirect('/');
    }
}
