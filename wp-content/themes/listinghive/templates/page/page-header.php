<section class="header-hero <?php echo esc_attr( $class ); ?>" <?php if ( get_theme_mod( 'header_image_parallax' ) ) : ?>data-component="parallax"<?php endif; ?>>
<style>
.video-container {
z-index: -100;
width:100%;
height:100%;
overflow:hidden;
position:absolute;
top:0;
left:0;
}
#video-bg{
  width:100%;
 
}
	.header-navbar{
		background-color:white;
	}
	.header-hero{
		background-color:rgba(0,0,0,0)!important;
		background-image:none!important;
	}	
</style>

<!-- <section class="header-hero">			 -->
	 <div class="video-container">
      <video autoplay loop muted id="video-bg">
        <source src="//test2.makeitwork.com.pl/wp-content/uploads/2022/11/filmik-online-video-cutter.com-1.mp4" type="video/mp4">
      </video>
    </div>
	<div class="header-hero__content">
		<div class="container">
			<?php echo $content; ?>
		</div>
	</div>
</section>
