<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?= $setting_title ?></title>
    <link rel="shortcut icon" type="image/png" href="<?= base_url('Assets/settings/' . $setting_logo) ?>" />
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <link rel="stylesheet" href="../../plugins/ekko-lightbox/ekko-lightbox.css">

    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
    <link rel="stylesheet" href="../../CSS/main.css">


</head>
<header class="fixed-top" style="background: #ffffffd1;padding-right:1em">
    <ul>
        <li class="logo">
            <a href="<?= base_url() ?>">
                <img height="44" title="Logo" src="<?= base_url('Assets/settings/sublogo.jpg') ?>">
            </a>
        </li>
        <li class="title">
            <a href="<?= base_url() ?>">
                <h5><?= $setting_title ?></h5>
                <h6><?= $setting_subtitle ?></h6>
            </a>

        </li>

        <li class="menu-toggle">
            <button onclick="toggleMenu();">&#9776;</button>
        </li>
        <?PHP
        foreach ($menus as $key => $item) {
            if ($item['menu_parent_id'] == 0) {

                if ($item['menu_title'] == $page) {
        ?>
                    <li class="menu-item hidden active"><a href="<?= $item['menu_url'] ?>" target="<?= $item['menu_target'] ?>"><?= $item['menu_title'] ?> </a></li>
                <?php } else {
                ?>
                    <li class="menu-item hidden"><a href="<?= $item['menu_url'] ?>" target="<?= $item['menu_target'] ?>"><?= $item['menu_title'] ?></a></li>

        <?php
                }
            }
        } ?>


    </ul>
</header>

<body>


    <script>
        function toggleMenu() {
            var menuItems = document.getElementsByClassName('menu-item');
            for (var i = 0; i < menuItems.length; i++) {
                var menuItem = menuItems[i];
                menuItem.classList.toggle("hidden");
            }
        }
    </script>