<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="format-detection" content="telephone=no">
        <meta name="format-detection" content="address=no">

        <title><?php document_title(); ?></title>
        <?php wp_head(); ?>
        <style>
            .preloader {
                position: fixed;
                top: 0;
                left: 0;
                bottom: 0;
                right: 0;
                z-index: 10;
                background: rgba(255,255,255,1);
            }
            .preloader > .logo {
                position: absolute;
                left: 50%;
                top: 40% !important;
                max-width: 354px;
                z-index: 3;
                -webkit-transition: opacity 500ms ease-in-out;
                transition: opacity 500ms ease-in-out;
                -webkit-transform: translate(-50%, -50%);
                transform: translate(-50%, -50%);
                background-size: contain;
            }
            .preloader_loaded > .logo,
            .preloader_loaded > div{
                opacity: 0;
            }
            .preloader__points {
                overflow: hidden;
                position: absolute;
                top: 65%;
                left: 0;
                width: 100%;
                -webkit-transform: translate(0, -50%);
                transform: translate(0, -50%);
                text-align: center;
            }

            .preloader__points span {
                display: inline-block;
                vertical-align: top;
                height: 10px;
                margin: 60px auto;
                width: 10px;
                background: #e30a27;
                border-radius: 10px;
                -webkit-animation: loading 1s infinite alternate 0s;
                animation: loading 1s infinite alternate 0s;
            }

            .preloader__points span:nth-of-type(1) {
                -webkit-animation-delay: 0s;
            }
            .preloader__points span:nth-of-type(2) {
                -webkit-animation-delay: 0.2s;
                background: #c40923;
            }
            .preloader__points span:nth-of-type(3) {
                -webkit-animation-delay: 0.4s;
                background: #a60922;
            }
            .preloader__points span:nth-of-type(4) {
                -webkit-animation-delay: 0.6s;
                background: #8c091f;
            }
            .preloader__points span:nth-of-type(5) {
                -webkit-animation-delay: 0.8s;
                background: #610717;
            }

            @-webkit-keyframes loading {
                0% {
                    -webkit-transform: translateY(0);
                    height: 10px;
                    width: 10px;
                }
                100% {
                    -webkit-transform: translateY(-20px);
                    height: 20px;
                    width: 20px;
                }
            }

            @keyframes loading {
                0% {
                    transform: translateY(0);
                    height: 10px;
                    width: 10px;
                }
                100% {
                    transform: translateY(-20px);
                    height: 20px;
                    width: 20px;
                }
            }
        </style>


    </head>
    <body data-action="<?php echo admin_url( 'admin-ajax.php' );?>">
<?php if (is_page() || is_single() || is_singular() || is_404()) {
    the_post();
} ?>
    
<?php if(is_front_page()){
    $class = ' site_index';
}
elseif(is_404()){
    $class = ' site_inner site_no-footer';
}
else {
    $class = ' site_inner';
} ?>
    
    <!-- site -->
    <div class="site<?= $class; ?>">

        <!-- preloader -->
        <div class="preloader">
            <div class='preloader__points'>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="logo" style="background-image: url(data:image/png;base64,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)"></div>
        </div>
        <!-- /preloader -->

        <?php
        $cart = WC()->cart;
        $cart_url = $cart->get_cart_url();
        $count_products = $cart->get_cart_contents_count();
        
        if($count_products !=0 ){
            $cur_fill = ' cart_fill';
            $cart_count = "<div>$count_products items</div>";
            $header_class= ' site__header_fill-cart';
        } else {
            $header_class = '';
            $cur_fill='';   
        }

//        echo $cart->get_cart_total();
        if(isset($_GET['em'])){
            $cart->empty_cart();
        }

        ?>

        <!-- site__header -->
        <header class="site__header<?= $header_class; ?>">

            <!-- site__header-layout -->
            <div class="site__header-layout">



                <?php if(is_front_page()){ ?>

                    <h1 class="logo">
                        <img src="<?= DIRECT; ?>img/logo.png" width="231" height="176" alt="Matt's Cookies Logo">
                    </h1>

                <?php } else { ?>

                    <a href="<?= home_url()?>" class="logo">
                        <img src="<?= DIRECT; ?>img/logo.png" width="231" height="176" alt="Matt's Cookies Logo">
                    </a>
                    
               <?php  } ?>

                <!-- cart -->
                <a href="<?= $cart_url; ?>" class="cart<?= $cur_fill; ?>">
                    <span></span>
                    <?= $cart_count; ?>
                </a>
                <!-- /cart -->


                <!-- site__menu-btn -->
                <button class="site__menu-btn">
                    <span></span>
                </button>
                <!-- /site__menu-btn -->

                <!-- site__menu -->
                <div class="site__menu">

                    <div class="logo">
                        <img src="<?= DIRECT; ?>img/logo.png" width="231" height="176" alt="Matt's Cookies">
                    </div>


                    <?php
                        $homePage = home_url();


                    ?>

                    <!-- site__nav -->
                    <nav class="site__menu-nav site__menu-nav_anchors">
                        <ul>
                            <li>
                                <a <?= (is_front_page())? 'data-href="our-cookies"' : ''; ?> href="<?= $homePage ?>#our-cookies" class="site__menu-link">
                                    <?php the_field('our_cookies_title_in__menu',5) ?>
                                </a>
                            </li>
                            <li>
                                <a <?= (is_front_page())? 'data-href="about-us"' : ''; ?> href="<?= $homePage ?>#about-us" class="site__menu-link">
                                    <?php the_field('about_us__title_menu',5) ?>
                                </a>
                            </li>
                            <li>
                                <a <?= (is_front_page())? 'data-href="real-stuff"' : ''; ?> href="<?= $homePage ?>#real-stuff" class="site__menu-link">
                                    <?php the_field('real_stuff__menu_title',5) ?>
                                </a>
                            </li>
                        </ul>
                        <ul>
                            <li>
                                <a href="<?= $homePage ?>#store-finder" <?= (is_front_page())? 'data-href="store-finder"' : ''; ?> class="site__menu-link">
                                    <?php the_field('store_finder_title_in_menu',5) ?>
                                </a>
                            </li>
                            <li>
                                <a href="<?= get_the_permalink(76) ?>" class="site__menu-link"><?= get_the_title(76) ?></a>
                            </li>
                            <li>
                                <a href="<?= get_the_permalink(81) ?>" class="site__menu-link">
                                    <?= get_the_title(81) ?></a>
                            </li>
                        </ul>
                    </nav>
                    <!-- /site__nav -->

                    <?php $phone_in_header = get_field('phone_in_header_for_mobile','options'); ?>

                    <a href="tel:<?= $phone_in_header ?>" class="btn">
                        CALL NOW: <?= $phone_in_header ?>
                    </a>

                    <!-- site__min-menu -->
                    <ul class="site__min-menu">
                        <li>
                            <a class="site__min-menu-link" href="<?= get_the_permalink(87) ?>"><?= get_the_title(87) ?></a>
                        </li>
                        <li>
                            <a class="site__min-menu-link" href="<?= get_the_permalink(85) ?>"><?= get_the_title(85) ?></a>
                        </li>
                    </ul>
                    <!-- /site__min-menu -->

                    <!-- social-networks -->
                    <div class="social-networks">
                        <span>follow us:</span>

                        <?php if($lik = get_field('facebook_link','options')): ?>

                        <a target="_blank" href="<?= $lik; ?>" class="social-networks__item">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" width="512px" height="512px" viewBox="0 0 96.124 96.123" style="enable-background:new 0 0 96.124 96.123;" xml:space="preserve">
                                    <g>
                                        <path d="M72.089,0.02L59.624,0C45.62,0,36.57,9.285,36.57,23.656v10.907H24.037c-1.083,0-1.96,0.878-1.96,1.961v15.803   c0,1.083,0.878,1.96,1.96,1.96h12.533v39.876c0,1.083,0.877,1.96,1.96,1.96h16.352c1.083,0,1.96-0.878,1.96-1.96V54.287h14.654   c1.083,0,1.96-0.877,1.96-1.96l0.006-15.803c0-0.52-0.207-1.018-0.574-1.386c-0.367-0.368-0.867-0.575-1.387-0.575H56.842v-9.246   c0-4.444,1.059-6.7,6.848-6.7l8.397-0.003c1.082,0,1.959-0.878,1.959-1.96V1.98C74.046,0.899,73.17,0.022,72.089,0.02z" fill="#FFFFFF"/>
                                    </g>
                                </svg>
                        </a>
                        <?php endif;
                        if($lik = get_field('twitter_link','options')):
                        ?>
                        <a target="_blank" href="<?= $lik; ?>" class="social-networks__item">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" width="512px" height="512px" viewBox="0 0 430.117 430.117" style="enable-background:new 0 0 430.117 430.117;" xml:space="preserve">
                                    <g>
                                        <path d="M381.384,198.639c24.157-1.993,40.543-12.975,46.849-27.876   c-8.714,5.353-35.764,11.189-50.703,5.631c-0.732-3.51-1.55-6.844-2.353-9.854c-11.383-41.798-50.357-75.472-91.194-71.404   c3.304-1.334,6.655-2.576,9.996-3.691c4.495-1.61,30.868-5.901,26.715-15.21c-3.5-8.188-35.722,6.188-41.789,8.067   c8.009-3.012,21.254-8.193,22.673-17.396c-12.27,1.683-24.315,7.484-33.622,15.919c3.36-3.617,5.909-8.025,6.45-12.769   C241.68,90.963,222.563,133.113,207.092,174c-12.148-11.773-22.915-21.044-32.574-26.192   c-27.097-14.531-59.496-29.692-110.355-48.572c-1.561,16.827,8.322,39.201,36.8,54.08c-6.17-0.826-17.453,1.017-26.477,3.178   c3.675,19.277,15.677,35.159,48.169,42.839c-14.849,0.98-22.523,4.359-29.478,11.642c6.763,13.407,23.266,29.186,52.953,25.947   c-33.006,14.226-13.458,40.571,13.399,36.642C113.713,320.887,41.479,317.409,0,277.828   c108.299,147.572,343.716,87.274,378.799-54.866c26.285,0.224,41.737-9.105,51.318-19.39   C414.973,206.142,393.023,203.486,381.384,198.639z" fill="#FFFFFF"/>
                                    </g>
                                </svg>
                        </a>
                        <?php endif;
                        if($lik = get_field('instagram_link','options')):
                        ?>
                        <a target="_blank" href="<?= $lik; ?>" class="social-networks__item social-networks__item_instagram">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" width="512px" height="512px" viewBox="0 0 169.063 169.063" style="enable-background:new 0 0 169.063 169.063;" xml:space="preserve">
                                <g>
                                    <path d="M122.406,0H46.654C20.929,0,0,20.93,0,46.655v75.752c0,25.726,20.929,46.655,46.654,46.655h75.752   c25.727,0,46.656-20.93,46.656-46.655V46.655C169.063,20.93,148.133,0,122.406,0z M154.063,122.407   c0,17.455-14.201,31.655-31.656,31.655H46.654C29.2,154.063,15,139.862,15,122.407V46.655C15,29.201,29.2,15,46.654,15h75.752   c17.455,0,31.656,14.201,31.656,31.655V122.407z" fill="#FFFFFF"/>
                                    <path d="M84.531,40.97c-24.021,0-43.563,19.542-43.563,43.563c0,24.02,19.542,43.561,43.563,43.561s43.563-19.541,43.563-43.561   C128.094,60.512,108.552,40.97,84.531,40.97z M84.531,113.093c-15.749,0-28.563-12.812-28.563-28.561   c0-15.75,12.813-28.563,28.563-28.563s28.563,12.813,28.563,28.563C113.094,100.281,100.28,113.093,84.531,113.093z" fill="#FFFFFF"/>
                                    <path d="M129.921,28.251c-2.89,0-5.729,1.17-7.77,3.22c-2.051,2.04-3.23,4.88-3.23,7.78c0,2.891,1.18,5.73,3.23,7.78   c2.04,2.04,4.88,3.22,7.77,3.22c2.9,0,5.73-1.18,7.78-3.22c2.05-2.05,3.22-4.89,3.22-7.78c0-2.9-1.17-5.74-3.22-7.78   C135.661,29.421,132.821,28.251,129.921,28.251z" fill="#FFFFFF"/>
                                </g>
                            </svg>
                        </a>
                        <?php endif;  ?>
                    </div>
                    <!-- /social-networks -->

                </div>
                <!-- /site__menu -->

            </div>
            <!-- /site__header-layout -->

        </header>
        <!-- /site__header -->    
    
