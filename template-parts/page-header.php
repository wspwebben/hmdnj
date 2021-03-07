
<header class="page-header js-menu" open>
  <div class="page-header__container ak-container">
    <?php the_custom_logo() ?>
    
    <nav id="site-navigation" class="page-header__navigation main-menu">
      <button class="main-menu__toggle js-menu__toggle" aria-label="Open menu">
        <span class="main-menu__toggle-bar" aria-hidden></span>
      </button>

      <?php wp_nav_menu(
        [
          'theme_location' => 'primary',
          'container_class' => 'main-menu__items js-menu__content',
        ]
      ); ?>
    </nav>
    
    <p class="page-header__contacts contacts">
      <a class="contacts__item">
        <img src="<?php bloginfo('stylesheet_directory')?>/images/icons/marker.svg" alt="" >
        <b>Millstone, NJ</b>
      </a>
      <a class="contacts__item" href="tel:+17325777630">
        <img src="<?php bloginfo('stylesheet_directory')?>/images/icons/phone.svg" alt="" >
        <b>+ 1 732 577 76 30</b>
      </a>
    </p>
  </div>
</header>
