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
<h2>Jeżeli jesteś zainteresowany współpracą, zapraszam do kontaktu</h2>
  <div class="row">
    <div class="col-6">
      <p>Zadzwoń: 505 015 696</p>
      <p>Napisz: roksana.dzioba@gmail.com</p>
    </div>
    <div class="col-6">
      <p class="form-start">Skontaktuj się poprzez formularz:</p>
      <?php echo do_shortcode('[contact-form-7 id="37" title="Contact form 1"]'); ?>
    </div>
  </div>
</div>

<?php
get_footer();