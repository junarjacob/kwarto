<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class SongsController extends Controller {
	
	public function index() {
	
		$songs = $this->getSong();
	
		return view('songs.index', compact('songs'));
	
	}	
	
	public function show($id) {
		$song = $this->getSong()[$id];
		
		return view('songs.show', compact('song'));
	}
	
	private function getSong() {
		return ['Story of my Life', 'Steal my Girl', 'Night Changes'];		
	}
}
