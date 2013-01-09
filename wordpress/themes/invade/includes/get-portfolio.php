<?php
	if(file_exists('../../../../wp-load.php')) :
		include '../../../../wp-load.php';
	else:
		include '../../../../../wp-load.php';
	endif;

	ob_flush();

    if(isset($_POST['slug'])){
        if($_POST['slug']=='all'){
            $slug = "";
        }else{
            $slug = $_POST['slug'];
        }

    }else{
        $slug = "";
    }
    if(isset($_POST['offset'])){
        $offset = $_POST['offset'];
    }else{
        $offset = "";
    }


?>
<?php
	query_posts(array(
        'posts_per_page' => '10',
		'post_type' => 'portfolio',
		'portfolio-type' => $slug,
        'offset' => $offset
	)); 
?>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <?php

            $image[]  = array();
            $image[0] = get_post_meta(get_the_ID(), 'tj_portfolio_image1', TRUE);
            $image[1] = get_post_meta(get_the_ID(), 'tj_portfolio_image2', TRUE);
            $image[2] = get_post_meta(get_the_ID(), 'tj_portfolio_image3', TRUE);
            $image[3] = get_post_meta(get_the_ID(), 'tj_portfolio_image4', TRUE);
            $image[4] = get_post_meta(get_the_ID(), 'tj_portfolio_image5', TRUE);

            $src = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), array( '9999','9999' ), false, '' );

            $type = get_post_meta(get_the_ID(), 'tj_protfolio_thumb_type', TRUE);

        ?>

            <li class="item" data-type="<?php
                                $terms = get_the_terms( get_the_ID(), 'portfolio-type' );
                                if(is_array($terms)){
                                    foreach ($terms as $term){
                                        echo 'cat-item-'.$term->term_id.' ';
                                    }
                                }
                            ?>" data-id="id-<?php the_ID();?>" >


                <div class="image-wrap">

                    <div class="entry-meta">
                        <h2 class="entry-title">
                            <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                        </h2>

                        <?php $terms = get_the_terms( get_the_ID(), 'portfolio-type' ); ?>
                        <?php if(is_array($terms)){?>
                        <ul class="entry-type">
                            <?php foreach ($terms as $term) :  ?>
                                <li><?php echo $term->name; ?> / </li>
                            <?php endforeach; ?>
                        </ul>
                        <?php } else { ?>
                    
                        <?php }?> 
                    </div>

                <?php if ( $src[0] ) : ?>

                    <?php if ( $type=='wide' ): ?>
                        <a style="width:525px;height:160px;" class="thumb" href="<?php echo $src[0]; ?>" rel="prettyPhoto[<?php the_ID();?>]">
                        <?php the_post_thumbnail('thumb-wide', array('class' => 'entry-thumb-wide')); ?>
                            <div class="overly"><b></b></div>
                        </a>
                    <?php elseif( $type=='high' ): ?>
                        <a style="width:260px;height:325px;" class="thumb" href="<?php echo $src[0]; ?>" rel="prettyPhoto[<?php the_ID();?>]">
                        <?php the_post_thumbnail('thumb-high', array('class' => 'entry-thumb-high')); ?>
                            <div class="overly"><b></b></div>
                        </a>
                    <?php else: ?>
                        <a style="width:260px;height:160px;" class="thumb" href="<?php echo $src[0]; ?>" rel="prettyPhoto[<?php the_ID();?>]">
                        <?php the_post_thumbnail('thumb-normal', array('class' => 'entry-thumb-normal')); ?>
                            <div class="overly"><b></b></div>
                        </a>
                    <?php endif; ?>
                        

                <?php endif; ?>

                <?php
                    for($i=0; $i<5; $i++) { 
                        if($image[$i]!='') { 
                ?>
                            <a title="<?php the_title();?>" href="<?php echo $image[$i]; ?>" rel="prettyPhoto[<?php the_ID();?>]"></a>
                <?php
                        }//end if
                    }//end for
                ?>

                </div>

            </li>

        
    <?php endwhile; endif; ?>

<?php ob_end_flush(); ?>