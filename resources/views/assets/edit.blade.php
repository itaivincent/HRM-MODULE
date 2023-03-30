@extends('layouts.app')

@section('content')
        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-12">
              <div class="home-tab">


              <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Edit Asset Record</h4>
                  <form method="post" class="form-sample" action="/assets/{{$asset->id}}" />
                  @csrf
                  @method('put')
                    <p class="card-description">
                      Asset Info
                    </p>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Serial #</label>
                          <div class="col-sm-9">
                            <input type="text" name="name" value="{{$asset->name}}" class="form-control" />
                          </div>
                        </div>
                      </div>  
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Asset Code</label>
                          <div class="col-sm-9">
                            <input type="text" name="assetCode"  value="{{$asset->assetCode}}" class="form-control" />
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
                          <label class="col-sm-3 col-form-label">Brand</label>
                          <div class="col-sm-9">
                            <input type="text" name="brand" value="{{$asset->brand }}" class="form-control"  />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Condition</label>
                          <div class="col-sm-9">
                         
                          <select  name="condition" class="form-control">
                              <option value="New">New</option>
                              <option value="New">New</option>
                              <option value="Old">Old</option>
                              <option value="Damaged">Damaged</option>
                              <option value="Monitor">Monitor</option>
    
                            </select>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Description</label>
                          <div class="col-sm-6">
                          <textarea id="" name="description" rows="4" cols="42"> {{$asset->description}} </textarea>
                          </div>
                        </div>
                      </div>                  
                    </div>   
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                         
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