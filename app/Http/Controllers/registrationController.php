<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\addressModel;
use App\representativeModel;
use App\tenantModel;
use App\registrationHeaderModel;
use App\registrationDetailModel;
class registrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $province=DB::table("tblProvince")
        ->select("tblProvince.*")
        ->where("tblProvince.boolIsActive",1)
        ->get()
        ;
        $busitype=DB::table("tblBusinessType")
        ->select("tblBusinessType.*")
        ->where("tblBusinessType.boolIsActive",1)
        ->where("tblBusinessType.boolIsDeleted",0)
        ->get()
        ;
        $unit=DB::table("tblUnit")
        ->select("tblUnit.*")
        ->where("tblUnit.boolIsActive",1)
        ->where("tblUnit.boolIsDeleted",0)
        ->get()
        ;
        $posi=DB::table("tblRepresentativePosition")
        ->select("tblRepresentativePosition.*")
        ->get()
        ;
        return view('transactions.registration.index')
        ->withBusitype($busitype)
        ->withProvince($province)
        ->withProvince2($province)
        ->withUnit($unit)
        ->withPosi($posi)
        ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //        
        return view('transactions.registration.create')
        ;
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
        $addrReppr=new addressModel();
        $addrReppr->strAddrNum=$request->txtConSNum;
        $addrReppr->strAddrStreet=$request->txtConStreet;
        $addrReppr->strAddrDistrict=$request->txtConDistrict;
        $addrReppr->intCityCode=$request->conComCity;
        $addrReppr->save();
        $representative=new representativeModel();
        $representative->strReprFirst=$request->txtFName;
        $representative->strReprMid=$request->txtMName;
        $representative->strReprLast=$request->txtLName;
        $representative->intPosiCode=$request->comPosition;
        $representative->strReprEmail=$request->txtEmail;
        $representative->strReprTelephone=$request->txtConTel;
        $representative->intAddrCode=$addrReppr->intAddrCode;
        $representative->save();

        $addrComp=new addressModel();
        $addrComp->strAddrNum=$request->txtComSNum;
        $addrComp->strAddrStreet=$request->txtComStreet;
        $addrComp->strAddrDistrict=$request->txtComDistrict;
        $addrComp->intCityCode=$request->comComCity;
        $addrComp->save();

        $comp=new tenantModel();
        $comp->strTenaDesc=$request->txtBusiDesc;
        $comp->intBusiTypeCode=$request->comBusiType;
        $comp->intReprCode=$representative->intReprCode;
        $comp->intAddrCode=$addrComp->intAddrCode;
        $comp->save();

        $registrationHeader=new registrationHeaderModel();
        $registrationHeader->intTenaCode=$comp->intTenaCode;
        $registrationHeader->datRegiDate=date("Y-m-d H:i:s");
        $registrationHeader->txtRemarks=$request->txtPurpose;
        $registrationHeader->save();

        $registrationDetail=new registrationDetailModel();
        $registrationDetail->intRegiCode=$registrationHeader->intRegiCode;
        $registrationDetail->intUnitCode=$request->comUnit;
        $registrationDetail->save();
        return redirect(route('registration.index'));
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
