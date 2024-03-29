<div>
    @if ($comments->isNotEmpty())

        <div class="comments-container relative space-y-6 md:ml-22 pt-4 my-8 mt-1">

            @foreach ($comments as $comment)
                <livewire:idea-comment
                    :key="$comment->id"
                    :comment="$comment"
                    :ideaUserId="$idea->user->id"
                />
            @endforeach

            {{-- <div class="comment-container relative bg-white rounded-xl flex">
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
            </div> <!-- end comment-container --> --}}

        </div> <!-- end comments-container -->
        <div class=" md:ml-22 my-8">
            {{ $comments->links() }}
        </div>
    @else
        <div class="mx-auto w-70 mt-12">
            <img src="{{ asset('img/no-ideas.svg') }}" alt="No Ideas" class="mx-auto" style="mix-blend-mode: luminosity">
            <div class="text-gray-400 text-center font-bold mt-6">No comments yet...</div>
        </div>
    @endif
</div>
