<?php get_header();?>

<div class="flexis mt-5">
    
     <?php if(have_posts() ) ?> 
     
     <div class ="container mb-5"><h1><?php the_search_query(); ?> için sonuçlar: </h1></div>
     
     <div class= "container text-center"> <?php $sonuc = $wp_query->found_posts;
    if($sonuc<=0){ ?> 
        <img class=" img-fluid mt-5 mb-5" src="<?php bloginfo('template_directory'); ?>/img/404.png"><h2 class="mt-3 mb-4"> 
    <?php echo 'Aradığınız kelimeyi bulamadık. :( </br> Başka bir kelime arayarak şansınızı </br> tekrar deneyebilirsiniz.  ';} ?> </h2></div>
     
    <?php while (have_posts()): the_post();  ?>
    
                <?php get_template_part('content',get_post_format()); ?>
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
    <div class="asagi ">
    <?php  echo paginate_links(); ?>

    </div>
    
    
    

    <?php get_footer();?>