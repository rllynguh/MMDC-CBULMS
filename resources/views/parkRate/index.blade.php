@extends('layouts.myLayout')
@section('styles')
<link href="plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet">
@endsection
@section('scripts')
{!!Html::script("custom/parkRateAjax.js")!!}
<script src="plugins/dropzone/dropzone.js"></script>
<script src="plugins/jquery-steps/jquery.steps.js"></script>
<script src="plugins/sweetalert/sweetalert.min.js"></script>
<script src="plugins/jquery-spinner/js/jquery.spinner.js"></script>
<script src="plugins/multi-select/js/jquery.multi-select.js"></script>
<script src="plugins/jquery-datatable/jquery.dataTables.js"></script>
<script src="plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
<script type="text/javascript">
  var dataurl="{{route("parkRate.getData")}}";
</script>
@endsection
@section('content')
<meta name="_token" content="{!! csrf_token() !!}" />
<div class="container-fluid">
  <div class="body">
    <div class="block-header">
      <h2 class="align-center">PARKING RATES</h2>
    </div>
  </div>
  <div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

      <!--MODAL-->
      <div class="modal fade" id="myModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content modal-col-green">
            <form id="myForm" class="form-horizontal"  data-parsley-validate>
              <div class="modal-header">
                <h1 class="modal-title align-center p-b-15">UPDATE PARKING RATE<a href="javascript:void(0);" class="pull-right" data-dismiss="modal"><i class="mdi-navigation-close"></i></a></h1>
              </div>

              

              <div class="modal-body">
                <div class="form-group">
                  <div class="form-line">
                   <input required type="number" min="400" max="2000" autocomplete="off" id="txtRate" name="txtRate" class="form-control align-center" placeholder="rate/sqm/month" step="0.01" >
                 </div>
               </div>
             </div>
             <div class="modal-footer">
              <button type="submit" class="btn btn-lg bg-brown waves-effect waves-white col-md-12" id="btnSave" value="add"><i class="mdi-content-save"></i> SAVE</button>
              <input type="hidden" name="_token" value="{{csrf_token()}}">
              <input type="hidden" id="myId" name="myId" value="0">
            </div>
          </form>
        </div>

      </div>
    </div>
    <!--MODAL-->

    <div class="card">
      <div class="header align-center">
        <h2>
          LIST OF PARKING RATES
        </h2>
      </div>
      <div class="body">
        <table class="table table-hover dataTable" id="myTable">
          <thead>
            <tr>
              <th class="align-center">BUILDING</th>
              <th class="align-center">DATE UPDATED</th>
              <th class="align-center">RATE</th>
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
@section('scripts')
<script src="plugins/jquery-datatable/jquery.dataTables.js"></script>
<script src="plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
<script type="text/javascript">
  $(document).ready(function () {
  });
  $('#myTable').dataTable();
</script>
@endsection
