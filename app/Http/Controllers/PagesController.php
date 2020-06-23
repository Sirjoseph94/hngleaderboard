<?php

namespace App\Http\Controllers;
use App\Intern;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
    	$interns = Intern::all();
    	$top = Intern::orderBy('points','desc')->take(3)->get();

	   	return view('pages.home')->with('interns', $interns)->with("top", $top);
	}

}
