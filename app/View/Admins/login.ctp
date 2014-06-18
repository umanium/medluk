<!DOCTYPE HTML>

<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Login - Admin Panel - Media Lukis</title>
	
	<?php echo $this -> Html -> css(
										array(
											'admin/screen.css', 
											'admin/fixed.css', 
											'admin/theme/blue.css'
											)
									);
	?>
	
	
	<!-- IE Stylesheet ie7 - Added in 1.2 -->
	<!--[if lt IE 8]> <html lang="en" class="ie7"> <![endif]-->
	
	<!-- IE Stylesheet ie8 - Added in 1.1 -->
	<!--[if IE 8 ]> <html lang="en" class="ie8"> <![endif]-->
	
	<!-- IE Canvas Fix for Visualize Charts - Added in 1.1 -->
	<!--[if IE]><script type="text/javascript" src="js/excanvas.js"></script><![endif]-->
	
	<!-- jQuery thats loaded before document ready to prevent flickering - Rest are found at the bottom -->
	<?php echo $this -> Html -> script(
										array(
											'admin/jquery-1.4.1.min.js', 
											'admin/jquery.cookie.js', 
											'admin/jquery.styleswitcher.js', 
											'admin/jquery.visualize.js'
											)
										);
	?>
	
</head>

<body>

<!-- Start: Page Wrap -->
<div id="wrap" class="container_24">


<!-- Grid Container: Start (centers) -->
	<div class="login2">

		<!-- 100% Box Grid Container: Start -->
		<div class="grid_12">
		
			<!-- Box Header: Start -->
			<div class="box_top">
				
				<h2 class="icon key">Login Admin Panel Media Lukis</h2>
				
			</div>
			<!-- Box Header: End -->
			
			<!-- Box Content: Start -->
			<div class="box_content padding">
				
				<!-- Tabs: Start -->
				<div class="tabs">
					
					<!-- Login Tab: Start -->
					<div id="login">
						<p class="note small">Selamat Datang di Admin Panel Media Lukis, silahkan <b>login</b>.</p>
						
						<form action="<?php echo $this -> base."/admins/index"; ?>" method="post">
						
							<div class="field noline nopadding">
								<label class="left" for="username">Username</label>
								<input type="text" class="validate tip-stay right" title="enter your username" id="username" placeholder="Username">
							</div>
							
							<div class="field">
								<label class="left" for="password">Password</label>
								<input type="password" class="validate tip-stay right" title="enter your password" id="password" placeholder="Password">
							</div>
							
							<div class="field noline nopadding">
								
								<div class="right">
									<button type="submit">Login</button>
								</div>
							</div>
						
						</form>
						
					</div>
					<!-- Login Tab: End -->
					
				</div>
				<!-- Tabs: End -->
		
			</div>
			<!-- Box Content: End -->
			
		</div>
		<!-- 100% Box Grid Container: End -->
		
	</div>
	<!-- Grid Container: End (centers) -->


</div>
<!-- End: Page Wrap -->

	<!-- jQuery libs - Rest are found in the head section (at top) -->
	<?php echo $this -> Html -> script(
										array( 
											'admin/jquery.visualize-tooltip.js', 
											'admin/jquery-animate-css-rotate-scale.js', 
											'admin/jquery-ui-1.8.13.custom.min.js', 
											'admin/jquery.poshytip.min.js',
											'admin/jquery.quicksand.js',
											'admin/jquery.dataTables.min.js',
											'admin/jquery.facebox.js',
											'admin/jquery.uniform.min.js',
											'admin/jquery.wysiwyg.js',
											'admin/syntaxHighlighter/shCore.js',
											'admin/syntaxHighlighter/shBrushXml.js',
											'admin/syntaxHighlighter/shBrushJScript.js',
											'admin/syntaxHighlighter/shBrushCss.js',
											'admin/syntaxHighlighter/shBrushPhp.js',
											'admin/fileTree/jqueryFileTree.js',
											'admin/custom.js'
											)
									);
	?>

</body>
</html>