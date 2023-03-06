@extends('layouts.app')

@section('content')
        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-12">
              <div class="home-tab">


              <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">create asset record</h4>
                  <form class="form-sample" action="{{route('assets.store')}}" method="POST">
                    @csrf
                    <p class="card-description">
                      Personal info
                    </p>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">First Name</label>
                          <div class="col-sm-9">
                            <input type="text" name="name" class="form-control" required/>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Last Name</label>
                          <div class="col-sm-9">
                            <input type="text" name="surname"  class="form-control" required/>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Gender</label>
                          <div class="col-sm-9">
                            <select  name="sex" class="form-control">
                              <option value="M">Male</option>
                              <option value="F">Female</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Date of Birth</label>
                          <div class="col-sm-9">
                            <input type="date" name="dob" class="form-control" placeholder="dd/mm/yyyy" required/>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Department</label>
                          <div class="col-sm-9">
                            <select name="department" class="form-control" required>
                              <option value="1">Category1</option>
                              <option value="2">Category2</option>
                              <option value="3">Category3</option>
                              <option value="4">Category4</option>
                            </select>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">National Id</label>
                          <div class="col-sm-9">
                            <input type="type" name="nationalId" class="form-control" placeholder="national Id"  required/>
                          </div>
                        </div>
                      </div>                  
                    </div>

                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Pay Number</label>
                          <div class="col-sm-9">
                            <input type="text" name="empNumber" class="form-control" required/>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Start Date</label>
                          <div class="col-sm-9">
                            <input type="date" name="startDate" class="form-control" placeholder="dd/mm/yyyy"  required/>
                          </div>
                        </div>
                      </div>
                    </div>             
                    <button type="submit" class="btn btn-primary btn-lg">Save</button>
                    <button class="btn btn-lightbtn-lg">Cancel</button>
                  </form>
                </div>
              </div>
            </div>
    
              </div>
          </div>
      </div>
  </div>

  @endsection