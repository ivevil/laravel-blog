<?php

namespace App\Http\Controllers;

use App\Posts;
use App\User;
use App\Widgets;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {

        $users = User::all();
        $posts = Posts::orderBy('created_at', 'asc')->get();
        
        $slider = Widgets::all()->where('type', 0)->last();
        $slider->details = unserialize($slider->details);
        $starrater = Widgets::all()->where('type', 1)->last();
        $starrater->details = unserialize($starrater->details);
        $catagolizer = Widgets::all()->where('type', 2)->last();
        $catagolizer->details = unserialize($catagolizer->details);
        $detailsunique = array_unique($catagolizer->details);
        //dd($detailsunique);

        return view ('index')->with([
            'users' => $users, 
            'posts' => $posts, 
            'slider' => $slider,
            'starrater' => $starrater,
            'catagolizer' => $catagolizer,
            'detailsunique' => $detailsunique
            ]);
    }
    
    public function showblog() {
        
        $posts = Posts::orderBy('created_at', 'desc')->get()->paginate(9);
                
        return view('blog')->with('posts', $posts);
    }

    public function create() {


    }

    public function store() {


    }
}
