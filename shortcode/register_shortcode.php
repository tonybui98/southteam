<?php function vc_shortcode() {
    //----------------Sản phẩm slide ------------
    $args = array(
        'taxonomy' => 'danh-muc',
        'hide_empty' => 0,
    );
    $inra = array('Tất cả danh mục' => 0);
    $cates = get_terms($args);
    foreach ($cates as $cate) {
        $titledm = $cate->name;
        $iddm = $cate->term_id;
        $inra[$titledm] = $iddm;
    }
     $args1 = array(
        'taxonomy' => 'category',
        'hide_empty' => 0,
    );
    $html = array('Tất cả danh mục' => 0);
    $cates1 = get_terms($args1);
    foreach ($cates1 as $cate) {
        $titledm1 = $cate->name;
        $iddm1 = $cate->term_id;
        $html[$titledm1] = $iddm1;
    }

    $args2 = array(
       'taxonomy' => 'danh-muc-don-hang',
       'hide_empty' => 0,
   );
   $html4 = array('Tất cả danh mục' => 0);
   $cates2 = get_terms($args2);
   foreach ($cates2 as $cate) {
       $titledm1 = $cate->name;
       $iddm1 = $cate->term_id;
       $html4[$titledm1] = $iddm1;
   }

	vc_map(array(
        "name" => __("Banner", 'southteam'),
        "base" => "banner",
        "class" => "",
        "category" => 'South Team',
        "icon" => get_template_directory_uri()."/img/logo-black.png",
        "params" =>  array(
            array(
                "type" => "textfield",
                "class" => "",
                "heading" => __("Tiêu đề", 'southteam'),
                "param_name" => "banner_title",
            ),
            array(
                "type" => "attach_image",
                "class" => "",
                "heading" => __("Chọn hình ảnh", 'southteam'),
                "param_name" => "banner_img",
                "value"=>'',
            ),
            array(
                "type" => "textarea",
                "class" => "",
                "heading" => __("Mô tả", 'southteam'),
                "param_name" => "banner_info",
                "value"=>'',
            ),
			array(
                "type" => "dropdown",
                "class" => "",
                "heading" => __("Kiểu Banner", 'southteam'),
                "param_name" => "banner_type",
                "value"=>array('Apollo'=>1, 'Bubba' =>2, 'Jullia' =>3),
            ),
            array(
                "type" => "vc_link",
                "class" => "",
                "heading" => __("Link đến", 'southteam'),
                "param_name" => "banner_link",
                "value"=>'',
            ),
            )
    ));
 vc_map(array(
        "name" => __("Tin tức Carousel", 'southteam'),
        "base" => "newsslide",
        "class" => "",
        "category" => 'South Team',
        "icon" => get_template_directory_uri()."/img/logo-black.png",
        "params" =>  array(
            array(
                "type" => "textfield",
                "class" => "",
                "heading" => __("Số lượng", 'southteam'),
                "param_name" => "newsslide_num",
            ),
            array(
                "type" => "dropdown",
                "class" => "",
                "heading" => __("Chọn danh mục", 'southteam'),
                "param_name" => "newsslide_cat",
                "value"=>$html,
            ),
			array(
                "type" => "dropdown",
                "class" => "",
                "heading" => __("Số cột", 'southteam'),
                "param_name" => "newsslide_col",
                 "value" =>array('1 cột'=>'1','2 cột'=>'2','3 cột'=>'3','4 cột'=>'4'),
            ),
            )
    ));
  vc_map(array(
        "name" => __("Tin tức Grid", 'southteam'),
        "base" => "newsgrid",
        "class" => "",
        "category" => 'South Team',
        "icon" => get_template_directory_uri()."/img/logo-black.png",
        "params" =>  array(
            array(
                "type" => "textfield",
                "class" => "",
                "heading" => __("Số lượng", 'southteam'),
                "param_name" => "newsgrid_num",
            ),
            array(
                "type" => "dropdown",
                "class" => "",
                "heading" => __("Số cột", 'southteam'),
                "param_name" => "newsgrid_col",
                 "value" =>array('1 cột'=>'1','2 cột'=>'2','3 cột'=>'3','4 cột'=>'4'),
            ),
            array(
                "type" => "dropdown",
                "class" => "",
                "heading" => __("Chọn danh mục", 'southteam'),
                "param_name" => "newsgrid_cat",
                "value"=>$html,
            ),
            )
    ));
    vc_map(array(
          "name" => __("Danh sách đơn hàng", 'southteam'),
          "base" => "list_order",
          "class" => "",
          "category" => 'South Team',
          "icon" => get_template_directory_uri()."/img/logo-black.png",
          "params" =>  array(
              array(
                  "type" => "textfield",
                  "class" => "",
                  "heading" => __("Số lượng", 'southteam'),
                  "param_name" => "list_order_num",
              ),
              array(
                  "type" => "dropdown",
                  "class" => "",
                  "heading" => __("Số cột", 'southteam'),
                  "param_name" => "list_order_col",
                   "value" =>array('1 cột'=>'1','2 cột'=>'2','3 cột'=>'3','4 cột'=>'4'),
              ),
              array(
                  "type" => "dropdown",
                  "class" => "",
                  "heading" => __("Chọn danh mục", 'southteam'),
                  "param_name" => "list_order_cat",
                  "value"=>$html4,
              ),
              )
      ));

 vc_map(array(
        "name" => __("Các dự án", 'southteam'),
        "base" => "portfolios",
        "class" => "",
        "category" => 'South Team',
        "icon" => get_template_directory_uri()."/img/logo-black.png",
        "params" =>  array(
            array(
                "type" => "textfield",
                "class" => "",
                "heading" => __("Số lượng", 'southteam'),
                "param_name" => "portfolios_num",
            ),
            array(
                "type" => "checkbox",
                "class" => "",
                "heading" => __("Chọn danh mục", 'southteam'),
                "param_name" => "portfolios_cat",
                "value"=>$inra,
            ),
            )
    ));
  vc_map(array(
        "name" => __("Nổi bật", 'southteam'),
        "base" => "featured",
        "class" => "",
        "category" => 'South Team',
        "icon" => get_template_directory_uri()."/img/logo-black.png",
        "params" =>  array(
            array(
                "type" => "textfield",
                "class" => "",
                "heading" => __("Tiêu đề", 'southteam'),
                "param_name" => "featured_title",
            ),
            array(
                "type" => "attach_image",
                "class" => "",
                "heading" => __("Chọn hình ảnh", 'southteam'),
                "param_name" => "featured_img",
                "value"=>'',
            ),
            array(
                "type" => "textarea",
                "class" => "",
                "heading" => __("Mô tả", 'southteam'),
                "param_name" => "featured_info",
                "value"=>'',
            ),
            array(
                "type" => "vc_link",
                "class" => "",
                "heading" => __("Link đến", 'southteam'),
                "param_name" => "featured_link",
                "value"=>'',
            ),
            )
    ));
  vc_map(array(
        "name" => __("Gạch chân", 'southteam'),
        "base" => "sep",
        "class" => "",
        "category" => 'South Team',
         "icon" => get_template_directory_uri()."/img/logo-black.png",
        "params" =>  array(
            array(
                "type" => "dropdown",
                "class" => "",
                "heading" => __("Tiêu đề", 'southteam'),
                "param_name" => "sep_align",
                 "value"=>array('Canh trái'=>'text-left','Canh Phải'=>'text-right','Căn Giữa'=>'text-center'),
            ),
            )
    ));
   vc_map(array(
        "name" => __("Tiêu đề và Icon", 'southteam'),
        "base" => "icontit",
        "class" => "",
        "category" => 'South Team',
        "icon" => get_template_directory_uri()."/img/logo-black.png",
        "params" =>  array(
            array(
                "type" => "textfield",
                "class" => "",
                "heading" => __("Tiêu đề", 'southteam'),
                "param_name" => "icontit_title",
            ),
            array(
                "type" => "textarea",
                "class" => "",
                "heading" => __("Nội dung", 'southteam'),
                "param_name" => "icontit_content",
            ),
             array(
                "type" => "iconpicker",
                "class" => "",
                "heading" => __("Icon 2", 'southteam'),
                "param_name" => "icontit_icon",
               'settings' => array(
                   "emptyIcon"=>false,
                   "type"=>"fontawesome",
                   "iconsPerPage"=>200,
               ),
               'dependency' => array(
                   "element"=>"icon_type",
                   "value"=>'fontawesome',
               )
            ),
    )));
   vc_map(array(
        "name" => __("Tiêu đề và Icon 2", 'southteam'),
        "base" => "icontit2",
        "class" => "",
        "category" => 'South Team',
         "icon" => get_template_directory_uri()."/img/logo-black.png",
        "params" =>  array(
            array(
                "type" => "textfield",
                "class" => "",
                "heading" => __("Tiêu đề", 'southteam'),
                "param_name" => "icontit_title2",
            ),
            array(
                "type" => "textarea",
                "class" => "",
                "heading" => __("Nội dung", 'southteam'),
                "param_name" => "icontit_content2",
            ),
            array(
                "type" => "iconpicker",
                "class" => "",
                "heading" => __("Icon 2", 'southteam'),
                "param_name" => "icontit_icon2",
               'settings' => array(
                   "emptyIcon"=>false,
                   "type"=>"fontawesome",
                   "iconsPerPage"=>200,
               ),
               'dependency' => array(
                   "element"=>"icon_type",
                   "value"=>'fontawesome',
               )
            ),
            )
    ));
   vc_map(array(
        "name" => __("Tiêu đề và Icon 3", 'southteam'),
        "base" => "icontit3",
        "class" => "",
        "category" => 'South Team',
        "icon" => get_template_directory_uri()."/img/logo-black.png",
        "params" =>  array(
            array(
                "type" => "textfield",
                "class" => "",
                "heading" => __("Tiêu đề", 'southteam'),
                "param_name" => "icontit_title3",
            ),
            array(
                "type" => "textarea",
                "class" => "",
                "heading" => __("Nội dung", 'southteam'),
                "param_name" => "icontit_content3",
            ),
            array(
                "type" => "iconpicker",
                "class" => "",
                "heading" => __("Icon 2", 'southteam'),
                "param_name" => "icontit_icon3",
               'settings' => array(
                   "emptyIcon"=>false,
                   "type"=>"fontawesome",
                   "iconsPerPage"=>200,
               ),
               'dependency' => array(
                   "element"=>"icon_type",
                   "value"=>'fontawesome',
               )
            ),
            )
    ));
    vc_map(array(
        "name" => __("Đội Ngũ", 'southteam'),
        "base" => "team",
        "class" => "",
        "category" => 'South Team',
        "icon" => get_template_directory_uri()."/img/logo-black.png",
        "params" =>  array(
            array(
                "type" => "textfield",
                "class" => "",
                "heading" => __("Số lượng", 'southteam'),
                "param_name" => "team_num",
            ),
            array(
                "type" => "dropdown",
                "class" => "",
                "heading" => __("Số cột", 'southteam'),
                "param_name" => "team_col",
                "value"=>array('1 cột'=>1,'2 cột'=>2,'3 cột'=>3,'4 cột'=>4),
            ),
            )
    ));
	vc_map(array(
        "name" => __("Gallery Carousel", 'southteam'),
        "base" => "gallery_carousel",
        "class" => "",
        "category" => 'South Team',
        "icon" => get_template_directory_uri()."/img/logo-black.png",
        "params" =>  array(
            array(
                "type" => "attach_images",
                "class" => "",
                "heading" => __("Hình ảnh", 'southteam'),
                "param_name" => "gallery_carousel_id",
            ),
            array(
                "type" => "dropdown",
                "class" => "",
                "heading" => __("Số cột", 'southteam'),
                "param_name" => "gallery_carousel_col",
                "value"=>array('1 cột'=>1,'2 cột'=>2,'3 cột'=>3,'4 cột'=>4,'5 cột'=>5,'6 cột'=>6,'7 cột'=>7),
            ),
            )
    ));
    vc_map(array(
		"name" => __("Custom Carousel", 'southteam'),
        "base" => "testsortcode",
        "class" => "",
        "category" => 'South Team',
        "icon" => get_template_directory_uri()."/img/logo-black.png",
		'params' => array(
  // params group
			array(
			'type' => 'param_group',
			'value' => '',
			'param_name' => 'project_loop',
  // Note params is mapped inside param-group:
			'params' => array(
				  array(
				  'type' => 'textfield',
				  'value' => '',
				  'heading' => 'Tiêu đề',
				  'param_name' => 'project_loop_title',
				  ),
				  array(
			  'type' => 'textfield',
			  'value' => '',
			  'heading' => 'Tiêu đề phụ',
			  'param_name' => 'project_loop_subtitle',
			  ),
				  array(
			  'type' => 'textarea',
			  'value' => '',
			  'heading' => 'Mô tả',
			  'param_name' => 'project_loop_description',
			  ),
				  array(
			  'type' => 'attach_image',
			  'value' => '',
			  'heading' => 'Hình ảnh',
			  'param_name' => 'project_loop_img',
			  ),  )
  )
  )
  ));
  vc_map(array(
      "name" => __("Custom banner", 'southteam'),
      "base" => "custom_banner",
      "class" => "",
      "category" => 'South Team',
      "icon" => get_template_directory_uri()."/img/logo-black.png",
      'params' => array(
        array(
          'type' => 'attach_image',
          'value' => '',
          'heading' => 'chọn Hình ảnh',
          'param_name' => 'banner_loop_img',
          ),
          array(
          'type' => 'param_group',
          'value' => '',
          'heading' => 'Đường dẫn tùy chọn',
          'param_name' => 'banner_loop',
          'params' => array(
                    array(
                    'type' => 'textfield',
                    'value' => '',
                    'heading' => 'Tiêu đề',
                    'param_name' => 'project_loop_title',
                    ),
                    array(
                    'type' => 'textfield',
                    'value' => '',
                    'heading' => 'Link',
                    'param_name' => 'banner_loop_link',
                    ),
                  )
                )

    )
  ));
}
add_action('vc_before_init', 'vc_shortcode');
