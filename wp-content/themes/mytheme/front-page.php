<?php
/*
*
* Template Name: Strona glówna
*
*/
?>

<?php get_header(); ?>
<main id="front-page">
  <div class="container">
    <div class="row" id="front-page-introduction">
      <div class="col-xl-6 col-lg-6 col-md-12 col-12" id="col-introdution">
        <h1><span>R</span>oksana <span>D</span>zioba</h1>
        <h2>Front-end Developer</h2>
        <button class="top__btn">
          <a href="" class="btn btn4">Zobacz moje projekty</a>
        </button>
      </div>

      <div class="col-xl-6 col-lg-6 col-md-12 col-12">
        <div class="front-page_img">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/vectorstock_20002111.png'; ?>" alt="logo">
        </div>
      </div>
    </div>
  </div>
</main>
<?php
get_footer();