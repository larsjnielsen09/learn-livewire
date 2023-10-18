<div>
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900">
            <form wire:submit.prevent="createBook">
                <input type="text" id="title" wire:model="title">
                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
    <div class="space-y-2">
        @foreach ($books as $book)
            <livewire:book-item :book="$book" wire:key="$book->id" />
        @endforeach
    </div>
</div>
