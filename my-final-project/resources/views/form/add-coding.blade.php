<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title> 

        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">


        <!-- css code for button -->
        <style type="text/css">
            /* Box colors */
            .bg-1 {
               /* background: #ECEFF1;*/
                /*color: #37474f;*/
            }
            #butt{
                padding-left: 30px;
            }

            /* Common button styles */
            .button {
                float: left;
                min-width: 150px;
                max-width: 250px;
                display: block;
                margin: 1em;
                padding: 1em 2em;
                border: none;
                background: none;
                color: inherit;
                vertical-align: middle;
                position: relative;
                z-index: 1;
                -webkit-backface-visibility: hidden;
                -moz-osx-font-smoothing: grayscale;
            }
            .button:focus {
                outline: none;
            }
            .button > span {
                vertical-align: middle;
            }

            /* Text color adjustments (we could stick to the "inherit" but that does not work well in Safari) */
            .bg-1 .button {
                color: #37474f;
                border-color: #37474f;
            }


            /* Borders */

            .button--border-thick {
                border: 3px solid;
            }


            /* Tamaya */
            .button--tamaya {
                overflow: hidden;
                color: #7986cb;
                min-width: 180px;
            }
            .button--tamaya.button--inverted {
                color: #37474f;
                border-color: #37474f;
            }
            .button--tamaya::before,
            .button--tamaya::after {
                content: attr(data-text);
                position: absolute;
                width: 100%;
                height: 50%;
                left: 0;
                background: #7986cb;
                color: #fff;
                overflow: hidden;
                -webkit-transition: -webkit-transform 0.3s;
                transition: transform 0.3s;
                -webkit-transition-timing-function: cubic-bezier(0.2, 1, 0.3, 1);
                transition-timing-function: cubic-bezier(0.2, 1, 0.3, 1);
            }
            .button--tamaya.button--inverted::before,
            .button--tamaya.button--inverted::after {
                background: #fff;
                color: #37474f;
            }
            .button--tamaya::before {
                top: 0;
                padding-top: 1em;
            }
            .button--tamaya::after {
                bottom: 0;
                line-height: 0;
            }
            .button--tamaya > span {
                display: block;
                -webkit-transform: scale3d(0.2, 0.2, 1);
                transform: scale3d(0.2, 0.2, 1);
                opacity: 0;
                -webkit-transition: -webkit-transform 0.3s, opacity 0.3s;
                transition: transform 0.3s, opacity 0.3s;
                -webkit-transition-timing-function: cubic-bezier(0.2, 1, 0.3, 1);
                transition-timing-function: cubic-bezier(0.2, 1, 0.3, 1);
            }
            .button--tamaya:hover::before {
                -webkit-transform: translate3d(0, -100%, 0);
                transform: translate3d(0, -100%, 0);
            }
            .button--tamaya:hover::after {
                -webkit-transform: translate3d(0, 100%, 0);
                transform: translate3d(0, 100%, 0);
            }
            .button--tamaya:hover > span {
                opacity: 1;
                -webkit-transform: scale3d(1, 1, 1);
                transform: scale3d(1, 1, 1);
            }
        </style>
        
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
            .add-butt{
                float: right;
            }
            .add-butt img{
                width: 120px;
                height: 120px;
            }
            .add-butt img:hover{
                border: 4px solid #C0E2C1;
                cursor: pointer;

            }

        </style>

       

        <style type="text/css">
            /*.content {
                font-size: 150%;
                padding: 3em 0;
            }*/
                
            #butt{
                margin-top: 20px;
            }


            #boda{
                border: 2px solid #6caee0;
            }


            /*Account*/

            .account-connect-box {
                margin-left: 30px;
            }

            .account-connect-box {
                width: 240px;
                height: 120px;
                -webkit-border-radius: 3px;
                -moz-border-radius: 3px;
                border-radius: 3px;
                border: 2px solid #C0E2C1;
                overflow: hidden;
            }

            .less-margin-2 {
                margin: 10px 0 0 0;
                margin-left: 100px;
            }

           
            /*logo section*/
            .account-connect-box:hover {
              border: 4px solid #C0E2C1;
            }

            .codeforces img{
                background-position: 0 -439px;
                width: 180px;
                height: 120px;
            /*    margin-top: 16px;*/
                margin-left: 30px;
                /*margin-right: 20px;*/

                background-size: 658% 2298%;
                overflow: hidden;
            }

           
            .topcoder img{
                background-position: -162px -245px;
                width: 200px;
                height: 100px;
                /*margin-top: 15px;*/
                margin-left: 20px;
                margin-right: 20px;
            }

            .uva img{
                background-position: -162px -245px;
                width: 200px;
                height: 100px;
                margin-top: 7px;
                margin-left: 20px;
                margin-right: 20px;
            }

            .spoj img{
                background-position: -162px -245px;
                width: 180px;
                height: 50px;
                margin-top: 30px;
                margin-left: 30px;
                /*margin-right: 20px;*/
            }

            .hackerrank img{
                background-position: -162px -245px;
                width: 200px;
                height: 120px;
            /*    margin-top: 7px;*/
                margin-left: 20px;
                margin-right: 20px; 
            /*    margin-bottom: 10px;*/
            }

            .hackerearth img{
                background-position: -162px -245px;
                width: 200px;
                height: 50px;
                margin-top: 35px;
                margin-left: 20px;
                margin-right: 20px; 
            /*    margin-bottom: 10px;*/ 
            }


            .stackoverflow img{
                background-position: -162px -245px;
                width: 200px;
                height: 80px;
                margin-top: 10px;
                margin-left: 20px;
               /* margin-right: 20px; */
            /*    margin-bottom: 10px;*/ 

            }

            .github img{
               background-position: -162px -245px;
                width: 200px;
                height: 90px;
                margin-top: 7px;
                margin-left: 20px;
                /*margin-right: 20px;*/ 
            /*    margin-bottom: 10px;*/
            }

            .quora img{
               background-position: -162px -245px;
                width: 200px;
                height: 90px;
                margin-top: 10px;
                margin-left: 20px;
                /*margin-right: 20px; */
            /*    margin-bottom: 10px;*/ 
            }

            hr.line {
                display: block;
                height: 1px;
                border: 0;
                border-top: 3px solid #C0E2C1;
                padding: 0;
                width: 90%;
            }


        </style>

         <!-- css for logo table -->
        <style type="text/css">
            .un-or-li {
                list-style: none;
            }

            .un-or-li .or-li a.active{
                background-color: #F05283;
                pointer-events: none;
            }

            .un-or-li .or-li a:hover {
                opacity: 1;
            }


            .un-or-li .or-li{
                display: inline-block;   
            }

            .main-content{
                margin-bottom: 75px;
            }

        </style>

    </head>
    <body>
        <div class="container">
            <div class="head-sec">
               <div class="head-logo-sec">
                   <img src="https://cdn4.iconfinder.com/data/icons/seo-internet-marketing-1-3/256/Custom_Coding-512.png">
               </div> 
               <div class="form-title-text">
                   <h1>Competitive Coding and Online Activities</h1>
               </div>
               
            </div> 
        </div>
        <hr class="hr">

        <div class="container">
            
                <ul class="un-or-li">
                    <li class="or-li">
                        <a href="">
                            <div class="account-connect-box float-left less-margin-2">
                                <div class="codeforces "> 
                                    <img src="http://www.ime.usp.br/~arcjr/image/codeforces.png" > 
                                </div>
                            </div>
                        </a>
                    </li>

                    <li class="or-li">
                        <a href="">
                            <div class="account-connect-box float-left less-margin-2">
                                <div class="topcoder "> 
                                    <img src="http://pbs.twimg.com/profile_images/432893313331367937/lODuupRn.png" > 
                                </div>
                            </div>
                        </a>        
                    </li>

                    <li class="or-li">
                        <a href="">
                            <div class="account-connect-box float-left less-margin-2">
                                <div class="uva "> 
                                    <img src="https://qph.is.quoracdn.net/main-thumb-t-1389953-200-ygqvlmuxwyotahovtcnkevhyinktomtv.jpeg" > 
                                </div>
                            </div>
                        </a>        
                    </li>

                    <li class="or-li">
                        <a href="">
                            <div class="account-connect-box float-left less-margin-2">
                                <div class="spoj "> 
                                    <img src="http://www.spoj.com/gfx/2015e.png" > 
                                </div>
                            </div>
                        </a>        
                    </li>

                     <li class="or-li">
                        <a href="">
                            <div class="account-connect-box float-left less-margin-2">
                                <div class="hackerrank "> 
                                    <img src="http://techspirit.in/wp-content/uploads/2015/07/HackerRank_logo.png" > 
                                </div>
                            </div>
                        </a>        
                    </li>

                    <li class="or-li">
                        <a href="">
                            <div class="account-connect-box float-left less-margin-2">
                                <div class="hackerearth "> 
                                    <img src="http://blog.hackerearth.com/wp-content/uploads/2015/09/logo_new.png" > 
                                </div>
                            </div>
                        </a>        
                    </li>

                    <hr class="line">

                    <li class="or-li">
                        <a href="">
                            <div class="account-connect-box float-left less-margin-2">
                                <div class="stackoverflow "> 
                                    <img src="https://upload.wikimedia.org/wikipedia/en/9/95/Stack_Overflow_website_logo.png" > 
                                </div>
                            </div>
                        </a>        
                    </li>

                     <li class="or-li">
                        <a href="">
                            <div class="account-connect-box float-left less-margin-2">
                                <div class="github "> 
                                    <img src="http://doc.rultor.com/images/github-logo.png" > 
                                </div>
                            </div>
                        </a>        
                    </li>

                     <li class="or-li">
                        <a href="">
                            <div class="account-connect-box float-left less-margin-2">
                                <div class="quora "> 
                                    <img src="http://guidingnote.com/wp-content/uploads/2015/06/Quora-Logo-EPS-vector-image-e1434263979764.png" > 
                                </div>
                            </div>
                        </a>        
                    </li>

                </ul>
            
        </div>
        
        <hr class="hr"> 
        <div class="container" id="butt">
             <button class="button button--tamaya button--border-thick" data-text="Save"><span>Save</span></button>
            <button class="button button--tamaya button--border-thick" data-text="Cencel"><span>Cencel</span></button>
        </div>
        
    </body>
</html>
