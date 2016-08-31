<hr>
<div class="container">
	<div class="row">
		<div class="col-lg-4">
			<?php
				if ( function_exists('dynamic_sidebar') )
					dynamic_sidebar('sidebar');
			?>
		</div>
		<div class="col-lg-4">
			<?php
				if ( function_exists('dynamic_sidebar') )
					dynamic_sidebar('sidebar-2');
			?>
		</div>
		<div class="col-lg-4">
			<?php
				if ( function_exists('dynamic_sidebar') )
					dynamic_sidebar('sidebar-3');
			?>
		</div>
	</div>
</div>
      <footer>
        <p>&copy; pro-chaj.ru 2012 - 2016</p>
      </footer>

    </div> <!-- /container -->


<?php wp_footer(); ?>
  </body>
</html>
