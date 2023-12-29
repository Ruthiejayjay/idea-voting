<x-app-layout>
  <div class="filters flex space-x-6">
        <div class=" w-1/3">
            <select name="category" id="category" class="w-full rounded-xl border-none px-4 py-2">
                <option value="Category One">Category One</option>
                <option value="Category Two">Category Two</option>
                <option value="Category Three">Category Three</option>
                <option value="Category Four">Category Four</option>  
            </select>
        </div>
        <div class=" w-1/3">
            <select name="other_filters" id="other_filters" class="w-full rounded-xl border-none px-4 py-2">
                <option value="Filter One">Filter One</option>
                <option value="Filter Two">Filter Two</option>
                <option value="Filter Three">Filter Three</option>
                <option value="Filter Four">Filter Four</option>  
            </select>
        </div>
        <div class="w-2/3 relative">          
            <input type="search" name="" id="" placeholder="Find an idea" class="w-full rounded-xl border-none bg-white placeholder:text-gray-900 px-4 py-2 pl-8">
            <div class="absolute top-0 flex items-center h-full ml-2">
                <svg class="w-4 text-gray-700" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                  </svg>
            </div>
        </div>
  </div> <!-- end filters -->

  <div class="ideas-container space-y-6 my-6">
    <div class="idea-container hover:shadow-card transition duration-150 ease-in bg-white rounded-xl flex cursor-pointer">
        <div class="border-r border-gray-100 px-5 py-8">
            <div class="text-center">
                <div class="font-semibold text-2xl">12</div>
                <div class="text-gray-500">Votes</div>
            </div>
            <div class="mt-8">
               <button class="w-20 bg-gray-200 border border-gray-200
                 hover:border-gray-400 transition duration-150 ease-in font-bold text-xxs 
                 uppercase rounded-xl px-4 py-3"
                >Vote</button> 
            </div>
        </div>
        <div class="flex flex-1 px-2 py-6">
           <div class="flex-none">
            <a href="#">
                <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar" class="w-14 h-14 rounded-xl">
            </a>
           </div>
            <div class="w-full mx-4">
                <h4 class="text-xl font-semibold">
                    <a href="#" class=" hover:underline">A random title can go here</a>
                </h4>
                <div class="text-gray-600 mt-3 line-clamp-3">
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
                        <div>10 hours ago</div>
                        <div>&bull;</div>
                        <div>Category 1</div>
                        <div>&bull;</div>
                        <div class="text-gray-900">3 Comments</div>
                    </div>
                    <div
                        x-data="{ isOpen: false }"
                        class="flex items-center space-x-2">
                        <div class="bg-gray-200 text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">Open</div>
                        <button
                            @click="isOpen = !isOpen" 
                            class="relative bg-gray-100 hover:bg-gray-200 rounded-full h-7 border transition duration-150 ease-in py-2 px-3">
                            <svg fill="currentColor" width="24" height="6"><path d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z" style="color: rgba(163, 163, 163, .5)"></svg>
                            <ul 
                                x-cloak
                                x-show.transition.origin.top.left="isOpen"
                                @click.away="isOpen = false"
                                @keydown.escape.window="isOpen = false"
                                class="absolute w-44 text-left font-semibold bg-white shadow-dialog rounded-xl py-3 ml-8">
                                <li><a href="#" class="hover:bg-gray-100 block transition duration-150 ease-in px-5 py-3">Mark as Spam</a></li>
                                <li><a href="#" class="hover:bg-gray-100 block transition duration-150 ease-in px-5 py-3">Delete Post</a></li>
                            </ul>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- end idea-container -->

    <div class="idea-container hover:shadow-card transition duration-150 ease-in bg-white rounded-xl flex cursor-pointer">
        <div class="border-r border-gray-100 px-5 py-8">
            <div class="text-center">
                <div class="font-semibold text-blue text-2xl">66</div>
                <div class="text-gray-500">Votes</div>
            </div>
            <div class="mt-8">
               <button class="w-20 bg-blue border border-blue
                 hover:border-hover transition duration-150 ease-in font-bold text-xxs 
                 uppercase rounded-xl px-4 py-3"
                >Voted</button> 
            </div>
        </div>
        <div class="flex flex-1 px-2 py-6">
            <div class="flex-none">
                <a href="#">
                    <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar" class="w-14 h-14 rounded-xl">
                </a>
            </div>
            <div class="w-full mx-4">
                <h4 class="text-xl font-semibold">
                    <a href="#" class=" hover:underline">Another random title can go here</a>
                </h4>
                <div class="text-gray-600 mt-3 line-clamp-3">
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
                        <div>10 hours ago</div>
                        <div>&bull;</div>
                        <div>Category 1</div>
                        <div>&bull;</div>
                        <div class="text-gray-900">3 Comments</div>
                    </div>
                    <div 
                        x-data="{ isOpen: false }"
                        class="flex items-center space-x-2">
                        <div class="bg-yellow text-white text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">In Progress</div>
                        <button
                            @click="isOpen = !isOpen" 
                            class="relative bg-gray-100 hover:bg-gray-200 rounded-full h-7 border transition duration-150 ease-in py-2 px-3">
                            <svg fill="currentColor" width="24" height="6"><path d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z" style="color: rgba(163, 163, 163, .5)"></svg>
                            <ul 
                                x-cloak
                                x-show.transition.origin.top.left="isOpen"
                                @click.away="isOpen = false"
                                @keydown.escape.window="isOpen = false"
                                class="absolute w-44 text-left font-semibold bg-white shadow-dialog rounded-xl py-3 ml-8">
                                <li><a href="#" class="hover:bg-gray-100 block transition duration-150 ease-in px-5 py-3">Mark as Spam</a></li>
                                <li><a href="#" class="hover:bg-gray-100 block transition duration-150 ease-in px-5 py-3">Delete Post</a></li>
                            </ul>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- end idea-container -->

    <div class="idea-container hover:shadow-card transition duration-150 ease-in bg-white rounded-xl flex cursor-pointer">
        <div class="border-r border-gray-100 px-5 py-8">
            <div class="text-center">
                <div class="font-semibold text-2xl">32</div>
                <div class="text-gray-500">Votes</div>
            </div>
            <div class="mt-8">
               <button class="w-20 bg-gray-200 border border-gray-200
                 hover:border-gray-400 transition duration-150 ease-in font-bold text-xxs 
                 uppercase rounded-xl px-4 py-3"
                >Vote</button> 
            </div>
        </div>
        <div class="flex flex-1 px-2 py-6">
           <div class="flex-none">
            <a href="#">
                <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar" class="w-14 h-14 rounded-xl">
            </a>
           </div>
            <div class="w-full mx-4">
                <h4 class="text-xl font-semibold">
                    <a href="#" class=" hover:underline">A random title can go here</a>
                </h4>
                <div class="text-gray-600 mt-3 line-clamp-3">
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
                        <div>10 hours ago</div>
                        <div>&bull;</div>
                        <div>Category 1</div>
                        <div>&bull;</div>
                        <div class="text-gray-900">3 Comments</div>
                    </div>
                    <div x-data="{ isOpen: false }" class="flex items-center space-x-2">
                        <div class="bg-red text-white text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">Closed</div>
                        <button
                            @click="isOpen = !isOpen"  
                            class="relative bg-gray-100 hover:bg-gray-200 rounded-full h-7 border transition duration-150 ease-in py-2 px-3">
                            <svg fill="currentColor" width="24" height="6"><path d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z" style="color: rgba(163, 163, 163, .5)"></svg>
                            <ul 
                                x-cloak
                                x-show.transition.origin.top.left="isOpen"
                                @click.away="isOpen = false"
                                @keydown.escape.window="isOpen = false" 
                                class="absolute w-44 text-left font-semibold bg-white shadow-dialog rounded-xl py-3 ml-8">
                                <li><a href="#" class="hover:bg-gray-100 block transition duration-150 ease-in px-5 py-3">Mark as Spam</a></li>
                                <li><a href="#" class="hover:bg-gray-100 block transition duration-150 ease-in px-5 py-3">Delete Post</a></li>
                            </ul>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- end idea-container -->

    <div class="idea-container hover:shadow-card transition duration-150 ease-in bg-white rounded-xl flex cursor-pointer">
        <div class="border-r border-gray-100 px-5 py-8">
            <div class="text-center">
                <div class="font-semibold text-2xl">22</div>
                <div class="text-gray-500">Votes</div>
            </div>
            <div class="mt-8">
               <button class="w-20 bg-gray-200 border border-gray-200
                 hover:border-gray-400 transition duration-150 ease-in font-bold text-xxs 
                 uppercase rounded-xl px-4 py-3"
                >Vote</button> 
            </div>
        </div>
        <div class="flex flex-1 px-2 py-6">
            <div class="flex-none">
                <a href="#">
                    <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar" class="w-14 h-14 rounded-xl">
                </a>
            </div>
            <div class="w-full mx-4">
                <h4 class="text-xl font-semibold">
                    <a href="#" class=" hover:underline">One more random title can go here</a>
                </h4>
                <div class="text-gray-600 mt-3 line-clamp-3">
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
                        <div>10 hours ago</div>
                        <div>&bull;</div>
                        <div>Category 1</div>
                        <div>&bull;</div>
                        <div class="text-gray-900">3 Comments</div>
                    </div>
                    <div x-data="{ isOpen: false }" class="flex items-center space-x-2">
                        <div class="bg-green text-white text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">Implemented</div>
                        <button 
                            @click="isOpen = !isOpen"
                            class="relative bg-gray-100 hover:bg-gray-200 rounded-full h-7 border transition duration-150 ease-in py-2 px-3">
                            <svg fill="currentColor" width="24" height="6"><path d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z" style="color: rgba(163, 163, 163, .5)"></svg>
                            <ul 
                                x-cloak
                                x-show.transition.origin.top.left="isOpen"
                                @click.away="isOpen = false"
                                @keydown.escape.window="isOpen = false"
                                class="absolute w-44 text-left font-semibold bg-white shadow-dialog rounded-xl py-3 ml-8">
                                <li><a href="#" class="hover:bg-gray-100 block transition duration-150 ease-in px-5 py-3">Mark as Spam</a></li>
                                <li><a href="#" class="hover:bg-gray-100 block transition duration-150 ease-in px-5 py-3">Delete Post</a></li>
                            </ul>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- end idea-container -->
    
    <div class="idea-container hover:shadow-card transition duration-150 ease-in bg-white rounded-xl flex cursor-pointer">
        <div class="border-r border-gray-100 px-5 py-8">
            <div class="text-center">
                <div class="font-semibold text-2xl">2</div>
                <div class="text-gray-500">Votes</div>
            </div>
            <div class="mt-8">
               <button class="w-20 bg-gray-200 border border-gray-200
                 hover:border-gray-400 transition duration-150 ease-in font-bold text-xxs 
                 uppercase rounded-xl px-4 py-3"
                >Vote</button> 
            </div>
        </div>
        <div class="flex flex-1 px-2 py-6">
            <div class="flex-none">
                <a href="#">
                    <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar" class="w-14 h-14 rounded-xl">
                </a>
            </div>
            <div class="w-full mx-4">
                <h4 class="text-xl font-semibold">
                    <a href="#" class=" hover:underline">Last random title can go here</a>
                </h4>
                <div class="text-gray-600 mt-3 line-clamp-3">
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
                        <div>10 hours ago</div>
                        <div>&bull;</div>
                        <div>Category 1</div>
                        <div>&bull;</div>
                        <div class="text-gray-900">3 Comments</div>
                    </div>
                    <div x-data="{ isOpen: false }" class="flex items-center space-x-2">
                        <div class="bg-purple text-white text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">Considering</div>
                        <button 
                            @click="isOpen = !isOpen"
                            class="relative bg-gray-100 hover:bg-gray-200 border rounded-full h-7 transition duration-150 ease-in py-2 px-3">
                            <svg fill="currentColor" width="24" height="6"><path d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z" style="color: rgba(163, 163, 163, .5)"></svg>
                            <ul 
                                x-cloak
                                x-show.transition.origin.top.left="isOpen"
                                @click.away="isOpen = false"
                                @keydown.escape.window="isOpen = false"
                                class="absolute w-44 text-left font-semibold bg-white shadow-dialog rounded-xl py-3 ml-8">
                                <li><a href="#" class="hover:bg-gray-100 block transition duration-150 ease-in px-5 py-3">Mark as Spam</a></li>
                                <li><a href="#" class="hover:bg-gray-100 block transition duration-150 ease-in px-5 py-3">Delete Post</a></li>
                            </ul>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- end idea-container -->

  </div> <!-- end ideas-container -->
</x-app-layout>
