<?php get_header();?>
    <?php while (have_posts()): the_post(); ?>
    
    <div class="col-lg-12  ">
                <div class="kart">
                    <article class="kart-iki">
                        <a class="page-img" href="<?php the_permalink(); ?>"><?php the_post_thumbnail('Full');?></a>
                        <section class="kart-icerik">
                            <header class="kart-ust">
                            <h2 class="baslik"><?php the_title(); ?></h2>
                            <p class="card-subtitle">Tarih: <a href="#"> <?php the_time('j F Y'); ?> </a>Yazar: <a href="#" ><?php the_author_posts_link(); ?></a>    </p>
                            </header>
                    <section class="kart-body"><p class="float-right"><?php the_content('Daha Fazlası'); ?></p> 
                     </section>
                    </section>
                    </article>
                </div>
               <div class= "yorum"> 
                   <?php comments_template(); ?> 
                </div>
</div>
    
    <?php endwhile; ?> 

    


<?php get_footer();?>