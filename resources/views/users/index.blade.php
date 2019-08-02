
@extends('layouts.admin')


@section('content')


    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 style="text-align: center">
        RECORD YOUR DAILY REVENUE HERE!!!!!
        <small>WELCOME ADMIN {{Auth::user()->name}}</small>
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
              <h3 class="box-title">Daily Cashin Commission</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="{{route('users.store')}}" method="POST">
              @csrf
               <div class="form-group">
                  <label for="inputEmail3"class="col-sm-4 control-label">cashin commission</label>

                  <div class="col-sm-8">
                    <input type="text" name="cashin"  class="form-control" id="inputEmail3" placeholder="hometown" value="{{old('cashin')}}">
                    @error('cashin')
                        <span class="invalid-feedback text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                </div>


                    <div class="form-group">
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
              <!-- <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">cashout commission</label>

                  <div class="col-sm-8">
                    <input type="text" name="cashout" class="form-control" id="inputEmail3" placeholder="cashout" value="{{old('cashout')}}">
                    @error('cashout')
                        <span class="invalid-feedback text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                </div> -->
                <!--  <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">Monthly Payment</label>

                  <div class="col-sm-8">
                    <input type="text" name="monthly" class="form-control" id="inputEmail3" placeholder="monthly" value="{{old('first_name')}}">
                    @error('first_name')
                        <span class="invalid-feedback text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                </div> -->
             <!--    <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">Last Name</label>

                  <div class="col-sm-8">
                    <input type="text" name="last_name" class="form-control" id="inputEmail3" placeholder="last name" value="{{old('last_name')}}">
                    @error('last_name')
                        <span class="invalid-feedback text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">Other Name</label>

                  <div class="col-sm-8">
                    <input type="text" name="other_name" class="form-control" id="inputEmail3" placeholder="other name" value="{{old('other_name')}}">
                    @error('other_name')
                        <span class="invalid-feedback text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">Date of Birth</label>

                  <div class="col-sm-8">
                    <input type="date" name="date_of_birth" class="form-control" id="inputEmail3" placeholder="date of birth" value="{{old('date_of_birth')}}">
                    @error('date_of_birth')
                        <span class="invalid-feedback text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3"class="col-sm-4 control-label">Sex</label>

                  <div class="col-sm-8">
                    <select  name="sex" class="form-control"> 
                      <option value=""> Select Sex </option>
                      <option value="female" {{old('sex') == 'female' ? 'selected' : ''}}> Female </option>
                      <option value="male" {{old('sex') == 'male' ? 'selected' : ''}}> Male </option>
                    </select>
                    @error('sex')
                        <span class="invalid-feedback text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                </div>
                 <div class="form-group">
                  <label for="inputEmail3"class="col-sm-4 control-label">Educational Level</label>

                  <div class="col-sm-8">
                    <input type="text" name="education"  class="form-control" id="inputEmail3" placeholder="education" value="{{old('education')}}">
                    @error('education')
                        <span class="invalid-feedback text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                </div>
                 <div class="form-group">
                  <label for="inputEmail3"class="col-sm-4 control-label">Home Town</label>

                  <div class="col-sm-8">
                    <input type="text" name="home_town"  class="form-control" id="inputEmail3" placeholder="hometown" value="{{old('home_town')}}">
                    @error('home_town')
                        <span class="invalid-feedback text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                </div>

                 <div class="form-group">
                  <label for="inputEmail3"class="col-sm-4 control-label">Residential Address</label>

                  <div class="col-sm-8">
                    <input type="text" name="residential_address"  class="form-control" id="inputEmail3" placeholder="residential_address" value="{{old('residential_address')}}">
                    @error('residential_address')
                        <span class="invalid-feedback text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                </div> -->
               <!--  <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">Educational Level</label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Email">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Home Town</label>

                  <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                  </div>
                </div> -->
            














