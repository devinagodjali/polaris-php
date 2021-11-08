<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Service Page</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="styles/container.css">
    </head>
    <body>
        @php
            $img = '/assets/png/services.png';
            $content = "Do you have your dream furniture? We can make them come true. From the prototyping to execution, don't worry! Just focus on your business.";
            $title ='<div>Have Something in Mind ? <br/> We Can Make It Happen </div>';
        @endphp

        <x-nav-bar></x-nav-bar>
        <x-container-with-card 
        :imgSrc="$img" 
        :imgTitle="$title"
        :imgContent="$content">
        </x-container-with-card>

        <section class="PageWithNavBar">
            Service
        </section>
    </body>
</html>