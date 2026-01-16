 <div class="fixed lg:max-w-110 lg:w-full lg:top-[20%] lg:right-[30%] top-[20vh] right-2 w-[90vw]  border border-[#d8d8d8da] rounded-2xl z-50 bg-white"
     x-clock x-show="$store.modal.open">
     <div class=" flex flex-col">
         <header class=" text-left px-4 py-2 border-[#d8d8d8da] border-b">
             <h3 class=" font-semibold text-md text-primary">{{ $title }}</h3>
         </header>
         <main class=" px-4 py-2">
             {{ $main }}
         </main>
         <footer class=" px-4 py-2 border-[#d8d8d8da] border-t flex space-x-2 ">
             <button class="px-1 py-2 w-[50%] text-sm border border-[#d8d8d8da] rounded-xl cursor-pointer"
                 @click="$store.modal.open = false">{{ $textBtn }}</button>
             {{ $footer }}
         </footer>
     </div>
 </div>
