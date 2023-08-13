@extends('yield.master')
@section('title','home')
@section('content')
<div class="page-content">


    <div class="row profile-body">
      <!-- left wrapper start -->
      <div class="d-none d-md-block col-md-4 col-xl-4 left-wrapper">
        <div class="card rounded">
          <div class="card-body">
            <div class="d-flex align-items-center justify-content-between mb-2">

                <div>
                    <img class="wd-100 rounded-circle" width="100px" src="{{isset($user->photo) ?
                    url('uploads/user_img/' . $user->photo) : url('uploads/no_image.png')}}" alt="profile">
                    <span class="h5 ms-3 text-light">{{$user->name}}</span>
                  </div>

            </div>

            <div class="mt-3">
              <label class="tx-11 fw-bolder mb-0 text-uppercase">Name:</label>
              <p class="text-muted">{{$user->name}}</p>
            </div>

            <div class="mt-3">
              <label class="tx-11 fw-bolder mb-0 text-uppercase">Email:</label>
              <p class="text-muted">{{$user->email}}</p>
            </div>
            {{-- <div class="mt-3">
              <label class="tx-11 fw-bolder mb-0 text-uppercase">Password:</label>
              <p class="text-muted">{{$user->password}}</p>
            </div> --}}
            <div class="mt-3">
                <label class="tx-11 fw-bolder mb-0 text-uppercase">Address:</label>
                <p class="text-muted">{{$user->address}}</p>
              </div>
              <div class="mt-3">
                <label class="tx-11 fw-bolder mb-0 text-uppercase">Phone:</label>
                <p class="text-muted">{{$user->phone}}</p>
              </div>
            <div class="mt-3 d-flex social-links">
              <a href="javascript:;" class="btn btn-icon border btn-xs me-2">
                <i data-feather="github"></i>
              </a>
              <a href="javascript:;" class="btn btn-icon border btn-xs me-2">
                <i data-feather="twitter"></i>
              </a>
              <a href="javascript:;" class="btn btn-icon border btn-xs me-2">
                <i data-feather="instagram"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
      <!-- left wrapper end -->
      <div class="col-md-8 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">

                <h6 class="card-title">Edit Profile</h6>

                <form class="forms-sample" enctype="multipart/form-data" method="POST" action="{{route('userProfile.store')}}">
                    @csrf
                    <div class="row mb-3">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="exampleInputUsername2" name="name" value="{{$user->name}}">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="exampleInputMobile" class="col-sm-3 col-form-label">Email</label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control" id="exampleInputMobile" name="email" value="{{$user->email}}">
                        </div>
                    </div>
                    {{-- <div class="row mb-3">
                        <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Password</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" id="exampleInputPassword2" name="password" autocomplete="off" value="{{$user->password}}">
                        </div>
                    </div> --}}
                    <div class="row mb-3">
                      <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Address</label>
                      <div class="col-sm-9">
                          <input type="text" class="form-control" id="exampleInputEmail2" name="address" autocomplete="off" value="{{$user->address}}">
                      </div>
                    </div>
                  <div class="row mb-3">
                    <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Phone-number</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="exampleInputEmail2" name="phone" autocomplete="off" value="{{$user->phone}}">
                    </div>
                  </div>
                  <div class="mb-3">
                    <label for="formFileDisabled" class="form-label">Select Profile Photo</label>
                    <input class="form-control" type="file" id="img" name="photo">
                    {{-- <img class="wd-70 rounded-circle"width="50px" src="{{isset($user->photo) ?
                      url('uploads/user_img/' . $user->photo) : url('uploads/no_image.jpg')}}"
                      alt="profile" id="showImg"> --}}
                  </div>
                    <div class="form-check mb-3">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">
                            Remember me
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Save Change</button>

                </form>

            </div>
        </div>
    </div>
</div>


@endsection




