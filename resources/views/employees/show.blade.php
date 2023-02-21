@extends('layouts.app')

@section('content')
        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-12">
              <div class="home-tab">

              <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Employee Record</h4>
                  <form class="form-sample" action="" method="">
                    @csrf
                    <p class="card-description">
                      Personal info
                    </p>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">First Name</label>
                          <div class="col-sm-9">
                            <input type="text" name="name"  value="{{ $employee->name }}" class="form-control" disabled/>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Last Name</label>
                          <div class="col-sm-9">
                            <input type="text" name="surname" value="{{ $employee->surname }}"  class="form-control" disabled/>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Gender</label>
                          <div class="col-sm-9">
                          <input type="text" name="surname" value="{{ $employee->sex }}"  class="form-control" disabled/>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Date of Birth</label>
                          <div class="col-sm-9">
                            <input type="text" name="dob" value="{{ $employee->dob }}" class="form-control" disabled/>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Department</label>
                          <div class="col-sm-9">
                          <input type="text" name="department" value="{{ $employee->department_id }}" class="form-control" disabled/>
                          </div>
                        </div>
                      </div>
                      
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Status</label>
                          <div class="col-sm-9">
                            <input type="type" name="nationalId" value="{{ $employee->status }}" class="form-control" disabled/>
                          </div>
                        </div>
                      </div>                  
                    </div>

                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Pay Number</label>
                          <div class="col-sm-9">
                            <input type="text" name="empNumber" value="{{ $employee->employeeNumber }}" class="form-control" disabled/>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Start Date</label>
                          <div class="col-sm-9">
                            <input type="date" name="startDate" value="{{ $employee->startDate }}" class="form-control"   disabled/>
                          </div>
                        </div>
                      </div>
                    </div>                        
                  </form>
                </div>
              </div>
            </div>

              </div>
          </div>
      </div>
  </div>
  @endsection