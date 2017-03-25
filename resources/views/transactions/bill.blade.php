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
        <div class="header align-center">
          <h2 class="p-t-10 p-b-10">BILLING</h2>
          <small>Existing Contract Details</small>
        </div>
        <div class="body">
          <table class="table table-hover table-bordered table-striped table-condensed dataTable" id="dtbuilding">
            <thead>
              <tr>
                <th class="align-center col-md-2">Company</th>
                <th class="align-center col-md-3">Unit Details</th>
                <th class="align-center col-md-3">Bill Type</th>
                <th class="align-center col-md-2">Market Rate</th>
                <th class="align-center col-md-2">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="align-center">Jollibee</td>
                <td class="align-center">UNIT 2, 3F, Carolina Mall</td>
                <td class="align-center">New Contract</td>
                <td class="align-center">Quezon City</td>
                <td class="align-center">
                  <a href="/billingForm" class="btn bg-light-green btn-circle waves-effect waves-circle waves-float" data-toggle="tooltip" data-placement="top" title="View More">
                    <i class="mdi-action-visibility"></i>
                  </a>
                  <a href="/billingForm"><button type="button" class="btn bg-blue btn-circle waves-effect waves-circle waves-float" data-toggle="tooltip" data-placement="top" title="Show Bill">
                    <i class="mdi-editor-attach-money"></i>
                  </button></a>
                </td>
              </tr>
              <tr>
                <td class="align-center">McDo</td>
                <td class="align-center">UNIT 6, 1F, K Mall</td>
                <td class="align-center">Contract Extension</td>
                <td class="align-center">Taguig City</td>
                <td class="align-center">
                  <button type="button" class="btn bg-light-green btn-circle waves-effect waves-circle waves-float" data-toggle="tooltip" data-placement="top" title="View More">
                    <i class="mdi-action-visibility"></i>
                  </button>
                  <a href="/billingForm"><button type="button" class="btn bg-blue btn-circle waves-effect waves-circle waves-float" data-toggle="tooltip" data-placement="top" title="Show Bill">
                    <i class="mdi-editor-attach-money"></i>
                  </button></a>
                </td>
              </tr>
              <tr>
                <td class="align-center">Chowking</td>
                <td class="align-center">UNIT 24, 7F, Menarco Tower</td>
                <td class="align-center">Contract Renewal</td>
                <td class="align-center">Makati City</td>
                <td class="align-center">
                  <button type="button" class="btn bg-light-green btn-circle waves-effect waves-circle waves-float" data-toggle="tooltip" data-placement="top" title="View More">
                    <i class="mdi-action-visibility"></i>
                  </button>
                  <a href="/billingForm"><button type="button" class="btn bg-blue btn-circle waves-effect waves-circle waves-float" data-toggle="tooltip" data-placement="top" title="Show Bill">
                    <i class="mdi-editor-attach-money"></i>
                  </button></a>
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

