<?php
    require_once('authentification/verif.php');
    require_once('connex.php');
    $title="Ajout voiture";
   
    if(isset($_POST['soumis'])){
        //var_dump($_POST);
        //var_dump($_FILES);
        if(isset($_POST) && isset($_FILES['photo']) && !empty($_POST['marque']) ){
            $file_name = $_FILES['photo']['name'];
            $file_tmp_name = $_FILES['photo']['tmp_name'];
            $destination = "images/".$file_name;

            move_uploaded_file($file_tmp_name, $destination);

            $marque = trim(htmlspecialchars($_POST['marque']));
            $modele = trim(htmlspecialchars($_POST['modele']));
            $pays = trim(htmlspecialchars($_POST['pays']));
            $prix = (double)trim(htmlspecialchars($_POST['prix']));
            $descri = trim($_POST['desc']);
        
            //  r   equete
            $sql = "INSERT INTO voiture(marque, modele, pays,prix,photo,description)
                VALUES(?,?,?,?,?,?)";

            $res = mysqli_prepare($connect, $sql);

            mysqli_stmt_bind_param($res,'sssdss', $marque, $modele, $pays, $prix,$file_name,$descri);

            $ok = mysqli_stmt_execute($res);

            if($ok){
                header('location:listes.php');
            }else{echo'Erreur';}
        
        }
    }






    require_once('partials/header.php');

?>
<div class="container">
<h2>Ajout d'une voiture</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
        <div class="form-row">
            <div class="form-group col-md-6">
             <label for="marque">Marque*:</label>
             <input type="text" class="form-control" name="marque" id="marque" placeholder="Entrez votre marque">
            </div>
            <div class="form-group col-md-6">
             <label for="modele">Modele*:</label>
             <input type="text" class="form-control" name="modele" id="modele" placeholder="Entrez votre modele">
            </div>
            <div class="form-group col-md-6">
             <label for="pays">Pays*:</label>
             <input type="text" class="form-control" name="pays" id="pays" placeholder="Entrez votre pays">
            </div>
            <div class="form-group col-md-6">
             <label for="prix">Prix*:</label>
             <input type="text" class="form-control" name="prix" id="prix" placeholder="Entrez votre prix">
            </div>
            <div class="form-group col-md-12">
                <label for="photo">Photo*:</label>
                <input type="file" class="form-control-file" id="photo" name="photo">
            </div>
            <div class="form-group col-md-12">
                <label for="desc:">Description*:</label>
                <textarea class="form-control" id="desc" name="desc" rows="3" placeholder="Entrez la description"></textarea>
            </div>
        </div>
        <button type="submit" name="soumis" class="btn btn-success btn-lg btn-block">Soumettre</button>
    </form>
</div>
<?php require_once('partials/footer.php'); ?>