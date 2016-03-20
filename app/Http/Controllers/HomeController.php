<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
	/**
	 * Show the home page
	 * 
	 * @return Response
	 */
	public function index()
	{
		return view('home.index');
	}
}