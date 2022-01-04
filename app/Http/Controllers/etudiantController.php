<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;

class etudiantController extends Controller
{
  public function create (){
       return view('tp/from');
   }
  public function store (Request $request){
  //  $student=new student();
//    $data =$request->all();
  // return ($data);
  $data=$request->all();
  student::create($data);
  //return redirect('/index');//pour rediriger dqns la base de donnee
 return redirect(route('student'));


}
public function index(){
   // return 'bonjour';
   $data=student::all();
   $data= student::orderBy('id','ASC')->get(['id',"nom"]);
   //return $data;
//return view('Home');
return view('Home',compact('data'));

}
   
}
