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

        </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

            <div class="container">
            <div class="head-sec">
               <div class="head-logo-sec">
                   <img src="http://www.master-hr.com/Content/Media/c0d993561fce4e44b322bc13cc4aeabd/CERTIFICATION_iStock_000012883493XSmall.jpg">
               </div> 
               <div class="form-title-text">
                   <h1>Add A New Certification</h1>
               </div>
            
            </div> 
        </div>
        <hr class="hr">
          <div class="container">
            <div class="row ">
              <div class="col-sm-6  ">
                <form action="" method="post">
                  <input type="hidden" name="_token" value="{{ csrf_token()}}">
                  <div class="form group bg-success ">
                    
                  <input type="hidden" name="user_id" value="{{$user_id}}">  
                  
                  <label for="name" class="control-label">Certification Name *</label>
                  <input type="text" name="name" class="form-control" required>

                  <label for="authority" class="control-label">Certification Authority *</label>
                  <input type="text" name="authority" class="form-control" required>

                  <label for="license" class="control-label">Licemse Number *</label>
                  <input type="text" name="license" class="form-control" required>

                  <label for="url" class="control-label">Certification URL *</label>
                  <input type="text" name="url" class="form-control" required>

                  <label for="date" class="control-label">Project Date *</label>
                  <input type="date" name="date" class="form-control" >

                  <hr>

                  
                
                </div>
                <button type="submit" class="btn btn-info">Save</button>
                <button type="reset" class="btn btn-danger">Reset</button>
                </form>
              </div>
              </div> 
           </div>
          </div>
        

   
   @endsection