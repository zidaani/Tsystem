@extends('layouts.admin')


@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 style="text-align: center">
        CREATE A NEW BRANCH
        <small>WELCOME ADMIN</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">General Elements</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- right column -->
        <div class="col-md-6 col-md-offset-3">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">CREATE A BRANCH</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="{{route('branches.store')}}" method="POST">
              @csrf
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">Branch name</label>

                  <div class="col-sm-8">
                    <input type="text" name="branch_name" class="form-control" id="inputEmail3" placeholder="branch name" value="{{old('branch_name')}}">
                    @error('branch_name')
                        <span class="invalid-feedback text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">Branch location</label>

                  <div class="col-sm-8">
                    <input type="text" name="branch_location" class="form-control" id="inputEmail3" placeholder="branch location" value="{{old('branch_location')}}">
                    @error('branch_location')
                        <span class="invalid-feedback text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">Name of agent</label>

                  <div class="col-sm-8">
                    <input type="text" name="name_of_agent" class="form-control" id="inputEmail3" placeholder="name of agent" value="{{old('name_of_agent')}}">
                    @error('name_of_agent')
                        <span class="invalid-feedback text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">Capital</label>

                  <div class="col-sm-8">
                    <input type="text" name="branch_capital" class="form-control" id="inputEmail3" placeholder="capital" value="{{old('branch_capital')}}">
                    @error('branch_capital')
                        <span class="invalid-feedback text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3"class="col-sm-4 control-label">Date established</label>

                  <div class="col-sm-8">
                    <input type="date" name="date_established"  class="form-control" id="inputEmail3" placeholder="established date" value="{{old('date_established')}}">
                    @error('date_established')
                        <span class="invalid-feedback text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                </div>
               <!--  <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">Email</label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Email">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Password</label>

                  <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                  </div>
                </div> -->
                <div class="form-group">
                 <!--  <div class="col-sm-offset-2 col-sm-10 mb-3">
                    <div class="checkbox">
                      <label> 
                        <input type="checkbox"> Remember me
                      </label>
                    </div>
                  </div> -->
                  <!-- /.box-body -->
                  <div class="box-footer mt-3">
                    <div class="col-md-4">                      
                      <button type="reset" class="btn btn-warning btn-block">Cancel</button>
                    </div>
                    <div class="col-md-8">                      
                      <button type="submit" class="btn btn-success btn-block pull-right">submit</button>
                    </div>
                  </div>
                  <!-- /.box-footer -->
                </div>
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->

    @endsection