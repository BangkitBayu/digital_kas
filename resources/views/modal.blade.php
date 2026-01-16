 <div class="absolute min-w-40 inset-1.5  bg-amber-400  max-h-20">
     <div class=" flex flex-col items-center justify-center">
         <header>
             <h3>{{ $title }}</h3>
         </header>
         <main>
             {{ $slot }}
         </main>
         <footer class=" p-2">
             <button class="px-3 py2 w-[50%]">{{ $textBtn1 }}</button>
             <button class="px-3 py2 w-[50%]">{{ $textBtn2 }}</button>
         </footer>
     </div>
 </div>
