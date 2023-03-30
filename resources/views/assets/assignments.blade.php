@extends('layouts.app')

@section('content')
        <div class="content-wrapper">

          <div class="row">
              <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">   
                  <form method="post" class="form-sample" action=""  />
                    @csrf
                    @method('put')
                  <h4 class="card-title">Please select an employee </h4>
                  <div class="form-group">
                    <label><b>You can change the status of an employee on the dropdown below</b></label>
                    <hr></hr>
                    <select class="js-example-basic-single w-100" name="status">
                      <option value="1">Active</option> 
                                                                  
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
                    <select class="js-example-basic-single w-100" name="status">
                      <option value="1">Active</option> 
                                                                 
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