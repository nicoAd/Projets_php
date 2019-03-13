<?php
    require_once('authentification/verif.php');
    require_once('connex.php');
    $title="Mise à jour";

    if(isset($_GET['code'])){
        $code = $_GET['code'];
        $sql = "SELECT * FROM voiture WHERE id = ?";

        $res = mysqli_prepare($connect, $sql);
        mysqli_stmt_bind_param($res, 'i', $code);

        $ok = mysqli_stmt_execute($res);

        mysqli_stmt_bind_result($res, $id, $marque, $modele,$pays, $prix, $photo, $descri,$da);
        mysqli_stmt_fetch($res);
    }
   
    if(isset($_POST['soumis'])){

        //var_dump($_POST);
        //var_dump($_FILES);
        //die();
        if(isset($_POST) || isset($_FILES['photo']) ){
            $file_name = $_FILES['photo']['name'];
            $file_tmp_name = $_FILES['photo']['tmp_name'];
            $destination = "images/".$file_name;

            move_uploaded_file($file_tmp_name, $destination);

            $marque = trim(htmlspecialchars($_POST['marque']));
            $id = (int)trim(htmlspecialchars($_POST['code']));
            $modele = trim(htmlspecialchars($_POST['modele']));
            $pays = trim(htmlspecialchars($_POST['pays']));
            $prix = (double)trim(htmlspecialchars($_POST['prix']));
            $descri = trim($_POST['desc']);
            $oldphoto = trim(htmlspecialchars($_POST['oldphoto']));
            $photo = "";

            if($file_name){
                $photo  = $file_name;
            }else{
                $photo = $oldphoto;
            }
            //  r   equete
            $sql = "UPDATE voiture SET marque = ?, modele=?,pays=?,prix=?,photo=?, description=?
                WHERE id = ?";

            $res = mysqli_prepare($connect, $sql);

            $oki= mysqli_stmt_bind_param($res,'sssdssi', $marque, $modele, $pays, $prix,$photo,$descri,$id);
            
            $ok = mysqli_stmt_execute($res);

            if($ok){
                echo'success';
                header('location:listes.php');
            }else{echo'Erreur';}
        
        }
    }






    require_once('partials/header.php');

?>
<div class="container">
<h2>Mise à jour d'une voiture</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
        <div class="form-row">
        <div class="form-group col-md-12">
             <label for="code">Id:</label>
             <input type="text" class="form-control" name="code" id="code" value="<?php echo $id; ?>" readonly>
            </div>
            <div class="form-group col-md-6">
             <label for="marque">Marque*:</label>
             <input type="text" class="form-control" name="marque" id="marque" placeholder="Entrez votre marque" value="<?php echo $marque; ?>">
            </div>
            <div class="form-group col-md-6">
             <label for="modele">Modele*:</label>
             <input type="text" class="form-control" name="modele" id="modele" placeholder="Entrez votre modele" value="<?php echo $modele; ?>">
            </div>
            <div class="form-group col-md-6">
             <label for="pays">Pays*:</label>
             <input type="text" class="form-control" name="pays" id="pays" placeholder="Entrez votre pays" value="<?php echo $pays; ?>">
            </div>
            <div class="form-group col-md-6">
             <label for="prix">Prix*:</label>
             <input type="text" class="form-control" name="prix" id="prix" placeholder="Entrez votre prix" value="<?php echo $prix; ?>">
            </div>
            <div class="form-group col-md-12">
                <label for="photo">Photo*:</label>
                <p><img src="images/<?php echo $photo; ?>" width=100 height=100" ></p>
                <input type="file" value=""class="form-control-file" id="photo" name="photo">
                <input type="hidden" value="<?php echo $photo; ?>" name="oldphoto">
            </div>
            <div class="form-group col-md-12">
                <label for="desc:">Description*:</label>
                <textarea class="form-control" id="desc" name="desc" rows="3" placeholder="Entrez la description">
                <?php echo $descri; ?>
                </textarea>
            </div>
        </div>
        <button type="submit" name="soumis" class="btn btn-warning btn-lg btn-block">Modifier</button>
    </form>
</div>
<?php require_once('partials/footer.php'); ?>