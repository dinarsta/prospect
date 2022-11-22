@extends('layout.main')
@section('content')
   <div class="content-wrapper">
          <div class="row">
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                     <h3 class=" mb-5 welcome-text">Edit<span class="text-black fw-bold">  Prospect</span></h3>
                   <form action="/updatepros/{{$data->id}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">First Name</label>
                          <div class="col-sm-9">
                            <input type="text" name="firstname" class="form-control"value="{{$data->firstname}}" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Last Name</label>
                          <div class="col-sm-9">
                            <input type="text" name="lastname" class="form-control"value="{{$data->lastname}}" />
                          </div>
                        </div>
                      </div>
                    </div>
                 
              
                    <div class="row">
                       <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Date of Birth</label>
                          <div class="col-sm-9">
                            <input type="date" name="tgl_lahir" class="form-control" value="{{$data->tgl_lahir}}"/>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Phone</label>
                          <div class="col-sm-9">
                            <input type="text" name="phone" class="form-control"value="{{$data->phone}}" />
                          </div>
                        </div>
                      </div>
                    </div>
                   
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Email</label>
                          <div class="col-sm-9">
                            <input type="email" name="email" class="form-control "value="{{$data->email}}" />
                          </div>
                        </div>
                      </div>
                       <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Potensial Value </label>
                          <div class="col-sm-9">
                            <input type="text" name="potenvalue" class="form-control"value="{{$data->potenvalue}}"/>
                          </div>
                        </div>
                      </div>
                       <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Office</label>
                          <div class="col-sm-9">
                            <input type="text" name="office" class="form-control"value="{{$data->potenvalue}}" />
                          </div>
                        </div>
                      </div>
                       <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Address</label>
                          <div class="col-sm-9">
                            <input type="text" name="address" class="form-control"value="{{$data->address}}"/>
                          </div>
                        </div>
                      </div>
                       <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Remark</label>
                          <div class="col-sm-9">
                            <input type="text" name="remark" class="form-control"value="{{$data->remark}}" />
                          </div>
                        </div>
                      </div>
                      
                    </div>
                     <button type="submit" class="btn btn-primary me-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>


          </div>
        </div>
@endsection