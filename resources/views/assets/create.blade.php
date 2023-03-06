@extends('layouts.app')

@section('content')
        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-12">
              <div class="home-tab">


              <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Create Asset Record</h4>
                  <form class="form-sample" action="{{route('assets.store')}}" method="POST">
                    @csrf
                    <p class="card-description">
                      Asset Info
                    </p>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Asset Name</label>
                          <div class="col-sm-9">
                            <input type="text" name="name" class="form-control" required/>
                          </div>
                        </div>
                      </div>  
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Asset Code</label>
                          <div class="col-sm-9">
                            <input type="text" name="code"  class="form-control" required/>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Asset Type</label>
                          <div class="col-sm-9">
                            <select  name="type" class="form-control">
                              <option value="Laptop">Laptop</option>
                              <option value="Desktop">Desktop</option>
                              <option value="Hard Drive">Hard Drive</option>
                              <option value="Monitor">Monitor</option>
                              <option value="CPU">CPU</option>
                              <option value="PowerPack">PowerPack</option>
                              <option value="Mouse">Mouse</option>
                              <option value="Other">Other</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Date</label>
                          <div class="col-sm-9">
                            <input type="date" name="date" class="form-control" placeholder="dd/mm/yyyy" required/>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Description</label>
                          <div class="col-sm-9">
                            <input type="text" name="desc" class="form-control"  required/>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Brand</label>
                          <div class="col-sm-9">
                            <input type="text" name="brand" class="form-control"  required/>
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