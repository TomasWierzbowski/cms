<?php
the_post();

get_header();
?>
<div class="page__text">


<?php
if ( is_front_page() ){
?>
<style>

@media only screen and (min-width: 850px) {
.count {
	float: left;
	width: 33%
}
}

@media only screen and (max-width: 849px) {
.count {
	width: 100%;
	text-align: center;
}
}

.count-container {
	font-size: 50px;
	height: 240px;
	color: rgba(15,23,39,.65);
	line-height: 1.5;
	text-align: center;
}

@media only screen and (max-width: 849px) {
.count-container {
	margin-bottom: 110px;
}
}


</style>
<div class="count-container">
<?php
$count_listings = wp_count_posts( 'hp_listing' )->publish;
$count_vendors = wp_count_posts( 'hp_vendor' )->publish;

$args = array();
$comments = get_comments($args);
$count_comments = count($comments);
?>
<div class="count">
<?php echo $count_listings . ' '; ?>
<span style="font-size: 24px;">Ogłoszenia</span> 
</div>
<div class="count">
<?php echo $count_vendors . ' '; ?>
<span style="font-size: 24px;">Ogłoszeniodawcy</span>
</div>
<div class="count">
<?php echo $count_comments . ' '; ?>
<span style="font-size: 24px;">Komentarze</span>
</div>
<div style="clear: both;"></div>
</div>
<?php
}
?>

	<?php the_content( null, true ); ?>
</div>
<?php
wp_link_pages(
	[
		'before'      => '<nav class="pagination"><div class="nav-links">',
		'after'       => '</div></nav>',
		'link_before' => '<span class="page-numbers">',
		'link_after'  => '</span>',
	]
);

comments_template();

get_footer();
