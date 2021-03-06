<form id="intergeo_frm"
      method="post"<?php echo ! $post_id ? ' origtarget="_parent" target="_parent"' : 'origtarget="self"'; ?>>
	<input type="hidden" id="intergeo_map_lat" name="lat"
		   value="<?php echo isset( $json['lat'] ) ? esc_attr( $json['lat'] ) : 48.1366069; ?>">
	<input type="hidden" id="intergeo_map_lng" name="lng"
		   value="<?php echo isset( $json['lng'] ) ? esc_attr( $json['lng'] ) : 11.577085099999977; ?>">
	<input type="hidden" id="intergeo_map_zoom" name="zoom"
		   value="<?php echo isset( $json['zoom'] ) ? esc_attr( $json['zoom'] ) : 5; ?>">

	<div id="intergeo_tlbr">
		<div id="intergeo_tlbr_ttl">Inter<span style="color:#4067dc">g</span><span style="color:#e21b31">e</span><span
					style="color:#fcaa08">o</span> <?php esc_html_e( 'Maps', 'intergeo-maps' ); ?></div>
		<ul id="intergeo_tlbr_ul">
			<li class="intergeo_tlbr_ul_li open">
				<?php include INTERGEO_ABSPATH . '/templates/iframe/overlays.php'; ?>
			</li>
			<li class="intergeo_tlbr_ul_li">
				<?php include INTERGEO_ABSPATH . '/templates/iframe/positioning.php'; ?>
			</li>
			<li class="intergeo_tlbr_ul_li">
				<?php include INTERGEO_ABSPATH . '/templates/iframe/controls.php'; ?>
			</li>
			<li class="intergeo_tlbr_ul_li">
				<?php include INTERGEO_ABSPATH . '/templates/iframe/styles.php'; ?>
			</li>
			<?php
			if ( intergeo_is_personal() ) {
			?>
			<li class="intergeo_tlbr_ul_li">
				<?php include INTERGEO_ABSPATH . '/templates/iframe/directions.php'; ?>
			</li>
			<?php
			}
			?>
			<li class="intergeo_tlbr_ul_li">
				<?php include INTERGEO_ABSPATH . '/templates/iframe/layers.php'; ?>
			</li>
			<?php
			if ( intergeo_is_personal() ) {
			?>
			<li class="intergeo_tlbr_ul_li">
				<?php include INTERGEO_ABSPATH . '/templates/iframe/adsense.php'; ?>
			</li>
			<?php
			}
			if ( intergeo_is_personal() ) {
				include INTERGEO_ABSPATH . '/templates/iframe/extra.php';
			}
			?>
		</ul>
	</div>
	<div id="intergeo_canvas_wrapper">
		<div id="intergeo_canvas"></div>
		<div id="intergeo_canvas_center"
			 title="<?php esc_attr_e( 'The center of the map', 'intergeo-maps' ); ?>"<?php echo ! $show_map_center ? ' style="display:none;"' : ''; ?>></div>
	</div>
	<div id="intergeo_footer">
		<a id="intergeo_go_to_address" class="button button-large"
		   href="javascript:;"><?php esc_html_e( 'Go to address', 'intergeo-maps' ); ?></a>

			<input type="submit" class="button button-primary button-large" value="<?php echo $submit_text; ?>">

	</div>
</form>

<?php include INTERGEO_ABSPATH . '/templates/iframe/popups.php'; ?>
