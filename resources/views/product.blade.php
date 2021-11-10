<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Polaris | Product</title>

        <!-- Link -->
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="styles/home/home.css">
        <link rel="icon" type="image/png" href="assets/png/favicon.png">
    </head>
    <body class="BgColor-gray">
        <x-nav-bar :menu="'Product'"></x-nav-bar>
        <div class="Flex JustifyContent-center MarginTop-2xlarge">
            <div class="MaintenanceContainer Montserrat-bold Font-54 Flex AlignItems-center JustifyContent-center"> Under Maintenance </div>
        </div>
        <x-footer></x-footer>
    </body>
</html>