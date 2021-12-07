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
    
    <div id="sobre" class="site-content">
        <div class="ast-container">
            <h2>O que é a Codash?</h2>
        </div>
    </div>

    <div id="produtos" class="site-content">
        <div class="ast-container">
            <h2>Produtos à venda</h2>
        </div>
    </div>

    <div id="servicos" class="site-content">
        <div class="ast-container">
            <h2>Plugins personalizados para o seu Negócio</h2>
        </div>
    </div>
    
    <div id="blog" class="site-content">
        <div class="ast-container">
            <h2>Dicas & Novidades</h2>
        </div>
    </div>

    <div id="contato" class="site-content">
        <div class="ast-container">
            <h2>Fale com o Responsável</h2>
        </div>
    </div>

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
