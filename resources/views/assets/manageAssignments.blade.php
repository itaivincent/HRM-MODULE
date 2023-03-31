@extends('layouts.app')

@section('content')
        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-12">
              <div class="home-tab">

              <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">All Assets</h4>
                  <p class="card-description">
                    <code>A list of all the assets</code>
                  </p>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th class="text-center">Name</th>
                          <th class="text-center">Type</th>
                          <th class="text-center">Brand</th>
                          <th class="text-center">Code</th>
                          <th class="text-center">Date Added</th>
                          <th class="text-center">Status</th>
                          <th class="text-center">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        
                      @foreach ($assets as $asset)
                        <tr>
                          <td class="text-center">{{$asset->name}}</td>
                          <td class="text-center">{{$asset->type}}</td>
                          <td class="text-center">{{$asset->brand}}</td>
                          <td class="text-center">{{$asset->assetCode}}</td>
                          <td class="text-center">{{$asset->dateAdded}}</td>
                          @if($asset->status == 1)
                          <td class="text-center"><label class="badge badge-success">Active</label></td>  
                          @elseif($asset->status == 2)
                          <td class="text-center"><label class="badge badge-danger">Terminated</label></td>
                          @elseif($asset->status == 3)
                          <td class="text-center"><label class="badge badge-danger">Resigned</label></td>   
                          @elseif($asset->status == 4)
                          <td class="text-center"><label class="badge badge-danger">Retired</label></td>   
                          @else
                          <td class="text-center"><label class="badge badge-danger">On Leave</label></td> 
                          @endif     
                          <td class="text-center">
                          <div class="template-demo">
                          <div class="btn-group" role="group" aria-label="Basic example">                        
                          <a href="/assets/{{$asset->id}}/edit" class="btn btn-outline-danger">
                            <i class="mdi mdi-account-remove"></i>
                          </a>
                          <a href="/assets/{{$asset->id}}" class="btn btn-outline-primary">
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