<!DOCTYPE html>

<html class="no-js" lang="fr-FR">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Syne&display=swap" rel="stylesheet">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php

    /**
     * Template Name: template commander
     *
     */
    get_header();
    ?>

    <?php the_content(); ?>

    <main id="template">
        <h3>Commander</h3>

        <div class="divider"></div>

        <h4>Votre commande</h4>

        <section class="container">
            <div class="card-fruits">
                <div class="card-fruits_item">
                    <img src="<?= get_stylesheet_directory_uri() . "/images/Fraise-texte.png" ?>">
                    <div class="boutons">
                        <input type="button" value="0">
                        <div class="bouton-chiffres">
                            <input type="button1" value="+">
                            <input type="button2" value="-">
                        </div>
                        <div class="ok">
                            <input class="bouton-ok" type="button" value="OK">
                        </div>
                    </div>

                </div>
                <div class="card-fruits_item">
                    <img src="<?= get_stylesheet_directory_uri() . "/images/Pamplemousse-texte.png" ?>">
                    <div class="boutons">
                        <input type="button" value="0">
                        <div class="bouton-chiffres">
                            <input type="button1" value="+">
                            <input type="button2" value="-">
                        </div>
                        <div class="ok">
                            <input class="bouton-ok" type="button" value="OK">
                        </div>
                    </div>
                </div>


                <div class="card-fruits_item">
                    <img src="<?= get_stylesheet_directory_uri() . "/images/Framboise-texte.png" ?>">
                    <div class="boutons">
                        <input type="button" value="0">
                        <div class="bouton-chiffres">
                            <input type="button1" value="+">
                            <input type="button2" value="-">
                        </div>
                        <div class="ok">
                            <input class="bouton-ok" type="button" value="OK">
                        </div>
                    </div>
                </div>

                <div class="card-fruits_item">
                    <img src="<?= get_stylesheet_directory_uri() . "/images/Citron-texte.png" ?>">
                    <div class="boutons">
                        <input type="button" value="0">
                        <div class="bouton-chiffres">
                            <input type="button1" value="+">
                            <input type="button2" value="-">
                        </div>
                        <div class="ok">
                            <input class="bouton-ok" type="button" value="OK">
                        </div>
                    </div>
                </div>
            </div>
            <div>


        </section>


        <div class="divider"></div>


        <?php echo do_shortcode('[contact-form-7 id="e53fc3b" title="Livraison"]'); ?>

        </section>


    </main><!-- #site-content -->


    <?php get_template_part('template-parts/footer-menus-widgets'); ?>

    <?php
    get_footer();
    ?>