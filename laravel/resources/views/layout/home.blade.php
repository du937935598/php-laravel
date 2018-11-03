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
        <div class="wrapper">
            <div class="header">
                这是header
            </div>
            <!-- @yield('content') -->
            @section('content')
            <p>我是主模板内容</p>
            @show
            <div class="footer">
                这是footer
            </div>
        </div>
    </body>
</html>
