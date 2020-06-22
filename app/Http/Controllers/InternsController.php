<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InternsController extends Controller
{
   public function index(){
   	return view('home');
   }

   public function save_interns(Request $request){
   	$this->validate($request,[
   		'interns_file' => 'required'
   	]);

   	if($request->hasFile('interns_file')){
   		//check if file is csv
   		$content = file_get_contents($request->interns_file);

   		$data = json_decode($content, true);

   		return $data->name;
   	}
   }
}
