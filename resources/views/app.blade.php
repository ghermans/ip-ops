<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>iDevelopment - imonitor</title>

	<link href="/css/app.css" rel="stylesheet">
        <style>
.navbar-default {
  background-color: #0288d1;
  border-color: transparent;
}
.navbar-default .navbar-brand {
  color: white;
}
.navbar-default .navbar-brand:hover,
.navbar-default .navbar-brand:focus {
  color: white;
  background-color: transparent;
}
.navbar-default .navbar-text {
  color: white;
}
.navbar-default .navbar-nav > li > a {
  color: white;
}
.navbar-default .navbar-nav > li > a:hover,
.navbar-default .navbar-nav > li > a:focus {
    color: white;
  background-color: #0288d1;
}
.navbar-default .navbar-nav > .active > a,
.navbar-default .navbar-nav > .active > a:hover,
.navbar-default .navbar-nav > .active > a:focus {
  color: #ffab40;
  background-color: #0288d1;
}
.navbar-default .navbar-nav > .disabled > a,
.navbar-default .navbar-nav > .disabled > a:hover,
.navbar-default .navbar-nav > .disabled > a:focus {
  color: white;
  background-color: transparent;
}
.navbar-default .navbar-toggle {
  border-color: #dddddd;
}
.navbar-default .navbar-toggle:hover,
.navbar-default .navbar-toggle:focus {
  background-color: rgba(0, 0, 0, 0.2);
}
.navbar-default .navbar-toggle .icon-bar {
  background-color: white;
}
.navbar-default .navbar-collapse,
.navbar-default .navbar-form {
  border-color: transparent;
}
.navbar-default .navbar-nav > .open > a,
.navbar-default .navbar-nav > .open > a:hover,
.navbar-default .navbar-nav > .open > a:focus {
  background-color: #0288d1;
  color: #ffab40;
}
@media (max-width: 991px) {
  .navbar-default .navbar-nav .open .dropdown-menu > li > a {
    color: white;
  }
  .navbar-default .navbar-nav .open .dropdown-menu > li > a:hover,
  .navbar-default .navbar-nav .open .dropdown-menu > li > a:focus {
    color: white;
    background-color: #0288d1;
  }
  .navbar-default .navbar-nav .open .dropdown-menu > .active > a,
  .navbar-default .navbar-nav .open .dropdown-menu > .active > a:hover,
  .navbar-default .navbar-nav .open .dropdown-menu > .active > a:focus {
    color: white;
    background-color: #0288d1;
  }
  .navbar-default .navbar-nav .open .dropdown-menu > .disabled > a,
  .navbar-default .navbar-nav .open .dropdown-menu > .disabled > a:hover,
  .navbar-default .navbar-nav .open .dropdown-menu > .disabled > a:focus {
    color: white;
    background-color: transparent;
  }
}
.navbar-default .navbar-link {
  color: white;
}
.navbar-default .navbar-link:hover {
    color: white;
}
.navbar-default .btn-link {
  color: white;
}
.navbar-default .btn-link:hover,
.navbar-default .btn-link:focus {
  color: #ffab40;
}
.navbar-default .btn-link[disabled]:hover,
fieldset[disabled] .navbar-default .btn-link:hover,
.navbar-default .btn-link[disabled]:focus,
fieldset[disabled] .navbar-default .btn-link:focus {
  color: white;
}
.navbar-inverse {
  background-color: #222222;
  border-color: #080808;
}
.navbar-inverse .navbar-brand {
  color: #9d9d9d;
}
.navbar-inverse .navbar-brand:hover,
.navbar-inverse .navbar-brand:focus {
  color: #ffffff;
  background-color: transparent;
}
.navbar-inverse .navbar-text {
  color: #9d9d9d;
}
.navbar-inverse .navbar-nav > li > a {
  color: #9d9d9d;
}
.navbar-inverse .navbar-nav > li > a:hover,
.navbar-inverse .navbar-nav > li > a:focus {
  color: #ffffff;
  background-color: transparent;
}
.navbar-inverse .navbar-nav > .active > a,
.navbar-inverse .navbar-nav > .active > a:hover,
.navbar-inverse .navbar-nav > .active > a:focus {
  color: #ffffff;
  background-color: #080808;
}
.navbar-inverse .navbar-nav > .disabled > a,
.navbar-inverse .navbar-nav > .disabled > a:hover,
.navbar-inverse .navbar-nav > .disabled > a:focus {
  color: #444444;
  background-color: transparent;
}
.navbar-inverse .navbar-toggle {
  border-color: #333333;
}
.navbar-inverse .navbar-toggle:hover,
.navbar-inverse .navbar-toggle:focus {
  background-color: #333333;
}
.navbar-inverse .navbar-toggle .icon-bar {
  background-color: #ffffff;
}
.navbar-inverse .navbar-collapse,
.navbar-inverse .navbar-form {
  border-color: #101010;
}
.navbar-inverse .navbar-nav > .open > a,
.navbar-inverse .navbar-nav > .open > a:hover,
.navbar-inverse .navbar-nav > .open > a:focus {
  background-color: #080808;
  color: #ffffff;
}
@media (max-width: 991px) {
  .navbar-inverse .navbar-nav .open .dropdown-menu > .dropdown-header {
    border-color: #080808;
  }
  .navbar-inverse .navbar-nav .open .dropdown-menu .divider {
    background-color: #080808;
  }
  .navbar-inverse .navbar-nav .open .dropdown-menu > li > a {
    color: #9d9d9d;
  }
  .navbar-inverse .navbar-nav .open .dropdown-menu > li > a:hover,
  .navbar-inverse .navbar-nav .open .dropdown-menu > li > a:focus {
    color: #ffffff;
    background-color: transparent;
  }
  .navbar-inverse .navbar-nav .open .dropdown-menu > .active > a,
  .navbar-inverse .navbar-nav .open .dropdown-menu > .active > a:hover,
  .navbar-inverse .navbar-nav .open .dropdown-menu > .active > a:focus {
    color: #ffffff;
    background-color: #080808;
  }
  .navbar-inverse .navbar-nav .open .dropdown-menu > .disabled > a,
  .navbar-inverse .navbar-nav .open .dropdown-menu > .disabled > a:hover,
  .navbar-inverse .navbar-nav .open .dropdown-menu > .disabled > a:focus {
    color: #444444;
    background-color: transparent;
  }
}
.navbar-inverse .navbar-link {
  color: #9d9d9d;
}
.navbar-inverse .navbar-link:hover {
  color: #ffffff;
}
.navbar-inverse .btn-link {
  color: #9d9d9d;
}
.navbar-inverse .btn-link:hover,
.navbar-inverse .btn-link:focus {
  color: #ffffff;
}
.navbar-inverse .btn-link[disabled]:hover,
fieldset[disabled] .navbar-inverse .btn-link:hover,
.navbar-inverse .btn-link[disabled]:focus,
fieldset[disabled] .navbar-inverse .btn-link:focus {
  color: #444444;
}
            
/* Section */
.section {
  position: relative;
  padding: 60px 0;
}
.section + .section {
  border-top: 1px solid #CCC;
}
.section_alt {
  background: #f8f8f8;
}
/* Footer */
footer {
   bottom: 0;
  width: 100%;
}
.navbar__hr,
.footer__hr {
  width: 100%;
  height: 0;
  background: #0288d1;
  border-top: 1px solid rgba(0, 0, 0, 0.2);
  border-bottom: 1px solid rgba(255, 255, 255, 0.1);
}
@media (max-width: 767px) {
  .section {
    padding-top: 30px;
    padding-bottom: 30px;
  }
}            
section,
summary {
  display: block;
}   

/* Section captions */
.section__title,
.section__intro {
  text-align: center;
}
.section__title {
  margin-top: 0;
  margin-bottom: 30px;
  font-weight: 300;
  font-size: 36px;
}
.section__title + .section__intro {
  margin-top: -15px;
  margin-bottom: 30px;
  font-size: 16px;
  color: #777777;
}
.section__hr {
  width: 100px;
  margin-bottom: 60px;
  border-top: 2px solid #0288d1;
}
.section__hr_center {
  margin-left: auto;
  margin-right: auto;
}
@media (max-width: 767px) {
  .section__title {
    font-size: 28px;
  }
  .section__title + .section__intro {
    font-size: 14px;
  }
  .section__hr {
    margin-bottom: 30px;
  }
}

/* -------------------- *\
    #KEY FEATURES
\* -------------------- */
.features__item {
  text-align: center;
}
.features__icon {
  width: 60px;
  height: 60px;
  margin: 0 auto 20px;
  border-radius: 50%;
  background: #0288d1;
  text-align: center;
  overflow: hidden;
}
.features__icon > i {
  position: relative;
  display: block;
  line-height: 60px;
  font-size: 25px;
  color: white;
  transform: translateZ(0px);
}
.features__icon > i:last-child {
  color: #ffab40;
}
.features__title {
  margin-top: 0;
  margin-bottom: 20px;
  font-size: 22px;
  font-weight: 300;
}

/* Media definitions pulled out from media queries to make it work in IE 10+ **/
@-webkit-keyframes features-icon_enter {
  0% {
    top: 0;
  }
  50% {
    top: -65px;
  }
  100% {
    top: -60px;
  }
}
@keyframes features-icon_enter {
  0% {
    top: 0;
  }
  50% {
    top: -65px;
  }
  100% {
    top: -60px;
  }
}
@-webkit-keyframes features-icon_leave {
  0% {
    top: -60px;
  }
  50% {
    top: -65px;
  }
  100% {
    top: 0;
  }
}
@keyframes features-icon_leave {
  0% {
    top: -60px;
  }
  50% {
    top: -65px;
  }
  100% {
    top: 0;
  }
}
@media (max-width: 767px) {
  .features__item {
    text-align: left;
    margin-bottom: 20px;
  }
  .features__item:hover .features__icon > i {
    color: #ffab40;
  }
  .features__icon,
  .features__title {
    display: inline-block;
  }
  .features__icon {
    width: 30px;
    height: 30px;
    margin: 0 10px -5px 0;
  }
  .features__icon > i {
    line-height: 30px;
    font-size: 14px;
  }
  .features__icon > i:last-child {
    display: none;
  }
  .features__title {
    margin-bottom: 15px;
    font-size: 18px;
  }
}



/* -------------------- *\
    #FOOTER
\* -------------------- */
/**
 * Footer base styles
 */
footer {
  margin-top: 60px;
  background: #0288d1;
  color: white;
}
footer a {
  color: #fff;
}
footer a:hover,
footer a:focus {
  color: #b7b7b7;
  text-decoration: bold;
}
/**
 * Footer Top
 */
.footer_top {
  padding-top: 60px;
  padding-bottom: 60px;
}
.footer__title {
  margin-bottom: 20px;
  text-transform: uppercase;
  font-size: 14px;
  font-weight: 700;
  color: white;
}

/* Recent Posts */
.footer-post__img {
  width: 33px;
  height: 35px;
  overflow: hidden;
}
.footer-post__img > img {
  height: 100%;
  width: auto;
}
.footer-post__content > p {
  margin-bottom: 2px;
}
/* Quick Links */
.footer__links {
  padding-left: 0;
  list-style: none;
}
.footer__links > li > a {
  position: relative;
  display: block;
  padding: 10px 35px 10px 0;
  border-bottom: 1px solid #0278b8;
}
.footer__links > li > a:after {
  content: "\f064";
  position: absolute;
  top: 0;
  right: 0;
  padding: 10px;
  font-family: FontAwesome;
  color: b7b7b7;
  opacity: 0;
  filter: alpha(opacity=0);
  -webkit-transition: opacity 0.1s;
  -o-transition: opacity 0.1s;
  transition: opacity 0.1s;
}
.footer__links > li > a:hover:after,
.footer__links > li > a:focus:after {
  opacity: 1;
  filter: alpha(opacity=100);
}
.footer__links > li:first-child > a,
.footer__links > li:first-child > a:after {
  padding-top: 0;
}
.footer__links > li:last-child > a {
  border-bottom: 0;
}
/**
 * Footer Bottom
 */
.footer_bottom {
  background: white;
  color: #b7b7b7;
  padding-top: 30px;
  padding-bottom: 30px;
}

.footer_bottom a {
  color: #000;
}
.footer_bottom a:hover,
.footer_bottom a:focus {
  color: #000;
  text-decoration: bold;
}

.footer__copyright {
  margin-top: 6px;
  margin-bottom: 6px;
}

@media (max-width: 767px) {
  .footer_bottom,
  .footer__copyright {
    margin-top: 0;
    margin-bottom: 15px;
  }
}
            
        </style>
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
                            <a class="navbar-brand" href="<?php echo url();?>"><i class="fa fa-wifi"></i> IP Operations</a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
                                       @if (Auth::guest())
                                	<li><a href="/">Home</a></li>
					@else
                                              <li><a href="/">Home</a></li>
                                              <li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">My account <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="<?php echo url('services');?>">All Services</a></li>
								<li><a href="/auth/settings">Account settings</a></li>
								<li><a href="/finance">Finance</a></li>
                                                                
							</ul>
						</li>
					@endif
				</ul>

				<ul class="nav navbar-nav navbar-right">
					@if (Auth::guest())
                                        <li><a href="/auth/login" data-toggle="tooltip" data-placement="bottom" title="Login"><span class="fa fa-user fa-lg"></span></a></li>
						<li><a href="/auth/register" data-toggle="tooltip" data-placement="bottom" title="Sign&nbsp;up"><span class="fa fa-user-plus fa-lg"></span></a></li>
					@else
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="/auth/logout">Logout</a></li>
							</ul>
						</li>
					@endif
				</ul>
			</div>
		</div>
	</nav>
       
	@yield('content')

        <footer>

      <!-- Footer Top -->
      <div class="footer_top hidden-xs">
        <div class="container">
          <div class="row">

            <!-- Contact Us -->
            <div class="col-xs-12 col-sm-9">
              <div class="footer__item">
                <div class="footer__title">Contact Us</div>
                <div class="footer__content">
                  <p>
                    Do not hesitate to contact us if you have any questions or feature requests:
                  </p><p>
                    iDevelopment
                  </p><p>
                    <span class="fa fa-phone"></span> +32 000 000 00 00<br>
                   </p><p>
                       <span class="fa fa-envelope"></span> <a href="#">support@idevelopment.be</a>
                  </p>
                </div>
              </div>
            </div>


           
            <!-- Quick Links -->
            <div class="col-xs-12 col-sm-3">
              <div class="footer__item">
                <div class="footer__title">Quick support links</div>
                <div class="footer__content">
                  <ul class="footer__links">
                    <li><a href="#">Howto create a dynamic virtual host</a></li>
                    <li><a href="#">Howto add a static ip on Ubuntu </a></li>
                    <li><a href="#">Howto set up active directory</a></li>
                    <li><a href="#">Howto configure my mailbox</a></li>
                    <li><a href="#">Howto login to the vpn portal</a></li>
                  </ul>
                </div>
              </div>            
            </div>

          </div> <!-- / .row -->
        </div> <!-- / .container -->
      </div> <!-- / .footer_top -->
      <div class="footer__hr hidden-xs"></div>

      <!-- Footer Bottom -->
      <div class="footer_bottom">
        <div class="container">
          <div class="row">
            <div class="col-xs-12 col-sm-6">
              <div class="footer__copyright">
                Copyright 2015 <a href="http://idevelopment.be/">iDevelopment</a>. All Rights Reserved.
              </div>
            </div>
            
          </div> <!-- / .row -->
        </div> <!-- / .container -->
      </div> <!-- / .footer_bottom -->
    </footer>

	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
        <script>
    //tooltip
jQuery(function () {
    jQuery('[data-toggle=tooltip]').tooltip();
});
</script>
</body>
</html>
