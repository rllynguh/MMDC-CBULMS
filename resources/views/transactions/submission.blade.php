@extends("layouts.myLayout")
@section("content")
<div class="container-fluid">
  <div class="block-header">
    <small>
      DASHBOARD / TRANSACTIONS / SUBMISSION OF REQUIREMENTS
    </small>
  </div>

  <!-- Advanced Validation -->
  <div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="card">
        <div class="header align-center">
          <h2 class="p-t-10 p-b-10">SUBMISSION OF REQUIREMENTS</h2>
          <small>Progress in Submission of Requirements.</small>
        </div>
        <div class="body">
          <table class="table table-hover table-bordered table-striped table-condensed dataTable" id="dtbuilding">
            <thead>
              <tr>
                <th class="align-center col-md-2">Lessee</th>
                <th class="align-center col-md-2">Business Type</th>
                <th class="align-center col-md-2">Email</th>
                <th class="align-center col-md-4">Progress</th>
                <th class="align-center col-md-3">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="align-center">Merly Reyes</td>
                <td class="align-center">Fast Food</td>
                <td class="align-center">MR@yahoo.com</td>
                <td class="align-center">
                  <div class="progress">
                    <div class="progress-bar bg-lime active progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"
                    style="width: 70%">
                    BIR Certificate
                  </div>
                </div>
              </td>
              <td class="align-center">
                <button type="button" class="btn bg-light-green btn-circle waves-effect waves-circle waves-float" data-toggle="tooltip" data-placement="top" title="View More">
                  <i class="mdi-action-visibility"></i>
                </button>
                <button type="button" class="btn bg-blue btn-circle waves-effect waves-circle waves-float" data-toggle="tooltip" data-placement="top" title="Accept Requirement">
                  <i class="mdi-navigation-check"></i>
                </button>
                <button type="button" class="btn bg-red btn-circle waves-effect waves-circle waves-float" data-toggle="tooltip" data-placement="top" title="Reject Requirement">
                  <i class="mdi-navigation-close"></i>
                </button>
              </td>
            </tr>
            <tr>
              <td class="align-center">Jose Santiago</td>
              <td class="align-center">Hardware</td>
              <td class="align-center">JS@gmail.com</td>
              <td class="align-center">
                <div class="progress">
                  <div class="progress-bar bg-lime active progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"
                  style="width: 50%">
                  DTI & BN
                </div>
              </div>
            </td>
            <td class="align-center">
              <button type="button" class="btn bg-light-green btn-circle waves-effect waves-circle waves-float" data-toggle="tooltip" data-placement="top" title="View More">
                <i class="mdi-action-visibility"></i>
              </button>
              <button type="button" class="btn bg-blue btn-circle waves-effect waves-circle waves-float" data-toggle="tooltip" data-placement="top" title="Accept Requirement">
                <i class="mdi-navigation-check"></i>
              </button>
              <button type="button" class="btn bg-red btn-circle waves-effect waves-circle waves-float" data-toggle="tooltip" data-placement="top" title="Reject Requirement">
                <i class="mdi-navigation-close"></i>
              </button>
            </td>
          </tr>
          <tr>
            <td class="align-center">Chris Reynald</td>
            <td class="align-center">Bookstore</td>
            <td class="align-center">chris@gmail.com</td>
            <td class="align-center">
              <div class="progress">
                <div class="progress-bar bg-lime active progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"
                style="width: 90%">
                Business Permit
              </div>
            </td>
            <td class="align-center">
              <button type="button" class="btn bg-light-green btn-circle waves-effect waves-circle waves-float" data-toggle="tooltip" data-placement="top" title="View More">
                <i class="mdi-action-visibility"></i>
              </button>
              <button type="button" class="btn bg-blue btn-circle waves-effect waves-circle waves-float" data-toggle="tooltip" data-placement="top" title="Accept Requirement">
                <i class="mdi-navigation-check"></i>
              </button>
              <button type="button" class="btn bg-red btn-circle waves-effect waves-circle waves-float" data-toggle="tooltip" data-placement="top" title="Reject Requirement">
                <i class="mdi-navigation-close"></i>
              </button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
</div>
<!-- #END# Advanced Validation -->
</div>
@stop