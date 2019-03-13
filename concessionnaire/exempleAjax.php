<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
 <div class="container">
    <button type="button">charge</button>
    <p></p>
 </div> 

<script>
$(document).ready(function(){
    $('button').on('click', function(){
        let path = 'traitement.php';
        $.ajax({
            url:path,
            type:'GET',
            erreur:function(){
                alert('Erreur du chargement...');
            },
            success:function(data){
                $('p').html('<div class="spinner-grow text-muted"></div>');
                setTimeout(function(){
                    $('p').html(data);

                },3000);
                
            }
        });
    });
});
</script>  
</body>
</html>