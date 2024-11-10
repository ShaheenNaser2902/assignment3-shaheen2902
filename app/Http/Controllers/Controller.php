<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index()
    {
        // Your logic here
    }

    public function register(Request $request)
    {
        // Validate the request data
        $this->validate($request, [
            'name' => 'required|string|max:255',
            // other validations...
        ]);
    }
}