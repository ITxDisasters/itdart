<div id="footer_wrapper">
    <footer>

        <aside class="footer_widget">
            <?php if( is_active_sidebar( 'footer_1' ) ): ?>
                <div class="footer_left">
                    <?php
                        dynamic_sidebar ('footer_1' );
                    ?>
                </div>
            <?php endif; ?>
            <?php if( is_active_sidebar( 'footer_2' ) ): ?>
                <div class="footer_center">
                    <?php
                        dynamic_sidebar ('footer_2');
                    ?>
                </div>
            <?php endif; ?>
            <?php if( is_active_sidebar( 'footer_3' ) ): ?>
                <div class="footer_right">
                    <?php
                        dynamic_sidebar ('footer_3');
                    ?>
                </div>
            <?php endif; ?>
        </aside>

        <p id="copyright">
            <small>Copyright &copy; ITDART All Right Reserved.</small>
        </p>
        <p id="banner">
            <a href="http://www.itxsaigai.org/">
                <img src="/itdartwp/wp-content/uploads/2015/07/logo_itsaigai.png" alt="ITx災害">
            </a>
            <a href="http://www.ispp.jp/">
                <img src="/itdartwp/wp-content/uploads/2015/07/logo_ispp.png" alt="iSPP">
            </a>
            <a href="http://www.hack4.jp/">
                <img src="/itdartwp/wp-content/uploads/2015/07/logo_hfj.png" alt="iSPP">
            </a>
            <a rel="license" href="http://creativecommons.org/licenses/by-sa/3.0/deed.ja">
                <img src="//licensebuttons.net/l/by-sa/3.0/88x31.png" alt="Creative Commons 表示 - 継承 3.0 非移植 License">
            </a>
        </p>

    </footer>
</div>

<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/ready.js" type="text/javascript"></script>
<?php wp_footer(); ?>
</body>
</html>
