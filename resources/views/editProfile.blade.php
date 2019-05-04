<!DOCTYPE html>
<html lang="en" >

<head>
    <meta charset="UTF-8">
    <title>Profile Edit View</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css'>
    <link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css'>

    <style>
        /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
        @import url(https://fonts.googleapis.com/css?family=Lato:100,300,400,700);
        @import url(https://fonts.googleapis.com/css?family=Montez);

        body{
            background-color: #f5f5f5;
            font-family: Lato;
        }
        .profile,.content{
            -webkit-transition: 0.5s ease;
            -moz-transition: 0.5s ease;
            transition: 0.5s ease;
        }
        .profile{
            position: absolute;
            top: 100px;
            bottom: auto;
            left: 0;
            right: 0;
            min-height: 100%;
            height: auto;
            width: 75%;
            margin: 20px auto;
            margin-bottom: 100px;
            background-color: #fff;
            border-top: 5px solid #3d91f2;
            border-radius: 0 0 5px 5px;
            box-shadow: 0 2.5px 5px #ccc;
        }
        .content{
            /* position: absolute; */
            min-height: 100%;
            height: 100%;
            width: 95%;
            margin: 2.5% auto;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            /*border: 1px solid #eee;*/
            /*background-color: yellow;*/
            overflow: hidden;
        }
        .short-info{
            position: relative;
            min-height: 100px;
            height: auto;
            width: 97.5%;
            margin: 1.5% auto;
            /*background-color: #f5f5f5;*/
            background-color: #fff;
            background-color: #f2ecee;
            /*border-top: 2px solid #3d91f2;*/
            border-radius: 2.5px;
            /*box-shadow: inset 0 -1.5px #ddd;*/
        }
        .details{
            width: 97.5%;
            /*background-color: red;*/
            margin: 2.5px auto;
        }
        .tab-heads{
            color: #777;
            margin: 0 2.5px;
        }
        .tabs{
            height: 200px;
            width: 97.5%;
            margin: 0 auto;
            /* border-top: 2.5px solid #3d91f2; */
            background-color: #f2ecee;
            border-radius: 2.5px;
            /* background-color: #f3f3f3; */
        }
        span.fa-envelope{
            position: absolute;
            top: 22%;
            left: 56%;
            color: #3d91f2;
        }
        span.photo{
            position: relative;
            height: 80px;
            width: 80px;
            border-radius: 5px;
            margin: 10px 0 2.5px;
            display: block;
            top: 10%;
            left: 10%;
            overflow: hidden;

            background-size: 100%;
            border-radius: 100%;
            border: 2px solid #ddd;
        }
        span.photo:after{
            content: " Add Profile Pic ";
            text-align: center;
            position: absolute;
            left: 0;
            z-index: 2;
            padding: 35% 0 65%;
            height: 0;
            width: 100%;
            opacity: 0;
            color: #222;
            background-color: rgba(0,0,0,0.25);
            background-size: 100%;
            transition: 0.35s ease-in-out;
            overflow: hidden;
            border-radius: 100%;
        }
        span.photo:hover:after{
            bottom: 0;
            opacity: 1;
            color: #fff;
        }
        input[type="file"]{
            /* position: absolute; */
            color: #555;
            font-size: 15px;
            top: 25%;
            box-shadow: none !important;
            margin-left:  !important;
            background-color: #ededed;
            width: 200px;
            border: 0;
        }

        span.name,span.links > h3,h4{
            font-family: Lato;
            /*font-weight: 200;*/
        }
        span.name{
            position: absolute;
            top: 20%;
            left: 25%;
            color: #555;
            font-size: 18px;
        }
        label{
            color: #555;
            line-height: 2.1em;
            margin-left: 10px;
        }
        label[for="avatar"]{
            line-height: 120px;
        }
        .btn{
            /* position: absolute; */
            top: 45%;
            left: 25%;
            /* color: #fff; */
            /* background-color: rgba(57,203,88,0.65); */
            background-color: #ddd;
            padding: 10px 15px;
            border-radius: 3px;
            box-shadow: inset 0 0 0 2px #3d91f2,
            0 2px 0 0 rgba(57,203,88,0.5);
            cursor: pointer;
            transition: 0.5s ease;
        }
        span.btn:hover{
            opacity: 1;
            color: #fff;
            background-color: rgba(57,203,88,1);
            /* background-color: #3d91f2; */
        }
        .profile:hover .btn{
            opacity: 1;
        }
        .short-info span h3,h4{
            display: inline-block;
            margin: 0;
        }

        div.circles{
            width: 100%;
            margin: 0 auto;
        }
        span.fa-users{
            color: #777;
            margin-left: 1px;
            margin: 7px 7px 2.5px;
        }
        span.fa-users:after{
            content: "Circles";
            font-family: Lato;
            margin-left: 3px;
            color: #777;
        }
        .myCircle{
            height: 200px;
            width: 97.5%;
            margin: 0 auto;
            background-color: #f2ecee;
            border-radius: 2.5px;
        }

        /*Circles Styles
        =========================*/
        .myCircle #tabs ul li:nth-child(1){
            margin: 0;
            padding: 0px 5px 10px;
            /*margin-top: 5px;*/
            background-color: white;
            border-radius: 0 0 0 30px;
        }
        .myCircle #tabs ul li:nth-child(2){
            margin-left: -3px;
            padding: 0 5px 10px;
            border-radius: 0 0 30px 0;
            background-color: white;
        }
        .myCircle #tabs .active{
            border-bottom: none;
            padding-left: 10px;
        }
        .myCircle #tabs{
            padding: 0;
            margin: 0;
        }
        .fa-twitter,.fa-facebook,.fa-github{
            height: 20px;
            width: 20px;
            text-align: center;
            line-height: 20px;
            padding: 2.5px;
            margin-left: -15px;
        }

        /*Input Fields Styles
        =========================*/
        fieldset textarea,input{
            font-family: Open Sans;
            font-size: 15px;
            color: #333;
            background-color: #f7f7f7;
            box-shadow: 0 0 0 1px #3d91f2;
            padding: 5px;
            width: 75%;
            margin: 5px auto;
            border: 0;
            border-radius: 2.5px;
            outline: 0;
            transition: 0.3s ease;
        }
        fieldset textarea{
            min-height: 40px;
            max-height: 60px;
        }
        fieldset textarea:hover,input:hover{
            box-shadow: 0 0 0 1px #3d91f2;
            background-color: #fff;
        }
        fieldset textarea:focus,input:focus{
            box-shadow: 0 0 0 1px #3d91f2,
            inset 0 2px 5px -1px rgba(0,0,0,0.25);
        }

        .grid-35{
            width: 35%;
            float: left;
            font-weight: 500;
            color: #333;
            /* text-align: left; */
        }
        .grid-65{
            position: relative;
            width: 65%;
            float: right;
            font-family: Source Sans Pro;
            font-weight: 300;
            font-size: 17px;
        }
        #tabs-1 div,#tabs-2 div,#tabs-3 div{
            border-bottom: 1px solid #ddd;
        }

        /*Tabs Styles
        =========================*/
        #tabs {
            width: 97.5%;
            margin: 0 auto;
            position: relative;
            -webkit-transition: all 0.5s ease;
            -moz-transition: all 0.5s ease;
            transition: all 0.5s ease;
        }
        #tabs-1,#tabs-2,#tabs-3{
            width: 95%;
            margin: 0 auto;
            /*margin-top: 5px;*/
            padding: 5px 10px;
            line-height: 1.3em;
            padding-bottom: 10px;
            font-family: Open Sans;
            background-color: #f2ecee;
            border-radius: 0 2.5px 2.5px 2.5px;
            -webkit-transition: all 0.5s ease;
            -moz-transition: all 0.5s ease;
            transition: all 0.5s ease;
        }
        #tabs ul{
            margin: 0 auto;
            padding: 0;
        }
        #tabs ul li{
            display: inline-block;
            margin: 0;
            padding: 0 7px;
            width: 65px;
            text-align: center;
            padding-bottom: 5px;
            -webkit-transition: all 0.5s ease;
            -moz-transition: all 0.5s ease;
            transition: all 0.5s ease;
        }
        #tabs ul li a{
            outline: 0;
            text-decoration: none;
            padding: 0 3px 0 0;
            /* background-color: #222; */
            font-family: Open Sans;
            margin: 0;
            -webkit-transition: all 0.5s ease;
            -moz-transition: all 0.5s ease;
            transition: all 0.5s ease;
        }

        .ui-state-hover{
            border-bottom: 2.5px solid #aaa;
        }
        .ui-state-active{
            color: #38cc85;
            border-bottom: 2.5px solid #3d91f2;
        }

        /* #CLEARFIX HACK
        =========================*/
        .clear:after{
            content: " ";
            display: table;
            clear: both;
        }

        /* Edit View
        ======================*/
        .content h1{
            text-align: center;
            color: #555;
            font-family: Lato;
            font-size: 40px;
            font-weight: 200;
            margin: 5px auto 15px auto;
        }
        select{
            width: 80%;
            padding: 7px 10px;
            background-color: #f5f5f5;
            border: 1px solid #3d91f2;
            border-radius: 2.5px;
            outline: 0;
        }
        select option{
            padding: 5px;
        }
        fieldset{
            text-align: center;
            /* background-color: rgba(0,0,0,0.01); */
            margin-bottom: 5px;
            padding: 5px;
            box-sizing: border-box;
            border-bottom: 1px solid rgba(0,0,0,0.07);
        }
        fieldset:last-child{
            border-bottom: none;
        }
        input.Btn{
            width: 48%;
            float: left;
            display: block;
            margin: 40px auto;
            margin-left: 1%;
            padding: 15px 0;
            font-size: 16px;
            color: #fff;
            cursor: pointer;
            background-color: rgba(57,203,88,0.65);
            box-shadow: inset 0 0 0 2px #3d91f2,
            0 2px 0 0 rgba(57,203,88,0.5);
            transition: 0.5s ease;
        }
        input.Btn:hover{
            background-color: rgba(57,203,88,1);
        }

        /* Header Bar
        ===========================*/
        .navbar{
            padding: 10px;
            box-shadow: 0 2.5px 10px rgba(0,0,0,0.5);
        }
        div.logo{
            /*    margin: 0 auto;*/
            /*    text-align: center;*/
            font-size: 30px;
            font-family:"Source Sans Pro";
            color:#3d91f2;
            width: 100%;
            /*    display: inline-block;*/
            /*    position: absolute;*/
            /*    top:0px;*/
            /*    left:0;*/
            right: 0;
            z-index: 2;
        }
        span.logo-part{
            color:#fff;
            background-color: #3d91f2;
            padding: 2px 5.5px 0px 10px;
            border-radius:100%;
            margin-bottom:15px;
            font-family: "Montez";
        }
        .search{
            /*    margin-top:5px;
            /*    border:0;*/
            float: left;
            position: relative;
            top:4px;
            right: 100px;
            padding-bottom: 0;
        }
        .search-bar{
            /*    border:0;*/
            width:220px;
            color:white;
            background-color:#eee;
            font-family: "Lato","Open Sans",Helvetica,Arial;
            border-top: 2px solid black;
            padding: 5px;
            padding-left: 15px;
            display: inline;
            border-radius: 50px;
            -webkit-transition: 0.4s ease;
            transition: 0.4s ease;
        }
        .search-icon{
            color:gray;
            margin-left:-27.5px;
        }
        .search-bar:focus{
            width:255px;
            outline:none;
        }
        .navbar-nav li a{
            padding-left: 8.5px;
            padding-right: 8.5px;
            font-size: 12px;
            transition: 0.5s ease;
        }
        .navbar-nav li a > span.fa:before{
            margin-right: 5px;
            /* background-color: #ddd; */
        }



        /*Media Queries
        =========================*/
        @media only screen and (min-width: 768px){ /*Desktop*/
            .profile{
                width: 450px;
            }
            .search{
                float: none;
                /* top: 0; */
                left: 0;
                right: 0;
                margin: 0 auto;
            }
        }
        @media only screen and (max-width: 768px){ /*Tablet*/
            .profile{
                width: 70%;
            }
            .search{
                top: 0;
                left: 0;
                right: 0;
                display: block;
                margin: 0 auto;
            }
        }
        @media only screen and (min-width: 320px) and (max-width: 520px){ /*Phone*/
            .profile{
                width: 90%;
            }
        }


    </style>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</head>

<body>

<div class="wrapper">
    <div class="profile">
        <div class="content">
            <h1>Edit Profile</h1>
            <form method="post" action="{{url('edit')}}" enctype="multipart/form-data">
                {{csrf_field()}}
        
                <!-- Photo -->

                    <div class="grid-35">

                    </div>
                    <div class="grid-65">
                        <span style="background: url('/images/{{$data["avatar"]}}.jpg'); background-size: 100% 100%;" class="photo" title="Upload your Avatar!"></span>

                    </div>
                    <input type="file" name="filename[]" class="form-control">

                    <div style="width:100%;height:80px;">
                            <label for="fname" style="width:70px;">Name:</label>
                            <input style="width:150px;margin-right:30%;float:right;" name="name" value="{{$data["name"]}}" type="text" id="name" tabindex="1" />
                    </div>


                <!-- Description about User -->
                <div style="width:100%;height:80px;">
                        <label for="fname" style="width:70px;">bio:</label>
                        <textarea style="width:150px;margin-right:30%;float:right;" placeholder="your bio" name="text" id="" style="height:30px;" cols="30" rows="auto" tabindex="1"> {{$data["text"]}}</textarea>
                </div>
                <div style="width:100%;height:80px;">
                        <label for="email">Email Address:</label>
                        <input style="width:150px;margin-right:30%;float:right;" name="email" value="{{$data["email"]}}" type="email" id="email" tabindex="6" />
                </div>
                <div style="width:100%;height:80px;">
                    <div class="grid-65">
                        <button type="submit"> submit</button>
                    </div>
                </div>
                <!-- Looking for Work -->


            </form>
        </div>
    </div>
</div>



<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js'></script>



<script>

    $("#tabs").tabs({
        activate: function (event, ui) {
            var active = $('#tabs').tabs('option', 'active');
            $("#tabid").html('the tab id is ' + $("#tabs ul>li a").eq(active).attr("href"));
        }
    });
</script>

</body>

</html>