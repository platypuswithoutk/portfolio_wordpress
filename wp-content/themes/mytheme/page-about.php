<?php
/*
*
* Template Name: O mnie
*
*/
?>

<?php
get_header();
?>
<section id="about">
    <div class="row">
      <div class="col-12">
        <h1><?php the_title(); ?></h1>
        <div><?php the_content(); ?></div>
      </div>
    </div>
</section>
<?php
get_footer();