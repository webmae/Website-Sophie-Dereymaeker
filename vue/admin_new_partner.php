<!DOCTYPE html>
<html lang="fr">
<?php include "admin_header.php"; ?>
<!--je ferme la balise là ici au cas où vous souhaitier rajouter un truc (exemple : un fichier javascript) qui ne devrait pas être présent sur toutes les pages admin.-->
</head>
<body>

<div id="wrapper">

    <?php include "admin_menu.php"; ?>

    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <!--BOUTON A NE PAS SUPPRIMER-->
                    <a href="#menu-toggle" class="visible-xs btn btn-default" id="menu-toggle">Accéder au menu</a>
                    <h1><?= $titre ?></h1>
                    <div class="alert alert-danger" role="alert"><strong>Attention</strong> : c'est mieux d'insérer une image qui a l'extension .jpg ou .jpeg. <br/>Les formats .gif ou .png ne sont pas supportés sur cette administration.</div>
                    <?php if ($affiche_insertion) {

                        ?>
                        <form class="well" enctype="multipart/form-data" action="" name="miam" method="POST">

                            <div class="form-group"><label>Titre</label>
                                <input class="form-control" type="text" name="titrephoto" placeholder="Titre de la peinture" required/>
                            </div>


                            <div class="form-group"><label>lien</label>
                                <input class="form-control" type="text" name="url" placeholder="lien partenaire"
                                       required/>
                            </div>

                            <div class="form-group"> <label>Ici, je choisis l'image que je veux importer :</label><input class="btn btn-default" type="FILE" name="oeuvre"/></div>

                            <input class="btn btn-success" name="inserer" type="submit" value="Insérer"/><br/>

                        </form>
                        <?php
                    }

                    if ($affiche_success) {
                        ?>
                        <h2>Félicitations ! Nouveau partenaire ajouté !</h2>
                        <p><a class="btn btn-success btn-xs" href="javascript:history.go(-2)">Retour</a> - <a class="btn btn-success btn-xs" href="?nouveau_partner">Ajouter une nouveau partenaire</a></p>
                        <?php
                    } ?>
                </div>
            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="vue/js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="vue/js/bootstrap.min.js"></script>
<!-- Menu Toggle Script -->
<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>
</body>
</html>


