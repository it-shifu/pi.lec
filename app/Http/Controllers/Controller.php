<?php

namespace App\Http\Controllers;


use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function dizayn()
    {
        return view('d');
    }

    public function vhod(Request $request)
    {
        $request->login;

        dd('отту');
//return view('d');
    }

    public function forma()
    {
        return view('forma');
    }
    public function validate(Request $request)
    {
        $validated = $request->validate([
            'login' => ['required', 'string', 'max:100', 'email'], // mail@example.com
            'pass' => ['required', 'string', Password::min(8)->letters()->mixedCase()->numbers()->symbols()], // Secret123!

        ]);

        dd($validated);


    }
}
