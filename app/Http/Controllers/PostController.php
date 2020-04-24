<?php

namespace App\Http\Controllers;

use App\Comments;
use App\Categories;
use App\Posts;
use App\User;
use App\Traits\UploadTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class PostController extends Controller
{
    use UploadTrait;
    
    public function index()
    {
        $posts = Posts::all()->sortByDesc('created_at')->paginate(10);
        
        return view('admin.posts')->with('posts', $posts);
    }

    public function create()
    {
        $categories = Categories::all();
        
        return view ('admin.create-post')->with('categories', $categories);
    }

    public function store(Request $request)
    {
        
        $data = $request->input();
        $post = new Posts();
        $post->title = $data['title'];
        $post->body = $data['body'];
        $category = Categories::find($data['id_category']);
        $post->Categories()->associate($category);
        
        if ($request->has('featured_image')) {
            // Get image file
            $image = $request->file('featured_image');
            // Make a image name based on user name and current timestamp
            $name = Str::slug($request->input('title')).'_'.time();
            // Define folder path
            $folder = '/uploads/images/';
            // Make a file path where image will be stored [ folder path + file name + file extension]
            $filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
            // Upload image
            $this->uploadOne($image, $folder, 'public', $name);
            // Set user profile image path in database to filePath
            $post->featured_image = $filePath;
        }
        
        $user = Auth::user();
        
        if($user == null) {
            $user = User::find(1);
        }
        $post->User()->associate($user);

        $post->save();

        return redirect('/posts');
    }

    public function edit(Request $request)
    {
        $id = $request->input("id");
        $post = Posts::find($id);
        $categories = Categories::all();
        
        return view('admin.edit-post')->with(['categories' => $categories, 'post' => $post]);
    }

    public function update(Request $request)
    {
        $post = Posts::find($request->id);

        $category = Categories::find($request->id_category);
        $post->Categories()->associate($category);
                
        $post->update(request()->all());
        
        if ($request->has('featured_image')) {
            // Get image file
            $image = $request->file('featured_image');
            // Make a image name based on user name and current timestamp
            $name = Str::slug($request->input('title')).'_'.time();
            // Define folder path
            $folder = '/uploads/images/';
            // Make a file path where image will be stored [ folder path + file name + file extension]
            $filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
            // Upload image
            $this->uploadOne($image, $folder, 'public', $name);
            // Set user profile image path in database to filePath
            $post->featured_image = $filePath;
        }
        
        $post->save();

        return redirect()->back()->with('message', 'Post successfully updated.');
    }

    public function destroy(Request $request)
    {
        $id = $request->input("id");
        $post = Posts::find($id);

        if ($post != null) {
            $post->delete();
        }
        return back();
        
    }
    
    public function show(Posts $post)
    {
        
        return view('show')->with('post', $post);
    }
}
