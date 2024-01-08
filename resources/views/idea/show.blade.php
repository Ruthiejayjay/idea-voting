<x-app-layout>
    <div>
        <a href="{{ $backUrl }}" class="flex items-center font-semibold hover:underline">
            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
            <span class="ml-2">All ideas (or back to chosen category with filters)</span>
        </a>
    </div>
    <livewire:idea-show :idea="$idea" :votesCount="$votesCount"/>    

    <x-notification-success />


    <x-modals-container :idea="$idea" />
      
    <div class="comments-container relative space-y-6 md:ml-22 pt-6 my-8 mt-1">
        <div class="comment-container relative bg-white rounded-xl flex">
            <div class="flex flex-col md:flex-row flex-1 px-2 py-6">
               <div class="mx-2 md:0 flex-none">
                <a href="#">
                    <img src="https://source.unsplash.com/200x200/?face&crop=face&v=2" alt="avatar" class="w-14 h-14 rounded-xl">
                </a>
               </div>
                <div class="w-full mx-2 md:mx-4">
                    <div class="text-gray-600 mt-3">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rerum fugiat illo quasi, labore excepturi maxime 
                        autem nobis ipsum itaque atque repellendus amet ducimus? Repudiandae odit cumque quidem consectetur iste 
                        molestias, natus officiis sed totam dolorem sapiente magnam debitis voluptate adipisci impedit tempora 
                        voluptas eius officia quisquam! Sunt dicta nostrum quis quisquam, eum, aspernatur accusamus et, unde iste 
                        laborum? Totam, enim esse quia accusantium sed voluptatum inventore accusamus natus, ipsum temporibus 
                        asperiores odit ipsa provident quod unde maiores eligendi? Repudiandae quisquam voluptas eum consequuntur 
                        vero vel odio? Autem, eligendi unde atque, ut voluptate fugiat, eos earum exercitationem doloribus molestias 
                        eveniet.
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div class="font-bold text-gray-900">John Doe</div>
                            <div>10 hours ago</div>        
                        </div>
                        <div x-data="{ isOpen: false }" class="flex items-center space-x-2">
                            <div class="relative">
                                <button 
                                    @click="isOpen = !isOpen"
                                    class="relative bg-gray-100 hover:bg-gray-200 rounded-full h-7 border transition duration-150 ease-in py-2 px-3">
                                    <svg fill="currentColor" width="24" height="6"><path d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z" style="color: rgba(163, 163, 163, .5)"></svg>
                                </button>
                                <ul 
                                    x-cloak
                                    x-show.transition.origin.top.left="isOpen"
                                    @click.away="isOpen = false"
                                    @keydown.escape.window="isOpen = false" 
                                    class="absolute w-44 text-left font-semibold bg-white shadow-dialog rounded-xl py-3 md:ml-8 top-8 md:top-6 right-0 md:left-0 z-10">
                                    <li><a href="#" class="hover:bg-gray-100 block transition duration-150 ease-in px-5 py-3">Mark as Spam</a></li>
                                    <li><a href="#" class="hover:bg-gray-100 block transition duration-150 ease-in px-5 py-3">Delete Post</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end comment-container -->
        <div class="comment-container is-admin relative bg-white rounded-xl flex">
            <div class="flex flex-col md:flex-row flex-1 px-2 py-6">
               <div class="mx-2 md:mx-0 flex-none">
                <a href="#">
                    <img src="https://source.unsplash.com/200x200/?face&crop=face&v=3" alt="avatar" class="w-14 h-14 rounded-xl">
                </a>
                <div class="md:text-center uppercase text-xxs text-blue font-bold mt-1">Admin</div>
               </div>
                <div class="w-full mx-2 md:mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="#" class=" hover:underline">Status Changed to "Under Consideration"</a>
                    </h4>
                    <div class="text-gray-600 mt-3">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rerum fugiat illo quasi, labore excepturi maxime 
                        autem nobis ipsum itaque atque repellendus amet ducimus? Repudiandae odit cumque quidem consectetur iste 
                        molestias, natus officiis sed totam dolorem sapiente magnam debitis voluptate adipisci impedit tempora 
                        voluptas eius officia quisquam! Sunt dicta nostrum quis quisquam, eum, aspernatur accusamus et, unde iste 
                        laborum? Totam, enim esse quia accusantium sed voluptatum inventore accusamus natus, ipsum temporibus 
                        asperiores odit ipsa provident quod unde maiores eligendi? Repudiandae quisquam voluptas eum consequuntur 
                        vero vel odio? Autem, eligendi unde atque, ut voluptate fugiat, eos earum exercitationem doloribus molestias 
                        eveniet.
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div class="font-bold text-blue">Andrea</div>
                            <div>10 hours ago</div>        
                        </div>
                        <div 
                            x-data="{ isOpen: false }" 
                            class="flex items-center space-x-2">
                            <div class="relative">
                                <button
                                    @click="isOpen = !isOpen"
                                    class="relative bg-gray-100 hover:bg-gray-200 rounded-full h-7 border transition duration-150 ease-in py-2 px-3">
                                    <svg fill="currentColor" width="24" height="6"><path d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z" style="color: rgba(163, 163, 163, .5)"></svg>
                                
                                </button>
                                <ul 
                                    x-cloak
                                    x-show.transition.origin.top.left="isOpen"
                                    @click.away="isOpen = false"
                                    @keydown.escape.window="isOpen = false" 
                                    class="absolute w-44 text-left font-semibold bg-white shadow-dialog rounded-xl py-3 md:ml-8 top-8 md:top-6 right-0 md:left-0 z-10">
                                    <li><a href="#" class="hover:bg-gray-100 block transition duration-150 ease-in px-5 py-3">Mark as Spam</a></li>
                                    <li><a href="#" class="hover:bg-gray-100 block transition duration-150 ease-in px-5 py-3">Delete Post</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end comment-container -->
        <div class="comment-container relative bg-white rounded-xl flex">
            <div class="flex flex-col md:flex-row flex-1 px-2 py-6">
               <div class="mx-2 md:mx-0 flex-none">
                <a href="#">
                    <img src="https://source.unsplash.com/200x200/?face&crop=face&v=4" alt="avatar" class="w-14 h-14 rounded-xl">
                </a>
               </div>
                <div class="w-full mx-2 md:mx-4">
                
                    <div class="text-gray-600 mt-3">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rerum fugiat illo quasi, labore excepturi maxime 
                        autem nobis ipsum itaque atque repellendus amet ducimus? Repudiandae odit cumque quidem consectetur iste 
                        molestias, natus officiis sed totam dolorem sapiente magnam debitis voluptate adipisci impedit tempora 
                        voluptas eius officia quisquam! Sunt dicta nostrum quis quisquam, eum, aspernatur accusamus et, unde iste 
                        laborum? Totam, enim esse quia accusantium sed voluptatum inventore accusamus natus, ipsum temporibus 
                        asperiores odit ipsa provident quod unde maiores eligendi? Repudiandae quisquam voluptas eum consequuntur 
                        vero vel odio? Autem, eligendi unde atque, ut voluptate fugiat, eos earum exercitationem doloribus molestias 
                        eveniet.
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div class="font-bold text-gray-900">John Doe</div>
                            <div>10 hours ago</div>        
                        </div>
                        <div x-data="{ isOpen: false }"  class="flex items-center space-x-2">
                            <div class="relative">
                                <button
                                    @click="isOpen = !isOpen" 
                                    class="relative bg-gray-100 hover:bg-gray-200 rounded-full h-7 border transition duration-150 ease-in py-2 px-3">
                                    <svg fill="currentColor" width="24" height="6"><path d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z" style="color: rgba(163, 163, 163, .5)"></svg>
                                
                                </button>
                                <ul
                                    x-cloak
                                    x-show.transition.origin.top.left="isOpen"
                                    @click.away="isOpen = false"
                                    @keydown.escape.window="isOpen = false" 
                                    class="absolute w-44 text-left font-semibold bg-white shadow-dialog rounded-xl py-3 md:ml-8 top-8 md:top-6 right-0 md:left-0">
                                    <li><a href="#" class="hover:bg-gray-100 block transition duration-150 ease-in px-5 py-3">Mark as Spam</a></li>
                                    <li><a href="#" class="hover:bg-gray-100 block transition duration-150 ease-in px-5 py-3">Delete Post</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end comment-container -->
    </div> <!-- end comments-container -->
</x-app-layout>
  