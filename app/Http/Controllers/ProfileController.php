<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class ProfileController extends Controller
{
  public function edit(){
    return view('edit');
  }
  public function update( Request $request, $id){
    User::find($id)->update([
      'name' => $request->name,
      'email' => $request->email,
    ]);
    return redirect()->back();
  }
  
}