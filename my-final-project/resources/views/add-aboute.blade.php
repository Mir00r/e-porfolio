@extends('master')

@section('content')
<div class="container">
            <div class="row ">
              <div class="col-sm-6  ">
                <form action="" method="post">
                  <input type="hidden" name="_token" value="{{ csrf_token()}}">
                  <div class="form group bg-success ">
                  
                  <input type="hidden" name="user_id" value="{{$user_id}}">
                  
                  <label for="aboutme" class="control-label"> About me *</label>
                  <textarea name="aboutme" class="form-control" rows="15"  required></textarea>
                  

                  
                <button type="submit" class="btn btn-info">Save</button>
                <button type="reset" class="btn btn-danger">Reset</button>
                </form>
              </div>
              </div> 
           </div>

@endsection