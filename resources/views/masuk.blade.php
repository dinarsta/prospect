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

        #clock {
            float: inline-start;
            margin-top: 50px;
        }

        .btn {
            justify-content: center;
            display: flex;
            
        }

        body {
            justify-content: center;
        }
    </style>
</head>

<body class="hold-transition" onload="realtimeClock()">
    <div class="content-wrapper">
        <div class="content">
            <div class="card card-info card-outline">
                <div class="card-body">
                    <form action="{{ route('simpan-masuk') }}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <center>
                                <label id="clock" style="font-size: 50px; color: #0A77DE; #00ACFE;
                                                    text-shadow: 4px 4px 10px #36D6FE,
                                                    4px 4px 20px #36D6FE,
                                                    4px 4px 30px#36D6FE,
                                                    4px 4px 40px #36D6FE;">
                                </label>
                            </center>
                        </div>

                        <div class="btn">
                            <div class="form-group mx-2">
                                <button type="submit" class="btn btn-primary">Check in</button>
                            </div>
                            <div class="form-group mx-2">
                                <a href="/ubah-presensi" class="btn btn-primary">Check out</a>
                            </div>
                        </div>
                    </form>
                    <div class="table-responsive">
                        <center>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Tanggal</th>
                                        <th>Masuk</th>
                                        <th>Keluar</th>
                                        <th>Jam Kerja</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $no = 1;
                                    @endphp
                                    @foreach ($presensi as $item)
                                    <tr>

                                        <td>{{ $item->tgl }}</td>
                                        <td>{{ $item->jamasuk }}</td>
                                        <td>{{ $item->jamkeluar }}</td>
                                        <td>{{ $item->jamkerja }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>


    </div>
    </div>
</body>

@endsection
