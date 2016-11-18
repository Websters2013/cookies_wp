<?php if( have_rows('slider_block') ): ?>

    <!-- hero -->
    <div class="hero">

        <div class="slick-container">

         <?php    while ( have_rows('slider_block') ) : the_row(); 
             
             $link = get_sub_field('link_learn_more');
             $image = get_sub_field('choose_the_image_for_slide');

             ?>

             <div class="slick-container__slide" style="background-image: url(<?= $image; ?>)">
                 <div>
                 <!-- hero__info -->
                 <div class="hero__info">

                     <h2 class="hero__title"><?php the_sub_field('text_block') ?></h2>
                    <?php if($link): ?>
                     <a href="<?= $link; ?>" class="btn">learn more</a>
                    <?php endif; ?>
                 </div>
                 <!-- /hero__info -->

                </div>
             </div>

                <?php

            endwhile; ?>

        </div>

            <!-- hero__down -->
            <a href="#" class="hero__down">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 21.825 21.825" style="enable-background:new 0 0 21.825 21.825;" xml:space="preserve" width="512px" height="512px">
                        <path d="M16.791,13.254c0.444-0.444,1.143-0.444,1.587,0c0.429,0.444,0.429,1.143,0,1.587l-6.65,6.651  c-0.206,0.206-0.492,0.333-0.809,0.333c-0.317,0-0.603-0.127-0.81-0.333l-6.65-6.651c-0.444-0.444-0.444-1.143,0-1.587  s1.143-0.444,1.587,0l4.746,4.762V1.111C9.791,0.492,10.299,0,10.918,0c0.619,0,1.111,0.492,1.111,1.111v16.904L16.791,13.254z" fill="#FFFFFF"/>
                    </svg>
                </span>
            </a>
            <!-- /hero__down -->

    </div>
    <!-- /hero -->
    
     <?php  endif; ?>