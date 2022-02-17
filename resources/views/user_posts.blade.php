<x-app-layout>
    <div class='bg-indigo-300'>
        <x-slot name="header">
            
                <h2 class=" font-extrabold text-xl text-gray-800 leading-tight">
                    {{ Auth::user()->name }}'s posts
                </h2>

                
            
        </x-slot>
    </div>
    @foreach ($posts as $post)
        <div class="px-12 py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-slate-50 h-auto overflow-hidden shadow-xl sm:rounded-lg">
                    <div class= 'px-4 items-center justify-center'>
                        <h1 class='mx-5 py-5 text-2xl rounded'>
                            <a class='font-bold underline decoration-rose-400'>
                                {{$post->title}}
                            </a>
                            <span class=' text-xs ml-3 uppercase font-bold'>
                                by {{$post->username}}
                            </span>

                            <span class='text-xs uppercase font-bold'>
                                on {{$post->created_at}}
                            </span>
                            <a href='{{url('delete/'.$post->id)}}' class='ml-6 text-xs text-red-900 uppercase font-bold'>
                                 delete
                            </a>

                        </h1>

                        <p class='mx-5 py-5 text-lg'>
                            {{$post->content}}
                        </p>
                        
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    
</x-app-layout>
