<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Polaris | About</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="styles/container.css">
        @livewireStyles
    </head>
    <body class="BgColor-gray">
        @php
            $tabsTitle = [ 0 => 'WHO WE ARE', 1 => 'VISION & MISSION', 2 => 'OUR LOCATION' ];
            $title="Polaris Furniture";
            $content= 
            [
                ["title" => "WHO WE ARE",
                    "text" => 
                    "Polaris Furniture merupakan perusahaan manufaktur furnitur yang telah memiliki pengalaman lebih dari 20 tahun. Kami terus berinovasi agar produk kami semakin berkembang dan kami juga mengedepankan kepuasan pelanggan serta menjaga kepercayaan mitra bisnis kami.
                    <p> Mulai dari sektor umah tangga, kantor, restoran, institusi dan tempat lainnya. </p>"
                ], 
                ["title" => "VISION & MISSION",
                    "text" =>
                    "Our vision is to be the global market leader in Furniture Industry. With our mission to supply the market demand and giving the best experience for our customers."
                ], 
                ["title" => "OUR LOCATION",
                    "text" =>
                    "Headquarter Office: Jl. Citra Raya No 2e, Jakarta Barat."
                ],
            ];
        @endphp

        <x-nav-bar :menu="'About'"></x-nav-bar>
        <x-container-with-card 
        :imgSrc="'/assets/png/about-image.png'" 
        :imgTitle="'About Polaris Furniture'"
        :imgContent="'
            Derived from Home Industry that produce lacqueer series for restaurants since 1992 and has grown until now. Polaris has produce more than 200 products that has distributed across Indonesia.
        '">
        </x-container-with-card>
        <div class="Flex JustifyContent-center AlignItems-center MarginTop-2xlarge">
            <livewire:container-with-tabs :containerTitle="$title" :tabsTitle="$tabsTitle" :content="$content">
            </livewire:container-with-tabs>
        </div>
        <section class="PageWithNavBar">
            "about"
        </section>

        @livewireScripts
    </body>
</html>