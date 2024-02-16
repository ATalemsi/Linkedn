<x-guest-layout>
    <form method="POST" action="{{ route('condidate.store') }} " enctype="multipart/form-data">
        @csrf
        <div>
            <x-input-label for="photo_profil" :value="__('Photo Profile')" />
            <x-text-input id="photo_profil" class="block mt-1 w-full" type="file" name="photo_profil" :value="old('photo_profil')" />
            <x-input-error :messages="$errors->get('photo_profil')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="titre" :value="__('Title')" />
            <x-text-input id="titre" class="block mt-1 w-full" type="text" name="titre" :value="old('titre')" />
            <x-input-error :messages="$errors->get('titre')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="poste_actuel" :value="__('Poste_actuel')" />
            <x-text-input id="poste_actuel" class="block mt-1 w-full" type="text" name="poste_actuel" :value="old('poste_actuel')" />
            <x-input-error :messages="$errors->get('poste_actuel')" class="mt-2" />
        </div>

        <!-- Industry -->
        <div class="mt-4">
            <x-input-label for="industrie" :value="__('Industry')" />
            <x-text-input id="industrie" class="block mt-1 w-full" type="text" name="industrie" :value="old('industrie')" />
            <x-input-error :messages="$errors->get('industrie')" class="mt-2" />
        </div>

        <!-- Address -->
        <div class="mt-4">
            <x-input-label for="adresse" :value="__('Address')" />
            <x-text-input id="adresse" class="block mt-1 w-full" type="text" name="adresse" :value="old('adresse')" />
            <x-input-error :messages="$errors->get('adresse')" class="mt-2" />
        </div>


        <div class="mt-4">
            <x-input-label for="informations_contact" :value="__('Contact Information')" />
            <x-text-input id="informations_contact" class="block mt-1 w-full" type="text" name="informations_contact" :value="old('informations_contact')" />
            <x-input-error :messages="$errors->get('informations_contact')" class="mt-2" />
        </div>


        <div class="mt-4">
            <x-input-label for="a_propos" :value="__('About')" />
            <textarea id="a_propos" name="a_propos" class="block mt-1 w-full rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50">{{ old('a_propos') }}</textarea>
            <x-input-error :messages="$errors->get('a_propos')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="ms-4">
                {{ __('Submit') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
