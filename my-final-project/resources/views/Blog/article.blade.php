<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title> 

        {!! Html::style("blog/css/bootstrap.min.css") !!}
        {!! Html::style("blog/css/my-style.css") !!}
        {!! Html::style("blog/css/buttons.css") !!}
        

        <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
        {!! Html::script("blog/js/editor.js") !!}

        <link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

        {!! Html::style("blog/css/editor.css") !!}
        <script type="text/javascript">
                $(document).ready( function() {
                    
                 $("#txtEditor").Editor();                     
            });
          </script>

        <style>
            .form-title-text h1{
                float: left;
                padding-left: 20px;
                padding-top: 30px;
                font: normal 24px/1.5 'Open Sans', sans-serif;
                color: blue;
            }
            .butt{
                margin-left: 400px;
                margin-top: 50px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <header>
                    <img src=" {{ asset('blog/img/article.png')  }}"><h1>Article and Blog</h1>         
                    {{--<div class="form-title-text">
                       <h1>Add A New Project</h1>
                   </div>--}}
                   <a href="{{ url('/form/add-blog') }}">
                        <button class="btn btn-lg btn-info butt">+ Add New Blog </button>
                   </a>
                </header>

            </div>
            <hr class="hr"><br>

            <h2 class="demo-text">Write Your Article</h2>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 nopadding">
                            <div id="txtEditor"></div> 
                        </div>
                    </div>  
                </div>

            <div class="box bg-1" id="butt">
                <button class="button button--tamaya button--border-thick" data-text="Save"><span>Save</span></button>
                <button class="button button--tamaya button--border-thick" data-text="Cencel"><span>Cencel</span></button>

                {{--<button type="submit" class="btn btn-info">Save</button>
                <button type="reset" class="btn btn-danger">Reset</button>--}}
            </div>
        </div>


        <script type="text/javascript">

          var _gaq = _gaq || [];
          _gaq.push(['_setAccount', 'UA-36251023-1']);
          _gaq.push(['_setDomainName', 'jqueryscript.net']);
          _gaq.push(['_trackPageview']);

          (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
          })();

        </script>
    </body>
</html>
