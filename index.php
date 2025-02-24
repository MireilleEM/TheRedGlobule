<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <!--informations-->
        <title>TheRedGlobule</title>
        <link rel="icon" href="images/favicon2.ico" type="image/x-icon">
        <link rel="stylesheet" href="design/style.css">
        <!--pour naviguer , on veut sortir du dossier ../-->
        <!--comme si on met rien,on veut reste dans le dossier ./-->
        <!-- <style>
            img{
                width:100%;
                propriété:valeur;
            }
            a,li{
                color:orange
            }
        </style>-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&amp;display=swap" rel="stylesheet">  
    <!--exemple de commentaire-->
    <!-- pour que ça s'affiche bien sur les mobiles -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- cartes sociales -->
        <meta name="og:title" content="Le globule rouge">
        <meta name="og:description=" content="Site de vente des dessins de Ninouille">
    <!--il faut une image absolue-->
        <meta name="og:image" content="https://unsplash.com/fr/photos/collection-de-livres-assortis-RhGK4qOwxxw">
        <meta name="og:url" content="https://67aa1e609c4abc7ef3bfe78d--theredglobule.netlify.app/">
        <meta name="og:site_name" content="Le globule rouge qui dessine">
        <meta name="og:image:alt" content="Un site qui s'appelle le globule rouge et qui vend des dessins">       
    </head>
    <body>
        <!--en tête--> 
        <section id="bienvenue">
            <div class="conteneur">
                <header>
                    <span>The Red<br/> Globule</span> 
                    <span id="slogan">Les tribulations d'un globule rouge</span>
                </header>
            </div>
        </section> 
            <!--<img src="images/oeil tres long.png" alt="affiche portes ouvertes"> on peut rajouter style="width:100%"-->
            <!--contenu-->
        
        <section class="contenu conteneur"> 
        <div id="mail">
                <h1>Contactez-nous</h1>
                <p>Pour toute demande remplissez le fomulaire ci-dessous</p>
                <form method="post">
                    <input type="text" name="nom" placeholder="Nom" required>
                    <input type="email" name="email" placeholder="Email"  required>
                    <input type="text" name="sujet" placeholder="Sujet"  required>
                    <textarea name="message" placeholder="message" required></textarea>
                    <input type="submit" value="Envoyer le message">
                </form>
<!--$retour= mail('mireille-emonot@orange.fr', 'MonSujet', 'MonMessage','From:contact@vetopia.fr');-->
                <?php
                //si le formulaire a été soumis
                if(isset($_POST['message'])){
                    $message = 'Ce message vous a été envoyé via le site Vetopia.fr
                    Nom:'.$_POST['nom'].'
                    Email:'.$_POST['email'].'
                    Message:'.$_POST['message'];

                    $retour= mail('suivi.vetopia@gmail.com', $_POST['sujet'], $message,'From:contact@vetopia.fr'.'\r\n'.'Reply-to:'.$_POST['email']);
                    if ($retour) {
                            echo '<p>Votre message a été envoyé.</p>';
                    }
                }
                ?>
            </div>
            <h1>Le Top 4 de <b id="mot">Ninon</b></h1>
            <h2 class="accent">Selectionnez une catégorie pour en savoir +</h2>
            
            <section class="cartes">
                <a href="" id="dessin1" class="carte_dessin"><p>Affiches</p></a>
                <a href="" id="dessin2" class="carte_dessin"><p>Dessins</p></a>
                <a href="" id="dessin3" class="carte_dessin"><p>Portraits</p></a>
                <a href="" id="dessin4" class="carte_dessin"><p>Numérique</p></a>
            </section>
            <div style="text-align: right; margin-top: 16px">
                <a id="plus" href="">Autres catégories<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><path fill="currentColor" d="m12 16l4-4l-4-4l-1.4 1.4l1.6 1.6H8v2h4.2l-1.6 1.6zm0 6q-2.075 0-3.9-.788t-3.175-2.137T2.788 15.9T2 12t.788-3.9t2.137-3.175T8.1 2.788T12 2t3.9.788t3.175 2.137T21.213 8.1T22 12t-.788 3.9t-2.137 3.175t-3.175 2.138T12 22m0-2q3.35 0 5.675-2.325T20 12t-2.325-5.675T12 4T6.325 6.325T4 12t2.325 5.675T12 20m0-8"/></svg></a>
            </div>
            <!--Hello World !<br/>
            Bonjours l'univers
            <p><b>Bienvenue </b>sur <i>mon </i><u>site</u></p>-->
            <!--on peut aussi avoir strong à la place de bolt, veut dire que c'est un mot important-->
        
        
        <footer>
          <div class="conteneur" id="flex-footer">
            <nav>
                <ul>
                    <li><a class="accent" href="index.html">Accueil</a></li>
                    <li><a class="accent" href="test/aPropos.html">A propos</a></li>
                </ul>
            </nav>  
            <div id="logo_footer">      
             <img src="images/logo.png" alt="logo de dessin" style="width: 40px; border-radius: 40px;"></img>
             <span id="copyright">2025 © The Red Globule</span>
            </div>
         </div>  
        </footer>
    </body>
</html>
