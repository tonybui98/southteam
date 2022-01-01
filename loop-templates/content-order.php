<a href="<?php the_permalink();?>">
  <div class="work-item mb-4">
      <div class="work-items-inner border">
    <figure class="work-thumb" style="background: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id() );?>);background-size:cover; background-repeat: no-repeat; height: 195px">
      </figure>
          <div class="number_of_work">
              <span class="number"><?php the_field('sl');?></span>
              <span class="gender"><?php the_field('gioi_tinh');?></span>
          </div>
        </a>
      <div class="work-content">
          <h5 class="text-primary title"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h5>
          <p class="salary"><i class="fas fa-yen-sign"></i><b><?php the_field('sallary');?></b></br><?php the_field('ghi_chu_mức_luong');?></p>
          <p class="date_in"><i class="fas fa-calendar-week"></i> <?php the_field('han-nop');?></p>
          <p class="pingback"><i class="fas fa-map-marker-alt"></i> <?php the_field('address');?></p>
      </div>
      </div>
  </div>
</a>
