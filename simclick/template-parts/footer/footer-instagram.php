<?php
/**
 * Displays footer widgets if assigned
 *
 * @package SimClick
 */

?>
<?php
if ( is_active_sidebar( 'sidebar-instagram' ) ) :
?>
<aside id="footer-instagram" class="widget-area section" role="complementary">
	<div class="wrapper">
		<div class="footer-instagram">
			<?php dynamic_sidebar( 'sidebar-instagram' ); ?>
		</div>
	</div><!-- .wrapper -->
</aside><!-- .widget-area -->
<?php endif;

