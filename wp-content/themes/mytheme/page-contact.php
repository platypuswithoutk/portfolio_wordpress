<?php
/*
*
* Template Name: Kontakt
*
*/
?>

<?php
get_header();
?>

<div class="container" id="contact">
<h2>Zapraszam do kontaktu</h2>
  <div class="row">
    <div class="col-6">
      <p>Zadzwoń: 505 015 696</p>
      <p>Napisz: roksana.dzioba@gmail.com</p>
    </div>
    <div class="col-6">
      <p>Skontaktuj się poprzez formularz:</p>
      <?php echo do_shortcode('[name_of_shortcode]'); ?>
    </div>
  </div>
</div>

<?php
get_footer();