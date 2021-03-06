<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('News') }}
        </h2>
        <a class="bg-blue-200 text-blue-700 px-3 px-2 rounded-lg" href="{{ route('news.create') }}">Create</a>
    </x-slot>

    <x-content-body>
        @if(session()->has('success'))
            <div class="mb-6 bg-green-200 text-green-700 px-3 px-2 rounded-lg">{{ session()->get('success') }}</div>
        @endif
        <div class="flex flex-wrap justify-between -mx-3">
            @forelse($news as $newsItem)
                <div class="w-full md:w-1/3 lg:w-1/4 px-3">
                    <x-news.news-preview :news="$newsItem"/>
                </div>
            @empty
                <p>There's no news for today!</p>
            @endforelse
        </div>
    </x-content-body>

</x-app-layout>
