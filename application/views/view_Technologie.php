<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="<?php echo base_url(); ?>JQuery/jquery-3.1.1.js"></script>
    <script src="<?php echo base_url(); ?>JS/fonction.js"></script>
    
    <script src="<?php echo base_url(); ?>Bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>Bootstrap/js/bootstrap.js"></script>
    <link href="<?php echo base_url(); ?>Bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>Bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
</head>
<body>
    <form method="POST" action="<?php echo base_url(); ?>index.php/ctrl_home/insererConference">
    <input type="text" value="Numero de la conference"> 
    <?php
    foreach ($lesIdConf as $unIdConf) {
        ?>
        <input type="text" name="txtIdConf" value="<?php  $unIdConf->$idConf; ?>"> 
    <?php
    }
    ?>  
    <input type="text" value="Titre de la conference"> 
    
    <input type="text" name="txtTitre"> <br>

    <input type="text" value="Contenue de la conference"> 
    <input type="text" name="txtContenue"> 
    <input type="text" value="Choix du niveau"> 
    <select name="idNiveau">
    <?php
    foreach ($lesNomsNiveau as $unNomNiveau) {
        ?>
        <option value="<?php echo $unNomNiveau->IDNIVEAU; ?>"><?php echo $unNomNiveau->NIVEAU; ?></option>
    <?php
    }
    ?>   
    </select><br>

    <input type="text" value="Choix du thème"> 
    <select name="idTheme">
    <?php
    foreach ($lesNomsTheme as $unNomTheme) {
        ?>
        <option value="<?php echo $unNomTheme->IDTHEME; ?>"><?php echo $unNomTheme->LIBELLETHEME; ?></option>
    <?php
    }
    ?> 
    </select><br>


    <table class="table">
   <input type="text" value="Choix des Tehcnologie"> <br>
   <?php
    foreach ($lesTechs as $uneTech) {
        ?>
         <input type='checkbox'name="idTech"value="<?php echo $uneTech->IDTECHNO; ?>"><?php echo $uneTech->NOMTECHNO; ?>
        <?php
    }
    ?>
    </table>
    <input type="submit" name="btnCreer" value="Inserer une conference">
</form>
</body>
</html>