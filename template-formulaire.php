<?php

/**
 * Template Name: template formulaire
 *
 */
?>

<section class="code">
    <div class="informations">
        <h4>Vos informations</h4>

        <?php echo do_shortcode('[contact-form-7 id="322" title="Vos informations"]'); ?>
    </div>

    <div class="divider2"></div>

    <div class="livraison">
        <h4>Livraison</h4>
        <?php echo do_shortcode('[contact-form-7 id="324" title="Livraison"]'); ?>
    </div>

</section>
<div class="bouton-commander">
    <p><input type="submit" value="Commander"></p>
</div>