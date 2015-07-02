<div id="header">
		<div id="header-content" style="display:block;">
			<div id="top-header">
				<div class="left"><a href="#"><i class="fa fa-phone-square fa-lg"></i><span>&nbsp;(08) 123 123</span></a><a href="#"><i class="fa fa-envelope fa-lg"></i><span>&nbsp;info@mail.com</span></a></div>
				<div class="right">
					<ul>
					<li><a href="#"><i class="fa fa-facebook-official fa-lg"></i></a></li>
					<li><a href="#"><i class="fa fa-google-plus fa-lg"></i></a></li>
					<li><a href="#"><i class="fa fa-linkedin-square fa-lg"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter-square fa-lg"></i></a></li>
					<li><a href="#"><i class="fa fa-tumblr-square fa-lg"></i></a></li>
					</ul>
				</div>
			</div>
			<div id="main-header">
				<div id="logo">
					<a href="#"><h2 style="">titimilk</h2></a>
				</div>
				<div class="top-search">
					<input type="text" />
					<input type="submit" value="search" />
				</div>
				<div class="menu-header">
					<ul>
						<li><a href="#">Account</a></li>
						<li><a href="#">Cart</a></li>
						<li><a href="#">Checkout</a></li>
						<li><a href="#">Login</a></li>						
					</ul>
				</div>
			</div>
		</div>
		<div id="nav">
			<div class="nav-header">
				<a href="#">titimilk</a>
				<button id="nav-toggle-menu"><i class='fa fa-bars fa-lg'></i></button>
				<button id="nav-toggle-user"><i class='fa fa-user fa-lg'></i></button>
				<button id="nav-toggle-cart"><i class='fa fa-cart-plus fa-lg'></i></button>
			</div>
			<div class="nav-content" id="nav-menu">
				<ul>
					<li><a href="#">message</a></li>
					<li><a href="#">me</a></li>
					<li><a href="#">me</a></li>
					<li><a href="#">me</a></li>
				</ul>
			</div>
			<div class="nav-content" id="nav-user">
				<ul>
					<li><a href="#">Edit profile</a></li>
					<li><a href="#"><i class='fa fa-sign-out fa-sm'></i>&nbsp;Logout</a></li>
					<li><a href="#"><i class='fa fa-sign-in fa-sm'></i>&nbsp;Login</a></li>
				</ul>
			</div>
		</div>
		<script type="text/javascript">
		$(document).ready(function() {
			$(document).scroll(function() {
				if ($(this).scrollTop() > 200){ 
					$('#nav').addClass('fixed'); 
					$('#header-content').addClass('fixed-top');
					$('.nav-content').addClass('nav-content-height');
				} else {
					if ($('#nav').hasClass('fixed')) {$('#nav').removeClass('fixed'); $('#header-content').removeClass('fixed-top');}
					if ($('.nav-content').hasClass('nav-content-height')) {$('.nav-content').removeClass('nav-content-height');}
				}
			});

			//if (screen.width < 640) { 
				$('#main-menu-toggle').click(function() {
					console.log(screen.width);
				$('#main-menu ul').fadeToggle();});
			$('#nav-toggle-menu').click(function() { 
				showMenu($('#nav-menu'), 'menu');
			});
			$('#nav-toggle-user').click(function() {
				showMenu($('#nav-user'), 'user');
			});
			var mclick = null;
			var uclick = null;
			function showMenu(menu, str) {
				//console.log(menushow);
				if (str == 'menu') {
					$('#nav-user').fadeOut();
					$('#nav-menu').fadeIn();
					if (mclick) { $('#nav-menu').fadeOut(); mclick = false;}
					else mclick = true;
				} if (str =='user') { 
					$('#nav-menu').fadeOut();
					$('#nav-user').fadeIn();
					if (uclick) { $('#nav-user').fadeOut(); uclick = false;}
					else uclick = true;
				}
			}

		});
		</script>
</div>
