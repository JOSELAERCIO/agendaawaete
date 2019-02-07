<footer class="footer">
    <div class="footer-social-media">
        <div class="footer-instagram">
            <h3 class="text-footer">Instagram Agenda Awaete</h3>
            <?php echo do_shortcode( '[instagram-feed]' ) ?>
        </div>
        <div class="footer-social-icons">
            <h3 class="text-footer">Conecte-se nas redes</h3>
            <?php get_template_part( 'parts/social-icons' ); ?>
        </div>
    </div>
    <div class="to-top">
        <a href="#" title="Para o topo" class="text-footer">acima</a>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>