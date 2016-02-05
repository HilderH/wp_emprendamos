<?php if (!defined('FW')) die('Forbidden'); ?>

<?php if (isset($data['slides'])): ?>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$('.nivoSlider').nivoSlider({effect:'fade'});
		});
	</script>
	<!--Slider-->
	<section class="wrap-nivoslider theme-default">
		<div class="nivoSlider">
			<?php foreach ($data['slides'] as $id => $slide): ?>
			<img  width="<?php echo esc_attr($dimensions['width']); ?>"
			      height="<?php echo esc_attr($dimensions['height']); ?>"
			      src="<?php echo esc_attr(fw_resize($slide['src'], $dimensions['width'], $dimensions['height'], true)); ?>"
			      alt="<?php echo esc_attr($slide['title']); ?>"
			      title="#nivo-<?php echo esc_attr($id); ?>" />
			<?php endforeach; ?>
		</div>
		<?php foreach ($data['slides'] as $id => $slide): ?>
		<div id="nivo-<?php echo esc_attr($id) ?>" class="nivo-html-caption">
			<div class="slide-title"><?php echo $slide['title'] ?></div><br>
			<span class="btn-black"><a href=""><?php _e('VIEW SIMILAR PROPERTIES','uptown') ?></a></span>
			<span class="btn-white"><?php icl_link_to_element(88,'page',__('CONTACT A REAL ESTATE SPECIALIST TODAY','uptown')); ?></span>
		</div>
		<?php endforeach; ?>
	</section>
	<!--/Slider-->
<?php endif; ?>
