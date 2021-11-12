<div class="NavBar">
    <div class="NavMobile Flex JustifyContent-center AlignItems-center">
        <div class="BurgerBar" wire:click="onClickBurgerBar">
            <img style="height: 20px;" src="/assets/png/burger-menu.png" alt="Menu">
        </div>
        <div >
            <a href="/"><img class="LogoMobile" src="assets/png/logo.png" alt="Polaris Logo"></a>
        </div>

        @if($burgerBar === true)
            <div class="NabMobile-open Padding">
                <div class="Close NavMobile" wire:click="onClickBurgerBar"> x </div> 
                <ul class="TextAlign-center MenuUl">
                    <li>
                        <a class="Padding MarginRight FontMobileNav NavBars {{ ( $menu === '' )? 'Active' : '' }}" href="/"> Home </a>  
                    </li>
                    <li>
                        <a class="Padding MarginRight FontMobileNav NavBars {{ ( $menu === 'About' )? 'Active' : '' }}" href="/about"> About </a>  
                    </li>
                    <li>
                        <a class="Padding MarginRight FontMobileNav NavBars {{ ( $menu === 'Service' )? 'Active' : '' }}" href="/service"> Service </a>
                    </li>
                    <li>
                        {{-- <a class="Padding MarginRight FontMobileNav NavBars {{ ( $menu === 'Contact' )? 'Active' : '' }}" href="/contact"> Contact </a> --}}
                    </li>
                    <li>
                        <a class="Padding MarginRight FontMobileNav NavBars {{ ( $menu === 'Product' )? 'Active' : '' }}" href="/product"> Product </a>
                    </li>
                </ul>
            </div>
        @endif
    </div>

    <a href="/"><img class="Logo" src="assets/png/logo.png" alt="Polaris Logo"></a>
    <a class="Desktop Padding MarginRight FontDefault NavBars {{ ( $menu === 'About' )? 'Active' : '' }}" href="/about"> About </a>        
    <a class="Desktop Padding MarginRight FontDefault NavBars {{ ( $menu === 'Service' )? 'Active' : '' }}" href="/service"> Service </a>
    {{-- <a class="Padding MarginRight FontDefault NavBars {{ ( $menu === 'Contact' )? 'Active' : '' }}" href="/contact"> Contact </a> --}}
    <a class="Desktop Padding MarginRight FontDefault NavBars {{ ( $menu === 'Product' )? 'Active' : '' }}" href="/product"> Product </a>

   
</div>