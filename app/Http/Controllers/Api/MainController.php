<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['indexNonAuth']]);
    }

    public function index()
    {
        return "hi " . auth('api')->user()->email;
    }

    public function indexNonAuth()
    {
        return "hi guest";
    }
}
