<?php

namespace App\Http\Controllers;

use App\Album;
use App\Repositories\AlbumRepository;

class HomeController extends Controller
{
	protected $repo;

	public function __construct(AlbumRepository $albumRepo)
	{
		$this->repo = $albumRepo;
	}
	/**
	 * Show the home page
	 * 
	 * @return Response
	 */
	public function index()
	{
		$latest = Album::latest(5);
		
		return view('home.index', compact('latest'));
	}
}