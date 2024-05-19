<?php

namespace App\Http\Controllers;

use App\Models\Contactt;
use App\Models\Watch;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    //
    public function index()
    {
        $data['getWatch'] = Watch::all();
        return view('index', $data);
    }

    public function post_contact(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'message' => 'required'

        ]);

        $contactt = new Contactt;
        $contactt->name = $request->input('name');
        $contactt->email = $request->input('email');
        $contactt->message = $request->input('message');

        $contactt->save();
        return redirect('/index')->with('success', 'Message sent successfully');
    }
}
