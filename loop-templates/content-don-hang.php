<?php
/**
 * Single post partial template.
 *
 * @package understrap
 */

?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
    <div class="row don-hang">
      <div class="col-12 col-md-6">
        <?php the_post_thumbnail();?>
        <div class="meta_content row">
          <div class="col-12 col-md-6">
            <h3>ĐỊA ĐIỂM LÀM VIỆC</h3>
            <p><i class="fas fa-map-marker-alt"></i>   <?php the_field('address');?></p>
          </div>
          <div class="col-12 col-md-6">
            <h3>HẠN NỘP HỒ SƠ</h3>
            <p><i class="fas fa-calendar-week"></i> <?php the_field('han-nop');?></p>
          </div>
          <div class="col-12 col-md-6">
            <h3>MỨC LƯƠNG CƠ BẢN</h3>
            <p class="salary"><i class="fas fa-yen-sign"></i><b><?php the_field('sallary');?></b></br><?php the_field('ghi_chu_mức_luong');?></p>
          </div>
          <div class="col-12 col-md-6">
            <h3>SỐ LƯỢNG TUYỂN DỤNG</h3>
            <div class="get_number">
              <span class="number"><?php the_field('sl');?></span>
              <span class="gender"><?php the_field('gioi_tinh');?></span>
            </div>
          </div>
        </div>
      </div>
    	<div class="entry-content col-12 col-md-6">
        <header class="entry-header">
          <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
        </header><!-- .entry-header -->
        <div class="entry-content">
    		<?php the_content(); ?>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
          <i class="fas fa-file-signature"></i> ĐĂNG KÝ ĐƠN HÀNG
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title text-center" id="exampleModalCenterTitle">ĐĂNG KÝ ĐƠN HÀNG</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <?php echo do_shortcode('[contact-form-7 id="477" title="Đăng ký làm việc"]');?>
              </div>
            </div>
          </div>
        </div>
    		<?php
    		wp_link_pages( array(
    			'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
    			'after'  => '</div>',
    		) );
    		?>
    	</div><!-- .entry-content -->
    </div>
	<footer class="entry-footer">

		<?php understrap_entry_footer(); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
