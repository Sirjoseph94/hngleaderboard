<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Excel;
use App\Imports\InternsImport;

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
   		//get filename with extension
        $filenameWithExt = $request->file('interns_file')->getClientOriginalName();


        //ulpoad image
        $path = $request->file('interns_file')->storeAs('public/temp', $filenameWithExt);

   		//check if file is xlsx or csc
   		$fileparts = pathinfo($path);
   		$extension = $fileparts["extension"];
   		if($extension == "xlsx" OR $extension == "csv")
   		{
	   		Excel::import(new InternsImport, request()->file('interns_file'));
	   		return redirect('/')->with("success", "Interns added successfully");  			
   		}
   		elseif($extension == "json"){
   			return "JSON file added";
   		}

   		else{
   			return "Invalid format. Only CSV and JSON accepted";
   		}

   	}

   }
}
