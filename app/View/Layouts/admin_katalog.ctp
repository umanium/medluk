<!DOCTYPE HTML>

<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?php echo $title_for_layout; ?></title>
	
	<!-- Imports General CSS and jQuery CSS -->
	<!-- CSS for Fluid and Fixed Widths - Double to prevent flickering on change -->
	<!-- CSS for Theme Styles - Double to prevent flickering on change -->
	<?php echo $this -> Html -> css(
										array(
											'admin/screen.css', 
											'admin/fixed.css', 
											'admin/theme/blue.css',
											'admin/admin.css'
											)
									);
	?>
	
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
	
<!-- 100% Box Grid Container: Start -->
<div class="grid_24">
	
	<?php echo $this->Session->flash(); ?>
	
	<!-- Box Header: Start -->
	<div class="box_top">
		
		<h2 class="icon time">Menu Admin Panel</h2>
		
	</div>
	<!-- Box Header: End -->
	
	<!-- Box Content: Start -->
	<div class="box_content">
		
		<p class="center">
			<!-- List of big icons for quicklinks -->
			<a href="<?php echo $this->base."/admins/setting"; ?>" class="big_button add_news"><span>setting</span></a>
			<a href="<?php echo $this->base."/admins/katalog"; ?>" class="big_button upload"><span>katalog</span></a>
			<a href="<?php echo $this->base."/admins/forum"; ?>" class="big_button add_user"><span>forum</span></a>
			<a href="<?php echo $this->base."/admins/about_us"; ?>" class="big_button add_event"><span>about us</span></a>
			<a href="<?php echo $this->base."/admins/inspirasi"; ?>" class="big_button new_pm popup"><span>inspirasi</span></a>
			<a href="<?php echo $this->base."/admins/login"; ?>" class="big_button support"><span>logout</span></a>
		</p>
		
	</div>
	<!-- Box Content: End -->
	
</div>
<!-- 100% Box Grid Container: End -->

<!-- 25% Box Grid Container: Start -->
<div class="grid_7">

	<!-- Box Header: Start -->
	<div class="box_top">
		
		<h2 class="icon coverflow">Menu Katalog</h2>
		
	</div>
	<!-- Box Header: End -->
	
	<!-- Box Content: Start -->
	<div class="box_content">
		
		<!-- Vertical Menu: Start -->
			<ul class="menu">
				<li><a href="<?php echo $this->base."/categories/"; ?>" <?php echo ($page_katalog == 'kategori')? "class='active'" : ""; ?>><span class="icon pages"></span> Kategori</a>
				<li><a href="<?php echo $this->base."/category_subs/"; ?>" <?php echo ($page_katalog == 'sub kategori')? "class='active'" : ""; ?>><span class="icon archive"></span> Sub Kategori</a>
				<li><a href="<?php echo $this->base."/brands/"; ?>" <?php echo ($page_katalog == 'brand')? "class='active'" : ""; ?>><span class="icon tag"></span> Brand</a>
				<li><a href="<?php echo $this->base."/brand_catalogues/"; ?>" <?php echo ($page_katalog == 'katalog brand')? "class='active'" : ""; ?>><span class="icon tags"></span> Katalog Brand</a>
				<li><a href="<?php echo $this->base."/brand_sub_catalogues/"; ?>" <?php echo ($page_katalog == 'sub katalog brand')? "class='active'" : ""; ?>><span class="icon cabin"></span> Sub Katalog Brand</a>
				<li><a href="<?php echo $this->base."/products/"; ?>" <?php echo ($page_katalog == 'produk')? "class='active'" : ""; ?>><span class="icon dropbox"></span> Produk</a>
			</ul>
		<!-- Vertical Menu: End -->

	</div>
	<!-- Box Content: End -->
	
</div>
<!-- 25% Box Grid Container: End -->

<?php echo $this->fetch('content'); ?>

<!-- Footer Grid: Start -->
<div class="grid_24">

	<!-- Footer: Start -->
	<div id="footer">
		
		<p class="left">
			Copyright &#169; 2012 <a href="<?php echo $this->base."/admins/index"; ?>">Media Lukis</a>. 
			Powered by <a href="http://kabayanit.com">Kabayan IT</a>.
		</p>
		
		<!-- Footer Icon Navigation: Start -->
		<ul class="right">
			<li><a href="<?php echo $this->base."/admins/index"; ?>" class="icon home tip active" title="Dashboard">Dashboard</a></li>
			<li><a href="<?php echo $this->base."/admins/setting"; ?>" class="icon edit tip" title="Setting">Setting</a></li>
			<li><a href="<?php echo $this->base."/admins/katalog"; ?>" class="icon pictures tip" title="Katalog">Katalog</a></li>
			<li><a href="<?php echo $this->base."/admins/forum"; ?>" class="icon users tip" title="Forum">Forum</a></li>
			<li><a href="<?php echo $this->base."/admins/about_us"; ?>" class="icon user tip" title="About Us">About Us</a></li>
			<li><a href="<?php echo $this->base."/admins/inspirasi"; ?>" class="icon lightbolb tip" title="Inspirasi">Inspirasi</a></li>
		</ul>
		<!--Footer Icon Navigation: End -->
		
	</div>
	<!-- Footer: End -->
	
</div>
<!-- Footer Grid: End -->

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
											'admin/custom.js',
											'admin/jquery.select.ajax.js',
											'admin/jquery.product.js',
											'admin/jquery.button.js'
											)
									);
	?>
	
<?php //echo $this->element('sql_dump'); ?>
</body>
</html>