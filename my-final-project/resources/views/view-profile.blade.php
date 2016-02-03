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
    

        <style type="text/css">
         .viewpage{
            margin-left: 80px;
            margin-top: 30px;
            margin-right: 200px;
         }
         h1{
            font-weight: bold;
         }


        </style>

    {{-- Project --}}
    <div class="container">
        <div class="head-sec">
           <div class="head-logo-sec">
               <img src="http://sr.photos1.fotosearch.com/bthumb/CSP/CSP990/k10745950.jpg">
           </div>
           <div class="form-title-text">
               <h1>Project</h1>
           </div>

        </div>
    </div>
    <hr class="hr">


    @foreach($project_list as $list)
        <div class="viewpage">
            <h2>{{$list->title}}</h2>
        </div>
    @endforeach

    <br><br>

    {{-- Publication --}}
    <div class="container">
        <div class="head-sec">
           <div class="head-logo-sec">
               <img src="http://www.fromseas.com/admin/upload/publications.jpg">
           </div>
           <div class="form-title-text">
               <h1>Publication</h1>
           </div>
        </div>
    </div>
    <hr class="hr">


    @foreach($publication_list as $list)
        <div class="viewpage">
            <h2>{{$list->title}}</h2>
        </div>
    @endforeach
@endsection
