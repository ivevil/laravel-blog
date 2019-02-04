<?php

namespace App\Http\Controllers;

use App\Posts;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {

        $users = User::all();
        $posts = Posts::orderBy('created_at', 'asc')->get();

        return view ('index')->with(['users' => $users, 'posts' => $posts]);
    }

    public function create() {


    }

    public function store() {


    }
}
