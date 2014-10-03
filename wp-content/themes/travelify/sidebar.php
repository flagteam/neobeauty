<?php
/**
 * This file displays page with right sidebar.
 *
 */
?>
<div id="secondary" class="no-margin-left">
	<?php get_sidebar( 'left' ); ?>
</div><!-- #secondary -->
<?php
   /**
    * travelify_before_primary
    */
   do_action( 'travelify_before_primary' );
?>

<?php
   /**
    * travelify_after_primary
    */
   do_action( 'travelify_after_primary' );
?>

<div id="secondary">
	<?php get_sidebar( 'right' ); ?>
</div><!-- #secondary -->