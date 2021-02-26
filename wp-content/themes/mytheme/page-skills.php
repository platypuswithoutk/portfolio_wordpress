<?php
/*
*
* Template Name: Umiejętności
*
*/
?>

<?php get_header(); ?>

<section id="skills">
    <div class="row">
      <div class="col-12">
        <h1><?php the_title(); ?></h1>

        <h2>Projekty komerycjne</h2>
        <div class="projects__item">
            <ul class="portfolio_items">
                <li class="portfolio_card" id="centrica">
                    <figure><img class="img" src="https://via.placeholder.com/544x361.png" alt="I am an example of a work image"></figure>
                    <div class="caption">
                        <a href="http://www.arthaus.co.uk" target="_blank" title="Centrica" aria-describedby="desc-centrica"><h2>Centrica</h2></a>
                    <p>Creating an innovative internal business platform</p>
                        <span class="cta" aria-hidden="true" id="desc-centrica">Explore the work > </span>
                    </div>
                </li>
                <li class="portfolio_card" id="diageocoupa">
                    <figure><img class="img" src="https://via.placeholder.com/544x361.png" alt="I am an example of a work image"></figure>
                    <div class="caption">
                        <a href="http://www.arthaus.co.uk" target="_blank" title="Diageo Coupa" aria-describedby="desc-diageocoupa"><h2>Diageo Coupa</h2></a>
                    <p>Helping employees boost their skills on the job</p>
                        <span class="cta" aria-hidden="true" id="desc-diageocoupa">Explore the work > </span>
                    </div>
                </li>
            </ul>   
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-12">
        <h2>Projekty niekomerycjne</h2>
        <div class="projects__item">

        </div>
      </div>
    </div>
</section>


<?php
get_footer();