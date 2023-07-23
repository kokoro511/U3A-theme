<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?>
<?php astra_content_bottom(); ?>
	</div> <!-- ast-container -->
	</div><!-- #content -->
<?php 
	astra_content_after();
		
	astra_footer_before();
		
	astra_footer();
		
	astra_footer_after(); 
?>
	</div><!-- #page -->
<?php 
	astra_body_bottom();    
	wp_footer(); 
?>
	</body>

<script>
jQuery(document).ready(function($){
$('.toc-switch').click(function(){
if($('.toc-show-hide').is('#toc-show')){
$('.toc-content').attr("style","display:none;");
$('.toc-show-hide').attr("id","toc-hide").attr("title","hide").text("展开");
}
else if($('.toc-show-hide').is('#toc-hide')){
$(".toc-content").attr("style","display:block;");
$('.toc-show-hide').attr("id","toc-show").attr("title","show").text("隐藏");
}
})
});
</script>

</html>
