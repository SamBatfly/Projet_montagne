
<div class="container footer">
	<div id="row">
		<div class="copyright col-md-6">
			<p>
				Copyright &#169; <?php print(date(Y)); ?> <?php bloginfo('name'); ?>
				<br />Blog propulsé par <a href="http://wordpress.org/">WordPress</a> et con&ccedil;u par <a href="http://www.guymontagne.fr">Guy Montagné et Sylvie Raboutet</a>
				<br />
				<a href="feed:<?php bloginfo('rss2_url'); ?>">Articles (RSS)</a> et <a href="feed:<?php bloginfo('comments_rss2_url'); ?>">Commentaires (RSS)</a>.
				<?php echo get_num_queries(); ?> requêtes. <?php timer_stop(1); ?> secondes.
			</p>
		</div>
		<div class="liens col-md-6">
			<a href="#">Liens</a>
			<a href="#">Contact</a>
			<a href="#">Mentions légales</a>
			<a href="#">Plan du site</a>
		</div>	
	</div>
</div>



    