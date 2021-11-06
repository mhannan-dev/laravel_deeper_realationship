<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Shop;
use App\Models\Country;
use Illuminate\Http\Request;

class HomeController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		//$countries =  Country::with('shops')->get();
		$countries =  Country::withCount('cities')->withCount('shops')->get();
		//dd($countries);
		return view('index', compact('countries'));
	}

	public function city_summary()
	{
		$data['cities'] = City::withCount('shops')->withCount('employees')->get();
		return view('city', $data);
	}
	public function shop_summary()
	{
		$data['shops'] = Shop::with('city.country')->withCount('employees')->get();
		//dd($data['shops']);
		return view('shop', $data);
	}
}
