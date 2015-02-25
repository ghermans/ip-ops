<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>IP-ops</title>
	<title>iDevelopment - imonitor</title>

	<link href="<?php echo url("css/app.css");?>" rel="stylesheet">
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
