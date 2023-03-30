@extends('layouts.app')

@section('content')
        <div class="content-wrapper">

          <div class="row">
              <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">   
                  <form method="post" class="form-sample" action="/employees/{{$employee->id}}"  />
                    @csrf
                    @method('put')
                  <h4 class="card-title">Change Employment Status</h4>
                  <div class="form-group">
                    <label><b>You can change the status of an employee on the dropdown below</b></label>
                    <hr></hr>
                    <select class="js-example-basic-single w-100" name="status">
                      <option value="1">Active</option> 
                      <option value="2">Terminated</option>
                      <option value="3">Resigned</option>
                      <option value="4">Retired</option>   
                      <option value="5">On Leave</option>                                               
                    </select>
                  </div>
                  <div>
                <button type="submit" class="btn btn-primary btn-sm">Save</button>
                    <button class="btn btn-lightbtn-sm">Cancel</button>
                </div>  
                </form>
                </div>
               
              </div>
            </div>

            
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Personal Details</h4>
                  <p class="card-description">
                  <b> Summary of the employee' records </b>
                  </p>
                  <hr></hr>
                  <div class="form-group row">
                    <div class="col">
                      <label>Name</label>
                      <div id="the-basics">
                        <input class="typeahead" type="text"value="{{$employee->name}} {{$employee->surname}}" disabled/>
                      </div>
                    </div>
                    <div class="col">
                      <label>Department</label>
                      <div id="bloodhound">
                        <input class="typeahead" type="text" value="{{$employee->department_id}}" disabled>
                      </div>
                    </div>
                  </div>

                  <div class="form-group row">
                    <div class="col">
                      <label>PayNumber</label>
                      <div id="the-basics">
                        <input class="typeahead" type="text" value="{{$employee->employeeNumber}}" disabled>
                      </div>
                    </div>
                    <div class="col">
                      <label>Start Date</label>
                      <div id="bloodhound">
                        <input class="typeahead" type="text" value="{{$employee->startDate}}" disabled>
                      </div>
                    </div>
                  </div>


                  <div class="form-group row">
                  <label class="col-sm-4 col-form-label">Employment Status:</label>
                          <div class="col-sm-3">
                            <div class="form-check">
                              <label class="form-check-label">
                                @if($employee->status == 1)
                              <button type="button" class="btn btn-success btn-rounded btn-fw">Active</button>
                              @elseif($employee->status == 2)
                              <button type="button" class="btn btn-danger btn-rounded btn-fw">Terminated</button>
                              @elseif($employee->status == 3)
                              <button type="button" class="btn btn-danger btn-rounded btn-fw">Resigned</button>
                              @elseif($employee->status == 4)
                              <button type="button" class="btn btn-danger btn-rounded btn-fw">Retired</button>
                              @else
                              <button type="button" class="btn btn-danger btn-rounded btn-fw">On Leave</button>
                              @endif
                              </label>
                           </div>
                        </div>
                    

                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
             

      </div>
  </div>
  @endsection