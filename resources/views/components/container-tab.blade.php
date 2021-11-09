<div class="ContainerTab">
   <div class="Font-24 Montserrat-bold MarginBottom"> {{ $title }}</div>

   <div class="Tabs Flex JustifyContent-around AlignItems-center MarginTop">
        @foreach($tabsTitle as $i => $tabTitle)
            <div 
            wire::click="getId"
            class="Tab Font-18 Montserrat-bold">
             {{ $tabTitle }} 
            </div>
        @endforeach 
   </div>
djsfnsdjf
        
   <div class="TabsContent">

   </div>

</div>