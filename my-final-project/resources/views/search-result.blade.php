@extends('master')

@section('content')

    <style type="text/css">
         .viewpage{
            margin-left: 30px;
            margin-top: 30px;
            margin-right: 200px;
         }
         h1{
            font-weight: bold;
         }
         a{
            cursor: pointer;
         }
    </style>

    @foreach($user_list as $list)
        <div class="viewpage">
            <h1><a href=" {{ url('/view-profile/$list->name')  }} ">{{$list->name}}</a></h1>
        </div>
     @endforeach
@endsection
