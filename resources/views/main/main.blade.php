<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Home</title>
		<link rel="icon" href="images/favicon.ico">
		<link rel="shortcut icon" href="images/favicon.ico">
		<link rel="stylesheet" href="css/camera.css">
		<link rel="stylesheet" href="css/component.css">
		<link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/comingsoon.css">
		<script src="js/jquery.js"></script>
		<script src="js/jquery-migrate-1.1.1.js"></script>
		<script src="js/jquery.equalheights.js"></script>
		<script src="js/jquery.ui.totop.js"></script>
		<script src="js/jquery.easing.1.3.js"></script>
		<script src="js/camera.js"></script>
		<script src="js/jquery.mobile.customized.min.js"></script>
		<!--<![endif]-->
		<script>
		$(document).ready(function(){
			jQuery('#camera_wrap').camera({
			loader: false,
			pagination: true ,
			minHeight: '394',
			thumbnails: false,
			height: '40.1875%',
			caption: false,
			navigation: false,
			fx: 'mosaic'
			});
			$().UItoTop({ easingType: 'easeOutQuart' });
		})
		</script>
	</head>
	<body class="page1">
<!--==============================header=================================-->
		<header>
			<div class="container_12">
				<div class="grid_12">
					<h1><a href="/"><img src="images/logo.png" alt="PT Gridwiz Energy and Mobility"></a></h1>
					<div class="menu_block">
						<nav id="bt-menu" class="bt-menu">
							<a href="#" class="bt-menu-trigger"><span>Menu</span></a>
							<ul>
								<li class="current bt-icon"><a href="/">Home</a></li>
								<li class="bt-icon"><a href="/about">About</a></li>
								<li class="bt-icon"><a href="/comingsoon">Services</a></li>
								<li class="bt-icon"><a href="/comingsoon">Staffs</a></li>
								<li class="bt-icon"><a href="/comingsoon">Blog</a></li>
								<li class="bt-icon"><a href="/comingsoon">Contacts</a></li>
							</ul>
						</nav>
						<div class="clear"></div>
					</div>
					<div class="clear"></div>
				</div>
			</div>
		</header>
    <!--==============================end header=================================-->
    </body>
       
        @yield('container')
        <!--==============================footer=================================-->
		<footer>
			<div class="container_12">
				<div class="grid_12">
					<div class="socials">
						<a href="https://www.instagram.com/gridwizindonesia?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" class="fa fa-instagram"></a>
						<a href="mailto:indonesiagridwiz@gmail.com?subject=Subject%20Here&body=Message%20body%20here" class="fa fa-google-plus"></a>
					</div>
					<div class="clear"></div>
					<div class="copy">
						PT GRIDWIZ ENERGY AND MOBILITY  | <a href="#">Privacy Policy</a> 
					</div>
				</div>
			</div>
		</footer>
        <!--==============================end footer=================================-->
		<script>
			$(document).ready(function(){
			 $(".bt-menu-trigger").toggle(
				function(){
				$('.bt-menu').addClass('bt-menu-open');
				},
				function(){
				$('.bt-menu').removeClass('bt-menu-open');
				}
			);
			});
			(function() {
			function init() {
				var speed = 250,
				easing = mina.easeinout;
				[].slice.call ( document.querySelectorAll( '#grid > a' ) ).forEach( function( el ) {
				var s = Snap( el.querySelector( 'svg' ) ), path = s.select( 'path' ),
					pathConfig = {
					from : path.attr( 'd' ),
					to : el.getAttribute( 'data-path-hover' )
					};
				el.addEventListener( 'mouseenter', function() {
					path.animate( { 'path' : pathConfig.to }, speed, easing );
				} );
				el.addEventListener( 'mouseleave', function() {
					path.animate( { 'path' : pathConfig.from }, speed, easing );
				} );
				} );
			}
			init();
			})();
		</script>
	</body>
</html>