<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Polaris | Service</title>

        <link rel="icon" type="image/png" href="assets/png/favicon.png">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="styles/container.css">
        @livewireStyles
    </head>
    <body class="BgColor-gray">
        @php
            $img = '/assets/png/services.png';
            $cardContent = "Do you have your dream furniture? We can make them come true. From the prototyping to execution, don't worry! Just focus on your business.";
            $cardTitle ='<div>Have Something in Mind ? <br/> We Can Make It Happen </div>';
            $tabsTitle = [ 0 => 'OEM', 1 => 'INTERIOR' ];
            $title="Our Services";
            $content= 
            [
                ["title" => "ORIGINAL <br />
                            EQUIPEMENT <br />
                            MANUFACTURE",
                    "text" => 
                    "Do you have your dream chair? Or dream table? We can make your dream chair or dream table or any furniture come true. We can make your design come true.",
                    "image" => "/assets/png/oem.png",
                ], 
                ["title" => "INTERIOR <br/>
                            DESIGN",
                    "text" =>
                    "Need to redecor your room? Or for your business? We provide you the best interior solutions for you. From design to execution, deliver all just in time with the best quality.",
                    "image" => "/assets/png/interior.png",
                ],
            ];
        @endphp

        <livewire:nav-bar :menu="'Service'"></livewire:nav-bar>
        <x-container-with-card 
            :imgSrc="$img" 
            :imgTitle="$cardTitle"
            :imgContent="$cardContent">
        </x-container-with-card>
        <div class="Flex JustifyContent-center AlignItems-center MarginTop-2xlarge">
            <livewire:container-with-tabs :containerTitle="$title" :tabsTitle="$tabsTitle" :content="$content" :menu="'service'">
            </livewire:container-with-tabs>
        </div>
        <x-footer></x-footer>
        @livewireScripts
    </body>
</html>