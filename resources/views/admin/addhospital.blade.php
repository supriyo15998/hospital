<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Hospital-Admin | Add Hospital</title>
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
        Add New Hospital
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Add New Hospital</li>
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
              <h3 class="box-title">Add New Hospital</h3>
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
            <form method="POST" action="{{ route('posthospital') }}">
              @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="inputName">Hospital Name</label>
                  <input type="text" name="name" id="inputName" placeholder="Enter category name" class="form-control">
                </div>
                <div class="form-group">
                  <select name="city_id" class="form-control">
                  <option value="-1">--Select hospital city--</option>
                    @foreach($cities as $city)
                      <option value="{{ $city->id }}">{{ $city->name }}</option>
                    @endforeach
                  </select>
                  <!-- <label for="inputName">Hospital City</label>
                  <input type="text" name="city" id="inputName" placeholder="Enter category name" class="form-control"> -->
                </div> 
              </div>
                <div class="form-group d-flex flex-column">
                  <input type="submit" name="create_category" class="btn btn-success" value="Add New Category">
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
