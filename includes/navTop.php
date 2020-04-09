<nav id="navTop">
  <ul>
    <li><img src="images/80x80_logo_la_carte_des_chefs.png" alt="Logo La carte des chefs" class="navItem"/></li>
    <?php
    if (!empty($_SESSION['id'])) {
      echo '<a href="?action=recipeAdd"><li><img src="images/add.svg" alt="Ajouter une recette" class="navItem"></li></a>';
    }
    if (isset($_SESSION['id']) AND $_GET['action'] == 'account') {
      if ($_SESSION['id'] == $cook->id()) {
        echo '<a href="?action=accountEdit"><li><img src="images/accountEdit.svg" alt="Éditer mon compte" class="navItem"></li></a>';
      }
    }else {
      echo '<a href="?action=account"><li><img src="images/account.svg" alt="Mon compte" class="navItem"></li></a>';
    }
    ?>
  </ul>
</nav>