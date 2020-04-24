<?php

namespace App\Http\Controllers;

use App\Widgets;
use Illuminate\Http\Request;

class WidgetsController extends Controller
{
    public function index()
    {
        $widgets = Widgets::all()->paginate(10);
        
        return view('admin.widgets')->with('widgets', $widgets);
    }

    public function create()
    {
        return view('admin.create-widget');
    }
    
    public function store(Request $request)
    {
        $settings = Settings::find(1);
        
        $settings->update(request()->all());
        $settings->save();

        return redirect()->back()->with('message', 'Settings successfully updated.');
    }

    public function edit(Request $request)
    {
        $id = $request->input("id");
        $widget = Widgets::find($id);
        
        return view('admin.edit-widget')->with('widget', $widget);
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
