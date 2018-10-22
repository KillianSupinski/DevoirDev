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
    <?php
    foreach ($lesVotes as $unVote) {
        ?>
        <input type='checkbox' value="<?php $unVote->IDCONFERENCE; ?>"><?php echo $unVote->TITRE; ?>
        <?php echo $unVote->NBVOTES; ?><br>
        <?php
    }
    ?>
</body>
</html>