<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Job Offres') }}
        </h2>
        <div class="flex items-center justify-center p-5">
            <div class="flex">
                <div class="flex w-10 items-center justify-center rounded-tl-lg rounded-bl-lg  bg-white p-5">
                    <svg viewBox="0 0 20 20" aria-hidden="true" class="pointer-events-none absolute w-5 fill-gray-500 transition">
                        <path d="M16.72 17.78a.75.75 0 1 0 1.06-1.06l-1.06 1.06ZM9 14.5A5.5 5.5 0 0 1 3.5 9H2a7 7 0 0 0 7 7v-1.5ZM3.5 9A5.5 5.5 0 0 1 9 3.5V2a7 7 0 0 0-7 7h1.5ZM9 3.5A5.5 5.5 0 0 1 14.5 9H16a7 7 0 0 0-7-7v1.5Zm3.89 10.45 3.83 3.83 1.06-1.06-3.83-3.83-1.06 1.06ZM14.5 9a5.48 5.48 0 0 1-1.61 3.89l1.06 1.06A6.98 6.98 0 0 0 16 9h-1.5Zm-1.61 3.89A5.48 5.48 0 0 1 9 14.5V16a6.98 6.98 0 0 0 4.95-2.05l-1.06-1.06Z"></path>
                    </svg>
                </div>
                <form action="{{ route('searchoffre') }}" method="GET">
                    <input type="text" class="w-full max-w-[160px] bg-white pl-2 text-base font-semibold outline-0" placeholder="Search Offre" name="query">
                    <button class="bg-gray-700 p-2 rounded-tr-lg rounded-br-lg cursor-pointer text-white font-semibold hover:bg-gray-500 transition-colors" type="submit">Search</button>
                </form>
            </div>
        </div>
    </x-slot>

    <div class="bg-gray-100 min-h-screen py-12 flex items-center justify-center">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">


           @foreach($offres as $offre)
            <div class="bg-white rounded-lg overflow-hidden max-w-md  shadow-lg transition-transform transform hover:scale-105">
                <div class="p-1 bg-blue-200">
                </div>
                <div class="p-8">
                    <img src="{{ asset('images/' . $offre->entreprise->logo) }}" alt="Profile Photo" class="shadow-xl rounded-t-lg h-auto my-12 ">
                    <h2 class="text-3xl font-bold text-gray-800 mb-4">{{$offre->titre}}</h2>
                    <p class="text-2xl  text-gray-700 mb-6"><span class=" text-2xl font-bold text-gray-800">Company :</span>{{$offre->entreprise->nom}}</p>
                    <p class="text-gray-600 mb-6"><span class="font-bold text-gray-800">  type de contrat :</span> {{$offre->type_contrat}}</p>
                    <ul class="text-sm text-gray-600 mb-6">
                        <li class="mb-2 flex items-center">
                            <svg class="w-4 h-4 mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span class="font-bold text-gray-800  w-fit">Competences Requises:</span>
                            {{$offre->competences_requises}}
                        </li>
                        <li class="mb-2 flex items-center">
                            <svg class="w-4 h-4 mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span class="font-bold text-gray-800 ">Place:</span>
                            {{$offre->emplacement}}
                        </li>
                    </ul>
                    <p class="text-gray-600 mb-6"><span class="font-bold text-gray-800"> Description: </span> {{$offre->description}}</p>

                </div>
                <div class="p-4">
                    <form action="{{ route('offre.postuler') }}" method="POST">
                        @csrf
                        <input type="hidden" name="offre_id" value="{{ $offre->id }}">

                        <button type="submit" class="w-full bg-blue-500 text-white rounded-full px-4 py-2 hover:bg-blue-700 focus:outline-none focus:shadow-outline-blue active:bg-blue-800">
                            Postuler
                        </button>
                    </form>
                </div>
            </div>
            @endforeach


        </div>
    </div>
</x-app-layout>
