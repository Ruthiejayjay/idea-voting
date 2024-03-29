<div>
    <div 
        x-data="{ isOpen: false, lastComment: null, comments: null }" 
        x-init="
            $wire.on('commentWasAdded', () => {
                isOpen = false
            })
            Livewire.hook('message.processed', (message, component) => {
                if (
                    message.updateQueue[0].payload.event === 'commentWasAdded' &&
                    component.fingerprint.name === 'idea-comments'
                ) {
                    const lastComment = document.querySelector('.comment-container:last-child');
                    lastComment.scrollIntoView({ behavior: 'smooth' });
                    lastComment.classList.add('bg-green-50');
                    setTimeout(() => {
                        lastComment.classList.remove('bg-green-50');
                    }, 5000);
                }
            })
        "
        
        class="relative"
    >
        <button
            @click="
                isOpen = !isOpen
                if (isOpen) {
                    $nextTick(() => $refs.comment.focus())
                }
            "
            type="button"
            class="flex items-center justify-center h-11 w-32 text-xs bg-blue text-white font-semibold rounded-xl border border-blue hover:bg-blue-hover transition duration-150 ease-in px-6 py-3"
        >
            <span class="ml-1 text-sm">Reply</span>
        </button>
        <div 
            x-cloak
            x-show.transition.origin.top.left="isOpen"
            @click.away="isOpen = false"
            @keydown.escape.window="isOpen = false"
            class="absolute z-10 w-64 md:w-104 text-left font-semibold text-sm bg-white shadow-dialog rounded-xl mt-2">
            @auth
                <form wire:submit.prevent="addComment" action="#" class="space-y-4 px-4 py-6">
                    <div>
                        <textarea x-ref="comment" wire:model="comment" name="post_comment" id="post_comment" cols="30" rows="4" required
                        class="w-full text-sm border-none bg-gray-100 rounded-xl placeholder:text-gray-900" placeholder="Go ahead, don't be shy. Share your thoughts..."></textarea>
                        @error('comment')
                            <p class="text-red text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="flex flex-col md:flex-row items-center space-y-3 md:space-y-0 md:space-x-3">
                        <button
                            type="submit"
                            class="flex items-center justify-center h-11 w-full md:w-1/2 text-sm bg-blue text-white font-semibold rounded-xl border border-blue hover:bg-blue-hover transition duration-150 ease-in px-6 py-3"
                        >
                            Post Comment
                        </button>
                        <button
                            type="button"
                            class="flex items-center justify-center w-full md:w-32 h-11 text-xs bg-gray-200 font-semibold rounded-xl border border-gray-200 hover:border-gray-400 transition duration-150 ease-in px-6 py-3"
                        >
                            <svg class="text-gray-600 w-4 transform -rotate-45" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" />
                            </svg>
                            <span class="ml-1">Attach</span>
                        </button>
                    </div>
                </form>
            @else
                <div class="px-4 py-6">
                    <p class="font-normal">Please login or create an account to post a comment.</p>
                    <div class="flex items-center space-x-3 mt-8">
                        <a
                            href="{{ route('login') }}"
                            class="w-1/2 h-11 text-sm text-center bg-blue text-white font-semibold rounded-xl hover:bg-blue-hover transition duration-150 ease-in px-6 py-3"
                        >
                            Login
                        </a>
                        <a
                            href="{{ route('register') }}"
                            class="flex items-center justify-center w-1/2 h-11 text-xs bg-gray-200 font-semibold rounded-xl border border-gray-200 hover:border-gray-400 transition duration-150 ease-in px-6 py-3"
                        >
                            Sign Up
                        </a>
                    </div>
                </div>
            @endauth
        </div>
    </div>
    @if (session('success_message'))
    <div
        x-data="{ isVisible: true }"
        x-show="isVisible"
        x-init="
                setTimeout(() => {
                    isVisible = false
                }, 5000)
            "
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 transform translate-x-8"
        x-transition:enter-end="opacity-100 transform translate-x-0"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100 transform translate-x-0"
        x-transition:leave-end="opacity-0 transform translate-x-8"
        @keydown.escape.window="isOpen = false"

        class="z-20 flex justify-between max-w-xs sm:max-w-sm w-full fixed bottom-0 right-0 bg-white rounded-xl shadow-lg border px-4 py-5 mx-2 sm:mx-6 my-8"
    >
        <div class="flex items-center">
            <svg class="text-green h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <div class="font-semibold text-gray-500 text-sm sm:text-base ml-2">{{ session('success_message') }}</div>
        </div>
        <button @click="isOpen = false" class="text-gray-400 hover:text-gray-500">
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>
    @endif

</div>