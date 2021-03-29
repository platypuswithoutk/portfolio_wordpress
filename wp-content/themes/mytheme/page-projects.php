<?php
/*
*
* Template Name: Projekty
*
*/
?>

<?php get_header(); ?>

<section class="all-projects">
    <div class="container">
        <div class="row commercial">
            <div class="section_title"><h2>Projekty komerycjne</h2></div>
            <div class="col-12">
                <div class="projects__item">
                    <ul class="portfolio_items">
                        <li class="portfolio_card" id="smart">
                            <figure>
                                <a href="https://smartelectric.pl/"><img class="img" src="<?php echo get_template_directory_uri(); ?>/assets/img/smart1.png'; ?>" alt="I am an example of a work image"></a>
                            </figure>
                            <div class="caption">
                                <a href="https://smartelectric.pl/" target="_blank" title="Smart Electric" aria-describedby="desc-smart"><h3>Weather App</h3></a>
                                <p>Strona interentowa dla firmy Smart Electric</p>
                                <span class="cta" aria-hidden="true" id="desc-smart">Przejdź na stronę internetową</span>
                            </div>
                        </li>
                        <li class="portfolio_card" id="april">
                        <figure>
                            <a href="http://aprildevelopment.milleniumhost.pl/"><img class="img" src="<?php echo get_template_directory_uri(); ?>/assets/img/april.png'; ?>" alt="April Development"></a>
                        </figure>
                        <div class="caption">
                            <a href="http://aprildevelopment.milleniumhost.pl/" target="_blank" title="April Development" aria-describedby="desc-april"><h3>April Development</h3></a>
                            <p>Strona interentowa dla firmy April Development</p>
                            <span class="cta" aria-hidden="true" id="desc-april">Przejdź na stronę internetową</span>
                        </div>
                    </li>
                        
                    </ul>   
                </div>
            </div>
            <div class="col-12">
                <div class="projects__item">
                    <ul class="portfolio_items">
                    <li class="portfolio_card" id="rehabilitacja">
                            <figure>
                                <a href="rehabilitacja-kr.pl "><img class="img" src="<?php echo get_template_directory_uri(); ?>/assets/img/covid(2).png'; ?>" alt="Rehabilitacja Covid"></a>
                            </figure>
                            <div class="caption">
                                <a href="rehabilitacja-kr.pl" target="_blank" title="Rehabilitacja Covid" aria-describedby="desc-rehabilitacja"><h3>Rehabilitacja Covid</h3></a>
                                <p>Strona interentowa dla firmy oferującej rehabilitację oddechową</p>
                                <span class="cta" aria-hidden="true" id="desc-rehabilitacja">Przejdź na stronę internetową</span>
                            </div>
                        </li>
                    <li class="portfolio_card" id="portfolio">
                        <figure>
                            <a href="https://platypuswithoutk.github.io/portfolio/"> <img class="img" src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio1.png'; ?>" alt="I am an example of a work image"></a>
                        </figure>
                        <div class="caption">
                            <a href="https://platypuswithoutk.github.io/portfolio/" target="_blank" title="portfolio" aria-describedby="desc-portfolio"><h3>Stare portfolio</h3></a>
                            <p>Moje dawne portfolio używane do celów rekrutacyjnych w zeszłym roku</p>
                            <span class="cta" aria-hidden="true" id="desc-portfolio">Przejdź na stronę internetową</span>
                        </div>
                    </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row private">
            <div class="section_title no"><h2>Projekty niekomerycjne</h2></div>
            <div class="col-12">
                <div class="projects__item">
                    <ul class="portfolio_items">
                        <li class="portfolio_card" id="weather">
                            <figure>
                                <a href="https://platypuswithoutk.github.io/weather_APP/"><img class="img" src="<?php echo get_template_directory_uri(); ?>/assets/img/weatherapp.png'; ?>" alt="I am an example of a work image"></a>
                            </figure>
                            <div class="caption">
                                <a href="https://platypuswithoutk.github.io/weather_APP/" target="_blank" title="Smart Electric" aria-describedby="desc-smart"><h3>Weather App</h3></a>
                                <p>Aplikacja informująca o aktualnej pogodzie oraz prognozie na kolejne dni</p>
                                <span class="cta" aria-hidden="true" id="desc-smart">Przejdź na stronę internetową</span>
                            </div>
                        </li>
                        <li class="portfolio_card" id="react">
                            <figure>
                                <a href="https://platypuswithoutk.github.io/react-quizApp/ "><img class="img" src="<?php echo get_template_directory_uri(); ?>/assets/img/react.png'; ?>" alt="Rehabilitacja Covid"></a>
                            </figure>
                            <div class="caption">
                                <a href="https://platypuswithoutk.github.io/react-quizApp/" target="_blank" title="Rehabilitacja Covid" aria-describedby="desc-rehabilitacja"><h3>React Quiz</h3></a>
                                <p>Quiz sprawdzający wiedzę o Reakcie</p>
                                <span class="cta" aria-hidden="true" id="desc-rehabilitacja">Przejdź na stronę internetową</span>
                            </div>
                        </li>
                    </ul>   
                </div>
            </div>
            </div>

        </div>
    </div>

</section>


<?php
get_footer();