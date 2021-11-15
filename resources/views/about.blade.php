<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Polaris | About</title>

        <link rel="icon" type="image/png" href="assets/png/favicon.png">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="styles/container.css">
        <link rel="stylesheet" href="styles/about.css">
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
                    "Polaris Furniture is a Furniture Manufacturer  Company who already have more than 20 years experiences.
                    We continuously innovate in order to  improve our products and customer satisfaction. Besides, we continuously maintain the 
                    trust of our business partners as well. Starting from the household sector, office, restaurants, institutions and other sectors.",
                    "image" => "/assets/png/about1.jpg",
                ], 
                ["title" => "VISION & MISSION",
                    "text" =>
                    "Our vision is to be the global market leader in Furniture Industry. With our mission to supply the market demand and giving the best experience for our customers.",
                    "image" => "/assets/png/about2.png",
                ], 
                ["title" => "OUR LOCATION",
                    "text" =>
                    "<strong>Headquarter Office:</strong> <br/> Jl. Citra Raya No 2e, Jakarta Barat.",
                    "image" => "",
                    "map" => " <iframe
                                    src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3967.037255520034!2d106.71097691539597!3d-6.125688961771325!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6a02b08b72cd89%3A0x47a67f3dde6406e4!2sJl.%20Raya%20Citra%20No.2%2C%20RT.3%2FRW.5%2C%20Tegal%20Alur%2C%20Kec.%20Kalideres%2C%20Kota%20Jakarta%20Barat%2C%20Daerah%20Khusus%20Ibukota%20Jakarta%2011820!5e0!3m2!1sen!2sid!4v1631416251670!5m2!1sen!2sid'
                                    style='border: 0; width: inherit; height: inherit;'
                                    allowFullScreen='false'
                                    loading='lazy'
                                    title='Google Map'
                                ></iframe>",
                ],
            ];
        @endphp

        <livewire:nav-bar :menu="'About'"></livewire:nav-bar>
        <x-container-with-card 
        :imgSrc="'/assets/png/about-image.png'" 
        :imgTitle="'About Polaris Furniture'"
        :imgContent="'
            Derived from Home Industry that produce lacqueer series for restaurants since 1992 and has grown until now. Polaris has produce more than 200 products that has distributed across Indonesia.
        '">
        </x-container-with-card>
        <div class="Flex JustifyContent-center AlignItems-center MarginTop-2xlarge MarginMobile">
            <livewire:container-with-tabs :containerTitle="$title" :tabsTitle="$tabsTitle" :menu="'about'" :content="$content" >
            </livewire:container-with-tabs>
        </div>
        <div class="Flex JustifyContent-center AlignItems-center MarginTop-2xlarge MarginMobile">
            <div class="MapContainer">
                <div class="Font-24 Montserrat-xbold">Across The Nation</div>
                <div class="Font-16 Roboto MarginTop">Polaris Furniture have made to all across Indonesia.</div>
                <img class="MapImage MarginTop-xlarge" src="/assets/png/indonesia-map.png" alt="Peta"> 
            </div>
        </div>
        <x-footer></x-footer>

        @livewireScripts
    </body>
</html>