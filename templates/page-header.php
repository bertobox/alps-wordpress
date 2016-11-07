<?php use Roots\Sage\Titles; ?>
<?php
  if (!empty(get_field('header_background_image'))):
    $bg_image = get_field('header_background_image');
?>
  <style type="text/css">
    .header-swath--with-image {
      background-image: url(<?php echo $bg_image['sizes']['featured__hero--m']; ?>);
    }
    @media (min-width: 800px) {
      .header-swath--with-image {
        background-image: url(<?php echo $bg_image['sizes']['featured__hero--l']; ?>);
      }
    }
    @media (min-width: 1100px) {
      .header-swath--with-image {
        background-image: url(<?php echo $bg_image['sizes']['featured__hero--xl']; ?>);
      }
    }
  </style>
<?php endif; ?>

<header class="header__swath theme--primary-background-color blend-mode--multiply <?php if (isset($bg_image)): echo "header-swath--with-image"; endif; ?> <?php if(get_field('header_block_text') == true): echo "header-swath--with-text"; endif; ?>">
  <div class="layout-container cf">
    <?php if(get_field('header_block_text') == true): ?>
      <div class="header__text">
        <div class="unify show-at--small">
          <h2 class="font--secondary--l upper white"><?php echo the_field('header_block_title'); ?></h2>
          <?php if(get_field('header_block_subtitle')): ?>
            <h3 class="font--secondary--m white--trans"><?php echo the_field('header_block_subtitle'); ?></h3>
          <?php endif; ?>
        </div>
        <?php if(get_field('header_block_image')): ?>
          <?php $image = get_field('header_block_image'); ?>
          <div class="header__logo">
            <img src="<?php echo $image[sizes]['thumbnail']; ?>" width="80" height="80">
          </div>
        <?php endif; ?>
      </div> <!-- /.header__text -->
    <?php endif; ?>
    <div class="flex-container cf">
      <div class="shift-left--fluid">
        <?php if (get_field('kicker') && !is_category() && !is_home()): ?>
          <span class="kicker white"><?php echo the_field('kicker'); ?></span>
        <?php endif; ?>
        <h1 class="font--tertiary--xl white">
          <?php if (get_field('display_title') && is_page_template('template-single.php')): ?>
            <?php echo the_field('display_title'); ?>
          <?php else: ?>
            <?php echo Titles\title(); ?>
          <?php endif; ?>
        </h1>
        <?php //print_r($post); ?>
      </div>
      <div class="shift-right--fluid"></div> <!-- /.shift-right--fluid -->
    </div>
  </div>
</header> <!-- /.header__swath -->
