<?php
if(isset($_SESSION['id']))
{
  echo '
  <form method="post" action="models/addVote.php?id_recipe='.$recipe->id().'">
    <div class="hiddenradio">
    <label>
      <input type="radio" name="vote" id="vote" name="vote" value="3">
      <img src="images/starFull.svg">
      <img src="images/starFull.svg">
      <img src="images/starFull.svg">
    </label>
    <br>

    <label>
      <input type="radio" name="vote" id="vote" name="vote" value="2">
      <img src="images/starFull.svg">
      <img src="images/starFull.svg">
    </label>
    <br>

    <label>
      <input type="radio" id="vote" name="vote" value="1">
      <img src="images/starFull.svg">
    </label>
    <br>

    </div>
    <input type="submit" name="submit" value="Voter !" class="button">
  </form>
  ';
}else {
  echo '<a href="/#abonnement">Abonnez-vous</a> à <i>La carte des chefs</i> pour voter.';
}
