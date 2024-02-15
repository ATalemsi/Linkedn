<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Data') }}
        </h2>
    </x-slot>
        <div class="py-12">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight my-6 mx-6">
                {{ __('Candidat List') }}
            </h2>
            <div class="relative mx-6 overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">Condidat Name</th>
                        <th scope="col" class="px-6 py-3">Poste Actuel</th>
                        <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">Email</th>
                        <th scope="col" class="px-6 py-3">Adresse</th>
                        <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">Industrie</th>
                        <th scope="col" class="px-6 py-3">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($candidates as $candidature)
                        <tr class="border-b border-gray-200 dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                {{$candidature->user->name}}
                            </th>
                            <td class="px-6 py-4">
                                {{$candidature->poste_actuel}}
                            </td>
                            <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">
                                {{$candidature->user->email}}
                            </td>
                            <td class="px-6 py-4">
                                {{$candidature->adresse}}
                            </td>
                            <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">
                                {{$candidature->industrie}}
                            </td>
                            <td class="px-6 py-4">
                                <a href="{{ route('candidate.soft-delete', $candidature->id) }}"
                                   onclick="event.preventDefault();
                                      document.getElementById('delete-formCandidate-{{ $candidature->id }}').submit();"
                                   class="text-red-600 hover:text-red-900">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                    </svg>
                                </a>

                                <form id="delete-formCandidate-{{ $candidature->id }}" action="{{ route('candidate.soft-delete', $candidature->id) }}" method="POST" style="display: none;">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </td>
                        </tr>

                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    <div class="py-12">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight my-6 mx-6">
            {{ __('Offres List') }}
        </h2>
        <div class="relative mx-6 overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">Offre Title</th>
                    <th scope="col" class="px-6 py-3">Description</th>
                    <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">Emplacement</th>
                    <th scope="col" class="px-6 py-3">Competences requises</th>
                    <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($offres as $offre)
                    <tr class="border-b border-gray-200 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                            {{ $offre->titre }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $offre->description }}
                        </td>
                        <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">
                            {{$offre->emplacement}}
                        </td>
                        <td class="px-6 py-4">
                            {{ $offre->competences_requises }}
                        </td>
                        <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">
                            <a href="{{ route('offre.soft-delete', $offre->id) }}"
                               onclick="event.preventDefault();
                                   document.getElementById('delete-formOffre-{{ $offre->id }}').submit();"
                               class="text-red-600 hover:text-red-900">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                </svg>
                            </a>

                            <form id="delete-formOffre-{{ $offre->id }}" action="{{ route('offre.soft-delete', $offre->id) }}" method="POST" style="display: none;">
                                @csrf
                                @method('DELETE')
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="py-12">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight my-6 mx-6">
            {{ __('Entreprise List') }}
        </h2>
        <div class="relative mx-6 overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">Entreprise Name</th>
                    <th scope="col" class="px-6 py-3">Description</th>
                    <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">Industrie</th>
                    <th scope="col" class="px-6 py-3">Slogan</th>
                    <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">Contact</th>
                    <th scope="col" class="px-6 py-3">Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($entreprises as $entreprise)
                    <tr class="border-b border-gray-200 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                            {{ $entreprise->user->name  }}
                        </th>
                        <td class="px-6 py-4 ">
                            {{ $entreprise->description }}
                        </td>
                        <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">
                            {{$entreprise->industrie}}
                        </td>
                        <td class="px-6 py-4">
                            {{ $entreprise->slogan }}
                        </td>
                        <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">
                            {{$entreprise->user->email}}
                        </td>
                        <td class="px-6 py-4">
                            <!-- Delete action with icon -->
                            <a href="{{ route('entreprise.soft-delete', $entreprise->id) }}"
                               onclick="event.preventDefault();
                                       document.getElementById('delete-formentreprise-{{ $entreprise->id }}').submit();"
                               class="text-red-600 hover:text-red-900">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                </svg>
                            </a>

                            <form id="delete-formentreprise-{{ $entreprise->id }}" action="{{ route('entreprise.soft-delete', $entreprise->id) }}" method="POST" style="display: none;">
                                @csrf
                                @method('DELETE')
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    </x-app-layout>



