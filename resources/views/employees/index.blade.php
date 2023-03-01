@extends('layouts.app')

@section('content')
        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-12">
              <div class="home-tab">

              <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">All Employees</h4>
                  <p class="card-description">
                    <code>A list of all the employees</code>
                  </p>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th class="text-center">Name</th>
                          <th class="text-center">Surname</th>
                          <th class="text-center">Pay Number</th>
                          <th class="text-center">Department</th>
                          <th class="text-center">Years of Service</th>
                          <th class="text-center">Status</th>
                          <th class="text-center">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        
                      @foreach ($employees as $emp)
                        <tr>
                          <td class="text-center">{{$emp->name}}</td>
                          <td class="text-center">{{$emp->surname}}</td>
                          <td class="text-center">{{$emp->employeeNumber}}</td>
                          <td class="text-center">{{$emp->department_id}}</td>
                          <td class="text-center">{{$emp->dob}}</td>
                          @if($emp->status == 1)
                          <td class="text-center"><label class="badge badge-success">Active</label></td>  
                          @elseif($emp->status == 2)
                          <td class="text-center"><label class="badge badge-danger">Terminated</label></td>
                          @elseif($emp->status == 3)
                          <td class="text-center"><label class="badge badge-danger">Resigned</label></td>   
                          @elseif($emp->status == 4)
                          <td class="text-center"><label class="badge badge-danger">Retired</label></td>   
                          @else
                          <td class="text-center"><label class="badge badge-danger">On Leave</label></td> 
                          @endif     
                          <td class="text-center">
                          <div class="template-demo">
                          <div class="btn-group" role="group" aria-label="Basic example">                        
                          <a href="/employees/{{$emp->id}}/edit" class="btn btn-outline-danger">
                            <i class="mdi mdi-account-remove"></i>
                          </a>
                          <a href="/employees/{{$emp->id}}" class="btn btn-outline-primary">
                            <i class="mdi mdi-account"></i>
                          </a>
                        </div>
                        </div>
                          </td>                   
                        </tr>
                        @endforeach                      
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
              </div>
          </div>
      </div>
  </div>

  @endsection