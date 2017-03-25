@extends("layouts.myLayout")
@section("content")
<div class="container-fluid">
  <div class="block-header">
    <small>
      DASHBOARD / TRANSACTIONS / REQUEST APPROVAL / MOVE IN & OUT REQUEST APPROVAL
    </small>
  </div>

  <!-- Advanced Validation -->
  <div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="card">
        <div class="header align-center">
          <h2 class="p-t-10 p-b-10">MOVE IN / OUT REQUEST APPROVAL</h2>
          <small>Approve or Decline Request.</small>
        </div>
        <div class="body">
          <table class="table table-hover table-bordered table-striped table-condensed dataTable" id="dtbuilding">
            <thead>
              <tr>
                <th class="align-center col-md-2">Request Type</th>
                <th class="align-center col-md-2">Lessee</th>
                <th class="align-center col-md-4">Unit Details</th>
                <th class="align-center col-md-1">Date</th>
                <th class="align-center col-md-3">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="align-center">Move In</td>
                <td class="align-center">Rodik's Resto</td>
                <td class="align-center">UNIT 23, Floor 3, Carolina Mall</td>
                <td class="align-center">3/30/17</td>
                <td class="align-center">
                  <button type="button" class="btn bg-light-green btn-circle waves-effect waves-circle waves-float" data-toggle="tooltip" data-placement="top" title="View More">
                    <i class="mdi-action-visibility"></i>
                  </button>
                  <button type="button" class="btn bg-blue btn-circle waves-effect waves-circle waves-float" data-toggle="tooltip" data-placement="top" title="Approve Request">
                    <i class="mdi-action-thumb-up"></i>
                  </button>
                  <button type="button" class="btn bg-red btn-circle waves-effect waves-circle waves-float" data-toggle="tooltip" data-placement="top" title="Decline Request">
                    <i class="mdi-action-thumb-down"></i>
                  </button>
                </td>
              </tr>
              <tr>
                <td class="align-center">Move Out</td>
                <td class="align-center">Ace Hardware</td>
                <td class="align-center">UNIT 45, Floor 6, K Mall</td>
                <td class="align-center">4/20/17</td>
                <td class="align-center">
                  <button type="button" class="btn bg-light-green btn-circle waves-effect waves-circle waves-float" data-toggle="tooltip" data-placement="top" title="View More">
                    <i class="mdi-action-visibility"></i>
                  </button>
                  <button type="button" class="btn bg-blue btn-circle waves-effect waves-circle waves-float" data-toggle="tooltip" data-placement="top" title="Approve Request">
                    <i class="mdi-action-thumb-up"></i>
                  </button>
                  <button type="button" class="btn bg-red btn-circle waves-effect waves-circle waves-float" data-toggle="tooltip" data-placement="top" title="Decline Request">
                    <i class="mdi-action-thumb-down"></i>
                  </button>
                </td>
              </tr>
              <tr>
                <td class="align-center">Move In</td>
                <td class="align-center">National Books Store</td>
                <td class="align-center">Unit 10, Floor 1, Menarco Tower</td>
                <td class="align-center">4/2/17</td>
                <td class="align-center">
                  <button type="button" class="btn bg-light-green btn-circle waves-effect waves-circle waves-float" data-toggle="tooltip" data-placement="top" title="View More">
                    <i class="mdi-action-visibility"></i>
                  </button>
                  <button type="button" class="btn bg-blue btn-circle waves-effect waves-circle waves-float" data-toggle="tooltip" data-placement="top" title="Approve Request">
                    <i class="mdi-action-thumb-up"></i>
                  </button>
                  <button type="button" class="btn bg-red btn-circle waves-effect waves-circle waves-float" data-toggle="tooltip" data-placement="top" title="Decline Request">
                    <i class="mdi-action-thumb-down"></i>
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