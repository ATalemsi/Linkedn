<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Entreprise ') }}
            </h2>
            <div class="flex items-center justify-center p-5">
                    <div class="flex">
                        <div class="flex w-10 items-center justify-center rounded-tl-lg rounded-bl-lg  bg-white p-5">
                            <svg viewBox="0 0 20 20" aria-hidden="true" class="pointer-events-none absolute w-5 fill-gray-500 transition">
                                <path d="M16.72 17.78a.75.75 0 1 0 1.06-1.06l-1.06 1.06ZM9 14.5A5.5 5.5 0 0 1 3.5 9H2a7 7 0 0 0 7 7v-1.5ZM3.5 9A5.5 5.5 0 0 1 9 3.5V2a7 7 0 0 0-7 7h1.5ZM9 3.5A5.5 5.5 0 0 1 14.5 9H16a7 7 0 0 0-7-7v1.5Zm3.89 10.45 3.83 3.83 1.06-1.06-3.83-3.83-1.06 1.06ZM14.5 9a5.48 5.48 0 0 1-1.61 3.89l1.06 1.06A6.98 6.98 0 0 0 16 9h-1.5Zm-1.61 3.89A5.48 5.48 0 0 1 9 14.5V16a6.98 6.98 0 0 0 4.95-2.05l-1.06-1.06Z"></path>
                            </svg>
                        </div>
                        <form action="{{ route('search') }}" method="GET">
                          <input type="text" class="w-full max-w-[160px] bg-white pl-2 text-base font-semibold outline-0" placeholder="Search Entreprises" name="query">
                            <button class="bg-gray-700 p-2 rounded-tr-lg rounded-br-lg cursor-pointer text-white font-semibold hover:bg-gray-500 transition-colors" type="submit">Search</button>
                        </form>
                    </div>
              </div>
            </div>
    </x-slot>
    <div class="bg-gray-100 min-h-96 py-4 flex items-center justify-center">
        @if(session()->has('error'))
            <div class="flex w-full max-w-sm overflow-hidden bg-white rounded-lg shadow-md my-6 dark:bg-gray-800" x-data="{show : true}" x-init="setTimeout(()=> show = false , 3000)"
                 x-show="show">
                <div class="flex items-center justify-center w-12 bg-emerald-500">
                    <svg class="w-6 h-6 text-white fill-current" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                        <path d="M20 3.33331C10.8 3.33331 3.33337 10.8 3.33337 20C3.33337 29.2 10.8 36.6666 20 36.6666C29.2 36.6666 36.6667 29.2 36.6667 20C36.6667 10.8 29.2 3.33331 20 3.33331ZM16.6667 28.3333L8.33337 20L10.6834 17.65L16.6667 23.6166L29.3167 10.9666L31.6667 13.3333L16.6667 28.3333Z" />
                    </svg>
                </div>

                <div class="px-4 py-2 -mx-3">
                    <div class="mx-3">
                        <span class="font-semibold text-emerald-500 dark:text-emerald-400">Success</span>
                        <p class="text-sm text-gray-600 dark:text-gray-200">{{session('error')}}</p>
                    </div>
                </div>
            </div>
        @endif
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
         @foreach($entreprises as $entreprise)
                <div class="service-card w-full shadow-xl  snap-start shrink-0 py-8 px-6 bg-white flex flex-col items-start gap-3 transition-all duration-300 group hover:bg-[#202127]">
                    <img src="{{ asset('images/' . $entreprise->logo) }}" alt="Profile Photo" class="shadow-xl rounded-full h-auto align-middle border-none  max-w-150-px">

                    <p class="font-bold text-2xl group-hover:text-white text-black/80">
                       {{$entreprise->nom}}
                    </p>
                    <p class="text-gray-400 text-sm"><span class="text-gray-600 text-xl font-semibold group-hover:text-gray-400">Description:</span>
                        {{$entreprise->description}}
                    </p>
                    <p class="text-gray-400 text-sm"><span class="text-gray-600 text-xl font-semibold group-hover:text-gray-400">Industrie:</span>
                        {{$entreprise->industrie}}
                    </p>
                    <div class="mt-auto">
                        <form action="{{ route('user.newsletter') }}" method="POST">
                            @csrf
                            <input type="hidden" name="email" placeholder="Enter your email"  value="{{auth()->user()->email}}">
                            <x-primary-button class="ms-4">
                                {{ __('Submit') }}
                            </x-primary-button>
                        </form>
                    </div>
                </div>
         @endforeach
        </div>
    </div>
</x-app-layout>
