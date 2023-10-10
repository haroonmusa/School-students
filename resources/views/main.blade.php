<!DOCTYPE html>
<html lang="en">
<head>
    <title>ABC School</title>
    <style>
        table td, th { border: 2px solid black }
    </style>
</head>
<body>

    <h1><center>Student Data</center></h1>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Id</th>
                <th>NAME</th>
                <th>EMAIL</th>
                <th>CLASS</th>
                <th>SECTION</th>
                <th>ROLL #</th>
                <th>Action</th>
            </tr>
            <tbody>
                @foreach ( $school as $data )
                <tr>
                    <td>{{$data->id}}</td>
                    <td>{{$data->name}}</td>
                    <td>{{$data->email}}</td>
                    <td>{{$data->class}}</td>
                    <td>{{$data->section}}</td>
                    <td>{{$data->roll}}</td>
                    <td>
                        <a href="{{url('/delete/'.$data->id)}}"><button>Delete</button> </a>
                        <a href="{{url('/edit/'.$data->id)}}"><button>Edit</button></a>
                    </td>
                </tr>

                @endforeach
            </tbody>
        </thead>
    </table>
    <br>

    <a href="{{url('/main/create')}}"> <button>Create</button> </a>
</body>
</html>
