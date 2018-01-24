<?php if ( ! defined( 'ABSPATH' ) ) { exit; } ?>

<?php

if ( is_front_page() ) :

    $banners = get_banner_all();

endif;
?>

<?php if(!empty($banners)) :  ?>

<section id="banner-carousel" class="container-fluid carousel slide" data-ride="carousel">
        
        <div id="home-banners" class="row">
            <div id="banner-list" class="carousel-inner" role="listbox">
               
                <?php $i=0; foreach($banners as $banner) :?>
                    <div class="item <?php if($i==0){ echo 'active';}?>">
                    <?php 
                    $banner_link = get_post_meta($banner->ID, '_url', true);
                    if($banner_link!=""){ ?>
                        <a href="<?=$banner_link?>">
                            <?=get_the_post_thumbnail($banner->ID)?>
                        </a>
                    <?php }else{?>
                        <?=get_the_post_thumbnail($banner->ID)?>
                    <?php }?>
                    </div>
                <?php $i++; endforeach;?>
                
            </div>

            <ol class="carousel-indicators">
               
                <?php $i=0; foreach($banners as $banner) :?>
                    <li data-target="#banner-carousel" data-slide-to="<?=$i?>" <?php if($i==0){ echo 'class="active"';}?>></li>
                <?php $i++; endforeach;?>
                
            </ol>

            <a class="left carousel-control" href="#banner-carousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#banner-carousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        
        <div class="clear"></div>
</section>

<?php endif;?>