<html>
    <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title><?php bloginfo('title'); ?></title>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
            <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
            <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
            
            <link href= "<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
            <?php wp_head(); ?>
            <link href="https://fonts.googleapis.com/css?family=Cardo|Oswald" rel="stylesheet">
            <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
            <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.3/TweenMax.min.js"></script>
           
    </head>
    <body>
    <div class="row "> 
    <?php $isim1 = esc_attr(get_option('blackBox'));
    $isim2 = esc_attr(get_option('blackBox2'));
    $isim3 = esc_attr(get_option('blackBox3')); 
    ?>
             <div class="neutral col-sm-12 col-md-12 col-lg-4 ">
             <div class="fixed-top1"> <div class="ayrac ">
             <a class="navbar-brand" id="home-tab" href="<?php echo get_home_url(); ?>" role="tab" aria-selected="true" aria-controls="home"><img src="
             <?php 
             $authorImg = get_theme_mod('basic-author-callout-image');
             if($authorImg != ""){
                echo wp_get_attachment_url($authorImg);
            }else{
                echo 'https://via.placeholder.com/250x53/F6CA09';
            }  
            ?>">
             </a>
             <ul class="nav navbar-expand-md" id="myTab" role="tablist ">
                <?php if ( is_active_sidebar( 'left-sidebar' ) ) : ?>
                    <li class="nav-item"><a class="nav-link" id="profile-tab" data-toggle="tab" href="#page1" role="tab" aria-selected="false" aria-controls="profile">
                    <?php $authorText = get_theme_mod('showcase_heading');
                        if($authorText != ""){
                            echo $authorText;
                        }else{
                            echo 'Page1';
                        }
                    ?>
                    </a></li>
                <?php endif; ?>
                <?php if ( is_active_sidebar( 'left-sidebar2' ) ) : ?>
                    <li class="nav-item"><a class="nav-link" id="contact-tab" data-toggle="tab" href="#page2" role="tab" aria-selected="false"aria-controls="contact">
                    <?php $authorText = get_theme_mod('showcase_heading1');
                        if($authorText != ""){
                            echo $authorText;
                        }else{
                            echo 'Page2';
                        }
                    ?>
                    </a></li>
                <?php endif; ?>
                <?php if ( is_active_sidebar( 'left-sidebar3' ) ) : ?>    
                    <li class="nav-item"><a class="nav-link" id="contact-tab" data-toggle="tab" href="#page3" role="tab" aria-selected="false"aria-controls="contact">
                    <?php $authorText = get_theme_mod('showcase_heading2');
                        if($authorText != ""){
                            echo $authorText;
                        }else{
                            echo 'Page3';
                        }
                    ?>
                    </a></li>
                <?php endif; ?>  
                </ul>
            </div>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                 <div class="yazi">
                    <h1 class="buyukyazi display-4 text-left"><?php bloginfo('name'); ?></h1>
                 <p class=" kucukyazi mt-5 mb-5"> <?php bloginfo('description'); ?></p>
              </div>
            </div>
                
            <div class="tab-pane pad" id="page1" role="tabpanel" aria-labelledby="profile-tab">
            <?php dynamic_sidebar( 'left-sidebar1' ); ?>
            </div>
            <?php  dynamic_sidebar('left-sidebar2'); ?>
             <?php  dynamic_sidebar('left-sidebar3'); ?>
            </div>
          </div>
            </div>
            <div class="col-lg-7">