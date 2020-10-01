<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Hospital-Admin | Add Doctor</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  @include('adminLayouts.css')
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  @include('adminLayouts.navbar')
  <!-- Left side column. contains the logo and sidebar -->
  @include('adminLayouts.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Add New Doctor
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Add New Doctor</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary" style="padding: 4%">
            <div class="box-header with-border" style="text-align: center; font-weight: bold;">
              <h3 class="box-title">Add New Doctor</h3>
            </div>
            @if($errors->any())
              <div class="alert alert-danger">
                <ul> 
                  @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
            @endif
            <form method="POST" action="{{ route('postdoctor') }}">
              @csrf
              <div class="card-body">
                
                <div class="form-group">
                  <label for="inputName">Doctor Name</label>
                  <input type="text" name="name" id="inputName" placeholder="Enter doctor name" class="form-control">
                </div>
                <div class="form-group">
                  <label for="inputName">Doctor Qualification</label>
                  <input type="text" name="qualification" id="inputName" placeholder="Enter doctor qualification" class="form-control">
                </div>
                <div class="form-group">
                  <label for="inputName">Doctor Specialization</label>
                  <input type="text" name="specialization" id="inputName" placeholder="Enter doctor specialization" class="form-control">
                </div>
                <div class="form-group">
                  <label for="inputName">Doctor Phone</label>
                  <input type="text" name="phone" id="inputName" placeholder="Enter doctor phone" class="form-control">
                </div>
                <div class="form-group">
                    <label for="opd_day">Choose OPD Day</label>
                    <select name="opd_day" id="opd_day" class="form-control">
                        <option value="-1">--Select OPD Day--</option>
                        <option value="Monday">Monday</option>
                        <option value="Tuesday">Tuesday</option>
                        <option value="Wednesday">Wednesday</option>
                        <option value="Thursday">Thursday</option>
                        <option value="Friday">Friday</option>
                        <option value="Saturday">Saturday</option>
                        <option value="Sunday">Sunday</option>
                    </select>
                </div>
                <div class="form-group">
                  <label for="inputName">Doctor OPD Time</label>
                  <input type="time" name="opd_time" id="inputName" placeholder="Enter doctor opd_time" class="form-control">
                </div>
              </div>
                <div class="form-group d-flex flex-column">
                  <input type="submit" name="create_category" class="btn btn-success" value="Add New Doctor">
                </div>
              </div>
            <form>
          </div>
        </div>
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>

  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
@include('adminLayouts.js')
</body>
</html>
