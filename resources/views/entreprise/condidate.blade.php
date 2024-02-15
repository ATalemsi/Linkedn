<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Condidat List') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="relative mx-6 overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">Condidat  Name</th>
                    <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">Poste Actuel</th>
                    <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">Type de Contract</th>
                    <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">Contact</th>
                    <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">Offre Title</th>


                </tr>
                </thead>
                <tbody>
                @foreach($candidatures as $candidature)
                    <tr class="border-b border-gray-200 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                            {{$candidature->user->name}}
                        </th>
                        <td class="px-6 py-4">
                            {{$candidature->poste_actuel}}
                        </td>
                        <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">
                            {{$candidature->offresEmploi->first()->type_contrat}}
                        </td>
                        <td class="px-6 py-4">
                            {{$candidature->informations_contact}}
                        </td>
                        <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">
                            {{$candidature->offresEmploi->first()->titre}}
                        </td>
                    </tr>

                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
