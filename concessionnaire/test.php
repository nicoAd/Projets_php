<?php 
    require_once('connex.php'); 
    require_once('partials/header.php'); 
?>

   <div class="container">
   <a href="ajout.php" class="btn btn-warning text-white mt-2"><i class="fa fa-plus-circle"></i> Ajouter</a>
   <h2>Liste de voitures</h2>
        <table class="table table-striped" id="example">
            <thead>
                <tr class="thead-dark">
                    <th>ID</th>
                    <th>MARQUE</th>
                    <th>MODELE</th>
                    <th>PAYS</th>
                    <th>URL</th>
                    <th>DESCRIPTION</th>
                    <th class="text-center">ACTIONS</th>
                </tr>
            </thead>
            <tbody>
              <?php
                require_once('connex.php');
                $req = 'SELECT * FROM voiture ORDER BY id ';
                $res = mysqli_query($connect, $req);
                while($donnees = mysqli_fetch_assoc($res)){
              ?>
                <tr>
                    <td><?php echo $donnees['id']; ?></td>
                    <td><?php echo $donnees['marque']; ?></td>
                    <td><?php echo $donnees['modele']; ?></td>
                    <td><?php echo $donnees['pays']; ?></td>
                    <td><?php echo $donnees['description']; ?></td>
                    <td><img src="images/<?php echo $donnees['image']; ?>" width=50 height=50 ></td>
                    <td>
                       <a href="editer.php?id=<?php echo $donnees['id']; ?>" class="btn btn-primary"><i class="fa fa-pencil"></i> Editer</a>
                       <a onclick="return confirm('Etes vous sur.....');" href="supprimer.php?id=<?php echo $donnees['id']; ?>" class="btn btn-danger "><i class="fa fa-trash"></i> Supprimer</a>

                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
   </div>
    <script>
        $('table').DataTable( {
            language: {
                processing:     "Traitement en cours...",
                search:         "Rechercher&nbsp;:",
                lengthMenu:    "Afficher _MENU_ &eacute;l&eacute;ments",
                info:           "Affichage de l'&eacute;lement _START_ &agrave; _END_ sur _TOTAL_ &eacute;l&eacute;ments",
                infoEmpty:      "Affichage de l'&eacute;lement 0 &agrave; 0 sur 0 &eacute;l&eacute;ments",
                infoFiltered:   "(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)",
                infoPostFix:    "",
                loadingRecords: "Chargement en cours...",
                zeroRecords:    "Aucun &eacute;l&eacute;ment &agrave; afficher",
                emptyTable:     "Aucune donnée disponible dans le tableau",
                paginate: {
                    first:      "Premier",
                    previous:   "Pr&eacute;c&eacute;dent",
                    next:       "Suivant",
                    last:       "Dernier"
                },
                aria: {
                    sortAscending:  ": activer pour trier la colonne par ordre croissant",
                    sortDescending: ": activer pour trier la colonne par ordre décroissant"
                }
            }
        } );
    </script>
</body>
</html>