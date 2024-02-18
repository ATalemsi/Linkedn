<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Statistiques') }}
        </h2>
    </x-slot>
    <div class="bg-gray-900">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:py-16 sm:px-6 lg:px-8 lg:py-20">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-3xl font-extrabold text-white sm:text-4xl">
                    THis is the statistiques about all the data in this web sire
                </h2>
                <p class="mt-3 text-xl text-indigo-200 sm:mt-4">
                    consulte the statistiques and give your opinion.
                </p>
            </div>
            <dl class="mt-10 text-center sm:max-w-3xl sm:mx-auto sm:grid sm:grid-cols-3 sm:gap-8">
                <div class="flex flex-col">
                    <dt class="order-2 mt-2 text-lg leading-6 font-medium text-indigo-200">
                        Totale Condidatures
                    </dt>
                    <dd class="order-1 text-5xl font-extrabold text-white">
                        {{$totalCandidatures}}
                    </dd>
                </div>
                <div class="flex flex-col mt-10 sm:mt-0">
                    <dt class="order-2 mt-2 text-lg leading-6 font-medium text-indigo-200">
                        Total Company
                    </dt>
                    <dd class="order-1 text-5xl font-extrabold text-white">
                        {{$totalCompanies}}
                    </dd>
                </div>
                <div class="flex flex-col mt-10 sm:mt-0">
                    <dt class="order-2 mt-2 text-lg leading-6 font-medium text-indigo-200">
                        Total Job Offre
                    </dt>
                    <dd class="order-1 text-5xl font-extrabold text-white">
                        {{$totalJobOffers}}
                    </dd>
                </div>
            </dl>
        </div>
    </div>




</x-app-layout>
