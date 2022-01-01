<?php
/**
 * Post rendering content according to caller of get_template_part.
 *
 * @package understrap
 */

?>

<article <?php post_class('mb-4 bg-white'); ?> id="post-<?php the_ID(); ?>">
    <div class="row">
        <div class="col-md-4">
            <div class="thumbnail">
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
            </div>
        </div>
        <div class="col-md-8">
            <div class="p-3">
            <h4 class="text-primary text-uppercase title">
				<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h4>
            <div class="excerpt">
                <?php echo wp_trim_words( get_the_excerpt(), 50, '...' ); ?>
            </div>
            <div class="text-right">
                <a href="<?php the_permalink(); ?>" class="btn btn-primary rounded-0">Xem thêm</a>
            </div>
                </div>
        </div>
    </div>

</article><!-- #post-## -->
