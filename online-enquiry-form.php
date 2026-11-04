<?php 
include "includes/apis.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/head.php" ?>
    <title><?= $online_enquiry_form['data']['title'] ?? "DPS Bareilly" ?></title>
</head>
<body>
    <?php include "includes/header.php" ?>

    <div class="main relative">
        <div class="sm:mt-20 mt-10 mx-4 2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 px-4">
            <div class="relative">
                <h2 class="text-center sm:text-[32px] text-[28px] font-[700] text-blue-main leading-9">
                    Enquiry Form | Session 2026–2027
                </h2>
                
                <div class="my-10">
                    <?php
                    $ee_form_container_id = 'ee-form-21-online';
                    include "includes/ee-enquiry-widget.php";
                    ?>
                </div>
            </div>
        </div>
    </div>
    <?php include "includes/footer.php" ?>
</body>
</html>