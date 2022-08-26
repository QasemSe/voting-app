<form wire:submit.prevent="createIdea" action="#" method="POST" class="text-sm space-y-4 px-4 py-6">
    <div>
        <input wire:model.defer="title" type="text" class="text-sm border-none w-full bg-gray-100 rounded-xl placeholder-gray-900 px-4 py-2" placeholder="Your Idea">
        @error('title')
        <p class="text-red text-xs mt-1">{{ $message }}</p>
        @enderror
    </div>
    <div>
        <select wire:model.defer="category" name="category_add" id="category_add" class="text-sm bg-gray-100 w-full rounded-xl border-none px-4 py-2">
            @foreach($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
        @error('category')
        <p class="text-red text-xs mt-1">{{ $message }}</p>
        @enderror
    </div>
    <div>
        <textarea wire:model.defer="description" name="idea" id="idea" cols="30" rows="4" class="w-full bg-gray-100 rounded-xl text-sm placeholder-gray-900 px-4 py-2 border-none" placeholder="Describe Your Idea"></textarea>
        @error('description')
        <p class="text-red text-xs mt-1">{{ $message }}</p>
        @enderror
    </div>
    <div class="flex items-center justify-between space-x-3">
        <button type="button" class="flex items-center justify-center w-1/2 h-11 text-xs bg-gray-200 font-semibold rounded-xl border border-gray-200 hover:border-gray-400 transition duration-150 ease-in px-6 py-3">
            <svg class="text-gray-600 w-4 transform -rotate-45" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" />
            </svg>
            <span class="ml-1">Attach</span>
        </button>
        <button type="submit" class="flex items-center justify-center w-1/2 h-11 text-xs bg-blue text-white font-semibold rounded-xl border border-blue hover:bg-blue-hover transition duration-150 ease-in px-6 py-3">
            <span class="ml-1">Submit</span>
        </button>
    </div>

    <div>
        @if(session('success_message'))
            <div x-data="{ isVisible: true }"
                 x-init="setTimeout(() => {
                    isVisible = false
                 }, 5000)"
                 x-show.transition.duration.1000ms="isVisible"
                 class="text-green mt-4">
                {{ session('success_message') }}
            </div>
        @endif
    </div>
</form>
