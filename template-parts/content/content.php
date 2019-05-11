<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>

<?php
$sticky = get_option('sticky_posts');
rsort( $sticky );
$sticky = array_slice( $sticky, 0, 3);
query_posts( array( 'post__in' => $sticky, 'caller_get_posts' => 1 ) );
if (have_posts()) :while (have_posts()) : the_post();
?>
 
<li><a href="<?php the_permalink(); ?>" target="_blank"><?php the_title(); ?></a></li>
 
<?php endwhile; endif; ?>
