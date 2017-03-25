    @extends('layouts.myLayout')
    @section('styles')
    <link href="plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet">
    @endsection
    @section('scripts')
    {!! Html::script("custom/parkSpaceAjax.js") !!}
    <script src="plugins/dropzone/dropzone.js"></script>
    <script src="plugins/jquery-steps/jquery.steps.js"></script>
    <script src="plugins/sweetalert/sweetalert.min.js"></script>
    <script src="plugins/jquery-spinner/js/jquery.spinner.js"></script>
    <script src="plugins/multi-select/js/jquery.multi-select.js"></script>
    <script src="plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script type="text/javascript">
      var dataurl="{{route("parkSpace.getData")}}";
    </script>
    @endsection
    @section('content')
    <meta name="_token" content="{!! csrf_token() !!}" />
    <div class="container-fluid">
      <div class="body">
        <div class="block-header">
          <h2 class="align-center">PARKING SPACES<button class="btn btn-success btn-lg waves-effect waves-lime m-l-15 m-b-5" type="button" id="btnAddModal">
            <i class="mdi-content-add pulls"></i> NEW
          </button></h2>
        </div>
      </div>
      <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

          <!--MODAL-->
          <div class="modal fade" id="myModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
              <div class="modal-content modal-col-green">
                <form id="myForm" class="form-horizontal" >
                  <div class="modal-header">
                    <h1 id="label" class="modal-title align-center p-b-15">NEW PARKING UNIT<a href="javascript:void(0);" class="pull-right" data-dismiss="modal"><i class="mdi-navigation-close"></i></a></h1>
                  </div>
                  <div class="modal-body">
                    <div class="form-group p-l-30">
                      <h5 class="card-inside-title">Building</h5>
                      <select required  id="comBuilding" name="comBuilding" class="form-control show-tick align-center">
                      </select>
                    </div>

                    <div class="form-group p-l-30">
                      <h5 class="card-inside-title">Park Area</h5>
                      <select required  id="comParkArea" name="comParkArea" class="form-control show-tick align-center">
                      </select>
                    </div>

                    <div class="form-group p-l-30">
                      <div class="form-line">
                        <h5 class="card-inside-title">Park Space Number</h5>
                        <input required readonly="" type="number" id="txtPNum" name="txtPNum" class="form-control align-center"  >
                      </div>
                    </div>

                    <div class="form-group p-l-30">
                      <div class="form-line">
                        <h5 class="card-inside-title">Size</h5>
                        <input required type="number" min="1" max="9999" autocomplete="off" data-parsley-type="number" id="txtArea" name="txtArea" class="form-control align-center" placeholder="sqm" step="0.01" >
                      </div>
                    </div>

                  </div>
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-lg bg-brown waves-effect waves-white col-md-12" id="btnSave" value="add"><i class="mdi-content-save"></i><span id="lblButton"> SAVE</span></button>
                    <input type="hidden" id="myId" value="0">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                  </div>
                </form>
              </div>
            </div>
          </div>
          <!--MODAL-->


          <div class="card">
            <div class="header align-center">
              <h2>
                LIST OF PARKING SPACES
              </h2>
            </div>
            <div class="body">
              <table class="table table-hover dataTable" id="myTable">
                <thead>
                  <tr>
                    <th class="align-center">BUILDING</th>
                    <th class="align-center">FLOOR</th>
                    <th class="align-center">PARKING AREA</th>
                    <th class="align-center">PARKING SPACE</th>
                    <th class="align-center">SIZE</th>
                    <th class="align-center">STATUS</th>
                    <th class="align-center">Action</th>
                  </tr>
                </thead>
                <tbody id="myList">
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endsection
