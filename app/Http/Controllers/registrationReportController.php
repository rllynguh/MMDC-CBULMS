<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\registrationHeaderModel;
use App\registrationDetailModel;
use PDF;

class registrationReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $result=registrationHeaderModel::select("tblRegistrationHeader.*","tblRegistrationHeader.*","tblTenant.*","tblBusinessType.*","tblUnit.*")
        ->join('tblRegistrationDetail','tblRegistrationHeader.intRegiCode','tblRegistrationDetail.intRegiCode')
        ->join('tblUnit','tblRegistrationDetail.intUnitCode','tblUnit.intUnitCode')
        ->join('tblTenant','tblRegistrationHeader.intTenaCode','tblTenant.intTenaCode')
        ->join('tblBusinessType','tblTenant.intBusiTypeCode','tblBusinessType.intBusiTypeCode')
        ->get();
        view()->share('result',$result);
        $pdf = PDF::loadView('reports.registrationReport', $result);
        return $pdf->stream()->header('Content-Type','application/pdf');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
