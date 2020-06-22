<?php

namespace App\Http\Controllers;
use App\Intern;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
    	$interns = Intern::all();

	   	return view('pages.home')->with('interns', $interns);
	}

}
