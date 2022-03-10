@extends('layouts.app')
@section('content')
    
<div class="content-wrapper" style="min-height: 948px;">

    <section class="content-header">
      <div class="header-icon">
        <i class="pe-7s-world"></i>
      </div>
      <div class="header-title">
        <h1>Add New User</h1>
        <small>Add New User</small>
       
      </div>
    </section>
  
    <section class="content">
      <div class="row">
  
        <div class="col-sm-12">
          <div class="panel panel-bd panel-form">
            <div class="panel-heading">
              <div class="panel-title">
                <h4>Add New User </h4>
              </div>
            </div>
            <div class="panel-body">
              <div class="portlet-body form">
                <form action="{{URL::to('/User')}}" class="form-horizontal" method="post" enctype="multipart/form-data" accept-charset="utf-8">
                  @csrf
                  <input type="hidden" name="csrf_test_name" value="68ba9ecbe1032fe5788ea67ec55f2686">
                  <div class="form-body">
                    <div class="form-group">
                      <label class="col-md-3 control-label"> Full Name :</label>
                      <div class="col-md-6">
                        <input type="text" name="name" class="form-control" required="" value="" placeholder="Full Name" >
                        <span class="text-danger"> </span>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-3 control-label"> Email:</label>
                      <div class="col-md-6">
                        <input type="text" name="email" required="" value="" class="form-control" placeholder="Email">
                        <span class="text-danger"></span>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-3 control-label"> Password:</label>
                      <div class="col-md-6">
                        <input type="text" name="password" required="" value="" class="form-control">
                        <span class="text-danger"></span>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-3 control-label">Birth Date:</label>
                      <div class="col-md-4 ">
                        <input type="text" name="birth_date" value="" required="" class="form-control datepicker1 birth_date hasDatepicker" placeholder="yyyy-mm-dd" id="dp1612247292547">
                      </div>
                      <div class="col-md-2 ">
                        <input type="text" name="old" id="old" class="form-control" placeholder="age">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-3 control-label"> Phone:</label>
                      <div class="col-md-6">
                        <input type="text" name="phone" value="" class="form-control" placeholder="Phone" required>
                        <span class="text-danger"></span>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-3 control-label"> Gender</label>
                      <div class="col-md-6">
                        <div class="md-radio-inline">
                          <div class="md-radio">
                            <input type="radio" id="checkbox2_5" name="gender" required="" value="Male" class="md-radiobtn">
                            <label for="checkbox2_5">
                              <span></span>
                              <span class="check"></span>
                              <span class="box"></span> Male
                            </label>
                          </div>
                          <div class="md-radio">
                            <input type="radio" id="checkbox2_10" name="gender" required="" value="Female" class="md-radiobtn">
                            <label for="checkbox2_10">
                              <span></span>
                              <span class="check"></span>
                              <span class="box"></span> Female
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-3 control-label">Role :</label>
                      <div class="col-md-6">
                        <select class="form-control" name="role" required>
                          <option value="">--Select Role--</option>
                          <option value="admin">Admin</option>
                          <option value="doctor">Doctor</option>
                          <option value="patient">Patient</option>
                          
                        </select>
                      </div>
                    </div>
                  
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-offset-3 col-sm-6">
                      <button type="reset" class="btn btn-danger">Reset</button>
                      <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection