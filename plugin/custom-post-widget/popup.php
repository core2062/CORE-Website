<?php 
// Displays the lightbox popup to insert a content block shortcode to a post/page
function add_content_block_popup() { ?>

	<script>
		function InsertContentBlockForm() {
			var content_id = jQuery("#add-content-block-id").val();
			if(content_id == "") {
				alert("<?php _e( 'Please select a Content Block', 'custom-post-widget' ); ?>");
				return;
			}
			var win = window.dialogArguments || opener || parent || top;
			win.send_to_editor("[content_block id=" + content_id + "]");
		}
	</script>

	<div id="content-block-form" style="display: none;">
		<h3>
			<?php _e( 'Insert Content Block', 'custom-post-widget' ); ?>
		</h3>
		<p>
			<?php _e( 'Select a Content Block below to add it to your post or page.', 'custom-post-widget' ); ?>
		</p>
		<p>
			<select id="add-content-block-id">
				<option value="">
					<?php _e( 'Select a Content Block', 'custom-post-widget' ); ?>
				</option>
				<?php 
					$args = array('post_type' => 'content_block', 'suppress_filters' => 0, 'numberposts' => -1, 'order' => 'ASC');
					$content_block = get_posts( $args );
					if ($content_block) {
						foreach( $content_block as $content_block ) : setup_postdata( $content_block );
							echo '<option value="' . $content_block->ID . '">' . $content_block->post_title . '</option>';
						endforeach;
					} else {
						echo '<option value="">' . __( 'No content blocks available', 'custom-post-widget' ) . '</option>';
					};
				?>
			</select>
		</p>
		<p>
			<input type="button" class="button-primary" value="<?php _e( 'Insert Content Block', 'custom-post-widget' ) ?>" onclick="InsertContentBlockForm();"/>
		</p>
	</div>
	
<?php };