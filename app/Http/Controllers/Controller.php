<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController {
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function homepage() {
        $title = 'Título';
        return view('welcome', [
            'title' => $title,
        ]);
    }

    /*
    |--------------------------------------------------------------------------
    | Method to user login VIEW
    |--------------------------------------------------------------------------
     */

    public function fazerLogin() {
        return view('user.login');
    }

}
