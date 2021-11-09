<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Contact Page</title>

        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="styles/container.css">
    </head>
    <body>
        @php
            $img = '/assets/png/contact.png';
            $content = "We love to hear from you! For any inquiries or business, we are welcome.";
            $title ='Have Something in Mind?';
        @endphp

        <x-nav-bar :menu="'Contact'"></x-nav-bar>
        <x-container-with-card 
        :imgSrc="$img" 
        :imgTitle="$title"
        :imgContent="$content">
        </x-container-with-card>

        <section class="PageWithNavBar">
            "Contact"
        </section>
    </body>
</html>