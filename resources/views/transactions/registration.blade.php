@extends("layouts.myLayout")
@section("content")
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
          <form id="form_advanced_validation" method="POST">
            <div class="form-group form-float col-md-12 col-sm-12 p-t-30">
              <h5 class="card-inside-title p-b-10">Personal Information</h5>
              <div class="col-md-4 col-sm-4">
                <div class="form-line">
                  <input type="text" class="form-control align-center" name="minmaxlength" maxlength="50" minlength="1" required>
                  <label class="form-label">First Name</label>
                </div>
                <div class="help-info">Required</div>
              </div>
              <div class="col-md-4 col-sm-4">
                <div class="form-line">
                  <input type="text" class="form-control align-center" name="minmaxlength" maxlength="50" minlength="1" >
                  <label class="form-label">Middle Name</label>
                </div>
                <div class="help-info">Optional</div>
              </div>
              <div class="col-md-4 col-sm-4">
                <div class="form-line">
                  <input type="text" class="form-control align-center" name="minmaxlength" maxlength="50" minlength="1" required>
                  <label class="form-label">Last Name</label>
                </div>
                <div class="help-info">Required</div>
              </div>
            </div>

            <div class="form-group form-float col-md-12 col-sm-12 p-t-30">
              <h5 class="card-inside-title p-b-10">Home Address</h5>
              <div class="col-md-4 col-sm-4">
                <div class="form-line">
                  <input type="text" class="form-control align-center" name="minmaxlength" maxlength="50" minlength="1" required>
                  <label class="form-label">Address No.</label>
                </div>
                <div class="help-info">Required</div>
              </div>
              <div class="col-md-4 col-sm-4">
                <div class="form-line">
                  <input type="text" class="form-control align-center" name="minmaxlength" maxlength="50" minlength="1" required>
                  <label class="form-label">Street</label>
                </div>
                <div class="help-info">Required</div>
              </div>
              <div class="col-md-4 col-sm-4">
                <div class="form-line">
                  <input type="text" class="form-control align-center" name="minmaxlength" maxlength="50" minlength="1" required>
                  <label class="form-label">Town/Barangay</label>
                </div>
                <div class="help-info">Required</div>
              </div>
            </div>

            <div class="form-group form-float col-md-12 col-sm-12">
              <div class="col-md-6 col-sm-6">
                <div class="form-line">
                  <label class="form-label">City</label>
                  <select class="form-control show-tick align-center">
                    <option class="text-center">Quezon City</option>
                    <option class="text-center">Marikina City</option>
                    <option class="text-center">Makati City</option>
                  </select>
                </div>
                <div class="help-info">Required</div>
              </div>
              <div class="col-md-6 col-sm-6">
                <div class="form-line">
                  <label class="form-label">Province</label>
                  <select class="form-control show-tick align-center">
                    <option class="text-center">Cavite</option>
                    <option class="text-center">Metro Manila</option>
                    <option class="text-center">Rizal</option>
                    <option class="text-center">Laguna</option>
                  </select>
                </div>
                <div class="help-info">Required</div>
              </div>
            </div>

            <div class="form-group form-float col-md-12 col-sm-12 p-t-30">
              <h5 class="card-inside-title p-b-10">Contact Details</h5>
              <div class="col-md-6 col-sm-6">
                <div class="form-line">
                  <input type="text" class="form-control mobile-phone-number align-center" name="minmaxlength" maxlength="50" minlength="1" required>
                  <label class="form-label">Mobile Number</label>
                </div>
                <div class="help-info">Required - Ex: +63(000)000-00-00</div>
              </div>
              <div class="col-md-6 col-sm-6">
                <div class="form-line">
                  <input type="text" class="form-control email align-center" name="minmaxlength" maxlength="50" minlength="1" required>
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
                  <select class="form-control show-tick align-center">
                    <option class="text-center">Cyber IT</option>
                    <option class="text-center">Food and Beverages</option>
                    <option class="text-center">Dry Goods</option>
                    <option class="text-center">Drug Store</option>
                  </select>
                </div>
                <div class="help-info">Required</div>
              </div>
              <div class="col-md-6 col-sm-6">
                <div class="form-line">
                  <input type="text" class="form-control align-center" name="minmaxlength" maxlength="50" minlength="1" required>
                  <label class="form-label">Business Name</label>
                </div>
                <div class="help-info">Required - Company Name, if Employee</div>
              </div>
            </div>
            <div class="form-group form-float col-md-12 col-sm-12">
              <div class="col-md-6 col-sm-6">
                <div class="form-line">
                  <input type="text" class="form-control align-center" name="minmaxlength" maxlength="50" minlength="1">
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
                  <input type="text" class="form-control align-center" name="minmaxlength" maxlength="50" minlength="1" required>
                  <label class="form-label">Address No.</label>
                </div>
                <div class="help-info">Required</div>
              </div>
              <div class="col-md-4 col-sm-4">
                <div class="form-line">
                  <input type="text" class="form-control align-center" name="minmaxlength" maxlength="50" minlength="1" required>
                  <label class="form-label">Street</label>
                </div>
                <div class="help-info">Required</div>
              </div>
              <div class="col-md-4 col-sm-4">
                <div class="form-line">
                  <input type="text" class="form-control align-center" name="minmaxlength" maxlength="50" minlength="1" required>
                  <label class="form-label">Town/Barangay</label>
                </div>
                <div class="help-info">Required</div>
              </div>
            </div>
            <div class="form-group form-float col-md-12 col-sm-12">
              <div class="col-md-6 col-sm-6">
                <div class="form-line">
                  <label class="form-label">City</label>
                  <select class="form-control show-tick align-center">
                    <option class="text-center">Quezon City</option>
                    <option class="text-center">Marikina City</option>
                    <option class="text-center">Makati City</option>
                  </select>
                </div>
                <div class="help-info">Required</div>
              </div>
              <div class="col-md-6 col-sm-6">
                <div class="form-line">
                  <label class="form-label">Province</label>
                  <select class="form-control show-tick align-center">
                    <option class="text-center">Cavite</option>
                    <option class="text-center">Metro Manila</option>
                    <option class="text-center">Rizal</option>
                    <option class="text-center">Laguna</option>
                  </select>
                </div>
                <div class="help-info">Required</div>
              </div>
            </div>

            <div class="form-group form-float col-md-12 col-sm-12 p-t-30 p-b-5">
              <h5 class="card-inside-title p-b-10">Desired Property</h5>
              <div class="col-md-6 col-sm-6">
                <div class="form-line">
                  <label class="form-label">Building</label>
                  <select class="form-control show-tick align-center">
                    <option class="text-center">Menarco</option>
                    <option class="text-center">K Mall</option>
                    <option class="text-center">Carolina Mall</option>
                  </select>
                </div>
                <div class="help-info">Required</div>
              </div>
              <div class="col-md-6 col-sm-6">
                <div class="form-line">
                  <label class="form-label">Floor</label>
                  <select class="form-control show-tick align-center">
                    <option class="text-center">1</option>
                    <option class="text-center">2</option>
                    <option class="text-center">3</option>
                    <option class="text-center">4</option>
                  </select>
                </div>
                <div class="help-info">Required</div>
              </div>
            </div>
            <div class="form-group form-float col-md-12 col-sm-12">
              <div class="col-md-6 col-sm-6">
                <div class="form-line">
                  <label class="form-label">Unit No.</label>
                  <select class="form-control show-tick align-center">
                    <option class="text-center">1</option>
                    <option class="text-center">2</option>
                    <option class="text-center">3</option>
                    <option class="text-center">4</option>
                  </select>
                </div>
                <div class="help-info">Required</div>
              </div>
              <div class="col-md-6 col-sm-6">
                <div class="form-line">
                  <input type="text" class="form-control align-center" name="minmaxlength" maxlength="50" minlength="1" required>
                  <label class="form-label">Purpose</label>
                </div>
                <div class="help-info">Required</div>
              </div>
            </div>
            <div class="align-center">
              <button class="btn btn-primary btn-lg waves-effect align-center" type="submit">SUBMIT</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- #END# Advanced Validation -->
</div>
@stop