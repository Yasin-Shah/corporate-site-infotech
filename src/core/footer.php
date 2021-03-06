<?php
wp_footer();
?>

<footer class="footer">
    <div class="wrapper">
        <div class="footer__row1">
            <?php wp_nav_menu( [
                'theme_location'  => 'footer-menu',
                'menu'            => 'footer-menu',
                'container'       => 'nav',
                'container_class' => 'footer__menu',
                'container_id'    => '',
                'menu_class'      => 'menu-f',
                'menu_id'         => '',
                'echo'            => true,
                'fallback_cb'     => 'wp_page_menu',
                'before'          => '',
                'after'           => '',
                'link_before'     => '',
                'link_after'      => '',
                'items_wrap'      => '<ul class="menu-f__list row">%3$s</ul>',
                'depth'           => 0,
            ] ); ?>
            <div class="footer__info">
                <button class="footer__callback js-callback">
                    Обратный звонок
                </button>
                <a target="_blank" href="tel:<?php the_field('phone', 'option'); ?>"
                   class="footer__phone">
                    <?php the_field('phone', 'option'); ?>
                </a>
                <a target="_blank" href="mailto:<?php the_field('email', 'option'); ?>" class="footer__mail">
                    <?php the_field('email', 'option'); ?>
                </a>
                <div class="footer__work">
                    <?php the_field('time-work', 'option'); ?>
                </div>
                <div class="footer__soc f-soc">
                    <div class="f-soc__block">
                        <a href="<?php the_field('facebook', 'option'); ?>" class="f-soc__item">
                            <svg class="f-soc-f" width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M26.4286 0H3.57143C1.57143 0 0 1.57143 0 3.57144V26.4286C0 28.4287 1.57143 30.0001 3.57143 30.0001H13.0386V21.6387V20.8424H12.6812H10.1075C9.82149 20.8424 9.75 20.77 9.75 20.4804V17.2951C9.75 17.0056 9.82149 16.9332 10.1075 16.9332H12.8241C13.0386 16.9332 13.1101 16.8608 13.1101 16.6436C13.1101 16.3359 13.1056 16.0283 13.1012 15.7206C13.0878 14.7976 13.0744 13.8746 13.1816 12.9516C13.3961 10.997 14.8974 9.40431 16.8277 9.11473C17.8498 8.93209 18.9225 9.00545 19.9607 9.07646C20.157 9.08988 20.352 9.10322 20.5453 9.11473C20.7588 9.11473 20.8661 9.11473 20.9199 9.16835C20.9742 9.22242 20.9742 9.33101 20.9742 9.54909V12.3724C21.0457 12.662 20.9742 12.7344 20.6882 12.7344C19.9018 12.7344 19.1154 12.7344 18.329 12.8068C17.6141 12.8792 17.1851 13.3135 17.1137 14.0375C17.0422 14.9062 17.0422 15.8473 17.0422 16.716V16.716V16.9332H17.3281H20.3308C20.5435 16.9332 20.6507 16.9332 20.6961 16.9861C20.7422 17.04 20.7243 17.1486 20.6882 17.3675C20.5453 18.381 20.4023 19.4669 20.3308 20.4804C20.3308 20.77 20.1878 20.8424 19.9018 20.8424H17.3281C17.1137 20.8424 17.0422 20.9148 17.0422 21.132V30.0001H26.4286C28.4286 30.0001 30 28.4287 30 26.4286V3.57144C30 1.57143 28.4286 0 26.4286 0Z" fill="#516470" fill-opacity="0.7"/>
                            </svg>
                        </a>
                        <a href="<?php the_field('vkontakte', 'option'); ?>" class="f-soc__item">
                            <svg class="f-soc-v" width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M26.4286 0H3.57143C1.57143 0 0 1.57143 0 3.57144V26.4286C0 28.4287 1.57143 30.0001 3.57143 30.0001H26.4286C28.4286 30.0001 30 28.4287 30 26.4286V3.57144C30 1.57143 28.4286 0 26.4286 0ZM21.8928 18.1072C22.1786 18.4643 22.4643 18.8215 22.6785 19.25C22.7143 19.2857 22.7321 19.3393 22.75 19.3929C22.7678 19.4464 22.7857 19.5 22.8214 19.5357C22.8928 19.8929 22.6785 20.1072 22.3214 20.1786H22.1071H20.3928C19.8928 20.1786 19.5357 19.9643 19.25 19.6072L19.25 19.6071C18.8214 19.1072 18.3928 18.6072 17.8928 18.1786L16.8214 17.3214C16.6071 17.1786 16.3214 17.0357 16.0357 17.0357C15.6786 17.0357 15.5357 17.1786 15.5357 17.4643V18.25V19.4643C15.5357 19.75 15.3928 19.9643 15.1071 20.0357C15.0357 20.0357 14.9464 20.0536 14.8571 20.0714C14.7678 20.0893 14.6786 20.1072 14.6071 20.1072C13.3928 20.1786 12.3214 19.8929 11.25 19.3214C10.0357 18.6786 9.10713 17.75 8.32142 16.6072C7.53571 15.5357 6.89285 14.3929 6.32143 13.25C5.89286 12.3929 5.53571 11.5357 5.32143 10.6072C5.25 10.4643 5.25 10.3929 5.25 10.25C5.25 9.96432 5.39285 9.75003 5.75 9.75003H6.32143H7.89285C8.17856 9.75003 8.39285 9.89289 8.53571 10.1786C8.57142 10.3215 8.62499 10.4465 8.67857 10.5715C8.73214 10.6965 8.78571 10.8215 8.82142 10.9643C9.24999 12.1786 9.82142 13.3215 10.5357 14.3929C10.75 14.75 11.0357 15.1072 11.3214 15.3929C11.3928 15.4643 11.5357 15.5357 11.6786 15.6072C11.8928 15.75 12.0357 15.6072 12.1071 15.3929C12.1786 15.25 12.1786 15.1786 12.1786 15.0357V12.1072C12.1786 11.5357 12.0357 11.1072 11.6786 10.6786C11.6786 10.6072 11.6071 10.5358 11.5357 10.4643L11.5357 10.4643C11.3214 10.1786 11.5357 9.82146 11.8928 9.82146H12.6071H14.8928C15.3214 9.82146 15.4643 10.0357 15.4643 10.3929V12.3215V14.1786C15.4643 14.3215 15.4643 14.4643 15.5357 14.6072C15.6071 14.8215 15.75 14.8929 15.9643 14.8215C16.0357 14.7857 16.0893 14.75 16.1428 14.7143C16.1964 14.6786 16.25 14.6429 16.3214 14.6072C16.75 14.25 17.1071 13.75 17.4642 13.2501L17.4643 13.25C18.0357 12.3929 18.5357 11.3929 18.9643 10.4643C19 10.4286 19.0178 10.3929 19.0357 10.3572C19.0535 10.3215 19.0714 10.2857 19.1071 10.25C19.25 9.96432 19.5357 9.82146 19.8214 9.82146H21.8928C21.9765 9.82146 22.0357 9.84597 22.0847 9.86627C22.1194 9.88063 22.149 9.89289 22.1785 9.89289C22.3928 9.89289 22.4643 10.0357 22.4643 10.25C22.4643 10.3929 22.4643 10.5357 22.3928 10.6786C22.344 10.7926 22.2988 10.9029 22.2549 11.0103C22.106 11.374 21.9705 11.7049 21.75 12.0357C21.4643 12.5 21.1607 12.9643 20.8571 13.4286C20.5535 13.8929 20.25 14.3572 19.9643 14.8215C19.9285 14.8572 19.8928 14.9107 19.8571 14.9643C19.8214 15.0179 19.7857 15.0715 19.75 15.1072C19.6071 15.3215 19.6071 15.5357 19.75 15.75C19.8571 15.8572 19.9464 15.9643 20.0357 16.0715C20.125 16.1786 20.2143 16.2857 20.3214 16.3929C20.8928 16.9643 21.3928 17.5357 21.8928 18.1072L21.8928 18.1072Z" fill="#516470" fill-opacity="0.7"/>
                            </svg>
                        </a>
                        <a href="<?php the_field('instagram', 'option'); ?>" class="f-soc__item">
                            <svg class="f-soc-i" width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M3.57143 0H26.4286C28.4286 0 30 1.57143 30 3.57144V26.4286C30 28.4287 28.4286 30.0001 26.4286 30.0001H3.57143C1.57143 30.0001 0 28.4287 0 26.4286V3.57144C0 1.57143 1.57143 0 3.57143 0ZM15.0357 8.21414C11.3214 8.21414 8.25 11.2856 8.25 14.9999C8.25 18.7142 11.3214 21.7856 15.0357 21.7856C18.75 21.7856 21.8214 18.7142 21.8214 14.9999C21.8214 11.2856 18.75 8.21414 15.0357 8.21414ZM15.0357 19.2856C12.6786 19.2856 10.75 17.357 10.75 14.9999C10.75 12.6427 12.6786 10.7141 15.0357 10.7141C17.3928 10.7141 19.3214 12.6427 19.3214 14.9999C19.3214 17.357 17.3928 19.2856 15.0357 19.2856ZM21.4644 7.21425C21.4644 6.28568 22.2501 5.49997 23.1786 5.49997C24.0358 5.49997 24.8929 6.28568 24.8929 7.21425C24.8929 8.14282 24.1072 8.92853 23.1786 8.92853C22.2501 8.92853 21.4644 8.14282 21.4644 7.21425Z" fill="#516470" fill-opacity="0.7"/>
                            </svg>

                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__row2">
            <a target="_blank" href="<?php the_field('logo-link-1', 'option')['url']; ?>" class="footer__company1 f-comp">
                <div class="f-comp__img">
                    <img src="<?php the_field('logo1', 'option')['url']; ?>"
                         alt=""
                         class="f-comp__img-1">
                </div>
                <div class="f-comp__text">
                    <?php the_field('logo-text1', 'option'); ?>
                </div>
            </a>
            <a target="_blank" href="<?php esc_url(the_field('logo-link-2', 'option')); ?>" class="footer__company2 f-comp">
                <div class="f-comp__img">
                    <img src="<?php the_field('logo2', 'option')['url']; ?>"
                         alt=""
                         class="f-comp__img-2">
                </div>
                <div class="f-comp__text">
                    <?php the_field('logo-text2', 'option'); ?>
                </div>
            </a>
        </div>
        <div class="footer__row3">
            <div class="footer__col-31">
                <a class="footer__logo logo" href="<?php echo pll_home_url(); ?>">
                    <img src="<?php the_field('logo', 'option')['url']; ?>"
                         alt=""
                         class="logo__img">
                </a>
                <p class="footer__copyright">
                    <?php the_field('copyright', 'option'); ?>
                </p>
            </div>
            <div class="footer__col-32">
                <ul class="menu-f2__list"><li class="menu-f2__item menu-f2__item_lvl_1 col">
                        <a target="_blank" href="<?php the_field('foot-1-c', 'option'); ?>" class="menu-f2__link menu-f2__link_lvl_1">
                            <?php the_field('foot-1-t', 'option'); ?>
                        </a>
                    </li>
                    <li class="menu-f2__item menu-f2__item_lvl_1 col">
                        <a target="_blank" href="<?php the_field('foot-2-c', 'option'); ?>" class="menu-f2__link menu-f2__link_lvl_1">
                            <?php the_field('foot-2-t', 'option'); ?>
                        </a>
                    </li>
                    <li class="menu-f2__item menu-f2__item_lvl_1 col">
                        <a target="_blank" href="<?php the_field('foot-3-c', 'option'); ?>" class="menu-f2__link menu-f2__link_lvl_1">
                            <?php the_field('foot-3-t', 'option'); ?>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="footer__col-33">
                <div class="footer__help f-help">
                    <div class="f-help__text">
                        Техническая поддержка:
                    </div>
                    <div class="f-help__phone">
                        <?php the_field('tech-phone', 'option'); ?>
                    </div>
                    <a target="_blank" href="mailto:<?php the_field('email-tech', 'option'); ?>" class="f-help__mail">
                        <?php the_field('email-tech', 'option'); ?>
                    </a>
                    <div class="f-help__text2">
                        <?php the_field('tech-text', 'option'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
</body>
</html>
