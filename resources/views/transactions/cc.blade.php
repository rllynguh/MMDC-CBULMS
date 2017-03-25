@extends("layouts.myLayout")
@section("content")
<div class="container-fluid">
  <div class="block-header">
    <small>
      DASHBOARD / TRANSACTIONS / CONTRACT CREATION
    </small>
  </div>

  <!-- Advanced Form Example With Validation -->
  <div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="card">
        <div class="header align-center bg-lime">
          <h2 class="p-t-10 p-b-10">CONTRACT CREATION</h2>
          <small>Kindly fill up all the needed information in this form to create your contract.</small>
        </div>
        <div class="body">
          <form id="wizard_with_validation" method="POST">

            <!--Company Info-->
            <h3 class="align-center">Company Information</h3>
            <fieldset>
              <div class="form-group form-float col-md-12 col-sm-12 p-t-30">
                <h5 class="card-inside-title p-b-10">Company Details</h5>
                <div class="col-md-6 col-sm-6">
                  <div class="form-line">
                    <label class="form-label">Business Type</label>
                    <select class="form-control show-tick align-center form-control" name="name" required>
                      <option class="text-center">Fast Food</option>
                      <option class="text-center">Bread or Pastries</option>
                      <option class="text-center">Casual Dining</option>
                      <option class="text-center">Coffee or Tea and Snacks</option>
                    </select>
                  </div>
                  <div class="help-info">Required</div>
                </div>
                <div class="col-md-6 col-sm-6">
                  <div class="form-line">
                    <label class="form-label">Company Name</label>
                    <select class="form-control show-tick align-center form-control" name="name" required>
                      <option class="text-center">Jollibee</option>
                      <option class="text-center">McDo</option>
                      <option class="text-center">Chowking</option>
                    </select>
                  </div>
                  <div class="help-info">Required</div>
                </div>
              </div>

              <div class="form-group form-float col-md-12 col-sm-12 p-t-30">
                <h5 class="card-inside-title p-b-10">Contact Details</h5>
                <div class="col-md-4 col-sm-4">
                  <div class="form-line">
                    <input type="email" name="email" class="form-control align-center" required>
                    <label class="form-label">Email</label>
                  </div>
                  <div class="help-info">Optional</div>
                </div>
                <div class="col-md-4 col-sm-4">
                  <div class="form-line">
                    <input type="text" name="number" class="form-control align-center" required>
                    <label class="form-label">Mobile Number</label>
                  </div>
                  <div class="help-info">Optional</div>
                </div>
                <div class="col-md-4 col-sm-4">
                  <div class="form-line">
                    <input type="text" name="number" class="form-control align-center" required>
                    <label class="form-label">Telephone Number</label>
                  </div>
                  <div class="help-info">Required</div>
                </div>
              </div>

              <div class="form-group form-float col-md-12 col-sm-12 p-t-30">
                <h5 class="card-inside-title p-b-10">Company Address</h5>
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
            </fieldset>
            <!--Company Info-->

            <!--Representative Info-->
            <h3 class="align-center">Representative Information</h3>
            <fieldset>
              <div class="form-group form-float col-md-12 col-sm-12 p-t-30">
                <h5 class="card-inside-title p-b-10">Representative Name</h5>
                <div class="col-md-4 col-sm-4">
                  <div class="form-line">
                    <input type="text" class="form-control align-center" name="username" required>
                    <label class="form-label">First Name</label>
                  </div>
                  <div class="help-info">Required</div>
                </div>
                <div class="col-md-4 col-sm-4">
                  <div class="form-line">
                    <input type="" class="form-control align-center" name="middlename" id="password" required>
                    <label class="form-label">Middle Name</label>
                  </div>
                  <div class="help-info">Optional</div>
                </div>
                <div class="col-md-4 col-sm-4">
                  <div class="form-line">
                    <input type="" class="form-control align-center" name="lastname" required>
                    <label class="form-label">Last Name</label>
                  </div>
                  <div class="help-info">Required</div>
                </div>
              </div>

              <div class="form-group form-float col-md-12 col-sm-12">
               <div class="col-md-12 col-sm-12">
                 <div class="form-line">
                   <input type="" class="form-control align-center" name="position" required>
                   <label class="form-label">Position</label>
                 </div>
                 <div class="help-info">Required</div>
               </div>
             </div>

             <div class="form-group form-float col-md-12 col-sm-12 p-t-30">
              <h5 class="card-inside-title p-b-10">Representative Address</h5>
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
          </fieldset>
          <!--Representative Info-->

          <!--Unit Info-->
          <h3 class="align-center">Unit & Rates Information</h3>
          <fieldset>
            <div class="form-group form-float col-md-12 col-sm-12 p-t-30">
              <h5 class="card-inside-title p-b-10">Property Details</h5>
              <div class="col-md-6 col-sm-6">
                <div class="form-line">
                  <label class="form-label">Building Name</label>
                  <select class="form-control show-tick align-center">
                    <option class="text-center">Carolina Mall</option>
                    <option class="text-center">K Mall</option>
                    <option class="text-center">Menarco Tower</option>
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
              <h5 class="card-inside-title"></h5>
              <div class="col-md-6 col-sm-6">
                <div class="form-line">
                  <label class="form-label">Unit Number</label>
                  <select class="form-control show-tick align-center">
                    <option class="text-center">1</option>
                    <option class="text-center">2</option>
                    <option class="text-center">3</option>
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

            <div class="form-group form-float col-md-12 col-sm-12 p-t-20">
              <h5 class="card-inside-title p-b-10">Rates</h5>
              <div class="col-md-12 col-sm-12 col-lg-12">
                <div class="form-line">
                  <label class="form-label">Market Rate</label>
                  <select class="form-control show-tick align-center">
                    <option class="text-center">Quezon City</option>
                    <option class="text-center">Makati City</option>
                    <option class="text-center">Taguig City</option>
                  </select>
                </div>
                <div class="help-info">Required</div>
              </div>
            </div>

            <div class="form-group form-float col-md-12 col-sm-12 p-t-30">
              <h5 class="card-inside-title p-b-10">Period of Lease</h5>
              <div class="col-md-6 col-sm-6">
                <div class="form-line">
                  <input type="text" class="datepicker form-control align-center">
                  <label class="form-label">From</label>
                </div>
                <div class="help-info">Required</div>
              </div>
              <div class="col-md-6 col-sm-6">
                <div class="form-line">
                  <input type="text" class="datepicker form-control align-center">
                  <label class="form-label">To</label>
                </div>
                <div class="help-info">Required</div>
              </div>
            </div>
          </fieldset>
          <!--Unit Info-->

          <!--SUMMARY-->
          <h3 class="align-center">Review of Information</h3>
          <fieldset>
            <h3 class="align-center p-t-30 p-b-20">Company Information</h3>
            <div class="form-group form-float col-md-12 col-sm-12">
              <h5 class="card-inside-title">Company Address</h5>
              <div class="col-md-6 col-sm-6">
                <div class="form-line">
                  <label class="form-label">Business Type</label>
                  <select class="form-control show-tick align-center form-control" name="name" required>
                    <option class="text-center">Fast Food</option>
                    <option class="text-center">Bread or Pastries</option>
                    <option class="text-center">Casual Dining</option>
                    <option class="text-center">Coffee or Tea and Snacks</option>
                  </select>
                </div>
                <div class="help-info">Required</div>
              </div>
              <div class="col-md-6 col-sm-6">
                <div class="form-line">
                  <label class="form-label">Company Name</label>
                  <select class="form-control show-tick align-center form-control" name="name" required>
                    <option class="text-center">Jollibee</option>
                    <option class="text-center">McDo</option>
                    <option class="text-center">Chowking</option>
                  </select>
                </div>
                <div class="help-info">Required</div>
              </div>
            </div>

            <div class="form-group form-float col-md-12 col-sm-12">
              <h5 class="card-inside-title">Contact Details</h5>
              <div class="col-md-4 col-sm-4">
                <div class="form-line">
                  <input type="email" name="email" class="form-control align-center" required>
                  <label class="form-label">Email</label>
                </div>
                <div class="help-info">Optional</div>
              </div>
              <div class="col-md-4 col-sm-4">
                <div class="form-line">
                  <input type="text" name="number" class="form-control align-center" required>
                  <label class="form-label">Mobile Number</label>
                </div>
                <div class="help-info">Optional</div>
              </div>
              <div class="col-md-4 col-sm-4">
                <div class="form-line">
                  <input type="text" name="number" class="form-control align-center" required>
                  <label class="form-label">Telephone Number</label>
                </div>
                <div class="help-info">Required</div>
              </div>
            </div>

            <div class="form-group form-float col-md-12 col-sm-12">
              <h5 class="card-inside-title">Company Address</h5>
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

            <h3 class="align-center p-t-60 p-b-30">Representative Information</h3>
            <div class="form-group form-float col-md-12 col-sm-12">
              <h5 class="card-inside-title">Representative Name</h5>
              <div class="col-md-4 col-sm-4">
                <div class="form-line">
                  <input type="text" class="form-control align-center" name="username" required>
                  <label class="form-label">First Name</label>
                </div>
                <div class="help-info">Required</div>
              </div>
              <div class="col-md-4 col-sm-4">
                <div class="form-line">
                  <input type="" class="form-control align-center" name="middlename" id="password" required>
                  <label class="form-label">Middle Name</label>
                </div>
                <div class="help-info">Optional</div>
              </div>
              <div class="col-md-4 col-sm-4">
                <div class="form-line">
                  <input type="" class="form-control align-center" name="lastname" required>
                  <label class="form-label">Last Name</label>
                </div>
                <div class="help-info">Required</div>
              </div>
            </div>

            <div class="form-group form-float col-md-12 col-sm-12">
             <div class="col-md-12 col-sm-12">
               <div class="form-line">
                 <input type="" class="form-control align-center" name="position" required>
                 <label class="form-label">Position</label>
               </div>
               <div class="help-info">Required</div>
             </div>
           </div>

           <div class="form-group form-float col-md-12 col-sm-12">
            <h5 class="card-inside-title">Representative Address</h5>
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

          <h3 class="align-center m-t-60 p-b-30">Unit & Rates Information</h3>
          <div class="form-group form-float col-md-12 col-sm-12">
            <h5 class="card-inside-title">Property Details</h5>
            <div class="col-md-6 col-sm-6">
              <div class="form-line">
                <label class="form-label">Building Name</label>
                <select class="form-control show-tick align-center">
                  <option class="text-center">Carolina Mall</option>
                  <option class="text-center">K Mall</option>
                  <option class="text-center">Menarco Tower</option>
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
            <h5 class="card-inside-title"></h5>
            <div class="col-md-6 col-sm-6">
              <div class="form-line">
                <label class="form-label">Unit Number</label>
                <select class="form-control show-tick align-center">
                  <option class="text-center">1</option>
                  <option class="text-center">2</option>
                  <option class="text-center">3</option>
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

          <div class="form-group form-float col-md-12 col-sm-12">
            <h5 class="card-inside-title">Rates</h5>
            <div class="col-md-12 col-sm-12 col-lg-12">
              <div class="form-line">
                <label class="form-label">Market Rate</label>
                <select class="form-control show-tick align-center">
                  <option class="text-center">Quezon City</option>
                  <option class="text-center">Makati City</option>
                  <option class="text-center">Taguig City</option>
                </select>
              </div>
              <div class="help-info">Required</div>
            </div>
          </div>

          <div class="form-group form-float col-md-12 col-sm-12">
            <h5 class="card-inside-title">Period of Lease</h5>
            <div class="col-md-6 col-sm-6">
              <div class="form-line">
                <input type="text" class="datepicker form-control align-center">
                <label class="form-label">From</label>
              </div>
              <div class="help-info">Required</div>
            </div>
            <div class="col-md-6 col-sm-6">
              <div class="form-line">
                <input type="text" class="datepicker form-control align-center">
                <label class="form-label">To</label>
              </div>
              <div class="help-info">Required</div>
            </div>
          </div>
        </fieldset>
        <!--SUMMARY-->

        <h3 class="align-center">Terms & Conditions - Finish</h3>
        <fieldset>
          <h5 class="card-inside-title">Terms and Conditions</h5>
          <ol type="1">
            <li>USE OF THE LEASED PREMISES.</li>
            <li>PERIOD OF LEASE.</li>
            <li>RESERVATION FEE.</li>
            <li>NET MONTHLY RENT.</li>
            <li>ADVANCE RENT.</li>
            <li>SECURITY DEPOSIT.</li>
            <li>COMMON AREA CHARGES (CUSA).</li>
            <li>ESCALATION CLAUSE.</li>
            <li>UTILITY CHARGES AND APPLICATION.</li>
            <li>GREASE TRAP MAINTENANCE.</li>
            <li>FIT-OUT PERIOD, REQUIREMENTS AND CONTRACTOR’S ALL RISKS INSURANCE.</li>
            <li>REPAIRS, RENOVATION, ALTERATIONS AND OWNERSHIP OF IMPROVEMENTS.</li>
            <li>SIGNBOARDS RESTRICTIONS.</li>
            <li>DAMAGES TO THE LEASED PREMISES.</li>
            <li>NON-PAYMENT OF RENT.</li>
            <li>SUBLEASE OR ASSIGNMENT.</li>
            <li>PARKING AND OTHER JOINT AREAS.</li>
            <li>RETURN, OVER-STAY AND ABANDONMENT OF LEASED PREMISES.</li>
            <li>ACCESS TO THE LEASED PREMISES BY THE LESSOR.</li>
            <li>COMPLIANCE WITH LAWS AND REGULATIONS.</li>
            <li>INSURANCE, REAL ESTATE TAX AND BUSINESS PERMITS AND TAXES OF THE LEASED PREMISES.</li>
            <li>REMEDIAL MEASURE.</li>
            <li>SEPARABILITY CLAUSE.</li>
            <li>VENUE OF ACTION.</li>
          </ol>
          <input class="align-right" id="acceptTerms-2" name="acceptTerms" type="checkbox" required>
          <label for="acceptTerms-2">I agree with the Terms and Conditions.</label>
        </fieldset>
      </form>
    </div>
  </div>
</div>
</div>
<!-- #END# Advanced Form Example With Validation -->
</div>
@stop