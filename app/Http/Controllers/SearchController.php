<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class SearchController extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index()
  {
    return view('home');
  }
  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {
  }
  /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function store(Request $request)
  {
    $url = 'https://api.spacexdata.com/v2/launches?launch_year=' . $request->input('launch_year');
    $url_json = file_get_contents($url);
    $launch_array = json_decode($url_json, true);
    $launch_date = $launch_array['0']['launch_date_local'];
    return view('display')->with('launch_date', $launch_date);
  }
}
