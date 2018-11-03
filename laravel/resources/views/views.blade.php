<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
    </head>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        .wrapper{
            width: 100%;
        	height: 100%;
        	position: fixed;
        	top: 0;
        	display: flex;
        	flex-direction: column;
        }
        .wrapper > div{
            display:flex;
            justify-content:center;
            align-items:center;
        }
        .header{
            display:flex;
            background: darkred;
            height: 140px;
        }
        .content{
            flex:1;
            background: lightblue;
        }
        .footer{
            background: yellowgreen;
            height: 80px;
        }
    </style>
    <body>
    <!-- <form class="" report-submit="false" bindsubmit="" bindreset="">
        {{ csrf_field }}
        @if(session('msg'))
            <p>{{ session('msg') }}</p>
        @endif
    </form> -->
        <div class="wrapper">
            @include('common.header',['page'=>'首页views'])
            <div class="content" lang='0' onClick="this.attr('lang')=Math.round">
                这是content
            </div>
            @include('common.footer',['page'=>'底部'])
        </div>
    </body>
</html>
