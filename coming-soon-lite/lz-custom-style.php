<?php 

	$coming_soon_lite_custom_style = '';

	// Logo Padding
	$coming_soon_lite_logo_top_padding = get_theme_mod('coming_soon_lite_logo_top_padding');
	$coming_soon_lite_logo_bottom_padding = get_theme_mod('coming_soon_lite_logo_bottom_padding');
	$coming_soon_lite_logo_left_padding = get_theme_mod('coming_soon_lite_logo_left_padding');
	$coming_soon_lite_logo_right_padding = get_theme_mod('coming_soon_lite_logo_right_padding');

	if( $coming_soon_lite_logo_top_padding != '' || $coming_soon_lite_logo_bottom_padding != '' || $coming_soon_lite_logo_left_padding != '' || $coming_soon_lite_logo_right_padding != ''){
		$coming_soon_lite_custom_style .=' .logo {';
			$coming_soon_lite_custom_style .=' padding-top: '.esc_attr($coming_soon_lite_logo_top_padding).'px; padding-bottom: '.esc_attr($coming_soon_lite_logo_bottom_padding).'px; padding-left: '.esc_attr($coming_soon_lite_logo_left_padding).'px; padding-right: '.esc_attr($coming_soon_lite_logo_right_padding).'px;';
		$coming_soon_lite_custom_style .=' }';
	}

	$coming_soon_lite_logo_size = get_theme_mod('coming_soon_lite_logo_size');
	if( $coming_soon_lite_logo_size != '') {
		if($coming_soon_lite_logo_size == 100) {
			$coming_soon_lite_custom_style .=' .custom-logo-link img {';
				$coming_soon_lite_custom_style .=' width: 350px;';
			$coming_soon_lite_custom_style .=' }';
		} else if($coming_soon_lite_logo_size >= 10 && $coming_soon_lite_logo_size < 100) {
			$coming_soon_lite_custom_style .=' .custom-logo-link img {';
				$coming_soon_lite_custom_style .=' width: '.esc_attr($coming_soon_lite_logo_size).'%;';
			$coming_soon_lite_custom_style .=' }';
		}
	}

	// Site Title Font Size
	$coming_soon_lite_site_title_font_size = get_theme_mod('coming_soon_lite_site_title_font_size');
	if( $coming_soon_lite_site_title_font_size != ''){
		$coming_soon_lite_custom_style .=' .logo h1.site-title, .logo p.site-title {';
			$coming_soon_lite_custom_style .=' font-size: '.esc_attr($coming_soon_lite_site_title_font_size).'px;';
		$coming_soon_lite_custom_style .=' }';
	}

	// Site Title Font Size
	$coming_soon_lite_site_tagline_font_size = get_theme_mod('coming_soon_lite_site_tagline_font_size');
	if( $coming_soon_lite_site_tagline_font_size != ''){
		$coming_soon_lite_custom_style .=' .logo p.site-description {';
			$coming_soon_lite_custom_style .=' font-size: '.esc_attr($coming_soon_lite_site_tagline_font_size).'px;';
		$coming_soon_lite_custom_style .=' }';
	}

	// Copyright padding
	$coming_soon_lite_copyright_padding = get_theme_mod('coming_soon_lite_copyright_padding');
	if( $coming_soon_lite_copyright_padding != ''){
		$coming_soon_lite_custom_style .=' .site-info {';
			$coming_soon_lite_custom_style .=' padding-top: '.esc_attr($coming_soon_lite_copyright_padding).'px; padding-bottom: '.esc_attr($coming_soon_lite_copyright_padding).'px;';
		$coming_soon_lite_custom_style .=' }';
	}

	$coming_soon_lite_copyright_color = get_theme_mod('coming_soon_lite_copyright_color');
	if( $coming_soon_lite_copyright_color != ''){
		$coming_soon_lite_custom_style .=' .site-info p, .site-info a {';
			$coming_soon_lite_custom_style .=' color: '.esc_attr($coming_soon_lite_copyright_color).';';
		$coming_soon_lite_custom_style .=' }';
	}

	$coming_soon_lite_copyrightbg_color = get_theme_mod('coming_soon_lite_copyrightbg_color');
	if( $coming_soon_lite_copyrightbg_color != ''){
		$coming_soon_lite_custom_style .=' .copyright {';
			$coming_soon_lite_custom_style .=' background-color: '.esc_attr($coming_soon_lite_copyrightbg_color).';';
		$coming_soon_lite_custom_style .=' }';
	}

	// Site Title Color
	$coming_soon_lite_site_title_color = get_theme_mod('coming_soon_lite_site_title_color');
	if( $coming_soon_lite_site_title_color != ''){
		$coming_soon_lite_custom_style .=' .logo h1.site-title a, .logo p.site-title a {';
			$coming_soon_lite_custom_style .=' color: '.esc_attr($coming_soon_lite_site_title_color).';';
		$coming_soon_lite_custom_style .=' }';
	}

	// Site Tagline Color
	$coming_soon_lite_site_tagline_color = get_theme_mod('coming_soon_lite_site_tagline_color');
	if( $coming_soon_lite_site_tagline_color != ''){
		$coming_soon_lite_custom_style .='.logo p.site-description {';
			$coming_soon_lite_custom_style .=' color: '.esc_attr($coming_soon_lite_site_tagline_color).';';
		$coming_soon_lite_custom_style .=' }';
	}

	// Top color
	$coming_soon_lite_toptitle_color = get_theme_mod('coming_soon_lite_toptitle_color');
	if( $coming_soon_lite_toptitle_color != ''){
		$coming_soon_lite_custom_style .=' span.info {';
			$coming_soon_lite_custom_style .=' color: '.esc_attr($coming_soon_lite_toptitle_color).';';
		$coming_soon_lite_custom_style .=' }';
	}

	$coming_soon_lite_toptext_color = get_theme_mod('coming_soon_lite_toptext_color');
	if( $coming_soon_lite_toptext_color != ''){
		$coming_soon_lite_custom_style .=' .header-box span a {';
			$coming_soon_lite_custom_style .=' color: '.esc_attr($coming_soon_lite_toptext_color).';';
		$coming_soon_lite_custom_style .=' }';
	}

	$coming_soon_lite_topbg_color1 = get_theme_mod('coming_soon_lite_topbg_color1');
	$coming_soon_lite_topbg_color2 = get_theme_mod('coming_soon_lite_topbg_color2');

	if( $coming_soon_lite_topbg_color1 != ''){
		$coming_soon_lite_custom_style .=' .header-box {';
			$coming_soon_lite_custom_style .=' background: rgba(0, 0, 0, 0) linear-gradient(90deg, '.esc_attr($coming_soon_lite_topbg_color1).' 30%, '.esc_attr($coming_soon_lite_topbg_color2).' 28%) repeat scroll 0 0;';
		$coming_soon_lite_custom_style .=' }';
	}

	$coming_soon_lite_social_color = get_theme_mod('coming_soon_lite_social_color');
	if( $coming_soon_lite_social_color != ''){
		$coming_soon_lite_custom_style .=' .social-icons i {';
			$coming_soon_lite_custom_style .=' color: '.esc_attr($coming_soon_lite_social_color).';';
		$coming_soon_lite_custom_style .=' }';
	}

	$coming_soon_lite_socialhvr_color = get_theme_mod('coming_soon_lite_socialhvr_color');
	$coming_soon_lite_socialhvrbg_color = get_theme_mod('coming_soon_lite_socialhvrbg_color');

	if( $coming_soon_lite_socialhvr_color != ''){
		$coming_soon_lite_custom_style .=' .social-icons i:hover {';
			$coming_soon_lite_custom_style .=' color: '.esc_attr($coming_soon_lite_socialhvr_color).'; background-color: '.esc_attr($coming_soon_lite_socialhvrbg_color).';';
		$coming_soon_lite_custom_style .=' }';
	}

	$coming_soon_lite_socialbg_color = get_theme_mod('coming_soon_lite_socialbg_color');
	if( $coming_soon_lite_socialbg_color != ''){
		$coming_soon_lite_custom_style .=' .social-bg {';
			$coming_soon_lite_custom_style .=' background-color: '.esc_attr($coming_soon_lite_socialbg_color).';';
		$coming_soon_lite_custom_style .=' }';
	}

	// Banner color
	$coming_soon_lite_banner_font_size = get_theme_mod('coming_soon_lite_banner_font_size');
	if( $coming_soon_lite_banner_font_size != ''){
		$coming_soon_lite_custom_style .=' #slider .inner_carousel h1 {';
			$coming_soon_lite_custom_style .=' font-size: '.esc_attr($coming_soon_lite_banner_font_size).'px;';
		$coming_soon_lite_custom_style .=' }';
	}

	$coming_soon_lite_banner_heading_font_size = get_theme_mod('coming_soon_lite_banner_heading_font_size');
	if( $coming_soon_lite_banner_heading_font_size != ''){
		$coming_soon_lite_custom_style .=' #slider .inner_carousel h2 {';
			$coming_soon_lite_custom_style .=' font-size: '.esc_attr($coming_soon_lite_banner_heading_font_size).'px;';
		$coming_soon_lite_custom_style .=' }';
	}

	$coming_soon_lite_banner_date_font_size = get_theme_mod('coming_soon_lite_banner_date_font_size');
	if( $coming_soon_lite_banner_date_font_size != ''){
		$coming_soon_lite_custom_style .=' #slider .inner_carousel .open-date span {';
			$coming_soon_lite_custom_style .=' font-size: '.esc_attr($coming_soon_lite_banner_date_font_size).'px;';
		$coming_soon_lite_custom_style .=' }';
	}

	$coming_soon_lite_bannertitle_color = get_theme_mod('coming_soon_lite_bannertitle_color');
	if( $coming_soon_lite_bannertitle_color != ''){
		$coming_soon_lite_custom_style .=' #slider .inner_carousel h1 {';
			$coming_soon_lite_custom_style .=' color: '.esc_attr($coming_soon_lite_bannertitle_color).';';
		$coming_soon_lite_custom_style .=' }';
	}

	$coming_soon_lite_bannerheading_color = get_theme_mod('coming_soon_lite_bannerheading_color');
	if( $coming_soon_lite_bannerheading_color != ''){
		$coming_soon_lite_custom_style .=' .inner_carousel h2 {';
			$coming_soon_lite_custom_style .=' color: '.esc_attr($coming_soon_lite_bannerheading_color).';';
		$coming_soon_lite_custom_style .=' }';
	}

	$coming_soon_lite_bannerdate_color = get_theme_mod('coming_soon_lite_bannerdate_color');
	$coming_soon_lite_bannerdatebdr_color = get_theme_mod('coming_soon_lite_bannerdatebdr_color');
	if( $coming_soon_lite_bannerdate_color != ''){
		$coming_soon_lite_custom_style .=' .open-date span {';
			$coming_soon_lite_custom_style .=' color: '.esc_attr($coming_soon_lite_bannerdate_color).'; border-color: '.esc_attr($coming_soon_lite_bannerdatebdr_color).';';
		$coming_soon_lite_custom_style .=' }';
	}

	$coming_soon_lite_bannerbg_color = get_theme_mod('coming_soon_lite_bannerbg_color');
	if( $coming_soon_lite_bannerbg_color != ''){
		$coming_soon_lite_custom_style .=' #slider .carousel-caption {';
			$coming_soon_lite_custom_style .=' background-color: '.esc_attr($coming_soon_lite_bannerbg_color).';';
		$coming_soon_lite_custom_style .=' }';
	}