<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Polaris Furniture</title>

        <!-- Link -->
        <link rel="stylesheet" href="style.css">
        <link rel="icon" type="image/png" href="assets/png/favicon.png">
    </head>
    <body>
        <x-nav-bar></x-nav-bar>

        <section class="HomePage">
            <section class="HomeBanner">
                <div>
                    <img class="HomeBanner-placeholder" src="assets/png/homepage.png" alt="Home Banner PlaceHolder">
                </div>
                <div class="HomeBanner-text">
                    <div class="HomeBanner-text--title">Ergonomis & Kokoh</div>
                    <div class="HomeBanner-text--subTitle" >Polaris Official menjadi pilihan tepat untuk segala kebutuhan Anda.</div>
                </div>
            </section>

            <section class="HomeCategory Flex JustifyContent-center MarginTop-2xlarge">
                <div class="HomeCategory-content Padding Flex Flex-column JustifyContent-center">
                       <div class="Montserrat-light Font-18 TextAlign-center"> CATEGORY </div>
                       <div class="Montserrat-bold  Font-24 TextAlign-center"> Ideal For You </div>
                       <hr class="BorderBottom" />

                       <div class="MarginBottom Flex JustifyContent-between MarginTop-xlarge">
                            <div class="HomeCategory-box Padding">
                                <div class="HomeCategory-boxTitle Montserrat-bold">
                                    Hospitality
                                    <hr class="BorderBottom" />
                                </div>
                            </div>
                            <div class="HomeCategory-box">
                                <div class="HomeCategory-boxTitle Montserrat-bold">
                                    Hospitality
                                    <hr class="BorderBottom" />
                                </div>
                            </div>
                            <div class="HomeCategory-box">
                                <div class="HomeCategory-boxTitle Montserrat-bold">
                                    Hospitality
                                    <hr class="BorderBottom" />
                                </div>
                            </div>
                            <div class="HomeCategory-box">
                                <div class="HomeCategory-boxTitle Montserrat-bold">
                                    Hospitality
                                    <hr class="BorderBottom" />
                                </div>
                            </div>
                       </div>
                </div>
            </section>

            <section class="HomeCategory Flex JustifyContent-center MarginTop-2xlarge">
                <div class="HomeCategory-content Padding Flex Flex-column JustifyContent-center">
                       <div class="Montserrat-light Font-18 TextAlign-center"> CATEGORY </div>
                       <div class="Montserrat-bold  Font-24 TextAlign-center"> Ideal For You </div>
                       <hr class="BorderBottom" />

                       <div class="MarginBottom Flex JustifyContent-between MarginTop-xlarge">
                            <div class="HomeCategory-box">a</div>
                            <div class="HomeCategory-box">b</div>
                            <div class="HomeCategory-box">c</div>
                            <div class="HomeCategory-box">d</div>
                       </div>
                </div>
            </section>
        </section>
    </body>
</html>
