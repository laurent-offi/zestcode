<link rel="stylesheet" href="<?= $assets_url . "css/admin.css"; ?>">
<link rel="stylesheet" href="<?= $assets_url . "css/sidebar.css"; ?>">
<link rel="stylesheet" href="<?= $assets_url . "css/dashboard.css"; ?>">
<link rel="stylesheet" href="<?= $assets_url . "css/tables.css"; ?>">
<link rel="stylesheet" href="<?= $assets_url . "css/form.css"; ?>">
<link rel="stylesheet" href="<?= $assets_url . "css/tooltip.css"; ?>">
<link rel="stylesheet" href="<?= $assets_url . "css/wbbtheme.css"; ?>">
<link href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" rel="stylesheet">
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


<div class="sidebar">

    <ul>

        <li <?php if(isset($page) && $page == "Tableau de bord") { echo 'class="active"'; } ?>><a href="/backend/"><i class="fas fa-tachometer-alt"></i> Tableau de bord</a></li>
        <li><a href="/backend/blog"><i class="fas fa-sliders-h"></i> gestion du blog</a></li>

    </ul>


</div>


<div class="row">
<div class="header">

    <div class="link">

        <a href="/">Retour au site</a>

    </div>

</div>