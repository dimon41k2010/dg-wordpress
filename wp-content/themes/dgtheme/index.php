<?php
get_header();
?>
 <!--================Home Banner Area =================-->

        <section class="home_banner_area">
           	<div class="container box_1620">
           		<div class="banner_inner d-flex align-items-center">
					<div class="banner_content">
						<div class="media"> 
                            <?php
                            if (have_posts()) :
                                while (have_posts()) :
                                    the_post();
                                    the_content();
                                endwhile;
                            endif;
                            ?>
						</div>
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
<?php
get_footer();
?>

