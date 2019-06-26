<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CitationController extends Controller
{
	public $array = [
		'bla bla bla',
		'ble ble ble',
		'bli bli bli'
	];
    public function show($array)
	{
		$index = rand(0, count($array) - 1);
		$citation = $array[$index];
		return view('inspire', compact('citation') );

	}
}
