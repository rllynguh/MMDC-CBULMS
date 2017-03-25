<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
	return view('welcome');
});
Route::get('billingTable/', function () {
	return view('transactions.bill');
});
Route::get('contractCreate/', function () {
	return view('transactions.cc');
});
Route::get('collectionTable/', function () {
	return view('transactions.collection');
});
Route::get('extendTable/', function () {
	return view('transactions.extend');
});
Route::get('extension/', function () {
	return view('transactions.extendExtend');
});
Route::get('billingForm/', function () {
	return view('transactions.showBill');
});
Route::get('moveRequestTable/', function () {
	return view('transactions.moveRequest');
});
Route::get('registrationForm/', function () {
	return view('transactions.registration');
});
Route::get('renewalForm/', function () {
	return view('transactions.renewal');
});
Route::get('requestTable/', function () {
	return view('transactions.request');
});
Route::get('submissionTable/', function () {
	return view('transactions.submission');
});
Route::get('terminateTable/', function () {
	return view('transactions.terminate');
});

Route::resource('businesstype','businesstypeController');
Route::put('businesstype/softDelete/{softDelete}', ['uses' => 'businesstypeController@softDelete', 'as' => 'businesstype.softDelete']);
Route::get('businesstype/get/data', ['uses' => 'businessTypeController@data', 'as' => 'businessType.getData']);




Route::resource('buildingtype','buildingTypeController');
Route::post('buildingtype/softDelete/{softDelete}', ['uses' => 'buildingtypeController@softDelete', 'as' => 'buildingtype.softDelete']);
Route::get('buildingtype/get/data', ['uses' => 'buildingTypeController@data', 'as' => 'buildingType.getData']);




Route::resource('bank','bankController');
Route::post('bank/softDelete/{softDelete}', ['uses' => 'bankController@softDelete', 'as' => 'bank.softDelete']);
Route::get('bank/get/data', ['uses' => 'bankController@data', 'as' => 'bank.getData']);



Route::resource('building','buildingController');
Route::post('building/softDelete/{softDelete}', ['uses' => 'buildingController@softDelete', 'as' => 'building.softDelete']);
Route::get('building/get/data', ['uses' => 'buildingController@data', 'as' => 'building.getData']);




Route::resource('floor','floorController');
Route::get('floor/getFloor/{id}', ['uses' => 'floorController@getFloor', 'as' => 'floor.getFloor']);
Route::get('floor/get/building', ['uses' => 'floorController@getBuilding', 'as' => 'floor.getBuilding']);
Route::post('floor/softDelete/{id}', ['uses' => 'floorController@softDelete', 'as' => 'floor.softDelete']);
Route::get('floor/get/data', ['uses' => 'floorController@data', 'as' => 'floor.getData']);



Route::resource("unit","unitController");
Route::post('unit/softDelete/{id}', ['uses' => 'unitController@softDelete', 'as' => 'unit.softDelete']);
Route::get('unit/get/building', ['uses' => 'unitController@getBuilding', 'as' => 'unit.getBuilding']);
Route::get('unit/getFloor/{id}', ['uses' => 'unitController@getFloor', 'as' => 'unit.getFloor']);
Route::get('unit/getLatest/{id}', ['uses' => 'unitController@getLatest', 'as' => 'unit.getLatest']);

Route::get('custom/getCity/{id}', ['uses' => 'customController@getCity', 'as' => 'custom.getCity']);
Route::get('unit/get/data', ['uses' => 'unitController@data', 'as' => 'unit.getData']);



Route::resource("parkArea","parkAreaController");
Route::get('parkArea/get/building', ['uses' => 'parkAreaController@getBuilding', 'as' => 'parkArea.getBuilding']);
Route::get('parkArea/getFloor/{id}', ['uses' => 'parkAreaController@getFloor', 'as' => 'parkArea.getFloor']);
Route::post('parkArea/softDelete/{id}', ['uses' => 'parkAreaController@softDelete', 'as' => 'parkArea.softDelete']);
Route::get('parkArea/get/data', ['uses' => 'parkAreaController@data', 'as' => 'parkArea.getData']);


Route::resource("parkSpace","parkSpaceController");
Route::get('parkSpace/get/building', ['uses' => 'parkSpaceController@getBuilding', 'as' => 'parkSpace.getBuilding']);
Route::get('parkSpace/getParkArea/{id}', ['uses' => 'parkSpaceController@getParkArea', 'as' => 'parkSpace.getParkArea']);
Route::get('parkSpace/getLatest/{id}', ['uses' => 'parkSpaceController@getLatest', 'as' => 'parkSpace.getLatest']);
Route::get('parkSpace/get/data', ['uses' => 'parkSpaceController@data', 'as' => 'parkSpace.getData']);
Route::post('parkSpace/softDelete/{softDelete}', ['uses' => 'parkSpaceController@softDelete', 'as' => 'parkSpace.softDelete']);




Route::resource("marketrate","marketRateController");
Route::get('marketrate/get/data', ['uses' => 'marketRateController@data', 'as' => 'marketRate.getData']);


Route::resource("parkrate","parkRateController");
Route::get('parkrate/get/data', ['uses' => 'parkRateController@data', 'as' => 'parkRate.getData']);

Route::resource("utilities","utilitiesController");

Route::resource("registration","registrationController");

Route::resource("reports/registration","registrationReportController");








