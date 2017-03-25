@extends('layouts.mylayout')
@section('title')
Bank
@endsection
@section('content')
<meta name="_token" content="{!! csrf_token() !!}" />
<div class="container-fluid">
  <div class="body">
    <div class="block-header">
      <h2 class="align-center">UTILITIES</h2>
    </div>
  </div>
  <div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="card">
        <div class="header align-center">
          <h2>
            UPDATE UTILITIES
          </h2>
        </div>
        <div class="body">
          <form id="myForm" class="form-horizontal"  data-parsley-validate>
            <div class="form-group p-l-30">
              <h5  class="card-inside-title">Security Deposit</h5>
              <div class="form-line">
                <input autocomplete="off" min="1" max="12" required  id="txtSec" name="txtSec" type="number" class="form-control text-center " data-parsley-pattern="^[0-9]+$" data-parsley-type="number" value="{{$result->intSecurityDeposit}}" placeholder="months">
              </div>
            </div>
            <div class="form-group p-l-30 p-t-30">
              <h5 class="card-inside-title">Value Added Tax</h5>
              <div class="form-line">
                <input autocomplete="off" required=""  id="txtVAT" name="txtVAT" class="form-control align-center" required  data-parsley-type="number" placeholder="%" value="{{$result->dblVat}}">
              </div>
            </div>
            <div class="form-group p-l-30 p-t-30">
              <h5 class="card-inside-title">Expanded Witholding Tax</h5>
              <div class="form-line">
                <input autocomplete="off" required=""  id="txtEWT" name="txtEWT" class="form-control align-center" required  data-parsley-type="number" placeholder="%" value="{{$result->dblEwt}}">
              </div>
            </div>
            <div class="form-group p-l-30 p-t-30">
              <h5 class="card-inside-title">Escalation Fee</h5>
              <div class="form-line">
               <input autocomplete="off" required=""  id="txtEsca" name="txtEsca" class="form-control align-center" required  data-parsley-type="number" placeholder="%" value="{{$result->dblEscalation}}">
             </div>
           </div>
           <div class="form-group p-l-30 p-t-30">
            <h5 class="card-inside-title">Vetting Fee</h5>
            <div class="form-line">
              <input autocomplete="off" required=""  id="txtVet" name="txtVet" class="form-control align-center" required  data-parsley-type="number" placeholder="%" value="{{$result->dblVettingFee}}">
            </div>
            <div class="form-group p-l-30 p-t-30">
              <h5 class="card-inside-title">Common User Service Area Fee</h5>
              <div class="form-line">
                <input autocomplete="off" required=""  id="txtCUSA" name="txtCUSA" class="form-control align-center" required  data-parsley-type="number" placeholder="%" value="{{$result->dblCusa}}">
              </div>
            </div>
            <button type="submit" class="btn btn-lg bg-brown waves-effect waves-white col-md-12" id="btnSave" value="add"><i class="mdi-content-save"></i><span id="lblButton">Update</span></button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
@endsection
@section('scripts')
{!!Html::script("custom/utilitiesAjax.js")!!}
<script src="js/pages/forms/form-wizard.js"></script>
<script src="js/pages/forms/basic-form-elements.js"></script>
<script src="plugins/jquery-datatable/jquery.dataTables.js"></script>
<script src="plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
@endsection
