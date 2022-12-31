<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Response;
use Inertia\ResponseFactory;

class IndexController extends Controller
{
    public function index(): Response|ResponseFactory
    {
        return inertia('Index/Index',
            [
                'message' => 'Hello from Laravel'
            ]
        );
    }

    public function show(): Response|ResponseFactory
    {
        return inertia('Index/Show');
    }
}
