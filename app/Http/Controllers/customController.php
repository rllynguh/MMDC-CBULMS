<?php

namespace App\Http\Controllers;

use DB;
use Response;
use Illuminate\Http\Request;

class customController extends Controller
{
    //
	public function getCity($id)
	{
		$result=DB::table("tblCity")
		->select("tblCity.*")
		->join("tblProvince","tblCity.intProvinceCode","tblProvince.intProvinceCode")
		->where("tblCity.intProvinceCode","=",$id)
		->get();
		return Response::json($result);
	}
}
