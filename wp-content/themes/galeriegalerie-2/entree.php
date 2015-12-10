<?php include('inc/header.php'); ?>

<a title="Salle gauche" href="<?php echo URL; ?>/bureau.php" class="mur gauche sorti"></a>

<div id="murFond">

  <h1>Exposition Collective</h1>

  <a href="<?php echo URL; ?>/expo1.php" title="Expo 1" id="porte1" class="objet porte">
    <h2>Salle 1</h2>
    <img src="assets/images/porte1.jpg">
  </a>

  <a href="<?php echo URL; ?>/expo2.php" title="Expo 2" id="porte2" class="objet porte">
    <h2>Salle 2</h2>
    <img src="assets/images/porte2.jpg">
  </a>

  <a href="<?php echo URL; ?>/expo3.php" title="Expo 3" id="porte3" class="objet porte">
    <h2>Salle 3</h2>
    <img src="assets/images/porte3.jpg">
  </a>

  <?php /* ?>

  <div class="objet octane">
    <img src="assets/images/octane-poster.png">
  </div>

  <?php */ ?>
  
</div><!-- #murFond -->

<a title="Salle droite" href="<?php echo URL; ?>/archives.php" class="mur droit sorti"></a>

<div id="sol" class="coin-gauche coin-droit">

  <div class="objet plante">
    <img src="assets/images/plante.png" alt="Une plante">
  </div>

    <div class="objet chaise">
    <img src="assets/images/chaise.png">
  </div>

  <div class="objet table">
    <img src="assets/images/table.png" alt="Une table">
  </div>

  <div class="objet fontaine">
    <img src="assets/images/fontaine-deco.gif" alt="Une fontaine">
  </div>

  <div class="objet baraeau">
    <img src="assets/images/baraeau.png" alt="Un bar à eau">
  </div>

</div><!-- #sol -->

<?php include('inc/footer.php'); ?>