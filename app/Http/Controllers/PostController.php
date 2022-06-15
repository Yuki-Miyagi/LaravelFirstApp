<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Birthday;
use Illuminate\Support\Facades\Log;

class PostController extends Controller
{
    //
    public function index()
    {
        $birthdays = Birthday::latest()->get();

        $today = date("m-d");
        $name = 'Yuki';
        $birthdayfriends = Birthday::where('birthday', 'like', "%$today%")->get();

        return view('index')
            ->with(['birthdays' => $birthdays, 'today'=>$today, 'birthdayfriends'=>$birthdayfriends]);
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'birthday' => 'required',
        ]);

        $birthday = new Birthday();
        $birthday->name = $request->name;
        $birthday->birthday = $request->birthday;
        $birthday->save();

        return redirect()
            ->route('birth.index');
    }

    public function delete(Request $request)
    {
        $id = $request->id;
        $user = Birthday::find($id);
        $user->delete();

        return redirect()
            ->route('birth.index');
    }
}
