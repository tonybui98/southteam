<?php
//banner
add_shortcode('banner', 'banner_func');
function banner_func($atts, $content = null) {
    ob_start();
    extract(shortcode_atts(array(
        'banner_title' => '',
        'banner_img' => '',
        'banner_link'=>'',
		'banner_info'=>'',
		'banner_type'=>'',
                    ), $atts));
	if ($banner_type==1){ ?>
<div class="grid-banner">

<figure class="effect-apollo">
						<?php echo wp_get_attachment_image($banner_img, 'full'); ?>
						<figcaption>
							<h2><?php echo $banner_title;?></h2>
							<?php if($banner_info){echo '<p>'.$banner_info.'</p>';} ?>
							<a href="<?php echo vc_build_link($banner_link)['url'] ; ?>">View more</a>
						</figcaption>
					</figure>
	</div>
<?php } elseif ($banner_type==2) { ?>
<div class="grid-banner">
    <figure class="effect-bubba">
        <a href="<?php echo vc_build_link($banner_link)['url'] ; ?>">
        <?php echo wp_get_attachment_image($banner_img, 'full'); ?>
        <figcaption>
            <h2 class="text-shadown-1"><?php echo $banner_title;?></h2>
            <?php if($banner_info){echo '<p>'.$banner_info.'</p>';} ?>
        </figcaption>
        </a>
    </figure>
    </div>
<?php } elseif ($banner_type==3) { ?>
<div class="grid-banner">
<figure class="effect-julia">
						<?php echo wp_get_attachment_image($banner_img, 'full'); ?>
						<figcaption>
							<h2><?php echo $banner_title;?></h2>
							<div>
								<?php if($banner_info){echo '<p>'.$banner_info.'</p>';} ?>
							</div>
							<a href="<?php echo vc_build_link($banner_link)['url'] ; ?>">View more</a>
						</figcaption>
					</figure>
</div>
<?php } return ob_get_clean();
}
//Featured
 add_shortcode('featured', 'featured_func');
function featured_func($atts, $content = null) {
    ob_start();
    extract(shortcode_atts(array(
        'featured_title' => '',
        'featured_img' => '',
        'featured_link'=>'',
        'featured_info'=>'',
                    ), $atts));
    ?>
<div class="default-service-column mb-5">
                <div class="inner-box box-shadown">
                    <div class="inner-most border">
                        <figure class="image-box">
                            <a href="<?php echo vc_build_link($featured_link)['url'] ; ?>">
                         <?php echo wp_get_attachment_image($featured_img, 'full'); ?></a></figure>
                        <div class="lower-part">
                            <div class="left-curve"></div>
                            <i class="fa-3x fa-home"></i>
                            <div class="right-curve"></div>
                            <div class="content bg-white text-center">
                                <h5 class="text-uppercase text-primary"><?php echo $featured_title; ?></h5>
                                <div class="text mb-3"><?php echo $featured_info; ?></div>
                                <div class="more-link text-center"><a href="<?php echo vc_build_link($featured_link)['url'] ; ?>" class="read-more strong btn btn-primary rounded-0">Xem thêm</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<?php  return ob_get_clean();
}
 //Sep Align
add_shortcode('sep', 'sep_func');
function sep_func($atts, $content = null) {
    ob_start();
    extract(shortcode_atts(array(
        'sep_align' => '',
                    ), $atts));

    ?>
<div class="wt-separator-outer <?php echo $sep_align; ?>">
                                    <div class="wt-separator style-square">
                                        <span class="separator-left bg-primary"></span>
                                        <span class="separator-right bg-primary"></span>
                                    </div>
                                </div>
<?php  return ob_get_clean();
}

 //Tiêu đề + Icon
add_shortcode('icontit', 'icontit_func');
function icontit_func($atts, $content = null) {
    ob_start();
    extract(shortcode_atts(array(
        'icontit_title' => '',
        'icontit_content' => '',
        'icontit_icon' => '',
                    ), $atts));

    ?>
    <div class="tg-service tg-haslayout animate_line border mb-3">
        <div class="tg-border-topleft tg-haslayout">
            <div class="tg-displaytable">
                <div class="tg-displaytablecell">
                    <i class="fa-3x <?php echo $icontit_icon; ?> text-primary"></i>
                    <h3 class="text-primary"><?php echo $icontit_title; ?></h3>
                    <div class="tg-description">
                        <p><?php echo $icontit_content; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php  return ob_get_clean();
}

 //Tiêu đề + Icon 2
add_shortcode('icontit2', 'icontit_func2');
function icontit_func2($atts, $content = null) {
    ob_start();
    extract(shortcode_atts(array(
        'icontit_title2' => '',
        'icontit_content2' => '',
        'icontit_icon2' => '',
                    ), $atts));

    ?>
    <div class="item mb-3 icon-title-2">
        <div class="media align-items-center"><i class="fa-3x <?php echo $icontit_icon2; ?> bg-primary"></i>
            <div class="media-body"> <h5 class="text-uppercase text-justify mb-0"><?php echo $icontit_title2; ?></h5>
                <p class="description text-justify m-0"><?php echo $icontit_content2; ?></p>
            </div></div>
    </div>
<?php  return ob_get_clean();
}
//Tiêu đề + Icon 3
add_shortcode('icontit3', 'icontit_func3');
function icontit_func3($atts, $content = null) {
    ob_start();
    extract(shortcode_atts(array(
        'icontit_title3' => '',
        'icontit_content3' => '',
        'icontit_icon3' => '',
                    ), $atts));

    ?>
    <div id="wrap" class="transaction text-center mb-4">
        <div id="top">
            <span class="transaction"><i class="fa fa-3x <?php echo $icontit_icon3; ?>"></i></span>
            <h5 class="transaction"><a href="#"><?php echo $icontit_title3; ?></a></h5>
        </div>
        <div id="bottom"><?php echo $icontit_content3; ?></div>
    </div>
<?php  return ob_get_clean();
}


 //Portfolio
add_shortcode('portfolios', 'portfolios_func');
function portfolios_func($atts, $content = null) {
    ob_start();
    extract(shortcode_atts(array(
        'portfolios_num' => '',
        'portfolios_cat' => '',
                    ), $atts));
    $cats=explode(',',$portfolios_cat);
    $categories = get_terms( 'danh-muc', array(
    'include'     => $cats,
    'hide_empty' => 0
) );
     $args = array(
            'post_type' => array('portfolio'),
            'posts_per_page' => $portfolios_num,);
    $wp_query = new WP_Query($args);?>
<div class="portfolios work py-4">
    <div class="filter mb-3">
        <ul class="list-filter">
            <li>
                <a class="button-skew active" href="<?php echo home_url(); ?>/mau-nha-dep/">Tất cả</a>
            </li>
            <?php  foreach ($categories as $categorie)  {
                echo '<li><a class="button-skew" href="'.get_term_link($categorie).'">'.$categorie->name.'</a></li>';
            } ?>
        </ul>
    </div>
    <div class="row">
<?php
    if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post();
    ?>
    <div class="col-lg-4 col-sm-6 col-12">
        <div class="portfolio--item">
        <div class="portfolio--item--thumb"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
			</div>
                        <div class="portfolio--item--content">
							<h2 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            <p><span class="category"><?php $terms = get_the_terms( get_the_ID(), 'danh-muc' );
                        foreach ( $terms as $term ) {
       echo $term->name .'<sep>, </sep>';
    } ?></span></p>
                            <a href="<?php the_permalink(); ?>">Xem thêm</a>
                        </div>
                    </div>
        </div>
<?php  endwhile;
                    endif; wp_reset_query(); ?>
    </div>
    </div>
<?php  return ob_get_clean();
}


 //Tin tức Carousel
add_shortcode('newsslide', 'newsslide_func');
function newsslide_func($atts, $content = null) {
    ob_start();
    extract(shortcode_atts(array(
        'newsslide_num' => '',
        'newsslide_cat' => '',
		'newsslide_col' => '',
                    ), $atts));
     if ($newsslide_cat == 0) {
		 $args = array(
            'post_type' => array('post'),
            'posts_per_page' => $newsslide_num,);
     } else { $args = array(
            'post_type' => array('post'),
            'posts_per_page' => $newsslide_num,
        'tax_query' => array(
	array(
		'taxonomy'         => 'category',
		'terms'            => $newsslide_cat,
		'field'            => 'term_id',
	)
        )); }
    $wp_query = new WP_Query($args);
    ?>
<div class="news-carousel">
    <div class="owl-carousel owl-theme style-carousel-<?php echo $newsslide_col; ?>">
 <?php
                    if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post();?>
        <div class="news-item p-3">
          <a href="<?php the_permalink();?>">
            <div class="news-item-inner">
            <div class="news-thumb"><a href="<?php the_permalink();?>"><?php the_post_thumbnail(); ?>
            <div class="published-date">
                <time datetime="<?php echo get_the_date('d-m-Y'); ?>"><?php echo get_the_date('d'); ?> <span><?php echo get_the_date('F'); ?></span></time>
            </div></a>
            </div>
            <div class="news-content">
				<h4 class="text-primary title"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h4>
                <p class="text-excerpt"><?php echo wp_trim_words( get_the_excerpt(), 20, '...' ); ?></p>
                <div class="text-center"><a href="<?php the_permalink();?>" class="btn btn-primary rounded-0">Xem thêm</a></div>
            </div>
            </div>
          </a>
        </div>
<?php    endwhile;
                    endif; wp_reset_query();
                    ?>
    </div>
    </div>
<?php  return ob_get_clean();
}

 //đội ngũ
add_shortcode('team', 'team_func');
function team_func($atts, $content = null) {
    ob_start();
    extract(shortcode_atts(array(
        'team_num' => '',
        'team_col' => '',
                    ), $atts));
     $args = array(
            'post_type' => array('team'),
            'posts_per_page' => $team_num);
    $wp_query = new WP_Query($args);
    ?>
<div class="team-area">
    <div class="row">
 <?php
                    if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post();?>
        <div class="col-lg-3 col-sm-6 team-member">
            <div class="dt-sc-team hide-social-show-on-hover ">
                <div class="dt-sc-team-thumb">
                    <?php the_post_thumbnail(); ?>
                 <div class="overly-border"></div>
                </div>
                <div class="dt-sc-team-details"><h4><?php the_title(); ?></h4><h5><?php the_field('position'); ?></h5>
                    </div></div>
        </div>
<?php    endwhile;
                    endif; wp_reset_query();
                    ?>
    </div>
    </div>
<?php  return ob_get_clean();
}
//Custom Carousel
add_shortcode('testsortcode', 'testsortcode_func');
function testsortcode_func($atts, $content = null) {
    ob_start();
    extract(shortcode_atts(array(
        'project_loop' => '',
                    ), $atts));
    ?>
<div class="project-carousel">
	 <div class="owl-carousel owl-theme style-carousel-3">
    <?php $values = vc_param_group_parse_atts($atts['project_loop']);
	foreach($values as $data){ ?>
	<article class="slide-item">
<figure class="image-box"><?php echo wp_get_attachment_image($data['project_loop_img'], 'full'); ?></figure>
<div class="info-box">
<h3><?php  echo  $data['project_loop_title'] ; ?></h3>
<p class="designation mb-0"><?php  echo  $data['project_loop_subtitle'] ; ?></p>
</div>
<div class="slide-text">
<p> <?php echo  $data['project_loop_description'] ; ?></p>
</div>
</article>
 <?php }
	?>
		 </div>
    </div>
<?php  return ob_get_clean();
}
//Tin tức Grid
add_shortcode('newsgrid', 'newsgrid_func');
function newsgrid_func($atts, $content = null) {
    ob_start();
    extract(shortcode_atts(array(
        'newsgrid_num' => '',
        'newsgrid_cat' => '',
        'newsgrid_col' => '',
                    ), $atts));
     if ($newsgrid_cat == 0) {
		 $args = array(
            'post_type' => array('post'),
            'posts_per_page' => $newsgrid_num,);
     } else { $args = array(
            'post_type' => array('post'),
            'posts_per_page' => $newsgrid_num,
        'tax_query' => array(
	array(
		'taxonomy'         => 'category',
		'terms'            => $newsgrid_cat,
		'field'            => 'term_id',
	)
        )); }
    $wp_query = new WP_Query($args);
    ?>
<div class="news-grid">
    <div class="row">
 <?php
                    if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post();?>
    <div class="col-lg-<?php echo 12/$newsgrid_col; ?>">
      <a href="<?php the_permalink();?>">
        <div class="news-item mb-4">
            <div class="news-items-inner border">
              <figure class="news_thumb" style="background: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id() );?>);background-size:cover; background-repeat: no-repeat;">
                </figure>
            <div class="news-content">
				<h5 class="text-primary title"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h5>
                <p class="text-excerpt"><?php echo wp_trim_words( get_the_excerpt(), 30, '...' ); ?></p>
                <div class="text-center"><a href="<?php the_permalink();?>" class="btn btn-primary rounded-0">Xem thêm</a></div>
            </div>
            </div>
        </div>
      </a>
        </div>
<?php    endwhile;
                    endif; wp_reset_query();
                    ?>
        </div>
    </div>
<?php  return ob_get_clean();
}
//Tin tức Grid
add_shortcode('list_order', 'list_order_func');
function list_order_func($atts, $content = null) {
    ob_start();
    extract(shortcode_atts(array(
        'list_order_num' => '',
        'list_order_col' => '',
        'list_order_cat' => '',
                    ), $atts));
     if ($list_order_cat == 0) {
		 $args = array(
            'post_type' => array('don-hang'),
            'posts_per_page' => $list_order_num,);
     } else { $args = array(
            'post_type' => array('post'),
            'posts_per_page' => $list_order_num,
        'tax_query' => array(
	array(
		'taxonomy'         => 'danh-muc-don-hang',
		'terms'            => $list_order_cat,
		'field'            => 'term_id',
	)
        )); }
    $wp_query = new WP_Query($args);
    ?>
<div class="news-grid">
    <div class="row">
 <?php
  if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post();?>
    <div class="col-lg-<?php echo 12/$list_order_col; ?>">
              	<?php get_template_part( 'loop-templates/content', 'order' ); ?>
        </div>
<?php    endwhile;
         endif; wp_reset_query();?>
        </div>
    </div>
<?php  return ob_get_clean();
}
//Gallery Carousel
add_shortcode('gallery_carousel', 'gallery_carousel_func');
function gallery_carousel_func($atts, $content = null) {
    ob_start();
    extract(shortcode_atts(array(
        'gallery_carousel_id' => '',
		'gallery_carousel_col' => '',
                    ), $atts));
	$image_ids = explode(',',$gallery_carousel_id);
    ?>
<div class="gallery-carousel">
	 <div class="owl-carousel owl-theme style-carousel-<?php echo $gallery_carousel_col; ?>">
    <?php
	foreach($image_ids as $image_id){ ?>
	<div class="px-2 py-3">
	<div class="gallery-item">
 <?php echo wp_get_attachment_image($image_id, 'full'); ?>
</div>
</div>
 <?php }
	?>
		 </div>
    </div>
<?php  return ob_get_clean();
}

//Custom Carousel
add_shortcode('custom_banner', 'custom_banner_func');
function custom_banner_func($atts, $content = null) {
    ob_start();
    extract(shortcode_atts(array(
        'banner_loop_img' => '',
        'banner_loop' => '',
                    ), $atts));
    ?>
<?php $values = vc_param_group_parse_atts($atts['banner_loop']);?>
<?php	foreach($values as $data){ ?>
  <a href="<?php echo $data['banner_loop_link'];?>">
  <figure class="banner-box" style="background: url(<?php echo wp_get_attachment_image_url($banner_loop_img, 'full'); ?>); background-size: cover; height: 300px">
    <div class="banner__link">
        <div class="banner-info-box">
            <span><?php  echo $data['project_loop_title'];?></span>
          </div>
   </div>
</figure>
</a>
   <?php } ?>
<?php  return ob_get_clean();
}
//Tin tức Grid
