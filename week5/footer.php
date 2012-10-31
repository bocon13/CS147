
	<div data-role="footer" data-id="samebar" class="nav-glyphish-example" data-position="fixed" data-tap-toggle="false">
		<div data-role="navbar" class="nav-glyphish-example" data-grid="c">
			<ul>
				<li><a href="index.php" id="home" data-icon="custom" <?php if($highlight =='home') echo 'class="ui-btn-active"'; ?>>Home</a></li>
				<li><a href="login.php" id="key" data-icon="custom" <?php if($highlight =='login') echo 'class="ui-btn-active"'; ?>>Login</a></li>
				<li><a href="filter.php" id="map" data-icon="custom" <?php if($highlight =='filter') echo 'class="ui-btn-active"'; ?>>Filter</a></li>
				<li><a href="#" id="gear" data-icon="custom" <?php if($highlight =='settings') echo 'class="ui-btn-active"'; ?>>Settings</a></li>
			</ul>
		</div>
	</div>
