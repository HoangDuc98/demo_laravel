@extends('layouts.master')
@section('content')
{{--    <!doctype html>--}}
{{--    <html lang="en">--}}
{{--    <head>--}}
{{--        <meta charset="UTF-8">--}}
{{--        <meta name="viewport"--}}
{{--              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">--}}
{{--        <meta http-equiv="X-UA-Compatible" content="ie=edge">--}}
{{--        <title>Document</title>--}}
{{--        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"--}}
{{--              integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"--}}
{{--              crossorigin="anonymous">--}}
{{--    </head>--}}
{{--    <body>--}}
{{--    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"--}}
{{--            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"--}}
{{--            crossorigin="anonymous"></script>--}}
{{--    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"--}}
{{--            integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"--}}
{{--            crossorigin="anonymous"></script>--}}
    <div class="container">
        <div class="col-12 col-md-12">
                <a href="{{route('user.create')}}" class="btn btn-success">ADD</a>
            <form action="{{route('user.search')}}" class="form-inline mr-auto w-100 navbar-search">
                <div class="input-group">
                    <input type="text" name="keyword" class="form-control bg-light border-0 small"
                           placeholder="Search for..." aria-label="Search"
                           aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">
                            <i class="fas fa-search fa-sm"></i>
                        </button>
                    </div>
                </div>
            </form>
                <table class="table">
                <thead class="thead-light">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Username</th>
                    <th scope="col">Email</th>
                    <th scope="col">Role</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $key => $user)
                    <tr>
                        <th scope="row">{{$key + 1}}</th>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>
                            @foreach($user->roles as $role)
                                {{$role->name . ';'}}
                            @endforeach
                        </td>
                        <td><a onclick="return confirm('Xoa nhe nguoi ae?')" href="{{route('delete.store', $user->id)}}"
                               class="btn btn-danger">Delete</a>
                            <a href="{{route('update.store', $user->id)}}" class="btn btn-primary">Edit</a>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>
    </body>
    </html>
@endsection
