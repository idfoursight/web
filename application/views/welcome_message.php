<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Foursight | Konsultan</title>
	<!-- Google fonts --->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">

    <!-- Bootstrap & font awesome Css ---->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<style type="text/css">
	/*
 * Globals
 */
/* Links */
a,
a:focus,
a:hover {
  color: #fff;
}

/* Custom default button */
.btn-default {
  color: #fff;
  text-shadow: none;
  /* Prevent inheritence from `body` */
  background-color: transparent;
  border: 2px solid #fff;
  border-radius: 20px;
  padding: 0.5rem 2rem;
}

.btn-default:hover,
.btn-default:focus {
  background-color: rgba(255, 255, 255, 0.3);
}

/*
 * Base structure
 */
html,
body {
  height: 100%;
}

body {
  background: url(https://ltcmedia.com/wp-content/uploads/2017/05/steps.jpg) no-repeat center center fixed;
  background-size: cover;
  color: #fff;
  text-align: center;
  font-family: 'Quicksand', sans-serif;
  font-size:18px !important;
}

.cover-copy{
    color:#fff !important ;
}

.btn-notify{
    border:2px solid #fff !important;
}



/* Extra markup and styles for table-esque vertical and horizontal centering */
.site-wrapper {
  display: table;
  width: 100%;
  height: 100%;
  /* For at least Firefox */
  min-height: 100%;
  background: rgba(48, 53, 70, 0.5);
  box-shadow: inset 0 0 100px rgba(0, 0, 0, 0.5);
}

.site-wrapper-inner {
  display: table-cell;
  vertical-align: top;
}

.cover-container {
  margin-right: auto;
  margin-left: auto;
}

/* Padding for spacing */
.inner {
  padding: 30px;
}

/*
 * Header
 */
.masthead-brand {
  margin-top: 10px;
  margin-bottom: 10px;
  color:#fff !important;
}

.nav-masthead {
  text-align: center;
  display: block;
  color:#fff !important;
}

.nav-masthead .nav-link {
  display: inline-block;
  color:#fff !important;

}

@media (min-width: 768px) {
  .masthead-brand {
    float: left;
  }
  .nav-masthead {
    float: right;
  }
}

/*
 * Cover
 */
.cover {
  padding: 0 20px;
}

.cover .btn-notify {
  padding: 10px 60px;
  font-weight: 500;
  text-transform: uppercase;
  border-radius: 40px;
}

.cover-heading {
  font-weight: 500;
  text-transform: uppercase;
  letter-spacing: 10px;
  font-size: 2rem;
  margin-bottom: 15px !important;
}

.sub-header{
    font-size: 23px;
    letter-spacing:6px;
    color:#fff !important;
}

   .cover-heading
   {
        color:#fff !important;
   }

@media (min-width: 768px) {
  .cover-heading {
    font-size: 3.4rem;
    letter-spacing: 15px;
  }
}

.cover-copy {
  max-width: 500px;
  margin: 0 auto 3rem;
}

/*
 * Footer
 */
.mastfoot {
  color: #999;
  /* IE8 proofing */
  color: rgba(255, 255, 255, 0.5);
}

/*
 * Subscribe modal box
 */
#subscribeModal .modal-content {
  background-color: #303546;
  color: #fff;
  text-align: left;
}

#subscribeModal .modal-header, #subscribeModal .modal-footer {
  border: 0;
}

#subscribeModal .close {
  color: #fff;
}

#subscribeModal .form-control {
  margin-top: 1rem;
  background: rgba(0, 0, 0, 0.4);
  color: #fff;
}

#subscribeModal .form-control:focus {
  border-color: #49506a;
}

/*
 * Affix and center
 */
@media (min-width: 768px) {
  /* Pull out the header and footer */
  .masthead {
    position: fixed;
    top: 0;
  }
  .mastfoot {
    position: fixed;
    bottom: 0;
  }
  /* Start the vertical centering */
  .site-wrapper-inner {
    vertical-align: middle;
  }
  /* Handle the widths */
  .masthead,
  .mastfoot,
  .cover-container {
    width: 100%;
    /* Must be percentage or pixels for horizontal alignment */
  }
}

@media (min-width: 992px) {
  .masthead,
  .mastfoot,
  .cover-container {
    width: 1060px;
  }
}
	</style>
</head>
<body id="top"><div class="site-wrapper">
  <div class="site-wrapper-inner">
    <div class="cover-container">
      <div class="masthead clearfix">
        <div class="inner">
          <h3 class="masthead-brand"> Foursight | Konsultan </h3>
          <nav class="nav nav-masthead">
            <a class="nav-link nav-social" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a class="nav-link nav-social" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            <a class="nav-link nav-social" href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
            <a class="nav-link nav-social" href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
          </nav>
        </div>
      </div>
      <br>
      <div class="inner cover">
        <h1 class="cover-heading">The Website</h1>
        <h5 class="sub-header"> Begins In Few Months </h5>
        <br>
        <p class="lead cover-copy">
            It's the Bright One, it's the Right One.</p>
            <p class="lead"><button type="button" class="btn btn-lg btn-default btn-notify" data-toggle="modal" data-target="#subscribeModal">We are Coming Soon </button></p>
      </div>
      <div class="mastfoot">
        <div class="inner">
            <p>2025 © Foursight. Design Made By  <a href="#" target="_blank" title="Hardik Gondhiya">Mamang Kesbor</a>.</p>
        </div>
      </div>
  </div>
</div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
  </body>
</html>
