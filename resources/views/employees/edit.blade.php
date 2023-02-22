@extends('layouts.app')

@section('content')
        <div class="content-wrapper">
          <div class="row">

              <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Select 2</h4>
                  <div class="form-group">
                    <label>Single select box using select 2</label>
                    <select class="js-example-basic-single w-100">
                      <option value="AL">Alabama</option>
                      <option value="WY">Wyoming</option>
                      <option value="AM">America</option>                                
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Multiple select using select 2</label>
                    <select class="js-example-basic-multiple w-100" multiple="multiple">
                      <option value="AL">Alabama</option>
                      <option value="WY">Wyoming</option>
                      <option value="AM">America</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>

            
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Typeahead</h4>
                  <p class="card-description">
                    A simple suggestion engine
                  </p>
                  <div class="form-group row">
                    <div class="col">
                      <label>Basic</label>
                      <div id="the-basics">
                        <input class="typeahead" type="text" placeholder="States of USA">
                      </div>
                    </div>
                    <div class="col">
                      <label>Bloodhound</label>
                      <div id="bloodhound">
                        <input class="typeahead" type="text" placeholder="States of USA">
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