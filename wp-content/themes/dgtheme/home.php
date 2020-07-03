<?php
/*
Template Name: Page Blog
*/
?>
<?php
get_header();
?>

        <!--================Home Banner Area =================-->
        <section class="home_banner_area blog_banner">
            <div class="banner_inner d-flex align-items-center">
            	<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
				<div class="container">
					<div class="blog_b_text text-center">
						<h2>Dude You’re Getting <br /> a Telescope</h2>
						<p>There is a moment in the life of any aspiring astronomer that it is time to buy that first</p>
						<a class="white_bg_btn" href="#">View More</a>
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
        
        <!--================Blog Categorie Area =================-->
        <section class="blog_categorie_area">
            <div class="container">
                <div class="row">
                    <?php
                    $term = get_queried_object();
                    $categories = get_categories( [
                        'taxonomy'     => 'category',
                        'type'         => 'post',
                        'child_of'     => 0,
                        'parent'       => '',
                        'orderby'      => 'name',
                        'order'        => 'DESC',
                        'hide_empty'   => 1,
                        'hierarchical' => 1,
                        'exclude'      => '',
                        'include'      => '',
                        'number'       => 0,
                        'pad_counts'   => false,
                        // полный список параметров смотрите в описании функции http://wp-kama.ru/function/get_terms
                    ] );

                    if( $categories ){
                        foreach( $categories as $cat ){

                            // Данные в объекте $cat
                            $image = get_field('image', $cat);
                           echo '<div class="col-lg-4">';
                            echo '<div class="categories_post">';
                             echo '<img src="'.$image.'" alt="post">';
                             echo '<div class="categories_details">';
                                echo '<div class="categories_text">';
                                     echo '<a href="'.$cat->slug.'"><h5>'.$cat->cat_name.'</h5></a>';
                                     echo '<div class="border_line"></div>';
                                    echo ' <p>'.$cat->description.'</p>';
                               echo '  </div>';
                            echo '   </div>';
                             echo '</div>';
                             echo '</div>';
                            // $cat->term_id
                            // $cat->name (Рубрика 1)
                            // $cat->slug (rubrika-1)
                            // $cat->term_group (0)
                            // $cat->term_taxonomy_id (4)
                            // $cat->taxonomy (category)
                            // $cat->description (Текст описания)
                            // $cat->parent (0)
                            // $cat->count (14)
                            // $cat->object_id (2743)
                            // $cat->cat_ID (4)
                            // $cat->category_count (14)
                            // $cat->category_description (Текст описания)
                            // $cat->cat_name (Рубрика 1)
                            // $cat->category_nicename (rubrika-1)
                            // $cat->category_parent (0)

                        }
                    }
                    ?>
<!--                    <div class="col-lg-4">-->
<!--                        <div class="categories_post">-->
<!--                            <img src="img/blog/cat-post/cat-post-3.jpg" alt="post">-->
<!--                            <div class="categories_details">-->
<!--                                <div class="categories_text">-->
<!--                                    <a href="blog-details.html"><h5>Social Life</h5></a>-->
<!--                                    <div class="border_line"></div>-->
<!--                                    <p>Enjoy your social life together</p>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-lg-4">-->
<!--                        <div class="categories_post">-->
<!--                            <img src="img/blog/cat-post/cat-post-2.jpg" alt="post">-->
<!--                            <div class="categories_details">-->
<!--                                <div class="categories_text">-->
<!--                                    <a href="blog-details.html"><h5>Politics</h5></a>-->
<!--                                    <div class="border_line"></div>-->
<!--                                    <p>Be a part of politics</p>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-lg-4">-->
<!--                        <div class="categories_post">-->
<!--                            <img src="img/blog/cat-post/cat-post-1.jpg" alt="post">-->
<!--                            <div class="categories_details">-->
<!--                                <div class="categories_text">-->
<!--                                    <a href="blog-details.html"><h5>Food</h5></a>-->
<!--                                    <div class="border_line"></div>-->
<!--                                    <p>Let the food be finished</p>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
                </div>
            </div>
        </section>
        <!--================Blog Categorie Area =================-->
        
        <!--================Blog Area =================-->
        <section class="blog_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="blog_left_sidebar">
                            <?php
                            // the query
                            $wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish')); ?>

                            <?php if ( $wpb_all_query->have_posts() ) : ?>
                            <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
                                <article class="row blog_item">
                                    <div class="col-md-3">
                                        <div class="blog_info text-right">
                                        <?php 
                                        if (count(wp_get_post_tags($post->ID)) > 0):

                                        ?>
                                    
                                            <div class="post_tag">
                                            <?php 
                                            foreach(wp_get_post_tags($post->ID) as $tag):
                                            ?>
                                                <a href="<?php echo $tag->slug ?>"><?php echo $tag->name ?></a>
                                                                                        
                                                <?php endforeach ?>
                                            </div>
                                            
                                            <?php endif ?>
                                    

                                            <ul class="blog_meta list">
                                                <li><a href="#"><?php echo get_the_author();?><i class="lnr lnr-user"></i></a></li>
                                                <li><a href="#"><?php echo get_the_date('m j, y');?><i class="lnr lnr-calendar-full"></i></a></li>
                                                <li><a href="#">1.2M Views<i class="lnr lnr-eye"></i></a></li>
                                                <li><a href="#"><?php echo count(get_comments());?>  Comments<i class="lnr lnr-bubble"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="blog_post">

                                            <?php if ( has_post_thumbnail() ) : ?>
                                            <?php the_post_thumbnail(); ?>

                                            <?php endif; ?>
                                            <div class="blog_details">
                                                <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
                                                <?php the_content();?>
                                                <a href="single-blog.html" class="white_bg_btn">View More</a>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <?php endwhile; ?>

                            <!-- <?php wp_reset_postdata(); ?> -->

                            <?php else : ?>
                            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                            <?php endif; ?>

                            <nav class="blog-pagination justify-content-center d-flex">
                            <!-- D. Inserted here pagination       -->
                            <!-- <?php wp_pagenavi(); ?> -->

<div class="my_own_12">
                            <?php the_posts_pagination($args); 

                            $args = array(
                                'show_all'     => true, // показаны все страницы участвующие в пагинации
                                'end_size'     => 2,     // количество страниц на концах
                                'mid_size'     => 2,     // количество страниц вокруг текущей
                                'prev_next'    => true,  // выводить ли боковые ссылки "предыдущая/следующая страница".
                                'prev_text'    => ('« Previous'),
                                'next_text'    => ('Next »'),
                                'add_args'     => false, // Массив аргументов (переменных запроса), которые нужно добавить к ссылкам.
                                'add_fragment' => '',     // Текст который добавиться ко всем ссылкам.
                                // 'screen_reader_text' => __( '' )
                                );                          
                                ?>
</div>
                            <!-- D. Inserted here pagination end       -->
		                        <ul class="pagination">
		                            <li class="page-item">
		                                <a href="#" class="page-link" aria-label="Previous">
		                                    <span aria-hidden="true">
		                                        <span class="lnr lnr-chevron-left"></span>
		                                    </span>
		                                </a>
		                            </li>
		                            <li class="page-item active"><a href="#" class="page-link">01</a></li>
		                            <li class="page-item"><a href="#" class="page-link">02</a></li>
		                            <li class="page-item"><a href="#" class="page-link">03</a></li>
		                            <li class="page-item"><a href="#" class="page-link">04</a></li>
		                            <li class="page-item"><a href="#" class="page-link">09</a></li>
		                            <li class="page-item">
		                                <a href="#" class="page-link" aria-label="Next">
		                                    <span aria-hidden="true">
		                                        <span class="lnr lnr-chevron-right"></span>
		                                    </span>
		                                </a>
		                            </li>
                                </ul>
                               <!-- D. Inserted here pagination       -->
                               
                                <!-- D. Inserted here pagination end       -->
		                    </nav>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog_right_sidebar">
                            <aside class="single_sidebar_widget search_widget">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search Posts">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button"><i class="lnr lnr-magnifier"></i></button>
                                    </span>
                                </div><!-- /input-group -->
                                <div class="br"></div>
                            </aside>
                            <aside class="single_sidebar_widget author_widget">
                                <img class="author_img rounded-circle" src="img/blog/author.png" alt="">
                                <h4>Charlie Barber</h4>
                                <p>Senior blog writer</p>
                                <div class="social_icon">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-github"></i></a>
                                    <a href="#"><i class="fa fa-behance"></i></a>
                                </div>
                                <p>Boot camps have its supporters andit sdetractors. Some people do not understand why you should have to spend money on boot camp when you can get. Boot camps have itssuppor ters andits detractors.</p>
                                <div class="br"></div>
                            </aside>
                            <aside class="single_sidebar_widget popular_post_widget">
                                <h3 class="widget_title">Popular Posts</h3>
                                <div class="media post_item">
                                    <img src="img/blog/popular-post/post1.jpg" alt="post">
                                    <div class="media-body">
                                        <a href="blog-details.html"><h3>Space The Final Frontier</h3></a>
                                        <p>02 Hours ago</p>
                                    </div>
                                </div>
                                <div class="media post_item">
                                    <img src="img/blog/popular-post/post2.jpg" alt="post">
                                    <div class="media-body">
                                        <a href="blog-details.html"><h3>The Amazing Hubble</h3></a>
                                        <p>02 Hours ago</p>
                                    </div>
                                </div>
                                <div class="media post_item">
                                    <img src="img/blog/popular-post/post3.jpg" alt="post">
                                    <div class="media-body">
                                        <a href="blog-details.html"><h3>Astronomy Or Astrology</h3></a>
                                        <p>03 Hours ago</p>
                                    </div>
                                </div>
                                <div class="media post_item">
                                    <img src="img/blog/popular-post/post4.jpg" alt="post">
                                    <div class="media-body">
                                        <a href="blog-details.html"><h3>Asteroids telescope</h3></a>
                                        <p>01 Hours ago</p>
                                    </div>
                                </div>
                                <div class="br"></div>
                            </aside>
                            <aside class="single_sidebar_widget ads_widget">
                                <a href="#"><img class="img-fluid" src="img/blog/add.jpg" alt=""></a>
                                <div class="br"></div>
                            </aside>
                            <aside class="single_sidebar_widget post_category_widget">
                                <h4 class="widget_title">Post Catgories</h4>
                                <ul class="list cat-list">
                                    <li>
                                        <a href="#" class="d-flex justify-content-between">
                                            <p>Technology</p>
                                            <p>37</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex justify-content-between">
                                            <p>Lifestyle</p>
                                            <p>24</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex justify-content-between">
                                            <p>Fashion</p>
                                            <p>59</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex justify-content-between">
                                            <p>Art</p>
                                            <p>29</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex justify-content-between">
                                            <p>Food</p>
                                            <p>15</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex justify-content-between">
                                            <p>Architecture</p>
                                            <p>09</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex justify-content-between">
                                            <p>Adventure</p>
                                            <p>44</p>
                                        </a>
                                    </li>															
                                </ul>
                                <div class="br"></div>
                            </aside>
                            <aside class="single-sidebar-widget newsletter_widget">
                                <h4 class="widget_title">Newsletter</h4>
                                <p>
                                Here, I focus on a range of items and features that we use in life without
                                giving them a second thought.
                                </p>
                                <div class="form-group d-flex flex-row">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                                        </div>
                                        <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Enter email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email'">
                                    </div>
                                    <a href="#" class="bbtns">Subcribe</a>
                                </div>	
                                <p class="text-bottom">You can unsubscribe at any time</p>	
                                <div class="br"></div>							
                            </aside>
                            <aside class="single-sidebar-widget tag_cloud_widget">
                                <h4 class="widget_title">Tag Clouds</h4>
                                <ul class="list">
                                    <li><a href="#">Technology</a></li>
                                    <li><a href="#">Fashion</a></li>
                                    <li><a href="#">Architecture</a></li>
                                    <li><a href="#">Fashion</a></li>
                                    <li><a href="#">Food</a></li>
                                    <li><a href="#">Technology</a></li>
                                    <li><a href="#">Lifestyle</a></li>
                                    <li><a href="#">Art</a></li>
                                    <li><a href="#">Adventure</a></li>
                                    <li><a href="#">Food</a></li>
                                    <li><a href="#">Lifestyle</a></li>
                                    <li><a href="#">Adventure</a></li>
                                </ul>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================Blog Area =================-->

<?php
get_footer();

?>