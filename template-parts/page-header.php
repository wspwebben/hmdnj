
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
        Our address: Millstone, NJ
        <i class="contacts__icon fa fa-home"></i>
      </a>
      <a class="contacts__item" href="tel:+17325777630">
        Call us: <strong class="contacts__call">+1 732-577-7630</strong>
        <i class="contacts__icon fa fa-phone"></i>
      </a>
    </p>
  </div>
</header>
