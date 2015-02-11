<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Thème 1</title>
    <meta name="description" content="Theme 1">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />

    <!--COMMENTS IN CASE OF... 
    HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	<!-- <?php wp_get_archives('type=monthly&format=link'); ?>
	<?php //comments_popup_script(); // off by default ?>
	<?php wp_head(); ?> 
	-->

</head>

<body>
	<?php get_header(); ?> <!-- ouvrir header,php -->
	<?php get_sidebar(); ?> <!-- ouvrir sidebar.php -->
		<div id="content">
			<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
				<div class="post" id="post-<?php the_ID(); ?>">
					<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
						<!-- <p class="postmetadata">
							<?php the_time('j F Y') ?> par <?php the_author() ?> | 
							Cat&eacute;gorie: <?php the_category(', ') ?> | 
							<?php comments_popup_link('Pas de commentaires', '1 Commentaire', '% Commentaires'); ?> <?php edit_post_link('Editer', ' &#124; ', ''); ?>
						</p> -->
					<div class="post_content">
						<?php the_content(); ?>
					</div>
				</div>
			<?php endwhile; ?>
			<?php endif; ?>
		</div>
	<?php get_footer(); ?>
</body>

</html>