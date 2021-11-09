<div class="ContainerTab">
    <div class="Font-24 Montserrat-bold MarginBottom"> {{ $containerTitle }}</div>
 
    <div class="Tabs Flex JustifyContent-around MarginTop">
         @foreach($tabsTitle as $i => $tabTitle)
             <div 
             wire:click="getId({{ $i }})"
             class="Tab Font-18 Montserrat-bold Color-gray {{ ($con === $i) ? 'ActiveTab': '' }}">
              {{ $tabTitle }} 
             </div>
         @endforeach 
    </div>

    <div class="TabsContent">
        @foreach($content as $i => $contentView)
            <div class="TabContent Flex JustifyContent-between {{ ($con === $i) ? 'Show': '' }}">
                <div class="MarginTop Width-50">
                    <div class="Font-18 Roboto-bold MarginTop">{!! $contentView['title'] !!}</div>
                    <div class="Font-14 Roboto MarginTop LineHeight width-60">
                        {!! $contentView['text'] ?? '' !!}
                    </div>
                </div>
                
            </div>
        @endforeach
    </div>

    @foreach($content as $i => $contentView)
        @if ($contentView['image'] !== '')
            <div class="TabImagesContainer Width-50 Flex AlignItems-center {{ ($con === $i) ? 'Show': 'Hide' }}"> 
                <img class="TabImages" src="{{ $contentView['image'] }}" alt="About Tab">
            </div>
        @else
            <div class="TabImagesContainer Width-50 Flex AlignItems-center {{ ($con === $i) ? 'Show': 'Hide' }}">{!! $contentView['map'] !!}</div>
        @endif
    @endforeach
 
 </div>