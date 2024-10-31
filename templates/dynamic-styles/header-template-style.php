<?php

// Search Bar Header Template
global $wp_predictive_search_header_template_settings;
extract( $wp_predictive_search_header_template_settings );

?>
@header_container_wide : ~"calc( <?php echo esc_html( $header_search_box_wide ); ?>% - <?php echo esc_html( $header_search_box_margin_right ); ?>px - <?php echo esc_html( $header_search_box_margin_left ); ?>px - <?php echo ( (int) $header_search_box_border['width'] * 2 ); ?>px )";
@header_container_mobile_wide : ~"calc( 100% - <?php echo esc_html( $header_search_box_mobile_margin_right ); ?>px - <?php echo esc_html( $header_search_box_mobile_margin_left ); ?>px - <?php echo ( (int) $header_search_box_border['width'] * 2 ); ?>px )";
@header_container_height: <?php echo esc_html( $header_search_box_height ); ?>px;
@header_container_margin: <?php echo esc_html( $header_search_box_margin_top ); ?>px <?php echo esc_html( $header_search_box_margin_right ); ?>px <?php echo esc_html( $header_search_box_margin_bottom ); ?>px <?php echo esc_html( $header_search_box_margin_left ); ?>px;
@header_container_mobile_margin: <?php echo esc_html( $header_search_box_mobile_margin_top ); ?>px <?php echo esc_html( $header_search_box_mobile_margin_right ); ?>px <?php echo esc_html( $header_search_box_mobile_margin_bottom ); ?>px <?php echo esc_html( $header_search_box_mobile_margin_left ); ?>px;
@header_container_border_focus_color: <?php echo esc_html( $header_search_box_border_color_focus ); ?>;
.header_container_align() {
<?php if ( 'center' === $header_search_box_align ) { ?>
	margin: 0 auto;
<?php } else { ?>
	float: <?php echo esc_html( $header_search_box_align ); ?>;
<?php } ?>
}
.header_container_border() {
	<?php echo esc_html( $GLOBALS[WPPS_PREFIX.'admin_interface']->generate_border_css( $header_search_box_border ) ); ?>
}
.header_container_shadow() {
	<?php echo esc_html( $GLOBALS[WPPS_PREFIX.'admin_interface']->generate_shadow_css( $header_search_box_shadow ) ); ?>
}

/* Header Category Dropdown Variables */
@header_cat_align: <?php echo esc_html( $header_category_dropdown_align ); ?>;
@header_cat_bg_color : <?php echo esc_html( $header_category_dropdown_bg_color ); ?>;
@header_cat_down_icon_size: <?php echo esc_html( $header_category_dropdown_icon_size ); ?>px;
@header_cat_down_icon_color: <?php echo esc_html( $header_category_dropdown_icon_color ); ?>;
.header_cat_label_font() {
	<?php echo esc_html( $GLOBALS[WPPS_PREFIX.'fonts_face']->generate_font_css( $header_category_dropdown_font ) ); ?>
}
.header_cat_side_border() {
<?php if ( 'left' === $header_category_dropdown_align ) { ?>
	border-left: none;
	<?php echo esc_html( str_replace( 'border:', 'border-right:', $GLOBALS[WPPS_PREFIX.'admin_interface']->generate_border_style_css( $header_category_dropdown_side_border ) )  ); ?>
<?php } else { ?>
	border-right: none;
	<?php echo esc_html( str_replace( 'border:', 'border-left:', $GLOBALS[WPPS_PREFIX.'admin_interface']->generate_border_style_css( $header_category_dropdown_side_border ) )  ); ?>
<?php } ?>
}
.header_cat_selector_dir() {
	<?php if ( 'right' === $header_category_dropdown_align ) { ?>
	direction: rtl;
	<?php } ?>
}
.header_cat_selector_option_dir() {
	<?php if ( 'right' === $header_category_dropdown_align ) { ?>
	direction: ltr;
	text-align: left;
	<?php } ?>
}

/* Header Search Icon Variables */
@header_search_icon_size: <?php echo esc_html( $header_search_icon_size ); ?>px;
@header_search_icon_color: <?php echo esc_html( $header_search_icon_color ); ?>;
@header_search_icon_hover_color: <?php echo esc_html( $header_search_icon_hover_color ); ?>;
@header_search_icon_bg_color: <?php echo esc_html( $header_search_icon_bg_color ); ?>;
@header_search_icon_bg_hover_color: <?php echo esc_html( $header_search_icon_bg_hover_color ); ?>;
.header_search_icon_side_border() {
<?php if ( 'left' === $header_category_dropdown_align ) { ?>
	border-right: none;
	<?php echo esc_html( str_replace( 'border:', 'border-left:', $GLOBALS[WPPS_PREFIX.'admin_interface']->generate_border_style_css( $header_search_icon_side_border ) )  ); ?>
<?php } else { ?>
	border-left: none;
	<?php echo esc_html( str_replace( 'border:', 'border-right:', $GLOBALS[WPPS_PREFIX.'admin_interface']->generate_border_style_css( $header_search_icon_side_border ) )  ); ?>
<?php } ?>
}

/* Header Search Input Variables */
@header_input_padding: <?php echo esc_html( $header_input_padding_tb ); ?>px <?php echo esc_html( $header_input_padding_lr ); ?>px !important;
.header_input_bg_color {
	<?php echo esc_html( $GLOBALS[WPPS_PREFIX.'admin_interface']->generate_background_color_css( $header_input_bg_color ) ); ?>
}
.header_input_font() {
	<?php echo esc_html( $GLOBALS[WPPS_PREFIX.'fonts_face']->generate_font_css( $header_input_font ) ); ?>
}
@header_loading_icon_size: <?php echo esc_html( $header_loading_icon_size ); ?>px;
@header_loading_icon_color: <?php echo esc_html( $header_loading_icon_color ); ?>;

/* Header Close Icon Variables */
@header_close_icon_size: <?php echo esc_html( $header_close_icon_size ); ?>px;
@header_close_icon_color: <?php echo esc_html( $header_close_icon_color ); ?>;
@header_close_icon_margin: <?php echo esc_html( $header_close_icon_margin_top ); ?>px <?php echo esc_html( $header_close_icon_margin_right ); ?>px <?php echo esc_html( $header_close_icon_margin_bottom ); ?>px <?php echo esc_html( $header_close_icon_margin_left ); ?>px;

/* Click Icon to Show Search Box */
.header_search_icon_mobile_align() {
<?php if ( 'center' === $search_icon_mobile_align ) { ?>
	margin: 0 auto;
<?php } else { ?>
	float: <?php echo esc_html( $search_icon_mobile_align ); ?>;
<?php } ?>
}
@header_search_icon_mobile_size: <?php echo esc_html( $search_icon_mobile_size ); ?>px;
@header_search_icon_mobile_color: <?php echo esc_html( $search_icon_mobile_color ); ?>;

/* Header PopUp Variables */
.header_popup_border() {
	<?php echo esc_html( $GLOBALS[WPPS_PREFIX.'admin_interface']->generate_border_css( $header_popup_border ) ); ?>
}
@header_popup_heading_padding: <?php echo esc_html( $header_popup_heading_padding_tb ); ?>px <?php echo esc_html( $header_popup_heading_padding_lr ); ?>px;
@header_popup_heading_bg_color: <?php echo esc_html( $header_popup_heading_bg_color ); ?>;
.header_popup_heading_font() {
	<?php echo esc_html( $GLOBALS[WPPS_PREFIX.'fonts_face']->generate_font_css( $header_popup_heading_font ) ); ?>
}
.header_popup_heading_border() {
	<?php echo esc_html( str_replace( 'border:', 'border-bottom:', $GLOBALS[WPPS_PREFIX.'admin_interface']->generate_border_style_css( $header_popup_heading_border ) )  ); ?>
}

@header_popup_item_padding_tb: <?php echo esc_html( $header_popup_item_padding_tb ); ?>px;
@header_popup_item_padding_lr: <?php echo esc_html( $header_popup_item_padding_lr ); ?>px;
@header_popup_item_border_hover_color: <?php echo esc_html( $header_popup_item_border_hover_color ); ?>;
@header_popup_item_bg_color: <?php echo esc_html( $header_popup_item_bg_color ); ?>;
@header_popup_item_bg_hover_color: <?php echo esc_html( $header_popup_item_bg_hover_color ); ?>;
.header_popup_item_border() {
	<?php echo esc_html( str_replace( 'border:', 'border-bottom:', $GLOBALS[WPPS_PREFIX.'admin_interface']->generate_border_style_css( $header_popup_item_border ) )  ); ?>
}

@header_popup_img_size: <?php echo esc_html( $header_popup_item_image_size ); ?>px;
@header_popup_content_wide: ~"calc( 100% - <?php echo esc_html( ( $header_popup_item_image_size + 10 ) ); ?>px )";
@header_popup_item_name_hover_color: <?php echo esc_html( $header_popup_item_name_hover_color ); ?>;
.header_popup_item_name_font() {
	<?php echo esc_html( $GLOBALS[WPPS_PREFIX.'fonts_face']->generate_font_css( $header_popup_item_name_font ) ); ?>
}
@header_popup_item_desc_hover_color: <?php echo esc_html( $header_popup_item_desc_hover_color ); ?>;
.header_popup_item_desc_font() {
	<?php echo esc_html( $GLOBALS[WPPS_PREFIX.'fonts_face']->generate_font_css( $header_popup_item_desc_font ) ); ?>
}
@header_popup_item_category_color: <?php echo esc_html( $header_popup_item_category_color ); ?>;
@header_popup_item_category_link_hover_color: <?php echo esc_html( $header_popup_item_category_link_hover_color ); ?>;
@header_popup_item_category_hover_color: <?php echo esc_html( $header_popup_item_category_hover_color ); ?>;
.header_popup_item_category_font() {
	<?php echo esc_html( $GLOBALS[WPPS_PREFIX.'fonts_face']->generate_font_css( $header_popup_item_category_font ) ); ?>
}

@header_popup_footer_padding: <?php echo esc_html( $header_popup_footer_padding_tb ); ?>px <?php echo esc_html( $header_popup_footer_padding_lr ); ?>px;
@header_popup_footer_bg_color: <?php echo esc_html( $header_popup_footer_bg_color ); ?>;
.header_popup_seemore_font() {
	<?php echo esc_html( $GLOBALS[WPPS_PREFIX.'fonts_face']->generate_font_css( $header_popup_seemore_font ) ); ?>
}
.header_popup_more_link_font() {
	<?php echo esc_html( $GLOBALS[WPPS_PREFIX.'fonts_face']->generate_font_css( $header_popup_more_link_font ) ); ?>
}
@header_popup_more_icon_size: <?php echo esc_html( $header_popup_more_icon_size ); ?>px;
@header_popup_more_icon_color: <?php echo esc_html( $header_popup_more_icon_color ); ?>;

<style>
/* Search Bar Header Template */
.wpps_bar {
	.wpps_mobile_icon.header_temp {
		.header_search_icon_mobile_align();
		color: @header_search_icon_mobile_color;

		* {
			color: @header_search_icon_mobile_color;
			width: @header_search_icon_mobile_size !important;
			height: @header_search_icon_mobile_size !important;
		}
	}
}

.wpps_header_container {
	width: @header_container_wide;
	margin: @header_container_margin;
	.header_container_align();
	.header_container_border();
	.header_container_shadow();

	&.wpps_container_active {
		border-color: @header_container_border_focus_color !important;
	}

	/* Category Dropdown */
	.wpps_nav_scope {
		background-color: @header_cat_bg_color;
		.header_cat_side_border();

		.wpps_category_selector {
			.header_cat_selector_dir();

			option {
				.header_cat_selector_option_dir();
			}
		}

		.wpps_nav_facade_label {
			.header_cat_label_font();
		}

		.wpps_nav_down_icon {
			font-size: @header_cat_down_icon_size;
			color: @header_cat_down_icon_color;

			* {
				color: @header_cat_down_icon_color;
			}
		}
	}

	/* Search Icon */
	.wpps_nav_submit {
		background-color: @header_search_icon_bg_color;
		.header_search_icon_side_border();

		&:hover {
			background-color: @header_search_icon_bg_hover_color;

			.wpps_nav_submit_icon,
			.wpps_nav_submit_icon * {
				color: @header_search_icon_hover_color;
			}
		}

		.wpps_nav_submit_icon {
			color: @header_search_icon_color;

			svg {
				width: @header_search_icon_size;
				height: @header_search_icon_size;
			}

			* {
				color: @header_search_icon_color;
			}
		}
	}

	/* Search Input */
	.wpps_nav_field {
		.header_input_bg_color();

		.wpps_search_keyword {
			.header_input_font();
			padding: @header_input_padding;
		}

		.wpps_searching_icon {
			width: @header_loading_icon_size;
			fill: @header_loading_icon_color;
		}

		svg.wpps_searching_icon {

			* {
				color: @header_loading_icon_color;
			}
		}
	}
}

.wpps_container.wpps_header_container {

	.wpps_nav_left,
	.wpps_nav_right,
	.wpps_nav_fill,
	.wpps_nav_scope,
	.wpps_nav_submit,
	.wpps_nav_field,
	.wpps_search_keyword {
		height: @header_container_height !important;
	}

	.wpps_nav_facade_label,
	.wpps_nav_down_icon,
	.wpps_category_selector,
	.wpps_nav_submit_icon,
	.wpps_searching_icon {
		line-height: @header_container_height !important;
	}
}

/* Search Popup Header Template */
.predictive_results.predictive_results_header {
	.header_popup_border();

	.ajax_search_content_title {
		padding: @header_popup_heading_padding;
		background-color: @header_popup_heading_bg_color;
		.header_popup_heading_font();
		.header_popup_heading_border();
	}

	.ajax_search_content {
		padding-left: @header_popup_item_padding_lr;
		padding-right: @header_popup_item_padding_lr;
		background-color: @header_popup_item_bg_color;
		.header_popup_item_border();
	}

	.result_row {
		margin-top: @header_popup_item_padding_tb;
		margin-bottom: @header_popup_item_padding_tb;
	}

	.rs_avatar {
		width: @header_popup_img_size;
	}

	.rs_content_popup {
		width: @header_popup_content_wide !important;

		.rs_name {
			.header_popup_item_name_font();
		}

		.rs_description {
			.header_popup_item_desc_font();
		}

		.rs_cat, .rs_cat > a {
			.header_popup_item_category_font();
		}

		.rs_cat {
			color: @header_popup_item_category_color !important;
		}
	}

	.more_result {
		padding: @header_popup_footer_padding;
		background-color: @header_popup_footer_bg_color;

		span {
			.header_popup_seemore_font();
		}

		a {
			.header_popup_more_link_font();
		}

		.see_more_arrow {
			color: @header_popup_more_icon_color !important;

			svg {
				width: @header_popup_more_icon_size !important;
				height: @header_popup_more_icon_size !important;
			}
		}
	}

	.ac_over {
		.ajax_search_content {
			background-color: @header_popup_item_bg_hover_color;
			border-color: @header_popup_item_border_hover_color !important;
		}

		.rs_name {
			color: @header_popup_item_name_hover_color !important;
		}

		.rs_description {
			color: @header_popup_item_desc_hover_color !important;
		}

		.rs_cat {
			color: @header_popup_item_category_hover_color !important;
		}

		.rs_cat > a {
			color: @header_popup_item_category_link_hover_color !important;
		}
	}

	.ps_close {
		width: @header_close_icon_size;
		height: @header_close_icon_size;
		margin: @header_close_icon_margin;

		svg {
			fill: @header_close_icon_color;
		}
	}
}

@media only screen and (max-width: 420px) {
	.wpps_header_container {
		width: @header_container_mobile_wide;
		margin: @header_container_mobile_margin;
	}
}

</style>
