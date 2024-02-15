<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Add Offre') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <section>

                        <header>
                            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                                {{ __('Offres') }}
                            </h2>

                            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                                {{ __("Add New Job Offre") }}
                            </p>
                        </header>
                        <form  action="{{route('offre.new')}}" method="post"  class="mt-6 space-y-6">
                            @csrf
                            <div>
                                <x-input-label for="titre" :value="__('Title')" />
                                <x-text-input id="titre" name="titre" type="text" class="mt-1 block w-full" value="{{ old('titre') }}"  />
                                <x-input-error class="mt-2" :messages="$errors->get('title')" />
                            </div>

                            <div>
                                <x-input-label for="description" :value="__('Description')" />
                                <textarea id="description" name="description" class="block mt-1 w-full rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50">{{ old('description') }}</textarea>
                                <x-input-error class="mt-2" :messages="$errors->get('description')" />

                            </div>

                            <div>
                                <x-input-label for="competences_requises" :value="__('Competence Requises')" />
                                <x-text-input id="competences_requises" name="competences_requises" type="text" class="mt-1 block w-full" value="{{ old('competences_requises') }}" />
                                <x-input-error class="mt-2" :messages="$errors->get('competences_requises')" />

                            </div>
                            <div>
                                <x-input-label for="type_contrat" :value="__('Type Contrat')" />
                                <select id="type_contrat" name="type_contrat" class="block mt-1 w-full rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50">
                                    <option value="distance">Distance</option>
                                    <option value="hybride">Hybride</option>
                                    <option value="temps_plein">Temps Plein</option>
                                </select>
                            </div>
                            <div>
                                <x-input-label for="emplacement" :value="__('Emplacement')" />
                                <x-text-input id="emplacement" name="emplacement" type="text" class="mt-1 block w-full"  value="{{ old('emplacement') }}"  />
                                <x-input-error class="mt-2" :messages="$errors->get('emplacement')" />
                            </div>
                            <div class="flex items-center gap-4">
                                <x-primary-button class="ms-4">
                                    {{ __('Submit') }}
                                </x-primary-button>
                            </div>
                        </form>
                    </section>
                </div>
            </div>
       </div>
    </div>
</x-app-layout>
