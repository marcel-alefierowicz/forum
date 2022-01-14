<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Add a post to the forum') }}
      </h2>
  </x-slot>

  <div class="py-12">
      <div class="max-w-7xl mx-auto">
          <div class=" bg-slate-50 overflow-hidden shadow-xl sm:rounded-lg">
              <div class= 'w-full'>
                  <form class="w-full px-4 pt-4 max-w-lg" method="POST" action='{{ route('insert') }}'>
                    @csrf
                      <div class="p-4 -mx-3 mb-6">
                        <div class="w-full px-3 mb-6">
                          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                            Title
                          </label>
                          <input name='title' class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" />
                        </div>
                        <div class="w-full px-3 mb-6">
                          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                           Content
                          </label>
                          <textarea name='content' cols='15' rows="5" class="appearance-none block 
                                           w-full bg-gray-200 text-gray-700
                                          border border-gray-200 rounded py-3 px-4
                                           leading-tight focus:outline-none focus:bg-white
                                            focus:border-gray-500" id="grid-last-name"></textarea>
                          
                        </div>
                        <div class="w-full px-3 mb-6">
                          <button type='submit' class='shadow-lg rounded-md bg-indigo-300 text-white px-4 py-4'
                          >
                          submit
                          </button>
                        </div>
                      </div>
                  </form>

              </div>
          </div>
      </div>
  </div>
</x-app-layout>
