<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Homepage') }}
        </h2>
    </x-slot>
    @foreach ($posts->reverse() as $post)
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class=" bg-slate-50 overflow-hidden shadow-xl sm:rounded-lg">
                    <div class= 'flex items-center justify-center h-screen '>
                        <h1 class='mx-5 py-5 text-xl'>
                        {{$post->title}}
                        
                        @if(Auth::user()->administrator)
                            <p>
                                CHUj
                            </p>
                        @endif
                        </h1>

                    </div>
                </div>
            </div>
        </div>
    @endforeach
    
</x-app-layout>
