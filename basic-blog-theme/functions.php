<?php add_theme_support('post-thumbnails'); 

register_sidebar(array(
    'name' => __('Right Hand Sidebar'),
    'id' => 'right-sidebar',
    'description' => __('Bu websitemizin sidebar'),
    'before_title' => '<h3 class="sidebar_title">',
    'after_title' => '</h3>',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div> <!--- widget end ---->'

));
register_sidebar(array(
    'name' => __('Bottom Sidebar'),
    'id' => 'bottom-sidebar',
    'description' => __('Bu websitemizin sidebar'),
    'before_title' => '<h3 class="sidebar_title">',
    'after_title' => '</h3>',
    'before_widget' => '<div class= "col-lg-12 post post-aside">',
    'after_widget' => '</div> <!--- widget end ---->'

));
add_theme_support('post-thumbnails'); 

register_sidebar(array(
    'name' => __('Left Sidebar1'),
    'id' => 'left-sidebar',
    'description' => __('Bu websitemizin sidebar'),
    'before_title' => '<h3 class="sidebar_title">',
    'after_title' => '</h3>',
    'before_widget' => '<div class="tab-pane pad" id="profile" role="tabpanel" aria-labelledby="profile-tab">',
    'after_widget' => '</div> <!--- widget end ---->'

));
register_sidebar(array(
    'name' => __('Left Sidebar2'),
    'id' => 'left-sidebar2',
    'description' => __('Bu websitemizin sidebar'),
    'before_title' => '<h3 class="sidebar_title">',
    'after_title' => '</h3>',
    'before_widget' => '<div class="tab-pane pad fade ml-5" id="page2" role="tabpanel" aria-labelledby="contact-tab">',
    'after_widget' => '</div> <!--- widget end ---->'

));
register_sidebar(array(
    'name' => __('Left Sidebar3'),
    'id' => 'left-sidebar3',
    'description' => __('Bu websitemizin sidebar'),
    'before_title' => '<h3 class="sidebar_title">',
    'after_title' => '</h3>',
    'before_widget' => '<div class="tab-pane pad fade ml-5" " id="page3" role="tabpanel" aria-labelledby="contact-tab">',
    'after_widget' => '</div> <!--- widget end ---->'

));

 function ust_isimler(){
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'ust_isimler'); 
add_theme_support('post-formats',array('aside','link'));

 class wpb_widget extends WP_Widget {
  
  function __construct() {
  parent::__construct(
    
  // Base ID of your widget
  'wpb_widget', 
    
  // Widget name will appear in UI
  __('Card Wigdet', 'wpb_widget_domain'), 
    
  // Widget description
  array( 'description' => __( 'A card wigdet' ), ) 
  );
  }
    
  // Creating widget front-end
    
  public function widget( $args, $instance ) {
  $title = apply_filters( 'widget_title', $instance['title'] );
  $story = apply_filters( 'widget_story', $instance['story'] );
  $twitter = apply_filters( 'widget_twitter', $instance['twitter'] );
  $facebook = apply_filters( 'widget_facebook', $instance['facebook'] );
  $instagram = apply_filters( 'widget_instagram', $instance['instagram'] );
  $img = apply_filters( 'widget_url', $instance['img'] );
  // before and after widget arguments are defined by themes
  echo $args['before_widget'];
  if ( ! empty( $title ) )
  echo $args['before_title'] . "<div class=\" bir golge card border-dark mb-5 \" style=\" max-width: 45rem; \">
  <div class=\" card-header \"> $title ";
  if(!empty($twitter)){

    echo  "<a href=\"https://twitter.com/$twitter \" target=\"_blank\"><i class=\"float-right fab fa-twitter mr-2 \"></i></a> ";
   
  }
  if(!empty($facebook)){
    echo "<a href=\"https://www.facebook.com/$facebook \" target=\"_blank\"><i class=\"float-right fab fa-facebook mr-2 \"></i></a> ";
}
if(!empty($instagram)){
    echo "<a href=\"https://instagram.com/$instagram \" target=\"_blank\"><i class=\"float-right fab fa-instagram mr-2 \"></i></a> ";
}
 echo "</div>" . "<div class=\" card-body text-dark \">
<img src=\"$img\" class=\"rounded img-thumbnail image1 float-left mr-3 \">
<h6 class=\" card-title \">$story</h6>
</div>
</div>". $args['after_title'];
  // This is where you run the code and display the output
  
  echo $args['after_widget'];
  }
            
  // Widget Backend 
  public function form( $instance ) {
  if ( isset( $instance[ 'title' ] ) ) {
  $title = $instance[ 'title' ];
  $story = $instance['story'];
  $twitter = $instance["twitter"];
  $facebook = $instance["facebook"];
  $instagram = $instance["instagram"];
  $img = $instance["img"];
  }
  else {
  $title = __( 'New title', 'wpb_widget_domain' );
  }
  // Widget admin form
  ?>
  <p>
  <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
  <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
  <label for="<?php echo $this->get_field_id( 'story' ); ?>"><?php _e( 'Story:' ); ?></label> 
  <textarea class="wp-editor-area" style="width: 100%" id="<?php echo $this->get_field_id( 'story' ); ?>" name="<?php echo $this->get_field_name( 'story' ); ?>" type="text" ><?php echo esc_attr( $story ); ?> </textarea>
  <label for="<?php echo $this->get_field_id( 'twitter' ); ?>"><?php _e( 'Twitter:' ); ?></label> 
  <input class="widefat" id="<?php echo $this->get_field_id( 'twitter' ); ?>" name="<?php echo $this->get_field_name( 'twitter' ); ?>" type="text" value="<?php echo esc_attr( $twitter ); ?>" />
  <label for="<?php echo $this->get_field_id( 'facebook' ); ?>"><?php _e( 'Facebook:' ); ?></label> 
  <input class="widefat" id="<?php echo $this->get_field_id( 'facebook' ); ?>" name="<?php echo $this->get_field_name( 'facebook' ); ?>" type="text" value="<?php echo esc_attr( $facebook ); ?>" />
  <label for="<?php echo $this->get_field_id( 'instagram' ); ?>"><?php _e( 'Instagram:' ); ?></label> 
  <input class="widefat" id="<?php echo $this->get_field_id( 'instagram' ); ?>" name="<?php echo $this->get_field_name( 'instagram' ); ?>" type="text" value="<?php echo esc_attr( $instagram ); ?>" />
  <label for="<?php echo $this->get_field_id( 'img' ); ?>"><?php _e( 'Img Url:' ); ?></label> 
  <input class="widefat" id="<?php echo $this->get_field_id( 'img' ); ?>" name="<?php echo $this->get_field_name( 'img' ); ?>" type="text" value="<?php echo esc_attr( $img ); ?>" />
  </p>
  <?php 
  }
        
  // Updating widget replacing old instances with new
  public function update( $new_instance, $old_instance ) {
  $instance = array();
  $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
  $instance['story'] = ( ! empty( $new_instance['story'] ) ) ? strip_tags( $new_instance['story'] ) : '';
  $instance['twitter'] = ( ! empty( $new_instance['twitter'] ) ) ? strip_tags( $new_instance['twitter'] ) : '';
  $instance['facebook'] = ( ! empty( $new_instance['facebook'] ) ) ? strip_tags( $new_instance['facebook'] ) : '';
  $instance['instagram'] = ( ! empty( $new_instance['instagram'] ) ) ? strip_tags( $new_instance['instagram'] ) : '';
  $instance['img'] = ( ! empty( $new_instance['img'] ) ) ? strip_tags( $new_instance['img'] ) : '';
  return $instance;
  }
   
  // Class wpb_widget ends here
  } 
   
   
  // Register and load the widget
  function wpb_load_widget() {
      register_widget( 'wpb_widget' );
  }
  add_action( 'widgets_init', 'wpb_load_widget' );
  require_once (get_stylesheet_directory().'/admin.php');
  ?>