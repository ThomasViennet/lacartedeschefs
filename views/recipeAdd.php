<!DOCTYPE html>
<html>
<head>
  <?php include 'includes/gtmHead.php';?>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css" />
  <link rel="icon" type="image/png" href="images/30x30_logo_la_carte_des_chefs.png">
  <title>La carte des chefs</title>
  <script language="javascript" type="text/javascript">
  function calculeLongueur(){

    //steps
    var iLongeur_steps, iLongeur_stepsRestante;
    iLongeur_steps = document.getElementById('steps').value.length;

    if (iLongeur_steps>1000) {
      document.getElementById('steps').value = document.getElementById('steps').value.substring(0,1000);
      iLongeur_stepsRestante = 0;
    }
    else {
      iLongeur_stepsRestante = 1000 - iLongeur_steps;
    }
    if (iLongeur_stepsRestante <= 1)
    document.getElementById('indicSteps').innerHTML = iLongeur_stepsRestante + "&nbsp;caract&egrave;re&nbsp;disponible";
    else
    document.getElementById('indicSteps').innerHTML = iLongeur_stepsRestante + "&nbsp;caract&egrave;res&nbsp;disponibles";

    //serve
    var iLongeur_serve, iLongeur_serveRestante;
    iLongeur_serve = document.getElementById('serve').value.length;

    if (iLongeur_serve>500) {
      document.getElementById('serve').value = document.getElementById('serve').value.substring(0,500);
      iLongeur_serveRestante = 0;
    }
    else {
      iLongeur_serveRestante = 500 - iLongeur_serve;
    }
    if (iLongeur_serveRestante <= 1)
    document.getElementById('indicServe').innerHTML = iLongeur_serveRestante + "&nbsp;caract&egrave;re&nbsp;disponible";
    else
    document.getElementById('indicServe').innerHTML = iLongeur_serveRestante + "&nbsp;caract&egrave;res&nbsp;disponibles";

    //ingrdients
    var iLongeur_ingredients, iLongeur_ingredientsRestante;
    iLongeur_ingredients = document.getElementById('ingredients').value.length;

    if (iLongeur_ingredients>500) {
      document.getElementById('ingredients').value = document.getElementById('ingredients').value.substring(0,500);
      iLongeur_ingredientsRestante = 0;
    }
    else {
      iLongeur_ingredientsRestante = 500 - iLongeur_ingredients;
    }
    if (iLongeur_ingredientsRestante <= 1)
    document.getElementById('indicIngredients').innerHTML = iLongeur_ingredientsRestante + "&nbsp;caract&egrave;re&nbsp;disponible";
    else
    document.getElementById('indicIngredients').innerHTML = iLongeur_ingredientsRestante + "&nbsp;caract&egrave;res&nbsp;disponibles";
  }
  </script>
</head>

<body>
  <?php include 'includes/gtmBody.php';?>
  <?php include 'includes/navTop.php';?>
  <?php include 'includes/navFooter.php';?>

  <header>
    <h1>Ajouter une recette</h1>
  </header>
  <div id="recipe_cook">
    <a href="?action=cook&cook_id=<?php echo $cook->id();?>"><img src="/uploads/avatars/80x80_<?php echo $cook->picture();?>"  width="80px" height="80px" class="profilPicture" /></a><br>
    <?php echo $cook->identifiant();?><br>
    <?php echo $cook->moyenne();?><br>
    <a href="models/deconnexion.php">Ce n'est pas vous ?</a><br>
  </div>


  <section>
    <?php if(isset($_GET['sent'])) echo '<p class="colorMain">'.$reponse.'</p>'; ?>
    <form method="post" action="?action=recipeAdd&sent" enctype="multipart/form-data">
      <label for="title">Titre</label><input type="text" name="title" id="title" value="<?php echo $_SESSION['post_recipe_title'];?>" placeholder="Titre de votre recette *"/>

      <label for="ingredients">Ingrédients</label>
      <div id="indicIngredients"></div>
      <textarea onblur="calculeLongueur();" onfocus="calculeLongueur();" onkeydown="calculeLongueur();" onkeyup="calculeLongueur();" name="ingredients" id="ingredients" placeholder="Les ingrédients de votre recette" rows="5"><?php echo $_SESSION['post_recipe_ingredients'];?></textarea><br>

      <label for="steps">Préparation</label>
      <div id="indicSteps">1000 caractères restant</div>

      <textarea onblur="calculeLongueur();" onfocus="calculeLongueur();" onkeydown="calculeLongueur();" onkeyup="calculeLongueur();" name="steps" id="steps" placeholder="Décrivez votre recette ..." rows="5"><?php echo $_SESSION['post_recipe_steps'];?></textarea><br>

      <label for="serve">Servir</label>
      <div id="indicServe">500 caractères disponibles</div>

      <textarea onblur="calculeLongueur();" onfocus="calculeLongueur();" onkeydown="calculeLongueur();" onkeyup="calculeLongueur();" name="serve" id="serve" placeholder="Décrivez votre recette ..." rows="5"><?php echo $_SESSION['post_recipe_serve'];?></textarea><br>

      Photo du plat * (400 pixels par 400 pixels) <input type="file" name="recipe_picture" /><br>
      <input type="submit" name="submit" value="Envoyer" class="button">
    </form>
  </section>

  <?php include 'includes/footer.php';?>

</body>
</html>
