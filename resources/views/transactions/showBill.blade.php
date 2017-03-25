@extends("layouts.myLayout")
@section("content")
<div class="container-fluid">
  <div class="block-header">
    <small>
      DASHBOARD / TRANSACTIONS / BILLING AND NOTICE
    </small>
  </div>

  <!-- Advanced Validation -->
  <div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="card">
        <div class="header bg-lime align-center">
          <h2 class="p-t-10 p-b-10">BILL AND NOTICE</h2>
          <small>The lessee shall pay the lessor of the amount based on the contract.</small>
        </div>
        <div class="body">
          <form id="form_advanced_validation" method="POST">
            <div class="form-group form-float col-md-12 col-sm-12 p-t-30">
              <h5 class="card-inside-title p-b-10">Lessee's Information</h5>
              <div class="col-md-6 col-sm-6">
                <div class="form-line focused">
                  <input value="Venmar C. Vicente" type="text" class="form-control align-center" name="lessee" readonly="" required>
                  <label class="form-label">Name</label>
                </div>
              </div>
              <div class="col-md-6 col-sm-6">
                <div class="form-line focused">
                  <input value="Jollibee" type="text" class="form-control align-center" name="company" readonly="" required>
                  <label class="form-label">Company Name</label>
                </div>
              </div>
            </div>

            <div class="form-group form-float col-md-12 col-sm-12 p-t-10">
              <h5 class="card-inside-title p-b-10">Market Rate & Unit</h5>
              <div class="col-md-6 col-sm-6">
                <div class="form-line focused">
                  <input value="Makati City" type="text" class="form-control align-center" name="lessee" readonly="" required>
                  <label class="form-label">City</label>
                </div>
              </div>
              <div class="col-md-6 col-sm-6">
                <div class="form-line focused">
                  <input value="UNIT 23, 7th Floor, Menarco Tower" type="text" class="form-control align-center" name="lessee" readonly="" required>
                  <label class="form-label">Unit</label>
                </div>
              </div>
            </div>

            <div class="form-group form-float col-md-12 col-sm-12 p-t-10">
              <h5 class="card-inside-title p-b-10">Rate & Payment Due</h5>
              <div class="col-md-6 col-sm-6">
                <div class="form-line focused">
                  <input value="5000 php/sqm" type="text" class="form-control align-center" name="lessee" readonly="" required>
                  <label class="form-label">Rate</label>
                </div>
              </div>
              <div class="col-md-6 col-sm-6">
                <div class="form-line focused">
                  <input value="April 15, 2017" type="text" class="form-control align-center" name="lessee" readonly="" required>
                  <label class="form-label">Due Date</label>
                </div>
              </div>
            </div>

            <div class="form-group form-float col-md-12 col-sm-12 p-t-10">
              <h5 class="card-inside-title p-b-10">Period of Lease</h5>
              <div class="col-md-6 col-sm-6">
                <div class="form-line focused">
                  <input value="March 15, 2017" type="text" class="form-control align-center" name="lessee" readonly="" required>
                  <label class="form-label">From</label>
                </div>
              </div>
              <div class="col-md-6 col-sm-6">
                <div class="form-line focused">
                  <input value="April 15, 2018" type="text" class="form-control align-center" name="lessee" readonly="" required>
                  <label class="form-label">To</label>
                </div>
              </div>
            </div>

            <table class="table table-hover table-bordered table-striped" id="dtbuilding">

              <thead>
                <tr>
                  <th class="align-center col-md-3">Rent Period</th>
                  <th class="align-center col-md-3">Monthly Rent</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="align-center">Rate/sqm/month</td>
                  <td class="align-center"> 749</td>
                </tr>

                <tr>
                  <td class="align-center">Base Rent</td>
                  <td class="align-center"> 19,054.56 </td>
                </tr>

                <tr>
                  <td class="align-center">Add: 12% VAT</td>
                  <td class="align-center">21341.04</td>
                </tr>

                <tr>
                  <td class="align-center">Sub-Total</td>
                  <td class="align-center">41144.60</td>
                </tr>

                <tr>
                  <td class="align-center">Less: 5% EWT</td>
                  <td class="align-center">39087.37</td>
                </tr>

                <tr>
                  <td class="align-center">Net Rent</td>
                  <td class="align-center">80231.97</td>
                </tr>
              </tbody>

            </table>


            <div class="align-center">
              <button class="btn btn-primary btn-lg waves-effect align-center" type="submit">SEND NOTICE</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- #END# Advanced Validation -->
</div>
@stop