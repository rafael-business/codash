<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?>

<?php astra_content_bottom(); ?>
	</div> <!-- ast-container -->
	</div><!-- #content -->

    <?php
    if ( is_front_page() ) : ?>
    
    <!--
    <div id="sobre" class="site-content">
        <div class="ast-container">
            <div>_clientes</div>
            <div class="clientes">
                <?php echo do_shortcode( '[wp_swiper id=184]' ); ?>
            </div>
        </div>
    </div>
    -->

    <div id="produtos" class="site-content">
        <div class="ast-container block">
            <h2>Temas & Plugins p/ WordPress</h2>
            <div><?php echo do_shortcode( '[products limit="6" columns="3" visibility="featured"]' ); ?></div>
        </div>
    </div>

    <div id="servicos" class="site-content">
        <div class="ast-container">
            <h2>Personalizamos para o seu Negócio</h2>
        </div>
    </div>
    
    <div id="blog" class="site-content">
        <div class="ast-container">
            <h2>Perguntas Frequentes</h2>
        </div>
    </div>

    <!--
    <div id="contato" class="site-content">
        <div class="ast-container">
            <h2>Fale com o Responsável</h2>
        </div>
    </div>
    -->

    <?php
    endif; ?>

<?php 
	astra_content_after();
		
	astra_footer_before();
		
	astra_footer();
		
	astra_footer_after(); 
?>
	</div><!-- #page -->
<?php 
	astra_body_bottom();    
	wp_footer(); 
?>
	</body>
</html>
