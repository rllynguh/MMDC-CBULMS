@extends("layouts.myLayout")
@section("content")
<div class="container-fluid">
  <div class="block-header">
    <small>
      DASHBOARD / TRANSACTIONS / CONTRACT EXTENSION
    </small>
  </div>

  <!-- Advanced Form Example With Validation -->
  <div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="card">
        <div class="header align-center bg-lime">
          <h2 class="p-t-10 p-b-10">CONTRACT EXTENSION</h2>
          <small>Kindly fill up all the needed information in this form to extend your contract.</small>
        </div>
        <div class="body">
          <form id="wizard_with_validation" method="POST">

            <!--Company Info-->
            <h3 class="align-center">Company Information</h3>
            <fieldset>
              <div class="form-group form-float col-md-12 col-sm-12 p-t-30">
                <h5 class="card-inside-title p-b-10">Company Details</h5>
                <div class="col-md-6 col-sm-6">
                  <div class="form-line focused">
                    <label class="form-label">Business Type</label>
                    <select class="form-control show-tick align-center form-control" name="name" required disabled>
                      <option class="text-center">Fast Food</option>
                      <option class="text-center">Bread or Pastries</option>
                      <option class="text-center">Casual Dining</option>
                      <option class="text-center">Coffee or Tea and Snacks</option>
                    </select>
                  </div>
                  <div class="help-info">Required</div>
                </div>
                <div class="col-md-6 col-sm-6">
                  <div class="form-line focused">
                    <label class="form-label">Company Name</label>
                    <select class="form-control show-tick align-center form-control" name="name" required disabled>
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
                  <div class="form-line focused">
                    <input type="email" name="email" class="form-control align-center" value="jabiph@gmail.com" required>
                    <label class="form-label">Email</label>
                  </div>
                  <div class="help-info">Optional</div>
                </div>
                <div class="col-md-4 col-sm-4">
                  <div class="form-line focused">
                    <input type="text" name="number" class="form-control align-center" value="09102449544" required>
                    <label class="form-label">Mobile Number</label>
                  </div>
                  <div class="help-info">Optional</div>
                </div>
                <div class="col-md-4 col-sm-4">
                  <div class="form-line focused">
                    <input type="text" name="number" class="form-control align-center" value="9887931" required>
                    <label class="form-label">Telephone Number</label>
                  </div>
                  <div class="help-info">Required</div>
                </div>
              </div>

              <div class="form-group form-float col-md-12 col-sm-12 p-t-30">
                <h5 class="card-inside-title p-b-10">Company Address</h5>
                <div class="col-md-4 col-sm-4">
                  <div class="form-line focused">
                    <input type="text" class="form-control align-center" name="minmaxlength" maxlength="50" minlength="1" value="23" required>
                    <label class="form-label">Address No.</label>
                  </div>
                  <div class="help-info">Required</div>
                </div>
                <div class="col-md-4 col-sm-4">
                  <div class="form-line focused">
                    <input type="text" class="form-control align-center" name="minmaxlength" maxlength="50" minlength="1" value="Mabuhay" required>
                    <label class="form-label">Street</label>
                  </div>
                  <div class="help-info">Required</div>
                </div>
                <div class="col-md-4 col-sm-4">
                  <div class="form-line focused">
                    <input type="text" class="form-control align-center" name="minmaxlength" maxlength="50" minlength="1" value="Concepcion" required>
                    <label class="form-label">Town/Barangay</label>
                  </div>
                  <div class="help-info">Required</div>
                </div>
              </div>

              <div class="form-group form-float col-md-12 col-sm-12">
                <div class="col-md-6 col-sm-6">
                  <div class="form-line focused">
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
                  <div class="form-line focused">
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
                <div class="form-line focused">
                  <label class="form-label">Building Name</label>
                  <select class="form-control show-tick align-center" disabled>
                    <option class="text-center">Carolina Mall</option>
                    <option class="text-center">K Mall</option>
                    <option class="text-center">Menarco Tower</option>
                  </select>
                </div>
                <div class="help-info">Required</div>
              </div>
              <div class="col-md-6 col-sm-6">
                <div class="form-line focused">
                  <label class="form-label">Floor</label>
                  <select class="form-control show-tick align-center" disabled>
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
                <div class="form-line focused">
                  <label class="form-label">Unit Number</label>
                  <select class="form-control show-tick align-center" disabled>
                    <option class="text-center">1</option>
                    <option class="text-center">2</option>
                    <option class="text-center">3</option>
                  </select>
                </div>
                <div class="help-info">Required</div>
              </div>
              <div class="col-md-6 col-sm-6">
                <div class="form-line focused">
                  <input type="text" class="form-control align-center" name="minmaxlength" maxlength="50" minlength="1" value="Casual Dining" disabled required>
                  <label class="form-label">Purpose</label>
                </div>
                <div class="help-info">Required</div>
              </div>
            </div>

            <div class="form-group form-float col-md-12 col-sm-12 p-t-20">
              <h5 class="card-inside-title p-b-10">Rates</h5>
              <div class="col-md-12 col-sm-12 col-lg-12">
                <div class="form-line focused">
                  <label class="form-label">Market Rate</label>
                  <select class="form-control show-tick align-center" disabled>
                    <option class="text-center">Quezon City</option>
                    <option class="text-center">Makati City</option>
                    <option class="text-center">Taguig City</option>
                  </select>
                </div>
                <div class="help-info">Required</div>
              </div>
            </div>

            <div class="form-group form-float col-md-12 col-sm-12 p-t-20">
              <h5 class="card-inside-title p-b-10">Extension of Lease Period</h5>
              <div class="col-md-12 col-sm-12 col-lg-12">
                <div class="form-line">
                  <label class="form-label">Number of Months</label>
                  <select class="form-control show-tick align-center">
                    <option class="text-center">1</option>
                    <option class="text-center">2</option>
                    <option class="text-center">3</option>
                    <option class="text-center">4</option>
                    <option class="text-center">5</option>
                    <option class="text-center">6</option>
                  </select>
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
                <div class="form-line focused">
                  <label class="form-label">Business Type</label>
                  <select class="form-control show-tick align-center form-control" name="name" required disabled>
                    <option class="text-center">Fast Food</option>
                    <option class="text-center">Bread or Pastries</option>
                    <option class="text-center">Casual Dining</option>
                    <option class="text-center">Coffee or Tea and Snacks</option>
                  </select>
                </div>
                <div class="help-info">Required</div>
              </div>
              <div class="col-md-6 col-sm-6">
                <div class="form-line focused">
                  <label class="form-label">Company Name</label>
                  <select class="form-control show-tick align-center form-control" name="name" disabled required>
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
                <div class="form-line focused">
                  <input value="jabiph@gmail.com" type="email" name="email" class="form-control align-center" required disabled>
                  <label class="form-label">Email</label>
                </div>
                <div class="help-info">Optional</div>
              </div>
              <div class="col-md-4 col-sm-4">
                <div class="form-line focused">
                  <input value="09102449544" type="text" name="number" class="form-control align-center" disabled required>
                  <label class="form-label">Mobile Number</label>
                </div>
                <div class="help-info">Optional</div>
              </div>
              <div class="col-md-4 col-sm-4">
                <div class="form-line focused">
                  <input value="9887931" type="text" name="number" class="form-control align-center" disabled required>
                  <label class="form-label">Telephone Number</label>
                </div>
                <div class="help-info">Required</div>
              </div>
            </div>

            <div class="form-group form-float col-md-12 col-sm-12">
              <h5 class="card-inside-title">Company Address</h5>
              <div class="col-md-4 col-sm-4">
                <div class="form-line focused">
                  <input value="23" type="text" class="form-control align-center" name="minmaxlength" maxlength="50" minlength="1" disabled required>
                  <label class="form-label">Address No.</label>
                </div>
                <div class="help-info">Required</div>
              </div>
              <div class="col-md-4 col-sm-4">
                <div class="form-line focused">
                  <input value="Mabuhay" type="text" class="form-control align-center" name="minmaxlength" maxlength="50" minlength="1" required disabled>
                  <label class="form-label">Street</label>
                </div>
                <div class="help-info">Required</div>
              </div>
              <div class="col-md-4 col-sm-4">
                <div class="form-line focused">
                  <input value="Concepcion" type="text" class="form-control align-center" name="minmaxlength" maxlength="50" minlength="1" disabled required>
                  <label class="form-label">Town/Barangay</label>
                </div>
                <div class="help-info">Required</div>
              </div>
            </div>

            <div class="form-group form-float col-md-12 col-sm-12">
              <div class="col-md-6 col-sm-6">
                <div class="form-line focused">
                  <label class="form-label">City</label>
                  <select class="form-control show-tick align-center" disabled>
                    <option class="text-center">Quezon City</option>
                    <option class="text-center">Marikina City</option>
                    <option class="text-center">Makati City</option>
                  </select>
                </div>
                <div class="help-info">Required</div>
              </div>
              <div class="col-md-6 col-sm-6">
                <div class="form-line focused">
                  <label class="form-label">Province</label>
                  <select class="form-control show-tick align-center" disabled>
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
                <div class="form-line focused">
                  <input value="Venmar" type="text" class="form-control align-center" name="username" required disabled>
                  <label class="form-label">First Name</label>
                </div>
                <div class="help-info">Required</div>
              </div>
              <div class="col-md-4 col-sm-4">
                <div class="form-line focused">
                  <input value="Cuasay" type="text" class="form-control align-center" name="middlename" id="password" disabled required>
                  <label class="form-label">Middle Name</label>
                </div>
                <div class="help-info">Optional</div>
              </div>
              <div class="col-md-4 col-sm-4">
                <div class="form-line focused">
                  <input value="Vicente" type="text" class="form-control align-center" name="lastname" disabled required>
                  <label class="form-label">Last Name</label>
                </div>
                <div class="help-info">Required</div>
              </div>
            </div>

            <div class="form-group form-float col-md-12 col-sm-12">
             <div class="col-md-12 col-sm-12">
               <div class="form-line focused">
                 <input value="Secretary" type="text" class="form-control align-center" name="position" disabled required>
                 <label class="form-label">Position</label>
               </div>
               <div class="help-info">Required</div>
             </div>
           </div>

           <div class="form-group form-float col-md-12 col-sm-12">
            <h5 class="card-inside-title">Representative Address</h5>
            <div class="col-md-4 col-sm-4">
              <div class="form-line focused">
                <input value="blk 2 l3" type="text" class="form-control align-center" name="minmaxlength" maxlength="50" minlength="1" disabled required>
                <label class="form-label">Address No.</label>
              </div>
              <div class="help-info">Required</div>
            </div>
            <div class="col-md-4 col-sm-4">
              <div class="form-line focused">
                <input value="Galaxy" type="text" class="form-control align-center" name="minmaxlength" maxlength="50" minlength="1" disabled required>
                <label class="form-label">Street</label>
              </div>
              <div class="help-info">Required</div>
            </div>
            <div class="col-md-4 col-sm-4">
              <div class="form-line focused">
                <input value="Ampid 1" type="text" class="form-control align-center" name="minmaxlength" maxlength="50" minlength="1" disabled required>
                <label class="form-label">Town/Barangay</label>
              </div>
              <div class="help-info">Required</div>
            </div>
          </div>

          <div class="form-group form-float col-md-12 col-sm-12">
            <div class="col-md-6 col-sm-6">
              <div class="form-line focused">
                <label class="form-label">City</label>
                <select class="form-control show-tick align-center" disabled>
                  <option class="text-center">Quezon City</option>
                  <option class="text-center">Marikina City</option>
                  <option class="text-center">Makati City</option>
                </select>
              </div>
              <div class="help-info">Required</div>
            </div>
            <div class="col-md-6 col-sm-6">
              <div class="form-line focused">
                <label class="form-label">Province</label>
                <select class="form-control show-tick align-center" disabled>
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
              <div class="form-line focused">
                <label class="form-label">Building Name</label>
                <select class="form-control show-tick align-center" disabled>
                  <option class="text-center">Carolina Mall</option>
                  <option class="text-center">K Mall</option>
                  <option class="text-center">Menarco Tower</option>
                </select>
              </div>
              <div class="help-info">Required</div>
            </div>
            <div class="col-md-6 col-sm-6">
              <div class="form-line focused">
                <label class="form-label">Floor</label>
                <select class="form-control show-tick align-center" disabled>
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
              <div class="form-line focused">
                <label class="form-label">Unit Number</label>
                <select class="form-control show-tick align-center" disabled>
                  <option class="text-center">1</option>
                  <option class="text-center">2</option>
                  <option class="text-center">3</option>
                </select>
              </div>
              <div class="help-info">Required</div>
            </div>
            <div class="col-md-6 col-sm-6">
              <div class="form-line focused">
                <input value="Casual Dining" type="text" class="form-control align-center" name="minmaxlength" maxlength="50" minlength="1" disabled required>
                <label class="form-label">Purpose</label>
              </div>
              <div class="help-info">Required</div>
            </div>
          </div>

          <div class="form-group form-float col-md-12 col-sm-12 p-t-20">
            <h5 class="card-inside-title p-b-10">Extension of Lease Period</h5>
            <div class="col-md-12 col-sm-12 col-lg-12">
              <div class="form-line focused">
                <label class="form-label">Number of Months</label>
                <select class="form-control show-tick align-center" disabled>
                  <option class="text-center">1</option>
                  <option class="text-center">2</option>
                  <option class="text-center">3</option>
                  <option class="text-center">4</option>
                  <option class="text-center">5</option>
                  <option class="text-center">6</option>
                </select>
              </div>
              <div class="help-info">Required</div>
            </div>
          </div>

        </fieldset>
        <!--SUMMARY-->

        <h3 class="align-center">Terms & Conditions - Finish</h3>
        <fieldset>
          <h5 class="card-inside-title">Terms and Conditions</h5>
          <blockquote cite="http://">
            FUTURE LEASE RENEWAL- The LESSEE may request to renew the lease for an additional period upon expiration of this lease term upon mutually agreeable terms and conditions. The LESSEE must give the LESSOR written notice at least Sixty (60) Days prior the expiration date of the lease term. The LESSOR shall inform the LESSEE of the acceptance or non-acceptance of the request for extension, in writing, Ten (10) Days after receipt of request. 
          </blockquote>
          <input class="align-center" id="acceptTerms-2" name="acceptTerms" type="checkbox" required>
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