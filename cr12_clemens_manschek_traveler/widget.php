<?php 

class custom_widget extends WP_Widget {
	public function __construct() {
		$widget_options = array(
			'classname' => 'custom_widget',
			'description' => 'Custom Widget',

		);
		//id, name, declaration
		parent::__construct('profile', 'Custom Widget Profile', $widget_options);
	}

	public function form($instance) {
		echo "Empty Widget, Please add any field you want from the Dashboard!";
	}

	public function widget($args, $instance) {
		echo $args['before_widget'];
		?>
<div class="w-100 py-1">
    <div class="">
        <div class="embed-responsive embed-responsive-16by9">
            <img class='img-fluid embed-responsive-item' src='https://ichef.bbci.co.uk/news/800/media/images/75069000/jpg/_75069135_whistlers_mother_fatcatart.jpg' alt="">
        </div>
        <div class="">
            <h1 class="text-center">
                Hello
            </h1>
            <p class="text-center">
                Welcome to <a href="<?php bloginfo('url'); ?>" style="color: #89c3d6"><?php bloginfo( 'name' ); ?></a>! Have a lovely day!
            </p>
            <div class="d-flex justify-content-around">
            	<a href="https://www.facebook.com/"><span class='px-2'><i class="fab fa-facebook-f"></i></span></a>
            	<a href="https://www.instagram.com/"><span class='px-2'><i class="fab fa-instagram"></i></span></a>
            	<a href="https://twitter.com/"><span class='px-2'><i class="fab fa-twitter"></i></span></a>
            	<a href="https://www.youtube.com/"><span class='px-2'><i class="fab fa-youtube"></i></span></a>
           
           
           
           
            </div>
        </div>
    </div>
</div>
<hr>
    <?php


		echo $args['after_widget'];

	}
}

add_action('widgets_init', function() {
	register_widget('custom_widget');
});