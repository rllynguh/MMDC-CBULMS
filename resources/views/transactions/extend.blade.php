@extends("layouts.myLayout")
@section("content")
<div class="container-fluid">
  <div class="block-header">
    <small>
      DASHBOARD / TRANSACTIONS / CONTRACT EXTENSION & RENEWAL
    </small>
  </div>

  <!-- Advanced Validation -->
  <div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="card">
        <div class="header align-center">
          <h2 class="p-t-10 p-b-10">CONTRACT EXTENSION & RENEWAL</h2>
          <small>Existing Contracts Details</small>
        </div>
        <div class="body">
          <table class="table table-hover table-bordered table-striped table-condensed dataTable" id="dtbuilding">
            <thead>
              <tr>
                <th class="align-center col-md-2">Company</th>
                <th class="align-center col-md-3">Unit Details</th>
                <th class="align-center col-md-2">Expiration Date</th>>
                <th class="align-center col-md-3">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="align-center">Jollibee</td>
                <td class="align-center">UNIT 2, 3F, Carolina Mall</td>
                <td class="align-center">4/23/2017</td>
                <td class="align-center">
                  <button type="button" class="btn bg-light-green btn-circle waves-effect waves-circle waves-float" data-toggle="tooltip" data-placement="top" title="View More">
                    <i class="mdi-action-visibility"></i>
                  </button>
                  <a href="/extension"><button type="button"  class="btn bg-blue btn-circle waves-effect waves-circle waves-float" data-toggle="tooltip" data-placement="top" title="Extend Contract">
                    <i class="mdi-action-launch"></i>
                  </button></a>
                  <a href="/renewalForm"><button type="button" class="btn bg-teal btn-circle waves-effect waves-circle waves-float" data-toggle="tooltip" data-placement="top" title="Renew Contract">
                    <i class="mdi-action-autorenew"></i>
                  </button></a>
                  <button type="button" class="btn bg-red btn-circle waves-effect waves-circle waves-float" data-toggle="tooltip" data-placement="top" title="Notify Lessee">
                    <i class="mdi-social-notifications-on"></i>
                  </button>
                </td>
              </tr>
              <tr>
                <td class="align-center">McDo</td>
                <td class="align-center">UNIT 6, 1F, K Mall</td>
                <td class="align-center">6/1/2017</td>
                <td class="align-center">
                  <button type="button" class="btn bg-light-green btn-circle waves-effect waves-circle waves-float" data-toggle="tooltip" data-placement="top" title="View More">
                    <i class="mdi-action-visibility"></i>
                  </button>
                  <a href="/extension"><button type="button" class="btn bg-blue btn-circle waves-effect waves-circle waves-float" data-toggle="tooltip" data-placement="top" title="Extend Contract">
                    <i class="mdi-action-launch"></i>
                  </button></a>
                  <a href="/renewalForm"><button type="button" class="btn bg-teal btn-circle waves-effect waves-circle waves-float" data-toggle="tooltip" data-placement="top" title="Renew Contract">
                    <i class="mdi-action-autorenew"></i>
                  </button></a>
                  <button type="button" class="btn bg-red btn-circle waves-effect waves-circle waves-float" data-toggle="tooltip" data-placement="top" title="Notify Lessee">
                    <i class="mdi-social-notifications-on"></i>
                  </button>
                </td>
              </tr>
              <tr>
                <td class="align-center">Chowking</td>
                <td class="align-center">UNIT 24, 7F, Menarco Tower</td>
                <td class="align-center">4/15/2017</td>
                <td class="align-center">
                  <button type="button" class="btn bg-light-green btn-circle waves-effect waves-circle waves-float" data-toggle="tooltip" data-placement="top" title="View More">
                    <i class="mdi-action-visibility"></i>
                  </button>
                  <a href="/extension"><button type="button" class="btn bg-blue btn-circle waves-effect waves-circle waves-float" data-toggle="tooltip" data-placement="top" title="Extend Contract">
                    <i class="mdi-action-launch"></i>
                  </button></a>
                  <a href="/renewalForm"><button type="button" class="btn bg-teal btn-circle waves-effect waves-circle waves-float" data-toggle="tooltip" data-placement="top" title="Renew Contract">
                    <i class="mdi-action-autorenew"></i>
                  </button></a>
                  <button type="button" class="btn bg-red btn-circle waves-effect waves-circle waves-float" data-toggle="tooltip" data-placement="top" title="Notify Lessee">
                    <i class="mdi-social-notifications-on"></i>
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