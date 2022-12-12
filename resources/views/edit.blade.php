@extends('layout.main')
@section('content')


<div class="row">
    <div class="col-8">
        <!-- Profile picture card-->
        <div class="card mb-4 mb-xl-0">
            <div class="card-header">Detail profile</div>
            <div class="card-body">
                <!-- Profile picture image-->
                <div class="profile text-center">
                    @if(Auth::user()->image)
                    <img style="height:100px; width:100px; background-position: center center; background-repeat: no-repeat;"
                        class="img-account-profile rounded-circle mb-2" src="{{asset('image/'.Auth::user()->image)}}"
                        alt="">
                    @else
                    <img class="img-account-profile rounded-circle mb-2" src="{{asset('template/images/faces/pp.jpg')}}"
                        alt="">
                    @endif
                    <!-- Profile picture help block-->
                    <div class="small font-italic text-muted mb-3">
                        <h3>{{Auth::user()->name}}</h3>
                    </div>
                    <div class="small font-italic text-muted mb-4">
                        <h5>{{Auth::user()->email}}</h5>
                    </div>
                </div>
                <form action="{{route('update', auth::user()->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class=" mb-3">
                    </div>
                    <!-- Form Group (first name)-->
                    <label style="text-align:left" class="small mb-2 mt-2" for="name">Full name</label>
                    <input class="form-control" name="name" id="name" type="text" placeholder={{auth::user()->name}}
                        required>
                    <div class="mb-3">
                        <label class="small mb-2 mt-2" for="inputEmailAddress">Email address</label>
                        <input class="form-control" name="email" id="inputEmailAddress" type="email"
                            placeholder={{auth::user()->email}} required>
                    </div>
                    <div class="mb-3 col-4">
                        <label class="small mb-2 mt-2" for="image">Upload Image</label>
                        <input type="file" class="form-control" name="image" id="inputImage">
                    </div>
                    <button class="btn btn-primary mt-3 mb-3" type="submit">Save changes</button>
                </form>
            </div>
        </div>
    </div>

    <style>
        body {
            margin-top: 20px;
            background-color: #f2f6fc;
            color: #69707a;
        }

        .img-account-profile {
            height: 10rem;
        }

        .rounded-circle {
            border-radius: 50% !important;
        }

        .card {
            box-shadow: 0 0.15rem 1.75rem 0 rgb(33 40 50 / 15%);

        }

        .card .card-header {
            font-weight: 500;
        }

        .card-header:first-child {
            border-radius: 0.35rem 0.35rem 0 0;
        }

        .card-header {
            padding: 1rem 1.35rem;
            margin-bottom: 0;
            background-color: rgba(33, 40, 50, 0.03);
            border-bottom: 1px solid rgba(33, 40, 50, 0.125);
        }

        .form-control,
        .dataTable-input {
            display: block;
            width: 100%;
            padding: 0.875rem 1.125rem;
            font-size: 0.875rem;
            font-weight: 400;
            line-height: 1;
            color: #69707a;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #c5ccd6;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            border-radius: 0.35rem;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }

        .nav-borders .nav-link.active {
            color: #0061f2;
            border-bottom-color: #0061f2;
        }

        .nav-borders .nav-link {
            color: #69707a;
            border-bottom-width: 0.125rem;
            border-bottom-style: solid;
            border-bottom-color: transparent;
            padding-top: 0.5rem;
            padding-bottom: 0.5rem;
            padding-left: 0;
            padding-right: 0;
            margin-left: 1rem;
            margin-right: 1rem;
        }

        .row {
            justify-content: center;
        }

    </style>
    @endsection
