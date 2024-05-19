<?php

namespace App\Http\Controllers;

use App\Models\Watch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AdminController extends Controller
{
    //
    public function dashboard(){
        return view('dashboard.admin.admin_dashboard');
    }

    public function watch(){
        $data['getWatch']= Watch::all();
        return view('dashboard.admin.watch',$data);
    }
    public function add_watch(){
        return view('dashboard.admin.add_watch');
    }

    public function post_add_watch(Request $request){
        $request->validate([
            'title' => 'required',
            'photo_path' => 'required|mimes:png,jpg,jpeg,bmp',
            'description' => 'required',
            'price' => 'required'
        ]);

        $imageName = '';
        if ($image = $request->file('photo_path')) {
            $imageName = time() . '-' . uniqid() . '.' . $image->getClientOriginalExtension();
            //into public folder
            $image->move('TimeTrove/watch', $imageName);
        }

        $watch = new Watch;
        $watch->title = $request->input('title');
        $watch->photo_path = $imageName;
        $watch->description = $request->input('description');
        $watch->price = $request->input('price');
        $watch->save();
        return redirect('/_admin/add_watch')->with('success', 'Watch added successfully');

    }
     public function edit_watch($id)
    {
        $data['getWatch'] = Watch::find($id);
        return view('dashboard.admin.edit_watch', $data);
    }

    public function post_edit_watch($id, Request $request)
    {

        $watch = Watch::find($id);

        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'price' => 'required',
        ]);

        $imageName = '';
        $deleteOldImage = 'TimeTrove/watch/' . $watch->photo_path;

        if ($image = $request->file('photo_path')) {
            if (file_exists($deleteOldImage)) {
                File::delete($deleteOldImage);
            }
            $imageName = time() . '-' . uniqid() . '.' . $image->getClientOriginalExtension();
            //into public folder
            $image->move('TimeTrove/watch/', $imageName);
        } else {
            $imageName = $watch->photo_path;
        }

        $watch->title = $request->input('title');
        $watch->photo_path = $imageName;
        $watch->description = $request->input('description');
        $watch->price = $request->input('price');
        $watch->save();
        return redirect('/_admin/watch')->with('success', 'Watch Updated successfully');
    }

    public function delete_watch($id)
    {
        $watch = Watch::find($id);
        $deleteOldImage = 'TimeTrove/watch/' . $watch->photo_path;
        if (file_exists($deleteOldImage)) {
            File::delete($deleteOldImage);
        }
        $watch->delete();

        return redirect('/_admin/watch')->with('error', 'Watch Deleted successfully');
    }


}
