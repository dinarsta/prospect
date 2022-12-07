<!DOCTYPE html>
<html>

<head>
    <style>
        table {
            border-collapse: collapse;
        margin: auto;
          
        }

        th,
        td {
         font-size: 18px; 
        }

        h2 {
            text-align: center;
            margin-bottom: 30px;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

    </style>
</head>

<body>


    <div style="overflow-x: auto;">

    </div>
    <!DOCTYPE html>
    <html>

    <head>
        <style>
            table {
                border-collapse: collapse;
                width: 100%;
            }

            th,
            td {
                text-align: left;
               font-size: 12px;
            }

            h2 {
                text-align: center;
                margin-bottom: 10px;
            }

            tr:nth-child(even) {
                background-color: #f2f2f2;
            }
            h2{
                margin-bottom: 30px;
            }

        </style>
    </head>

    <body>

        <h2>List Prospect</h2>

        <div style="overflow-x: auto;">

        </div>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">NO</th>
                    <th scope="col">Name</th>
                    <th scope="col">Date of Brith</th>
                    <th scope="col">Email</th>
                    <th scope="col">Address</th>
                    <th scope="col">Offie</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Potensial value</th>
                    <th scope="col">Remark</th>
                   
                </tr>
            </thead>
            <tbody>
                @php
                $no = 1;
                @endphp
                @foreach ($data as $row)
                <tr>
                    <th scope="row">{{$no++}}</th>
                    <td>{{$row->firstname}} {{$row->lastname}}</td>
                    <td>{{$row->tgl_lahir}}</td>
                    <td>{{$row->email}}</td>
                    <td>{{$row->address}}</td>
                    <td>{{$row->office}}</td>
                    <td>{{$row->phone}}</td>
                    <td>{{$row->potenvalue}}</td>
                    <td>{{$row->remark}}</td>
                  
                </tr>
                @endforeach
            </tbody>
        </table>


    </body>

    </html>
</body>

</html>
