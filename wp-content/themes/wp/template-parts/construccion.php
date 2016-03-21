<?php
/**
 * Template Name: Construccion
 *
 * Description: Twenty Twelve loves the no-sidebar look as much as
 * you do. Use this page template to remove the sidebar from any page.
 *
 * Tip: to remove the sidebar from all posts and pages simply remove
 * any active widgets from the Main Sidebar area, and the sidebar will
 * disappear everywhere.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>
<div class="back1" style="background-image: url(<?php bloginfo( 'url' ); ?>/wp-content/themes/wp/images/back1.png)">
	<div id="cont_1" >
		<div class="text_area">
			<div class="logo">
				<img src="<?php bloginfo( 'url' ); ?>/wp-content/themes/wp/images/logo.png">
			</div>
			<div class="slogan">
				<h1><?php echo CFS()->get('frase_principal');?></h1>
				<p><?php echo CFS()->get('parrafo_principal');?></p>
			</div>
			<a class="boton">conoce nuestros servicios</a>
		</div>
	</div>

</div>
<div class="back1">
	<div id="cont2">
		<h1>Bienvenido,</h1>
		<h2>Conoce nuestros servicios.</h2>
		<p><?php echo CFS()->get('frase_secundaria');?></p>
		<ul class="icons">
			<li>
				<img src="<?php echo CFS()->get('icono_1');?>">
				<span class="title"><?php echo CFS()->get('texto_icono_1');?></span>
			</li>
			<li>
				<img src="<?php echo CFS()->get('Icono_2');?>">
				<span class="title"><?php echo CFS()->get('texto_icono_2');?></span>
			</li>
			<li>
				<img src="<?php echo CFS()->get('icono_3');?>">
				<span class="title"><?php echo CFS()->get('texto_icono_3');?></span>
			</li>

		</ul>
		<img class="line" src="<?php bloginfo( 'url' ); ?>/wp-content/themes/wp/images/line.png">
		<h1 class="com_">¿Cómo funciona?</h1>
		<h2 class="com">tres pasos muy sencillos.</h2>
		<ul class="pasos">
			<li>
				<div class="trian"></div>
				<div class="trian2"></div>
				<div class="num">1</div>
				<div class="req">Contáctanos</div>
			</li>
			<li>
				<div class="trian"></div>
				<div class="trian2"></div>
				<div class="num">2</div>
				<div class="req">Entrega tus recaudos</div>
			</li>
			<li>

				<div class="num">3</div>
				<div class="req">Recibe tu crédito</div>
			</li>

		</ul>
	</div>
</div>
<div class="back1">
	<div id="cont3">
		<div class="imgligt">
			<img src="<?php bloginfo( 'url' ); ?>/wp-content/themes/wp/images/ligth.png">
		</div>
		<div class="textdown"><?php echo CFS()->get('parrafo_2');?></div>
		<a class="boton" href="<?php echo CFS()->get('planilla');?>" download>descarga tu planilla</a>
		<img class="empr" src="<?php bloginfo( 'url' ); ?>/wp-content/themes/wp/images/empr.png">
	</div>
</div>
<div class="back1 pizz" style="background-image: url(<?php bloginfo( 'url' ); ?>/wp-content/themes/wp/images/pizarra.png)">
	<div id="cont4">
		<div class="rec">
			<h1 class="titl">Recaudos:</h1>
			<ul>
				<?php
					$fields = CFS()->get( 'recaudos' );
					foreach ( $fields as $field ) {
					   ?>
					   <li><?php echo $field['nuevo_recaudo']; ?></li>
					   <?php
					}
				?>


			</ul>
		</div>
		<div class="test-ph">
			<ul>
				<li><img src="<?php bloginfo( 'url' ); ?>/wp-content/themes/wp/images/test1.png"></li>
				<li><img src="<?php bloginfo( 'url' ); ?>/wp-content/themes/wp/images/test1.png"></li>
				<li><img src="<?php bloginfo( 'url' ); ?>/wp-content/themes/wp/images/test1.png"></li>
				<li><img src="<?php bloginfo( 'url' ); ?>/wp-content/themes/wp/images/test1.png"></li>
				<li><img src="<?php bloginfo( 'url' ); ?>/wp-content/themes/wp/images/test1.png"></li>
			</ul>
		</div>
	</div>

</div>
<div class="vide-tes">

	<video id="video" autoplay="autoplay" muted="muted" controls="constrols">
		<source src="http://www.quirksmode.org/html5/videos/big_buck_bunny.mp4" type="video/mp4">
		<!--<source src="http://www.quirksmode.org/html5/videos/big_buck_bunny.webm" type="video/webm">-->
		<!--<source src="http://www.quirksmode.org/html5/videos/big_buck_bunny.ogv" type="video/ogg">-->
	</video>
</div>
</div>
<div style="clear:both;"></div>
<?php get_footer(); ?>
