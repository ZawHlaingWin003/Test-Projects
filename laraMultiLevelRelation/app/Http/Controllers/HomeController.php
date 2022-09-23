<?php

namespace App\Http\Controllers;

use App\Models\Club;
use App\Models\Country;
use App\Models\Player;
use App\Models\Suburb;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // View method for home page.
	public function index()
	{
		//$players = Player::with('suburbs', 'suburbs.clubs', 'suburbs.clubs.countries')->get();
		//dd($players);
		
		// $players = Suburb::with('clubs', 'players')->get();
		// dd($players);
		
//		$players = Club::with('suburbs','suburbs.players')->get();
//		dd($players);
		
		//$players = Country::with('clubs', 'clubs.suburbs.players')->get();
//		dd($players);
		
//		$players = \App\Models\Brand::with('players')->get();
//		dd($players);
		
		$players = Player::with('suburbs.clubs.countries', 'cars.brands')->get();
		//dd($players);
		return view('welcome')->with('players', $players);
	}
}
