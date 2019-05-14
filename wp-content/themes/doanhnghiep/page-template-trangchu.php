
<?php 
/*
Template Name: page-template-trangchu
*/
get_header(); 
?>	

<div class="page-wrapper">

	<div class="g_content">
		
			<div class="banner_idx">
				<div class="container">

					<div class="row">
						<div class="col-sm-10 col-left">
							
						</div>
						<div class="col-sm-2 sidebar">
							<div class="search_address">
								<div class="search_header">
									<?php //get_search_form(); ?>
									<form role="search" method="get" id="searchform" action="<?php echo home_url('/');  ?>">
										<div class="search">
											<input type="text" value="<?php the_search_query(); ?>" name="s" id="s" placeholder="Tìm kiếm">
											<input type="hidden" value="post" name="post_type">
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



	</div>

</div>


<?php get_footer(); ?>




