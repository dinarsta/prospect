@extends('layout.main')
@section('content')

<head>

    <script src="{{ asset('js/jam.js') }}"></script>
    <style>
        #watch {
            color: rgb(252, 150, 65);
            position: absolute;
            z-index: 1;
            height: 40px;
            width: 700px;
            overflow: show;
            margin: auto;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            font-size: 10vw;
            -webkit-text-stroke: 3px rgb(210, 65, 36);
            text-shadow: 4px 4px 10px rgba(210, 65, 36, 0.4),
                4px 4px 20px rgba(210, 45, 26, 0.4),
                4px 4px 30px rgba(210, 25, 16, 0.4),
                4px 4px 40px rgba(210, 15, 06, 0.4);
        }

        .card {
            align-content: center;
        }

    </style>
    </head>
<body class="hold-transition" onload="realtimeClock()">
    <div class="content-wrapper">
        <div class="content">
            <div class="card card-info card-outline mx-5">
                <div class="card-body">
                      <form action="{{ route('ubah-presensi') }}" method="post">  
                        {{ csrf_field() }}
                        <div class="form-group p-5">
                            <center>
                                <label id="clock" style="font-size: 100px; color: #ff003c; -webkit-text-stroke: 3px #ec2a2a;
                                                    text-shadow: 4px 4px 10px #FF5858,
                                                    4px 4px 20px #FF97C1,
                                                    4px 4px 30px#FF97C1,
                                                    4px 4px 40px #FF97C1;">
                                </label>
                            </center>
                        </div>
                        <center>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Klik Untuk Presensi Keluar</button>
                            </div>
                        </center>
                    </form>
                </div>
            </div>

        </div>
    </div>
    @endsection
