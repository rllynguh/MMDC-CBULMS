@extends("layouts.myLayout")
@section("content")
<div class="container-fluid">
  <div class="block-header">
    <small>
      DASHBOARD / TRANSACTIONS / COLLECTION OF PAYMENT
    </small>
  </div>

  <!-- Advanced Validation -->
  <div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

      <!--MODAL-->
      <div class="modal fade" id="myModal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-md" role="document">
          <div class="modal-content modal-col-green">
            <div class="modal-header">
              <h2 class="modal-title align-center p-b-15">Payment of Lease <a href="javascript:void(0);" class="pull-right" data-dismiss="modal"><i class="mdi-navigation-close"></i></a></h2>
            </div>
            <div class="modal-body">
              <form id="form_validation" method="POST">
                <div class="form-group form-float col-md-12 col-sm-12 p-t-20">
                  <h5 class="card-inside-title p-b-10">Outstanding Balance</h5>
                  <div class="col-md-12 col-sm-12 col-lg-12">
                    <div class="form-line focused">
                      <input value="39087.37 php" type="text" class="form-control align-center" name="minmaxlength" maxlength="50" minlength="1" required>
                      <label class="form-label">Balance</label>
                    </div>
                  </div>
                </div>
                <div class="form-group form-float col-md-12 col-sm-12 p-t-20">
                  <h5 class="card-inside-title p-b-10">Ammount of Payment</h5>
                  <div class="col-md-12 col-sm-12 col-lg-12">
                    <div class="form-line">
                      <input type="text" class="form-control align-center" name="minmaxlength" maxlength="50" minlength="1" required>
                      <label class="form-label">Payment</label>
                    </div>
                  </div>
                </div>
              </form>

            </div>
            <div class="modal-footer align-center">
              <button type="submit" class="btn btn-lg bg-brown waves-effect waves-white col-md-12"><i class="mdi-editor-attach-money"></i> Process Payment</button>
            </div>
          </div>
        </div>
      </div>
      <!--MODAL-->

      <div class="card">
        <div class="header align-center">
          <h2 class="p-t-10 p-b-10">COLLECTION OF PAYMENT</h2>
          <small>Unpaid Contracts</small>
        </div>
        <div class="body">
          <table class="table table-hover table-bordered table-striped table-condensed dataTable" id="dtbuilding">
            <thead>
              <tr>
                <th class="align-center col-md-2">Company</th>
                <th class="align-center col-md-3">Unit Details</th>
                <th class="align-center col-md-3">Bill Type</th>
                <th class="align-center col-md-2">Due Date</th>
                <th class="align-center col-md-2">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="align-center">Jollibee</td>
                <td class="align-center">UNIT 2, 3F, Carolina Mall</td>
                <td class="align-center">New Contract</td>
                <td class="align-center">4/1/17</td>
                <td class="align-center">
                  <button type="button" class="btn bg-light-green btn-circle waves-effect waves-circle waves-float" data-toggle="tooltip" data-placement="top" title="View More">
                    <i class="mdi-action-visibility"></i>
                  </button>
                  <button type="button" class="btn bg-blue btn-circle waves-effect waves-circle waves-float" data-toggle="modal" title="Show Bill" data-target="#myModal">
                    <i class="mdi-editor-attach-money"></i>
                  </button>
                </td>
              </tr>
              <tr>
                <td class="align-center">McDo</td>
                <td class="align-center">UNIT 6, 1F, K Mall</td>
                <td class="align-center">Contract Extension</td>
                <td class="align-center">4/30/17</td>
                <td class="align-center">
                  <button type="button" class="btn bg-light-green btn-circle waves-effect waves-circle waves-float" data-toggle="tooltip" data-placement="top" title="View More">
                    <i class="mdi-action-visibility"></i>
                  </button>
                  <button type="button" class="btn bg-blue btn-circle waves-effect waves-circle waves-float" data-toggle="modal" data-placement="top" title="Show Bill" data-target="#myModal">
                    <i class="mdi-editor-attach-money"></i>
                  </button>
                </td>
              </tr>
              <tr>
                <td class="align-center">Chowking</td>
                <td class="align-center">UNIT 24, 7F, Menarco Tower</td>
                <td class="align-center">Contract Renewal</td>
                <td class="align-center">4/15/17</td>
                <td class="align-center">
                  <button type="button" class="btn bg-light-green btn-circle waves-effect waves-circle waves-float" data-toggle="tooltip" data-placement="top" title="View More">
                    <i class="mdi-action-visibility"></i>
                  </button>
                  <button type="button" class="btn bg-blue btn-circle waves-effect waves-circle waves-float" data-toggle="modal" data-placement="top" title="Show Bill" data-target="#myModal">
                    <i class="mdi-editor-attach-money"></i>
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