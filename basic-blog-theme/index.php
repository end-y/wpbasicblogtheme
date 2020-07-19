<?php get_header();?>

    
    <div class=" col-md-12 col-sm-12 jumbotron" id="featured">
    <div class="post">
    <?php
    query_posts('posts_per_page=3&category_name="important"'); /*1, 2*/
    if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    <div class="slider "><h1 class="display-4"><a href="<?php the_permalink(); ?>"><strong><?php the_title();/*3*/ ?></strong></a></h1>
    <a class="kart mb-5 float-left mr-4"><?php the_post_thumbnail('Full');?></a>
    <a href="#" class="time"><?php the_time('j F Y'); ?> </a> | <a> <?php the_author_posts_link(); ?></a> | <a> <?php the_category('style'); ?></a><p class="col-3 lead float-right"><?php the_excerpt(); ?></p>
    <p><a href="<?php the_permalink(); ?>"><button class="btn btn-outline-primary float-right">Devam et</button></a></p></div>
    
    <?php endwhile; ?> <?php wp_reset_query(); /*4*/ ?>
    </div>
    <div class="butonlar ">
        <button class='birinci' onclick="plusDivs(-1)"><i class="fas fa-arrow-left fa-2x"></i></button>
        <button class='ikinci' onclick="plusDivs(+1)"><i class="fas fa-arrow-right fa-2x"></i></button>
    </div>
    </div>
    
   

    <div class="flexis">
    
     <?php if(have_posts() ) while (have_posts()): the_post();  ?>
            <?php get_template_part('content', get_post_format()); ?>
                <div class="col-lg-6 kart1 ">
                    <article class="kart-iki">
                        <a class="kart-img" href="<?php the_permalink(); ?>"><?php the_post_thumbnail('Full');?></a>
                        <section class="kart-icerik">
                            <header class="kart-ust">
                            <a href="<?php the_permalink(); ?>"><h2 class="baslik"><?php the_title(); ?></h2></a>
                            <p class="card-subtitle">Tarih: <a href="#"> <?php the_time('j F Y'); ?> </a>Yazar: <a href="#" ><?php the_author_posts_link(); ?></a> Kategori: <a class="cat" href="#"> <?php the_category('style'); ?></a>   </p>
                            </header>
                    <section class="kart-body"><p class="float-right"><?php the_content('Daha Fazlası'); ?></p> 
                     </section>
                    </section>
                    </article>
                </div>
                <?php endwhile; wp_reset_query(); ?> 

    </div>
    <?php if ( is_active_sidebar( 'bottom-sidebar' ) ) : ?> 
    <div class= "col-lg-12 post-aside"> 
    
        <?php  dynamic_sidebar('bottom-sidebar'); ?>
    
    </div>
    <?php endif; ?>
    
    <div class="asagi ">
    <?php  echo paginate_links(); ?>

    </div>
    
    

    <?php get_footer();?>

