<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add a post to the forum') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class=" bg-slate-50 overflow-hidden shadow-xl sm:rounded-lg">
                <div class= 'flex items-center justify-center h-screen '>
                    <form class="w-full max-w-lg" method="POST" action='{{ route('insert') }}'>
                      @csrf
                        <div class="flex flex-wrap -mx-3 mb-6">
                          <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                              Title
                            </label>
                            <input name='title' class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" />
                          </div>
                          <div class="w-full md:w-1/2 px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                             Content
                            </label>
                            <textarea name='content' rows="5" class="appearance-none block h-10
                                             w-full bg-gray-200 text-gray-700
                                            border border-gray-200 rounded py-3 px-4
                                             leading-tight focus:outline-none focus:bg-white
                                              focus:border-gray-500" id="grid-last-name">
                            </textarea>
                            <button type='submit' class="bg-blue-500 hover:bg-blue-700 text-black font-bold py-2 px-4 rounded">
                              Submit
                            </button>
                          </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
