<?php

// Search Bar Sidebar Template
global $wp_predictive_search_sidebar_template_settings;
extract( $wp_predictive_search_sidebar_template_settings );

?>
@sidebar_container_wide : ~"calc( <?php echo esc_html( $sidebar_search_box_wide ); ?>% - <?php echo esc_html( $sidebar_search_box_margin_right ); ?>px - <?php echo esc_html( $sidebar_search_box_margin_left ); ?>px - <?php echo ( (int) $sidebar_search_box_border['width'] * 2 ); ?>px )";
@sidebar_container_mobile_wide : ~"calc( 100% - <?php echo esc_html( $sidebar_search_box_mobile_margin_right ); ?>px - <?php echo esc_html( $sidebar_search_box_mobile_margin_left ); ?>px - <?php echo ( (int) $sidebar_search_box_border['width'] * 2 ); ?>px )";
@sidebar_container_height: <?php echo esc_html( $sidebar_search_box_height ); ?>px;
@sidebar_container_margin: <?php echo esc_html( $sidebar_search_box_margin_top ); ?>px <?php echo esc_html( $sidebar_search_box_margin_right ); ?>px <?php echo esc_html( $sidebar_search_box_margin_bottom ); ?>px <?php echo esc_html( $sidebar_search_box_margin_left ); ?>px;
@sidebar_container_mobile_margin: <?php echo esc_html( $sidebar_search_box_mobile_margin_top ); ?>px <?php echo esc_html( $sidebar_search_box_mobile_margin_right ); ?>px <?php echo esc_html( $sidebar_search_box_mobile_margin_bottom ); ?>px <?php echo esc_html( $sidebar_search_box_mobile_margin_left ); ?>px;
@sidebar_container_border_focus_color: <?php echo esc_html( $sidebar_search_box_border_color_focus ); ?>;
.sidebar_container_align() {
<?php if ( 'center' === $sidebar_search_box_align ) { ?>
	margin: 0 auto;
<?php } else { ?>
	float: <?php echo esc_html( $sidebar_search_box_align ); ?>;
<?php } ?>
}
.sidebar_container_border() {
	<?php echo esc_html( $GLOBALS[WPPS_PREFIX.'admin_interface']->generate_border_css( $sidebar_search_box_border ) ); ?>
}
.sidebar_container_shadow() {
	<?php echo esc_html( $GLOBALS[WPPS_PREFIX.'admin_interface']->generate_shadow_css( $sidebar_search_box_shadow ) ); ?>
}

/* Sidebar Category Dropdown Variables */
@sidebar_cat_align: <?php echo esc_html( $sidebar_category_dropdown_align ); ?>;
@sidebar_cat_bg_color : <?php echo esc_html( $sidebar_category_dropdown_bg_color ); ?>;
@sidebar_cat_down_icon_size: <?php echo esc_html( $sidebar_category_dropdown_icon_size ); ?>px;
@sidebar_cat_down_icon_color: <?php echo esc_html( $sidebar_category_dropdown_icon_color ); ?>;
.sidebar_cat_label_font() {
	<?php echo esc_html( $GLOBALS[WPPS_PREFIX.'fonts_face']->generate_font_css( $sidebar_category_dropdown_font ) ); ?>
}
.sidebar_cat_side_border() {
<?php if ( 'left' === $sidebar_category_dropdown_align ) { ?>
	border-left: none;
	<?php echo esc_html( str_replace( 'border:', 'border-right:', $GLOBALS[WPPS_PREFIX.'admin_interface']->generate_border_style_css( $sidebar_category_dropdown_side_border ) )  ); ?>
<?php } else { ?>
	border-right: none;
	<?php echo esc_html( str_replace( 'border:', 'border-left:', $GLOBALS[WPPS_PREFIX.'admin_interface']->generate_border_style_css( $sidebar_category_dropdown_side_border ) )  ); ?>
<?php } ?>
}
.sidebar_cat_selector_dir() {
	<?php if ( 'right' === $sidebar_category_dropdown_align ) { ?>
	direction: rtl;
	<?php } ?>
}
.sidebar_cat_selector_option_dir() {
	<?php if ( 'right' === $sidebar_category_dropdown_align ) { ?>
	direction: ltr;
	text-align: left;
	<?php } ?>
}

/* Sidebar Search Icon Variables */
@sidebar_search_icon_size: <?php echo esc_html( $sidebar_search_icon_size ); ?>px;
@sidebar_search_icon_color: <?php echo esc_html( $sidebar_search_icon_color ); ?>;
@sidebar_search_icon_hover_color: <?php echo esc_html( $sidebar_search_icon_hover_color ); ?>;
@sidebar_search_icon_bg_color: <?php echo esc_html( $sidebar_search_icon_bg_color ); ?>;
@sidebar_search_icon_bg_hover_color: <?php echo esc_html( $sidebar_search_icon_bg_hover_color ); ?>;
.sidebar_search_icon_side_border() {
<?php if ( 'left' === $sidebar_category_dropdown_align ) { ?>
	border-right: none;
	<?php echo esc_html( str_replace( 'border:', 'border-left:', $GLOBALS[WPPS_PREFIX.'admin_interface']->generate_border_style_css( $sidebar_search_icon_side_border ) )  ); ?>
<?php } else { ?>
	border-left: none;
	<?php echo esc_html( str_replace( 'border:', 'border-right:', $GLOBALS[WPPS_PREFIX.'admin_interface']->generate_border_style_css( $sidebar_search_icon_side_border ) )  ); ?>
<?php } ?>
}

/* Sidebar Search Input Variables */
@sidebar_input_padding: <?php echo esc_html( $sidebar_input_padding_tb ); ?>px <?php echo esc_html( $sidebar_input_padding_lr ); ?>px !important;
.sidebar_input_bg_color {
	<?php echo esc_html( $GLOBALS[WPPS_PREFIX.'admin_interface']->generate_background_color_css( $sidebar_input_bg_color ) ); ?>
}
.sidebar_input_font() {
	<?php echo esc_html( $GLOBALS[WPPS_PREFIX.'fonts_face']->generate_font_css( $sidebar_input_font ) ); ?>
}
@sidebar_loading_icon_size: <?php echo esc_html( $sidebar_loading_icon_size ); ?>px;
@sidebar_loading_icon_color: <?php echo esc_html( $sidebar_loading_icon_color ); ?>;

/* Sidebar Close Icon Variables */
@sidebar_close_icon_size: <?php echo esc_html( $sidebar_close_icon_size ); ?>px;
@sidebar_close_icon_color: <?php echo esc_html( $sidebar_close_icon_color ); ?>;
@sidebar_close_icon_margin: <?php echo esc_html( $sidebar_close_icon_margin_top ); ?>px <?php echo esc_html( $sidebar_close_icon_margin_right ); ?>px <?php echo esc_html( $sidebar_close_icon_margin_bottom ); ?>px <?php echo esc_html( $sidebar_close_icon_margin_left ); ?>px;

/* Click Icon to Show Search Box */
.sidebar_search_icon_mobile_align() {
<?php if ( 'center' === $search_icon_mobile_align ) { ?>
	margin: 0 auto;
<?php } else { ?>
	float: <?php echo esc_html( $search_icon_mobile_align ); ?>;
<?php } ?>
}
@sidebar_search_icon_mobile_size: <?php echo esc_html( $search_icon_mobile_size ); ?>px;
@sidebar_search_icon_mobile_color: <?php echo esc_html( $search_icon_mobile_color ); ?>;

/* Sidebar PopUp Variables */
.sidebar_popup_border() {
	<?php echo esc_html( $GLOBALS[WPPS_PREFIX.'admin_interface']->generate_border_css( $sidebar_popup_border ) ); ?>
}
@sidebar_popup_heading_padding: <?php echo esc_html( $sidebar_popup_heading_padding_tb ); ?>px <?php echo esc_html( $sidebar_popup_heading_padding_lr ); ?>px;
@sidebar_popup_heading_bg_color: <?php echo esc_html( $sidebar_popup_heading_bg_color ); ?>;
.sidebar_popup_heading_font() {
	<?php echo esc_html( $GLOBALS[WPPS_PREFIX.'fonts_face']->generate_font_css( $sidebar_popup_heading_font ) ); ?>
}
.sidebar_popup_heading_border() {
	<?php echo esc_html( str_replace( 'border:', 'border-bottom:', $GLOBALS[WPPS_PREFIX.'admin_interface']->generate_border_style_css( $sidebar_popup_heading_border ) )  ); ?>
}

@sidebar_popup_item_padding_tb: <?php echo esc_html( $sidebar_popup_item_padding_tb ); ?>px;
@sidebar_popup_item_padding_lr: <?php echo esc_html( $sidebar_popup_item_padding_lr ); ?>px;
@sidebar_popup_item_border_hover_color: <?php echo esc_html( $sidebar_popup_item_border_hover_color ); ?>;
@sidebar_popup_item_bg_color: <?php echo esc_html( $sidebar_popup_item_bg_color ); ?>;
@sidebar_popup_item_bg_hover_color: <?php echo esc_html( $sidebar_popup_item_bg_hover_color ); ?>;
.sidebar_popup_item_border() {
	<?php echo esc_html( str_replace( 'border:', 'border-bottom:', $GLOBALS[WPPS_PREFIX.'admin_interface']->generate_border_style_css( $sidebar_popup_item_border ) )  ); ?>
}

@sidebar_popup_img_size: <?php echo esc_html( $sidebar_popup_item_image_size ); ?>px;
@sidebar_popup_content_wide: ~"calc( 100% - <?php echo esc_html( ( $sidebar_popup_item_image_size + 10 ) ); ?>px )";
@sidebar_popup_item_name_hover_color: <?php echo esc_html( $sidebar_popup_item_name_hover_color ); ?>;
.sidebar_popup_item_name_font() {
	<?php echo esc_html( $GLOBALS[WPPS_PREFIX.'fonts_face']->generate_font_css( $sidebar_popup_item_name_font ) ); ?>
}
@sidebar_popup_item_desc_hover_color: <?php echo esc_html( $sidebar_popup_item_desc_hover_color ); ?>;
.sidebar_popup_item_desc_font() {
	<?php echo esc_html( $GLOBALS[WPPS_PREFIX.'fonts_face']->generate_font_css( $sidebar_popup_item_desc_font ) ); ?>
}
@sidebar_popup_item_category_color: <?php echo esc_html( $sidebar_popup_item_category_color ); ?>;
@sidebar_popup_item_category_link_hover_color: <?php echo esc_html( $sidebar_popup_item_category_link_hover_color ); ?>;
@sidebar_popup_item_category_hover_color: <?php echo esc_html( $sidebar_popup_item_category_hover_color ); ?>;
.sidebar_popup_item_category_font() {
	<?php echo esc_html( $GLOBALS[WPPS_PREFIX.'fonts_face']->generate_font_css( $sidebar_popup_item_category_font ) ); ?>
}

@sidebar_popup_footer_padding: <?php echo esc_html( $sidebar_popup_footer_padding_tb ); ?>px <?php echo esc_html( $sidebar_popup_footer_padding_lr ); ?>px;
@sidebar_popup_footer_bg_color: <?php echo esc_html( $sidebar_popup_footer_bg_color ); ?>;
.sidebar_popup_seemore_font() {
	<?php echo esc_html( $GLOBALS[WPPS_PREFIX.'fonts_face']->generate_font_css( $sidebar_popup_seemore_font ) ); ?>
}
.sidebar_popup_more_link_font() {
	<?php echo esc_html( $GLOBALS[WPPS_PREFIX.'fonts_face']->generate_font_css( $sidebar_popup_more_link_font ) ); ?>
}
@sidebar_popup_more_icon_size: <?php echo esc_html( $sidebar_popup_more_icon_size ); ?>px;
@sidebar_popup_more_icon_color: <?php echo esc_html( $sidebar_popup_more_icon_color ); ?>;

<style>
/* Search Bar Sidebar Template */
.wpps_bar {
	.wpps_mobile_icon.sidebar_temp {
		.sidebar_search_icon_mobile_align();
		color: @sidebar_search_icon_mobile_color;

		* {
			color: @sidebar_search_icon_mobile_color;
			width: @sidebar_search_icon_mobile_size !important;
			height: @sidebar_search_icon_mobile_size !important;
		}
	}
}

.wpps_sidebar_container {
	width: @sidebar_container_wide;
	margin: @sidebar_container_margin;
	.sidebar_container_align();
	.sidebar_container_border();
	.sidebar_container_shadow();

	&.wpps_container_active {
		border-color: @sidebar_container_border_focus_color !important;
	}

	/* Category Dropdown */
	.wpps_nav_scope {
		background-color: @sidebar_cat_bg_color;
		.sidebar_cat_side_border();

		.wpps_category_selector {
			.sidebar_cat_selector_dir();

			option {
				.sidebar_cat_selector_option_dir();
			}
		}

		.wpps_nav_facade_label {
			.sidebar_cat_label_font();
		}

		.wpps_nav_down_icon {
			font-size: @sidebar_cat_down_icon_size;
			color: @sidebar_cat_down_icon_color;

			* {
				color: @sidebar_cat_down_icon_color;
			}
		}
	}

	/* Search Icon */
	.wpps_nav_submit {
		background-color: @sidebar_search_icon_bg_color;
		.sidebar_search_icon_side_border();

		&:hover {
			background-color: @sidebar_search_icon_bg_hover_color;

			.wpps_nav_submit_icon,
			.wpps_nav_submit_icon * {
				color: @sidebar_search_icon_hover_color;
			}
		}

		.wpps_nav_submit_icon {
			color: @sidebar_search_icon_color;

			svg {
				width: @sidebar_search_icon_size;
				height: @sidebar_search_icon_size;
			}

			* {
				color: @sidebar_search_icon_color;
			}
		}
	}

	/* Search Input */
	.wpps_nav_field {
		.sidebar_input_bg_color();

		.wpps_search_keyword {
			.sidebar_input_font();
			padding: @sidebar_input_padding;
		}

		.wpps_searching_icon {
			width: @sidebar_loading_icon_size;
			fill: @sidebar_loading_icon_color;
		}

		svg.wpps_searching_icon {

			* {
				color: @sidebar_loading_icon_color;
			}
		}
	}
}

.wpps_container.wpps_sidebar_container {

	.wpps_nav_left,
	.wpps_nav_right,
	.wpps_nav_fill,
	.wpps_nav_scope,
	.wpps_nav_submit,
	.wpps_nav_field,
	.wpps_search_keyword {
		height: @sidebar_container_height !important;
	}

	.wpps_nav_facade_label,
	.wpps_nav_down_icon,
	.wpps_category_selector,
	.wpps_nav_submit_icon,
	.wpps_searching_icon {
		line-height: @sidebar_container_height !important;
	}
}

/* Search Popup Sidebar Template */
.predictive_results.predictive_results_sidebar {
	.sidebar_popup_border();

	.ajax_search_content_title {
		padding: @sidebar_popup_heading_padding;
		background-color: @sidebar_popup_heading_bg_color;
		.sidebar_popup_heading_font();
		.sidebar_popup_heading_border();
	}

	.ajax_search_content {
		padding-left: @sidebar_popup_item_padding_lr;
		padding-right: @sidebar_popup_item_padding_lr;
		background-color: @sidebar_popup_item_bg_color;
		.sidebar_popup_item_border();
	}

	.result_row {
		margin-top: @sidebar_popup_item_padding_tb;
		margin-bottom: @sidebar_popup_item_padding_tb;
	}

	.rs_avatar {
		width: @sidebar_popup_img_size;
	}

	.rs_content_popup {
		width: @sidebar_popup_content_wide !important;

		.rs_name {
			.sidebar_popup_item_name_font();
		}

		.rs_description {
			.sidebar_popup_item_desc_font();
		}

		.rs_cat, .rs_cat > a {
			.sidebar_popup_item_category_font();
		}

		.rs_cat {
			color: @sidebar_popup_item_category_color !important;
		}
	}

	.more_result {
		padding: @sidebar_popup_footer_padding;
		background-color: @sidebar_popup_footer_bg_color;

		span {
			.sidebar_popup_seemore_font();
		}

		a {
			.sidebar_popup_more_link_font();
		}

		.see_more_arrow {
			color: @sidebar_popup_more_icon_color !important;

			svg {
				width: @sidebar_popup_more_icon_size !important;
				height: @sidebar_popup_more_icon_size !important;
			}
		}
	}

	.ac_over {
		.ajax_search_content {
			background-color: @sidebar_popup_item_bg_hover_color;
			border-color: @sidebar_popup_item_border_hover_color !important;
		}

		.rs_name {
			color: @sidebar_popup_item_name_hover_color !important;
		}

		.rs_description {
			color: @sidebar_popup_item_desc_hover_color !important;
		}

		.rs_cat {
			color: @sidebar_popup_item_category_hover_color !important;
		}

		.rs_cat > a {
			color: @sidebar_popup_item_category_link_hover_color !important;
		}
	}

	.ps_close {
		width: @sidebar_close_icon_size;
		height: @sidebar_close_icon_size;
		margin: @sidebar_close_icon_margin;

		svg {
			fill: @sidebar_close_icon_color;
		}
	}
}

@media only screen and (max-width: 420px) {
	.wpps_sidebar_container {
		width: @sidebar_container_mobile_wide;
		margin: @sidebar_container_mobile_margin;
	}
}

</style>
