@extends('layouts.app')

@section('content')
        <div class="content-wrapper">

          <div class="row">
              <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">   
                  <form  class="form-sample" action="/assets/assetAssignment"  method="POST"/>
                    @csrf               
                  <h4 class="card-title">Please select an employee </h4>
                  <div class="form-group">
                    <label><b>You can change the status of an employee on the dropdown below</b></label>
                    <hr></hr>
                    <select class="js-example-basic-single w-100" name="employee">
                      @foreach($employees as $employee)
                      <option value="{{$employee->id}}">{{$employee->name}} {{$employee->surname}} - {{$employee->employeeNumber}}</option> 
                      @endforeach                                          
                    </select>
                  </div>
                  <div>
           
                </div>  
               
                </div>
               
              </div>
            </div>

                   
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">   
             
                  <h4 class="card-title">Please select an asset</h4>
                  <div class="form-group">
                    <label><b>You can change the status of an employee on the dropdown below</b></label>
                    <hr></hr>
                    <select class="js-example-basic-single w-100" name="asset">
                    @foreach($assets as $asset)
                      <option value="{{$asset->id}}">{{$asset->name}} - {{$asset->assetCode}} - {{$asset->type}} </option> 
                      @endforeach                                     
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
      
          </div>
        </div>
             

      </div>
  </div>
  @endsection