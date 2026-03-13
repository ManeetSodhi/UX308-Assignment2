<?php 

$classic_coffee_shop_first_color = get_theme_mod('classic_coffee_shop_first_color');
$classic_coffee_shop_second_color = get_theme_mod('classic_coffee_shop_second_color');
$classic_coffee_shop_color_scheme_css = "";

/*------------------ Global First Color -----------*/

if ($classic_coffee_shop_first_color) {
  $classic_coffee_shop_color_scheme_css .= ':root {';
  $classic_coffee_shop_color_scheme_css .= '--first-theme-color: ' . esc_attr($classic_coffee_shop_first_color) . ' !important;';
  $classic_coffee_shop_color_scheme_css .= '} ';
}

/*------------------ Global Second Color -----------*/

if ($classic_coffee_shop_second_color) {
  $classic_coffee_shop_color_scheme_css .= ':root {';
  $classic_coffee_shop_color_scheme_css .= '--second-theme-color: ' . esc_attr($classic_coffee_shop_second_color) . ' !important;';
  $classic_coffee_shop_color_scheme_css .= '} ';
}

//---------------------------------Logo-Max-height--------- 
  $classic_coffee_shop_logo_width = get_theme_mod('classic_coffee_shop_logo_width');

  if($classic_coffee_shop_logo_width != false){

    $classic_coffee_shop_color_scheme_css .='.logo img{';

      $classic_coffee_shop_color_scheme_css .='width: '.esc_html($classic_coffee_shop_logo_width).'px;';

    $classic_coffee_shop_color_scheme_css .='}';
  }

  // social icons hide css
  $classic_coffee_shop_social_media = get_theme_mod( 'classic_coffee_shop_social_media', false);
  if($classic_coffee_shop_social_media != true){
    $classic_coffee_shop_color_scheme_css .='.social-icons{';
      $classic_coffee_shop_color_scheme_css .='border:none;';
    $classic_coffee_shop_color_scheme_css .='}';
  }

  /*---------------------------Slider Height ------------*/

    $classic_coffee_shop_slider_img_height = get_theme_mod('classic_coffee_shop_slider_img_height');
    if($classic_coffee_shop_slider_img_height != false){
        $classic_coffee_shop_color_scheme_css .='.slidesection img{';
            $classic_coffee_shop_color_scheme_css .='height: '.esc_attr($classic_coffee_shop_slider_img_height).' !important;';
        $classic_coffee_shop_color_scheme_css .='}';
    }

  /*--------------------------- Footer background image -------------------*/

    $classic_coffee_shop_footer_bg_image = get_theme_mod('classic_coffee_shop_footer_bg_image');
    if($classic_coffee_shop_footer_bg_image != false){
        $classic_coffee_shop_color_scheme_css .='#footer{';
            $classic_coffee_shop_color_scheme_css .='background: url('.esc_attr($classic_coffee_shop_footer_bg_image).')!important;';
        $classic_coffee_shop_color_scheme_css .='}';
    }


  // /*--------------------------- Footer image position -------------------*/

  $classic_coffee_shop_footer_img_position = get_theme_mod('classic_coffee_shop_footer_img_position','center center');
  if($classic_coffee_shop_footer_img_position != false){
      $classic_coffee_shop_color_scheme_css .='#footer{';
          $classic_coffee_shop_color_scheme_css .='background-position: '.esc_attr($classic_coffee_shop_footer_img_position).'!important;';
      $classic_coffee_shop_color_scheme_css .='}';
  }	

    /*--------------------------- Footer Background Color -------------------*/

    $classic_coffee_shop_footer_bg_color = get_theme_mod('classic_coffee_shop_footer_bg_color');
    if($classic_coffee_shop_footer_bg_color != false){
        $classic_coffee_shop_color_scheme_css .='#footer{';
            $classic_coffee_shop_color_scheme_css .='background-color: '.esc_attr($classic_coffee_shop_footer_bg_color).' !important;';
        $classic_coffee_shop_color_scheme_css .='}';
    }

  /*--------------------------- Scroll to top positions -------------------*/

  $classic_coffee_shop_scroll_position = get_theme_mod( 'classic_coffee_shop_scroll_position','Right');
  if($classic_coffee_shop_scroll_position == 'Right'){
    $classic_coffee_shop_color_scheme_css .='#button{';
        $classic_coffee_shop_color_scheme_css .='right: 20px;';
    $classic_coffee_shop_color_scheme_css .='}';
  }else if($classic_coffee_shop_scroll_position == 'Center'){
      $classic_coffee_shop_color_scheme_css .='#button{';
          $classic_coffee_shop_color_scheme_css .='right: 50%;left: 50%;';
      $classic_coffee_shop_color_scheme_css .='}';
  }   

    /*--------------------------- Woocommerce Product Image Border Radius -------------------*/

    $classic_coffee_shop_woo_product_img_border_radius = get_theme_mod('classic_coffee_shop_woo_product_img_border_radius');
    if($classic_coffee_shop_woo_product_img_border_radius != false){
        $classic_coffee_shop_color_scheme_css .='.woocommerce ul.products li.product a img{';
            $classic_coffee_shop_color_scheme_css .='border-radius: '.esc_attr($classic_coffee_shop_woo_product_img_border_radius).'px;';
        $classic_coffee_shop_color_scheme_css .='}';
    }

  /*--------------------------- Woocommerce Product Sale Position -------------------*/    

  $classic_coffee_shop_product_sale_position = get_theme_mod( 'classic_coffee_shop_product_sale_position','Left');
  if($classic_coffee_shop_product_sale_position == 'Right'){
      $classic_coffee_shop_color_scheme_css .='.woocommerce ul.products li.product .onsale{';
          $classic_coffee_shop_color_scheme_css .='left:auto !important; right:.5em !important;';
      $classic_coffee_shop_color_scheme_css .='}';
  }else if($classic_coffee_shop_product_sale_position == 'Left'){
      $classic_coffee_shop_color_scheme_css .='.woocommerce ul.products li.product .onsale {';
          $classic_coffee_shop_color_scheme_css .='right:auto !important; left:.5em !important;';
      $classic_coffee_shop_color_scheme_css .='}';
  }        

  /*--------------------------- Shop page pagination -------------------*/

  $classic_coffee_shop_wooproducts_nav = get_theme_mod('classic_coffee_shop_wooproducts_nav', 'Yes');
  if($classic_coffee_shop_wooproducts_nav == 'No'){
    $classic_coffee_shop_color_scheme_css .='.woocommerce nav.woocommerce-pagination{';
      $classic_coffee_shop_color_scheme_css .='display: none;';
    $classic_coffee_shop_color_scheme_css .='}';
  }

  /*--------------------------- Related Product -------------------*/

  $classic_coffee_shop_related_product_enable = get_theme_mod('classic_coffee_shop_related_product_enable',true);
  if($classic_coffee_shop_related_product_enable == false){
    $classic_coffee_shop_color_scheme_css .='.related.products{';
      $classic_coffee_shop_color_scheme_css .='display: none;';
    $classic_coffee_shop_color_scheme_css .='}';
  }    

/*--------------------------- Scroll to Top Button Shape -------------------*/

$classic_coffee_shop_scroll_top_shape = get_theme_mod('classic_coffee_shop_scroll_top_shape', 'circle');
if($classic_coffee_shop_scroll_top_shape == 'box' ){
  $classic_coffee_shop_color_scheme_css .='#button{';
    $classic_coffee_shop_color_scheme_css .=' border-radius: 0%';
  $classic_coffee_shop_color_scheme_css .='}';
}elseif($classic_coffee_shop_scroll_top_shape == 'curved' ){
  $classic_coffee_shop_color_scheme_css .='#button{';
    $classic_coffee_shop_color_scheme_css .=' border-radius: 20%';
  $classic_coffee_shop_color_scheme_css .='}';
}elseif($classic_coffee_shop_scroll_top_shape == 'circle' ){
  $classic_coffee_shop_color_scheme_css .='#button{';
    $classic_coffee_shop_color_scheme_css .=' border-radius: 50%;';
  $classic_coffee_shop_color_scheme_css .='}';
}

/*--------------------------- Menu Typography -------------------*/

$classic_coffee_shop_theme_lay = get_theme_mod( 'classic_coffee_shop_menu_text_transform','Capitalize');
if($classic_coffee_shop_theme_lay == 'Uppercase'){
    $classic_coffee_shop_color_scheme_css .='.main-nav a{';
        $classic_coffee_shop_color_scheme_css .='text-transform: uppercase;';
    $classic_coffee_shop_color_scheme_css .='}';
}else if($classic_coffee_shop_theme_lay == 'Lowercase'){
    $classic_coffee_shop_color_scheme_css .='.main-nav a{';
        $classic_coffee_shop_color_scheme_css .='text-transform: lowercase;';
    $classic_coffee_shop_color_scheme_css .='}';
}
else if($classic_coffee_shop_theme_lay == 'Capitalize'){
    $classic_coffee_shop_color_scheme_css .='.main-nav a{';
        $classic_coffee_shop_color_scheme_css .='text-transform: capitalize;';
    $classic_coffee_shop_color_scheme_css .='}';
}