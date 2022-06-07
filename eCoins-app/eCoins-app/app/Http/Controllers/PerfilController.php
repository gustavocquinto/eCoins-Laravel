<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PerfilController extends Controller
{
    //
    public function index(){
            return view('user.index');
    }

    public function edit(Request $request){
        $user = Auth::user();
        $image = $request->file('image');

        if($request->image){
            $path = 'storage/'. Storage::putFile('User', $image);
        }
        else{
            $path = Auth::user()->image;
        }

        $user->update([
            'name' => $request->name,
            'image' => $path,
            'tel' => $request->tel,
        ]);
        session()->flash('sucess', 'Perfil salvo com sucesso :D');
        return redirect()->back();
    }

}
