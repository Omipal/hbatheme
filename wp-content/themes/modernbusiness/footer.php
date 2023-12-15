</main>
        <!-- Footer-->
        <footer class="bg-dark py-4 mt-auto">
            <div class="container px-5">
                <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                    <div class="col-auto"><div class="small m-0 text-white">Copyright &copy; <?php bloginfo('name'); ?> <?php echo date('Y'); ?></div></div>
                    <div class="col-auto">
                    <?php 
                                wp_nav_menu( array(
                                    'theme_location' => 'footer_menu',
                                    'menu_class' => '', // ul class
                                    'menu_id' => '', // ul id
                                    'container' => false,
                                    'add_a_class'  => 'link-light small',
                                    'add_span_class'  => 'text-white mx-1',
                            ) );
                  
                        ?>
                        <!-- <a class="link-light small" href="#!">Privacy</a>
                        <span class="text-white mx-1">&middot;</span>
                        <a class="link-light small" href="#!">Terms</a>
                        <span class="text-white mx-1">&middot;</span>
                        <a class="link-light small" href="#!">Contact</a> -->
                    </div>
                </div>
            </div>
        </footer>
        <?php wp_footer() ?>
    </body>
</html>