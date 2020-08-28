<?php
get_header();
while(have_posts()){
the_post();?>


<div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('images/ocean.jpg') ?>);"></div>
    <div class="page-banner__content container container--narrow">
      <h1 class="page-banner__title"><?php  the_title() ;?></h1>
      <div class="page-banner__intro">
        <p>Dont forget to replace me later</p>
      </div>
    </div>  
  </div>

  <div class="container container--narrow page-section">
  <?php

  //whenever begins with get its not going to echo anything 
  //if begins with the it will echo for u
  // the_title();
  // get_the_title();
  // get_the_ID();
  // the_ID();

  // codex.wordpress.org
  // developer.wordpress.org
//echo get_the_ID(); to get id of current page
//echo wp_get_post_parent_id(get_the_ID()); //get the id of currennt page and look after its parent page



$theParent=wp_get_post_parent_id(get_the_ID());
if($theParent){ ?>
  <div class="metabox metabox--position-up metabox--with-home-link">
      <p><a class="metabox__blog-home-link" href="<?php echo get_permalink($theParent) ?>"><i class="fa fa-home" aria-hidden="true"></i> Back to <?php echo  get_the_title($theParent); ?></a> <span class="metabox__main"><?php the_title()?></span></p>
    </div>
<?php } 
?>


  <?php 
  $testArray = get_pages(array(    //returns pages in a memory
    'child_of'=> get_the_ID()
  )); 
  
  if($theParent or $testArray){ ?>
    
    <div class="page-links">
      <h2 class="page-links__title"><a href="<?php echo get_permalink($theParent);?>"><?php echo get_the_title($theParent);?></a></h2>
      <ul class="min-list">
    <?php
    if ($theParent) {
      $findChildrenOf=$theParent;

    }else{
      $findChildrenOf=get_the_ID();
    }
    wp_list_pages(array(
      'title_li'=> NULL,
      'child_of'=> $findChildrenOf,
      'sort_column'=>'menu_order',

    )); //associative array

    ?>
      </ul>
    </div>

    <div class="generic-content">
        <?php the_content();?>
      </div>

  </div>

  <?php }?>
<?php
the_content();
?>

<?php
}

get_footer();
?>