@extends('master')

@section('content')
<style type="text/css">
            .head-sec{
                margin-right: -15px;
                margin-left:  -15px;
            }
            .head-sec .head-logo-sec img{
                float: left;
                height: 120px;
                width: 150px;
            }

            .form-title-text h1{
                float: left;
                padding-left: 20px;
                padding-top: 30px;
                font: normal 24px/1.5 'Open Sans', sans-serif;
                color: blue;
            }
            hr {
                display: block;
                -webkit-margin-before: 0.5em;
                -webkit-margin-after: 0.5em;
                -webkit-margin-start: auto;
                -webkit-margin-end: auto;
                border-style: inset;
                border-width: 2px;
            }

            hr.hr {
                display: block;
                height: 1px;
                border: 0;
                border-top: 3px solid #e5e7e8;
                padding: 0;
                width: 90%;
            }

            .button{
            	margin-left: 400px;
            	margin-top: 50px;
            }

        </style>
    
    
        <div class="container">
            <div class="head-sec">
               <div class="head-logo-sec">
                   <img src="http://www.beep.es/blog/wp-content/uploads/2015/05/oficina.jpg">
               </div> 
               <div class="form-title-text">
                   <h1>Experiences</h1>
               </div>
        
            </div> 
                <a href="{{ url('/form/add-experience') }}">
<button class="btn btn-lg btn-info button">+ Add New Experience </button>
</a>
        </div>
        <hr class="hr">
<style type="text/css">
 .viewpage{
 	margin-left: 30px;
 	margin-top: 30px;
 	margin-right: 200px;
 }
 h1{
    font-weight: bold;
 }
 h3{
    color: green;
 }
 small{
    color: blue;
 }
 h5{
    color: green;
 }
 .date{
    color: orange;
 }
 p{
    font-size: 18px;
 }
 .button2{
    margin-left: 800px;
    margin-top: 50px;
 }
</style>

@foreach($exp_list as $list)
    <div class="viewpage">
        <h1>{{$list->name}}</h1>
        <h3>{{$list->role}}</h3>
        <small>{{$list->address}}</small>
        <p class="date">{{$list->duration}}</p>
        <p>{{$list->description}}</p>
        <form action="">
          <input type="hidden" name="_token" value="{{ csrf_token()}}">
          <a class="btn btn-danger button2" href="{{url('/experience?delete='.$list->id)}}">Delete</a><hr>
        </form>
    </div>
 @endforeach
@endsection
