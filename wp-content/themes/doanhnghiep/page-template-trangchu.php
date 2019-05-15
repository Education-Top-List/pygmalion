
<?php 
/*
Template Name: page-template-trangchu
*/
get_header(); 
?>	

<div class="page-wrapper">

	<div class="g_content">
			<div class="container">
				<div class="row">
					<div class="col-sm-10 col-left">
						<?php 
						$arg_cmt_post_q = array(
							'posts_per_page' => 9,
							'orderby' => 'post_date',
							'order' => 'DESC',
							'post_type' => 'post',
							'post_status' => 'publish',
							'cat' => 18
						);
						$cmt_post_q = new WP_Query();
						$cmt_post_q->query($arg_cmt_post_q);
						?>
						<?php if(have_posts()) : ?>
							<div class="loop_post_idx">
								<h2 class="title_top"><?php echo get_cat_name(18); ?></h2> 
								<ul  >
									<?php
									while ($cmt_post_q->have_posts()) : $cmt_post_q->the_post(); ?>
										<li>
											<div class="post_cmt_wrapper pw">
												<div class="wrap_thumb">
													<?php  $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );  ?>
													<figure class="thumbnail" style="background:url('<?php echo $image[0]; ?>');"> 
														<a href="<?php the_permalink();?>"></a>
													</figure>
													<h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a> </h3>	
												</div>
												<div class="excerpt">
													<p><?php echo excerpt(50); ?></p>
												</div>
											</div>

										</li>
									<?php endwhile; ?>
								<?php endif; ?> 
							</ul>
						</div>
						<div class="fanpage_fb">
							<h2 class="title_top">Fanpage Facebook</h2> 
							<?php dynamic_sidebar('fanpage_fb'); ?> 
						</div>
						<div class="list_tg_post">
							<div class="tg_post pw">
								<h2 class="title_top"><?php echo get_the_title(83); ?></h2> 
								<div class="row">
									<div class="col-sm-6">
										<div class="wrap_thumb">
											<figure class="thumbnail" style="background:url('<?php  echo get_the_post_thumbnail_url(83);  ?>');"><a href="<?php the_permalink(83);?>"></a></figure>
										</div>
									</div>	
									<div class="col-sm-6">
										<div class="textwidget">
											<p><?php echo get_the_excerpt(83);?></p>
											<a href="<?php echo get_permalink(83);  ?>" class="read_more">Xem thêm</a>
										</div>
									</div>
								</div>
							</div>
							<div class="tg_post pw">
								<h2 class="title_top"><?php echo get_the_title(89); ?></h2> 
								<div class="row">
									<div class="col-sm-6">
										<div class="textwidget">
											<p><?php echo get_the_excerpt(89); ?></p>
											<a href="<?php echo get_permalink(89); ?>" class="read_more">Xem thêm</a>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="wrap_thumb">
											<figure class="thumbnail" style="background:url('<?php  echo get_the_post_thumbnail_url(89);  ?>');"><a href="<?php the_permalink(89);?>"></a></figure>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<div class="advertise">
							<?php dynamic_sidebar('cooperate'); ?>
						</div>
					</div>
					<div class="col-sm-2 sidebar">
						<div class="search_address">
							<div class="search_header">
								<?php //get_search_form(); ?>
								<form role="search" method="get" id="searchform" action="<?php echo home_url('/');  ?>">
									<div class="search">
										<input type="text" value="<?php the_search_query(); ?>" name="s" id="s" placeholder="Tìm kiếm">
										<button type="submit" id="searchsubmit"><i class="fa fa-search"></i></button>
									</div>
								</form>
							</div>
						</div>
						<?php dynamic_sidebar('sidebar1'); ?> 
					</div>
				</div>
			</div>
	</div>
	<div class="sitemap">
		<?php dynamic_sidebar('map_index'); ?> 
	</div>
</div>


<?php get_footer(); ?>




