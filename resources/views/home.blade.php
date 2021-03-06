<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Polaris Furniture</title>

        <!-- Link -->
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="styles/home/home.css">
        <link rel="icon" type="image/png" href="assets/png/favicon.png">
        @livewireStyles
    </head>
    <body>
        <livewire:nav-bar :menu="''"></livewire:nav-bar>

        <section class="HomePage">
            <section class="HomeBanner">
                <div>
                    <img class="HomeBanner-placeholder" src="assets/png/homepage.jpg" alt="Home Banner PlaceHolder">
                </div>
                <div class="HomeBanner-text">
                    <div class="HomeBanner-text--title">Ergonomis & Kokoh</div>
                    <div class="HomeBanner-text--subTitle" >Polaris Official menjadi pilihan tepat untuk segala kebutuhan Anda.</div>
                </div>
            </section>

            <section class="Flex Flex-column JustifyContent-center">
                <x-home-category></x-home-category>
                <x-home-journey></x-home-journey>
                <x-home-choose-polaris></x-home-choose-polaris>
                <x-home-service></x-home-service>
            </section>

            <x-footer></x-footer>
        </section>
        @livewireScripts
    </body>
</html>
