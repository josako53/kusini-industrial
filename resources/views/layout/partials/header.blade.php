<?php



require 'app/start.php';
require_once 'init/escape.php';

$errors = isset($_SESSION['errors'])? $_SESSION['errors'] : [];
$fields = isset($_SESSION['fields'])? $_SESSION['fields'] : [];
$message = isset($_SESSION['message'])? $_SESSION['message'] : [];

?>
        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Kusini Gateway Industrial Co.ltd</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">




</head>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('/') }}">Kusini <span class="em-text">Industrial</span></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{url('about')}}">About</a></li>
                <li><a href="{{url('service')}}">Services</a></li>
                <li><a href="{{url('work')}}">Work</a></li>
                <li><a href="{{url('blog')}}">Blog</a></li>
                <li><a href="{{url('contact')}}">Contacts</a></li>
            </ul>
        </div>
    </div>
</nav>