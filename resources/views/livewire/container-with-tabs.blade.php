<div class="ContainerTab">
    {{-- Desktop --}}
    <div class="Font-24 Montserrat-bold MarginBottom ContainerShow"> {{ $containerTitle }}</div>
 
    <div class="Tabs Flex JustifyContent-around MarginTop ContainerShow">
         @foreach($tabsTitle as $i => $tabTitle)
             <div 
             wire:click="getId({{ $i }})"
             class="Tab Font-18 Montserrat-bold Color-gray {{ ($con === $i) ? 'ActiveTab': '' }}">
              {{ $tabTitle }} 
             </div>
         @endforeach 
    </div>

    <div class="TabsContent ContainerShow Width-100">
        @foreach($content as $i => $contentView)
            <div class="TabContent Flex JustifyContent-between {{ ($con === $i) ? 'Show': '' }} Width-30">
                <div class="MarginTop Width-100">
                    <div class="Font-18 Roboto-bold MarginTop">{!! $contentView['title'] !!}</div>
                    <div class="Font-14 Roboto MarginTop LineHeight">
                        {!! $contentView['text'] ?? '' !!}
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    @foreach($content as $i => $contentView)
        @if ($contentView['image'] !== '')
            <div class="TabImagesContainer Width-70 Flex AlignItems-center {{ ($con === $i) ? 'Show': 'Hide' }} HideMobile"> 
                <img class="TabImages" src="{{ $contentView['image'] }}" alt="About Tab">
            </div>
        @else
            <div class="TabImagesContainer Width-70 Flex AlignItems-center {{ ($con === $i) ? 'GoShow': 'Hide' }} Maps">
                {!! $contentView['map'] !!}
            </div>
        @endif
    @endforeach


    {{-- Mobile --}}
    <div class="TitleMobile Montserrat-bold ContainerHide"> 
        {{  $containerTitle }}
    </div>
    <div class="ContainerHide">
        @if($menu === 'about')
            @foreach($tabsTitle as $i => $tabTitle)
                <div class="TabTitleMobile Roboto-bold"> {{ $tabTitle }} </div>
                @if($i === 0)
                    <img class="TabImages" src="{{ $content[$i]['image'] }}" style="width: 100vw;" alt="About Tab">
                    <div class="Roboto-bold" style="padding: 10px; font-size: 12px"> {{ $content[$i]['title'] }} </div>
                @endif
                @if($i !== 2)
                    <div class="Roboto TabTextMobile"> {!! $content[$i]['text'] !!} </div>
                @endif
                @if($i === 2)
                    <div style="width: 100vw; height: 200px">{!! $contentView['map'] !!}</div>
                @endif
            @endforeach 
        @endif
        @if($menu === 'service')
            @foreach($tabsTitle as $i => $tabTitle)
                <div class="TabTitleMobile Roboto-bold"> {{ $tabTitle }} </div>
                <img class="TabImages" src="{{ $content[$i]['image'] }}" style="width: 100vw;" alt="About Tab">
                <div class="Roboto-bold Br" style="padding: 10px; font-size: 12px"> {!! $content[$i]['title'] !!} </div>
                <div class="Roboto TabTextMobile"> {!! $content[$i]['text'] !!} </div>
            @endforeach 
        @endif
    </div>
 </div>