<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package construction lite
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="page-footer" role="contentinfo">
        <div class="page-footer__container ak-container">
            <div class="page-footer__logo">
                <?php the_custom_logo() ?>
            </div>

            <p class="page-footer__contacts">
                <span class="page-footer__contacts-item">
                    <svg width="12" height="17" fill="#fff" xmlns="http://www.w3.org/2000/svg"><path d="M6 .63C2.9.63.37 2.88.37 5.68.38 10.19 6 16.37 6 16.37s5.63-6.18 5.63-10.68C11.63 2.89 9.1.62 6 .62zM6 8.5A2.25 2.25 0 116 4a2.25 2.25 0 010 4.5z" /></svg>
                    <b>Millstone, NJ</b>
                </span>
                <a class="page-footer__contacts-item" href="tel:+17325777630">
                <svg width="16" height="17" fill="#fff" xmlns="http://www.w3.org/2000/svg"><path d="M12.75 16.38c-.69 0-1.65-.25-3.1-1.06a20.11 20.11 0 01-4.86-3.63 18.44 18.44 0 01-3.65-4.86C-.16 4.47.07 3.23.32 2.7c.3-.63.72-1 1.29-1.38A6.2 6.2 0 012.7.75c.17-.08.44-.2.77-.07.22.08.42.26.73.56.64.63 1.52 2.04 1.84 2.73.21.46.36.77.36 1.11 0 .4-.2.71-.45 1.05l-.14.18c-.26.35-.32.45-.28.63.07.37.66 1.45 1.62 2.41a6.4 6.4 0 002.38 1.59c.19.04.3-.02.66-.3l.16-.12c.37-.28.67-.48 1.06-.48.35 0 .64.15 1.12.4.64.31 2.08 1.18 2.72 1.82.3.3.48.5.56.73.13.33 0 .6-.07.77l-.04.1a6.2 6.2 0 01-.54 1c-.37.56-.75 1-1.38 1.29-.33.15-.68.23-1.04.23z" /></svg>
                    <b>+ 1 732 577 76 30</b>
                </a>
            </p>

            <p class="page-footer__contacts">
                <a class="page-footer__contacts-item" href="https://www.instagram.com/hmd_constructiongroup">
                    <svg width="18" height="18" fill="#174430" xmlns="http://www.w3.org/2000/svg"><path d="M12.28 2.94a3.3 3.3 0 013.28 3.28v6.56a3.3 3.3 0 01-3.28 3.28H5.72a3.3 3.3 0 01-3.28-3.28V6.22a3.3 3.3 0 013.28-3.28h6.56zm0-1.31H5.72a4.6 4.6 0 00-4.6 4.59v6.56a4.6 4.6 0 004.6 4.6h6.56a4.6 4.6 0 004.6-4.6V6.22a4.6 4.6 0 00-4.6-4.6z" fill="#fff"/><path d="M12.28 2.94a3.3 3.3 0 013.28 3.28v6.56a3.3 3.3 0 01-3.28 3.28H5.72a3.3 3.3 0 01-3.28-3.28V6.22a3.3 3.3 0 013.28-3.28h6.56z" fill="#fff"/><path d="M13.27 6.22a.98.98 0 110-1.97.98.98 0 010 1.97zM9 6.88a2.63 2.63 0 110 5.25 2.63 2.63 0 010-5.25zm0-1.32a3.94 3.94 0 100 7.88 3.94 3.94 0 000-7.88z" /></svg>
                    <b>Instagram</b>
                </a>
            </p>

            <div class="page-footer__menu">
                <?php wp_nav_menu(
                    [
                        'theme_location' => 'primary',
                        'container_class' => 'main-menu__items js-menu__content',
                    ]
                ); ?>
            </div>
        </div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>