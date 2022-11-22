<?php

namespace App\Http\Controllers;

use App\Models\Addprospect;
use Illuminate\Http\Request;

class AddprospectController extends Controller
{
   public function index(){
    $data=Addprospect::all();
    return view('prospect',compact('data'));
    
   }
   public function tambahprospect(){
    return view('tambahprospect');
   }
   
   public function insertpros(Request $request){
    Addprospect::create($request->all());
    return redirect()->route('prospect')->with('success','Prospect berhasil ditambahkan');
   }
  public function tampilpros($id){
   $data = Addprospect::find($id);
   // dd($data);
    return view('tampilprospect',compact('data'));
  }
 public function updatepros(Request $request,$id){
      $data = Addprospect::find($id);
      $data->update($request->all());
      return redirect()->route('prospect')->with('success', 'Prospect berhasil diupdate');
 }
   public function delete($id){
   
      $data = Addprospect::find($id);
      $data->delete();
      return redirect()->route('prospect')->with('success', 'Prospect berhasil dihapus');
}
}