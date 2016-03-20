<?php

namespace App\Http\Controllers;

use App\Album;
use App\Genre;
use Session;

class CartController extends Controller
{
	public function index()
	{
		//Session::forget('cart_items');
		$cartData = [];
		$total = 0;

		if (count(Session::get('cart_items')) > 0) {
    		foreach (Session::get('cart_items') as $id => $qty) {
        		$album = Album::find($id)->toArray();
        		$album = array_add($album, 'quantity', count($qty));
        		$cartData[] = $album;
        		$total = $total + ($album['price'] * count($qty));
        	}
    	}

		return view('cart.index', compact('cartData', 'total'));
	}

	public function add($albumId)
	{
		Session::push('cart_items.'.$albumId, 1);
		// redirect to index view
		return redirect('cart');
	}

	public function remove($albumId)
	{
		// ajax call for remove a item from session cart
		// 
		// return a json
	}
}