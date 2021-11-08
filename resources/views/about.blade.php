<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>About Page</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="styles/container.css">
    </head>
    <body>
        <x-nav-bar></x-nav-bar>

        <x-container-with-card 
        :imgSrc="'/assets/png/about-image.png'" 
        :imgTitle="'About Polaris Furniture'"
        :imgContent="'
            Derived from Home Industry that produce lacqueer series for restaurants since 1992 and has grown until now. Polaris has produce more than 200 products that has distributed across Indonesia.
        '">
        </x-container-with-card>

        <section class="PageWithNavBar">
            "about"
        </section>
    </body>
</html>