<x-guest-layout>
    <form method="POST" action="{{ route('entreprise.formregister') }}">
        @csrf
        <div>
            <x-input-label for="nom" :value="__('Name')" />
            <x-text-input id="nom" class="block mt-1 w-full" type="text" name="nom" :value="old('nom')" required autofocus />
            <x-input-error :messages="$errors->get('nom')" class="mt-2" />
        </div>

        <!-- Logo -->
        <div class="mt-4">
            <x-input-label for="logo" :value="__('Logo')" />
            <x-text-input id="logo" class="block mt-1 w-full" type="text" name="logo" :value="old('logo')" />
            <x-input-error :messages="$errors->get('logo')" class="mt-2" />
        </div>

        <!-- Slogan -->
        <div class="mt-4">
            <x-input-label for="slogan" :value="__('Slogan')" />
            <x-text-input id="slogan" class="block mt-1 w-full" type="text" name="slogan" :value="old('slogan')" />
            <x-input-error :messages="$errors->get('slogan')" class="mt-2" />
        </div>

        <!-- Industry -->
        <div class="mt-4">
            <x-input-label for="industrie" :value="__('Industry')" />
            <x-text-input id="industrie" class="block mt-1 w-full" type="text" name="industrie" :value="old('industrie')" />
            <x-input-error :messages="$errors->get('industrie')" class="mt-2" />
        </div>

        <!-- Description -->
        <div class="mt-4">
            <x-input-label for="description" :value="__('Description')" />
            <textarea id="description" name="description" class="block mt-1 w-full rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50">{{ old('description') }}</textarea>
            <x-input-error :messages="$errors->get('description')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="ms-4">
                {{ __('Submit') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
