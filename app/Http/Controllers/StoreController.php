<?php

namespace App\Http\Controllers;

use App\Album;
use App\Genre;

class StoreController extends Controller
{
	public function index()
	{
		$genres = Genre::all();

		var_dump($genres);
	}

	/**
	 * // GET: /store/browse/disco
	 * 
	 * @return Response
	 */
	public function browse($genre_id)
	{
		$albums = Album::where('genre_id', $genre_id)->get();
		$genre = Genre::find($genre_id);

		return view('store.browse', compact('genre', 'albums'));
	}

	/**
	 * Detalles del album seleccionado
	 * 
	 * @param  $id
	 * @return View
	 */
	public function details($album_id)
	{
		$album = Album::find($album_id);

		if (!$album) {
			//return view('errors.404');
			return redirect('/')->with('flash_message', 'No se encuentra el album.');
		}
		
		return view('store.details', compact('album'));
	}
}