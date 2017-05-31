<footer>
    <div class="row">
        <div class="col-xs-12 col-sm-6">
            <h4>inscription à la newsletter</h4>
            <form method="post">
                <input type="email" name="email">
                <?php
                    if (isset($_POST['email'])) {
                        $wpdb->insert( 'form',  array(   'email' => $_POST['email'])
                                        );
                    } ?>
                <button type="submit" name="button">Envoyer</button>
            </form>
        </div>
        <div class="col-xs-12 col-sm-6">

        <h4>agenda</h4>
        <p>Auncun événememnt</p>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-3">
            <img src="wp-content/themes/wp-polen/static/img/polenfoot.jpg" alt="Polen">
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3">
            <h5> Pôle Lozérien d'Economie Numérique</h5>
            <p>Rue du Gévaudan
            48000 Mende
            Tel : 04 66 45 33 00 - Fax : 04 66 45 33 00
            Email : contact@lozere-developpement.com </p>
        </div>
        <div class="col-xs-12 col-md-6">
            <img src="wp-content/themes/wp-polen/static/img/polenfinanceurs.jpg" alt="">
        </div>
    </div>
</footer>

<script src="<?php echo get_stylesheet_directory_uri().'/static/external/jquery/dist/jquery.min.js' ; ?>"></script>
<script src="<?php echo get_stylesheet_directory_uri().'/static/external/bootstrap/dist/js/bootstrap.min.js'; ?>"></script>
</body>
</html>
