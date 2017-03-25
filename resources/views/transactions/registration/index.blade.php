@extends("layouts.myLayout")
@section("content")
<meta name="_token" content="{!! csrf_token() !!}" />
<div class="container-fluid">
  <div class="block-header">
    <small>
      DASHBOARD / TRANSACTIONS / REGISTRATION
    </small>
  </div>

  <!-- Advanced Validation -->
  <div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="card">
        <div class="header bg-lime align-center">
          <h2 class="p-t-10 p-b-10">REGISTRATION FORM</h2>
          <small>Tell us more about you, kindly fill up all the needed information in this registration form.</small>
        </div>
        <div class="body">
          <form id="myForm" method="POST">
            <div class="form-group form-float col-md-12 col-sm-12 p-t-30">
              <h5 class="card-inside-title p-b-10">Personal Information</h5>
              <div class="col-md-4 col-sm-4">
                <div class="form-line">
                  <input  id="txtFName" name="txtFName" type="text" class="form-control align-center" maxlength="50" minlength="1" required>
                  <label class="form-label">First Name</label>
                </div>
                <div class="help-info">Required</div>
              </div>
              <div class="col-md-4 col-sm-4">
                <div class="form-line">
                  <input id="txtMName" name="txtMName" type="text" class="form-control align-center" maxlength="50" minlength="1" >
                  <label class="form-label">Middle Name</label>
                </div>
                <div class="help-info">Optional</div>
              </div>
              <div class="col-md-4 col-sm-4">
                <div class="form-line">
                  <input id="txtLName" name="txtLName" type="text" class="form-control align-center" maxlength="50" minlength="1" required>
                  <label class="form-label">Last Name</label>
                </div>
                <div class="help-info">Required</div>
              </div>
            </div>

            <div class="form-group form-float col-md-12 col-sm-12 p-t-30">
              <h5 class="card-inside-title p-b-10">Home Address</h5>
              <div class="col-md-4 col-sm-4">
                <div class="form-line">
                  <input id="txtConSNum" name="txtConSNum" type="text" class="form-control align-center" maxlength="50" minlength="1" required>
                  <label class="form-label">Address No.</label>
                </div>
                <div class="help-info">Required</div>
              </div>
              <div class="col-md-4 col-sm-4">
                <div class="form-line">
                  <input id="txtConStreet" name="txtConStreet" type="text" class="form-control align-center" maxlength="50" minlength="1" required>
                  <label class="form-label">Street</label>
                </div>
                <div class="help-info">Required</div>
              </div>
              <div class="col-md-4 col-sm-4">
                <div class="form-line">
                  <input id="txtConDistrict" name="txtConDistrict" type="text" class="form-control align-center"  maxlength="50" minlength="1" required>
                  <label class="form-label">Town/Barangay</label>
                </div>
                <div class="help-info">Required</div>
              </div>
            </div>

            <div class="form-group form-float col-md-12 col-sm-12">
              <div class="col-md-6 col-sm-6">
                <div class="form-line">
                  <label class="form-label">Province</label>
                  <select id="conComProvince" name="conComProvince" class="form-control show-tick align-center">
                    @foreach($province as $province)
                    <option value="{{$province->intProvinceCode}}" class="text-center">{{$province->strProvinceDesc}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="help-info">Required</div>
              </div>
              <div class="col-md-6 col-sm-6">
                <div class="form-line">
                  <label class="form-label">City</label>
                  <select id="conComCity" name="conComCity" class="form-control show-tick align-center">
                  </select>
                </div>
                <div class="help-info">Required</div>
              </div>
            </div>

            <div class="form-group form-float col-md-12 col-sm-12 p-t-30">
              <h5 class="card-inside-title p-b-10">Contact Details</h5>
              <div class="col-md-6 col-sm-6">
                <div class="form-line">
                  <input id="txtConTel" name="txtConTel" type="text" class="form-control mobile-phone-number align-center" maxlength="50" minlength="1" required>
                  <label class="form-label">Telephone Number</label>
                </div>
                <div class="help-info">Required</div>
              </div>
              <div class="col-md-6 col-sm-6">
                <div class="form-line">
                  <input id="txtEmail" name="txtEmail" type="text" class="form-control email align-center" maxlength="50" minlength="1" required>
                  <label class="form-label">E-Mail Adress</label>
                </div>
                <div class="help-info">Required - Ex: client@gmail.com</div>
              </div>
            </div>

            <div class="form-group form-float col-md-12 col-sm-12 p-t-30 p-b-5">
              <h5 class="card-inside-title p-b-10">Business Details</h5>
              <div class="col-md-6 col-sm-6">
                <div class="form-line">
                  <label class="form-label">Business Type</label>
                  <select id="comBusiType" name="comBusiType" class="form-control show-tick align-center">
                    @foreach($busitype as $busitype)
                    <option value="{{$busitype->intBusiTypeCode}}" class="text-center">{{$busitype->strBusiTypeDesc}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="help-info">Required</div>
              </div>
              <div class="col-md-6 col-sm-6">
                <div class="form-line">
                  <input id="txtBusiDesc" name="txtBusiDesc" type="text" class="form-control align-center"  maxlength="50" minlength="1" required>
                  <label class="form-label">Business Name</label>
                </div>
                <div class="help-info">Required - Company Name, if Employee</div>
              </div>
            </div>
            <div class="form-group form-float col-md-12 col-sm-12">
              <div class="col-md-6 col-sm-6">
                <div class="form-line">
                  <select id="comPosition" name="comPosition" class="form-control show-tick align-center">
                    @foreach($posi as $posi)
                    <option value="{{$posi->intPosiCode}}" class="text-center">{{$posi->strPosiDesc}}</option>
                    @endforeach
                  </select>
                  <label class="form-label">Position</label>
                </div>
                <div class="help-info">Optional - If Employee</div>
              </div>
              <div class="col-md-6 col-sm-6">
                <div class="form-line">
                  <input type="text" class="form-control align-center" name="minmaxlength" maxlength="50" minlength="1" required>
                  <label class="form-label">Telephone Number</label>
                </div>
                <div class="help-info">Required - Ex: 000-00-00</div>
              </div>
            </div>

            <div class="form-group form-float col-md-12 col-sm-12 p-t-30">
              <h5 class="card-inside-title p-b-10">Business Address</h5>
              <div class="col-md-4 col-sm-4">
                <div class="form-line">
                  <input id="txtComSNum" name="txtComSNum" type="text" class="form-control align-center" maxlength="50" minlength="1" required>
                  <label class="form-label">Address No.</label>
                </div>
                <div class="help-info">Required</div>
              </div>
              <div class="col-md-4 col-sm-4">
                <div class="form-line">
                  <input id="txtComStreet" name="txtComStreet" type="text" class="form-control align-center" maxlength="50" minlength="1" required>
                  <label class="form-label">Street</label>
                </div>
                <div class="help-info">Required</div>
              </div>
              <div class="col-md-4 col-sm-4">
                <div class="form-line">
                  <input id="txtComDistrict" name="txtComDistrict" type="text" class="form-control align-center" maxlength="50" minlength="1" required>
                  <label class="form-label">Town/Barangay</label>
                </div>
                <div class="help-info">Required</div>
              </div>
            </div>
            <div class="form-group form-float col-md-12 col-sm-12">
             <div class="col-md-6 col-sm-6">
              <div class="form-line">
                <label class="form-label">Province</label>
                <select id="comComProvince" name="comComProvince" class="form-control show-tick align-center">
                  @foreach($province2 as $province2)
                  <option value="{{$province2->intProvinceCode}}" class="text-center">{{$province2->strProvinceDesc}}</option>
                  @endforeach
                </select>
              </div>
              <div class="help-info">Required</div>
            </div>
            <div class="col-md-6 col-sm-6">
              <div class="form-line">
                <label class="form-label">City</label>
                <select id="comComCity" name="comComCity" class="form-control show-tick align-center">
                </select>
              </div>
              <div class="help-info">Required</div>
            </div>
          </div>

          <div class="form-group form-float col-md-12 col-sm-12 p-t-30 p-b-5">
            <h5 class="card-inside-title p-b-10">Desired Property</h5>
          </div>
          <div class="form-group form-float col-md-12 col-sm-12">
            <div class="col-md-6 col-sm-6">
              <div class="form-line">
                <label class="form-label">Unit</label>
                <select id="comUnit" name="comUnit" class="form-control show-tick align-center">
                  @foreach($unit as $unit)
                  <option class="text-center" value="{{$unit->intUnitCode}}">{{$unit->strUnitCode}}</option>
                  @endforeach
                </select>
              </div>
              <div class="help-info">Required</div>
            </div>
            <div class="col-md-6 col-sm-6">
              <div class="form-line">
                <input id="txtPurpose" name="txtPurpose" type="text" class="form-control align-center"  maxlength="50" minlength="1" required>
                <label class="form-label">Purpose</label>
              </div>
              <div class="help-info">Required</div>
            </div>
          </div>
          <div class="align-center">
            <button class="btn btn-primary btn-lg waves-effect align-center" type="submit">SUBMIT</button>
          </div>
          <input type="hidden" name="_token" value="{{csrf_token()}}">
        </form>
      </div>
    </div>
  </div>
</div>
<!-- #END# Advanced Validation -->
</div>
@stop
@section("scripts")
{!!Html::script('custom/registrationAjax.js')!!}
@stop