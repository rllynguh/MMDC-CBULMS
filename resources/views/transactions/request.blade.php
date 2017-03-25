@extends("layouts.myLayout")
@section("content")
<div class="container-fluid">
  <div class="block-header">
    <small>
      DASHBOARD / TRANSACTIONS / REQUEST APPROVAL / REGISTRATION REQUEST APPROVAL
    </small>
  </div>

  <!-- Advanced Validation -->
  <div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="card">
        <div class="header align-center">
          <h2 class="p-t-10 p-b-10">REGISTRATION REQUEST APPROVAL</h2>
          <small>Approve or Decline Request.</small>
        </div>
        <div class="body">
          <table class="table table-hover table-bordered table-striped table-condensed dataTable" id="dtbuilding">
            <thead>
              <tr>
                <th class="align-center col-md-2">Client Name</th>
                <th class="align-center col-md-2">Business Name</th>
                <th class="align-center col-md-3">Desired Property</th>
                <th class="align-center col-md-3">Email Address</th>
                <th class="align-center col-md-2">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="align-center">Merly Reyes</td>
                <td class="align-center">Rodik's Resto</td>
                <td class="align-center">UNIT 23, Floor 3, Carolina Mall</td>
                <td class="align-center">merlyR@gmail.com</td>
                <td class="align-center">
                  <a href="#" class="btn bg-light-green btn-circle waves-effect waves-circle waves-float" data-toggle="tooltip" data-placement="top" title="View More">
                    <i class="mdi-action-visibility"></i>
                  </a>
                  <button type="button" class="btn bg-blue btn-circle waves-effect waves-circle waves-float" data-toggle="tooltip" data-placement="top" title="Approve Request">
                    <i class="mdi-action-thumb-up"></i>
                  </button>
                  <button type="button" class="btn bg-red btn-circle waves-effect waves-circle waves-float" data-toggle="tooltip" data-placement="top" title="Decline Request">
                    <i class="mdi-action-thumb-down"></i>
                  </button>
                </td>
              </tr>
              <tr>
                <td class="align-center">Jose Santiago</td>
                <td class="align-center">Ace Hardware</td>
                <td class="align-center">UNIT 45, Floor 6, K Mall</td>
                <td class="align-center">JS@gmail.com</td>
                <td class="align-center">
                  <a href="" class="btn bg-light-green btn-circle waves-effect waves-circle waves-float" data-toggle="tooltip" data-placement="top" title="View More">
                    <i class="mdi-action-visibility"></i>
                  </a>
                  <button type="button" class="btn bg-blue btn-circle waves-effect waves-circle waves-float" data-toggle="tooltip" data-placement="top" title="Approve Request">
                    <i class="mdi-action-thumb-up"></i>
                  </button>
                  <button type="button" class="btn bg-red btn-circle waves-effect waves-circle waves-float" data-toggle="tooltip" data-placement="top" title="Decline Request">
                    <i class="mdi-action-thumb-down"></i>
                  </button>
                </td>
              </tr>
              <tr>
                <td class="align-center">Chris Reynald</td>
                <td class="align-center">National Bookstore</td>
                <td class="align-center">Unit 10, Floor 1, Menarco Tower</td>
                <td class="align-center">JS@gmail.com</td>
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