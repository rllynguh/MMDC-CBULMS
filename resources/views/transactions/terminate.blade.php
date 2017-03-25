@extends("layouts.myLayout")
@section("content")
<div class="container-fluid">
  <div class="block-header">
    <small>
      DASHBOARD / TRANSACTIONS / CONTRACT TERMINATION
    </small>
  </div>

  <!-- Advanced Validation -->
  <div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="card">
        <div class="header align-center">
          <h2 class="p-t-10 p-b-10">CONTRACT TERMINATION</h2>
          <small>Existing Contracts Details</small>
        </div>
        <div class="body">
          <table class="table table-hover table-bordered table-striped table-condensed dataTable" id="dtbuilding">
            <thead>
              <tr>
                <th class="align-center col-md-2">Company</th>
                <th class="align-center col-md-3">Unit Details</th>
                <th class="align-center col-md-3">Violation</th>
                <th class="align-center col-md-2">Expiration Date</th>
                <th class="align-center col-md-2">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="align-center">Jollibee</td>
                <td class="align-center">UNIT 2, 3F, Carolina Mall</td>
                <td class="align-center">Grease Trap Maintenance Violation</td>
                <td class="align-center">4/23/2017</td>
                <td class="align-center">
                  <button type="button" class="btn bg-light-green btn-circle waves-effect waves-circle waves-float" data-toggle="tooltip" data-placement="top" title="View More">
                    <i class="mdi-action-visibility"></i>
                  </button>
                  <button type="button" class="btn bg-red btn-circle waves-effect waves-circle waves-float" data-toggle="tooltip" data-placement="top" title="Terminate Contract">
                    <i class="mdi-action-assignment-late"></i>
                  </button>
                </td>
              </tr>
              <tr>
                <td class="align-center">McDo</td>
                <td class="align-center">UNIT 6, 1F, K Mall</td>
                <td class="align-center">Non-Payment of Rent</td>
                <td class="align-center">6/1/2017</td>
                <td class="align-center">
                  <button type="button" class="btn bg-light-green btn-circle waves-effect waves-circle waves-float" data-toggle="tooltip" data-placement="top" title="View More">
                    <i class="mdi-action-visibility"></i>
                  </button>
                  <button type="button" class="btn bg-red btn-circle waves-effect waves-circle waves-float" data-toggle="tooltip" data-placement="top" title="Terminate Contract">
                    <i class="mdi-action-assignment-late"></i>
                  </button>
                </td>
              </tr>
              <tr>
                <td class="align-center">Chowking</td>
                <td class="align-center">UNIT 24, 7F, Menarco Tower</td>
                <td class="align-center">Sublease or Assignment</td>
                <td class="align-center">4/15/2017</td>
                <td class="align-center">
                  <button type="button" class="btn bg-light-green btn-circle waves-effect waves-circle waves-float" data-toggle="tooltip" data-placement="top" title="View More">
                    <i class="mdi-action-visibility"></i>
                  </button>
                  <button type="button" class="btn bg-red btn-circle waves-effect waves-circle waves-float" data-toggle="tooltip" data-placement="top" title="Terminate Contract">
                    <i class="mdi-action-assignment-late"></i>
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