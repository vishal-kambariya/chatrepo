<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatsController extends Controller
{
    public function __construct()
    {
       //$this->middleware('auth:sanctum');
    }
    public function index()
    {
        return "hello world";
    }
}
