<!DOCTYPE html>
<html lang="en">
<?php include_once ('./mvc/views/layouts/head.php') ?>
<title><?php echo $data["title"] ?></title>

<body>
    <main class="bg-gray-100 font-montserrat">
        <?php include_once ('./mvc/views/layouts/header.php') ?>
        <?php require_once "./mvc/views/pages/".$data["page"].".php" ?>
        <?php include_once ('./mvc/views/layouts/footer.php') ?>
    </main>
</body>

</html>