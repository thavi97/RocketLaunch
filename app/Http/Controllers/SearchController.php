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
    $url = 'https://api.spacexdata.com/v2/launches?launch_year=' . $request->input('launch_year') . "&rocket_id=" . $request->input('rocket_id');
    $url_json = file_get_contents($url);
    $launch_array = json_decode($url_json, true);
    $i = 0;
    $launch_details = array();
    foreach($launch_array as $launch){
      ${'launch_detail' .$i} = array(
        'launch_date' => $launch['launch_date_local'],
        'rocket_name' => $launch['rocket']['rocket_name'],
        'long_launch_site_name' => $launch['launch_site']['site_name_long'],
        'details' => $launch['details'],
      );
      $launch_details[] = ${'launch_detail' .$i};
      $i++;
    }
    dd($launch_details);
    return view('display')->with('launch_details', $launch_details);
  }
}
