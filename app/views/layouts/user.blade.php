<!doctype html>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta name="viewport" content="width=device-width,initial-scale=1" />

<!-- Um host do TwitterBootstrap -->
<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/css/bootstrap.no-icons.min.css" rel="stylesheet" />

<style>
    <!--
    body{
        background-color: #EEE;
    }
    div.maincontent{
        padding: 40px; 
        border-radius: 5px; 
        moz-border-radius: 5px; 
        background-color: #FFF; 
        width: 600px; 
        margin: auto;
        margin-top: 40px;
        box-shadow: 0px 0px 10px rgba(0,0,0,0.2);
        moz-box-shadow: 0px 0px 10px rgba(0,0,0,0.2);
    }
    
    #user-nav-bar{
        text-align: right;
    }
    -->
</style>

<div class="maincontent">
    <div class="row">
        <div class="span3"><a href="/">motosucata.biz</a></div>
        <div class="span3" id="user-nav-bar"><a href="/user/create">signup</a> / <a href="/user/login">login</a></div>
    </div>
    @yield('content')
</div>