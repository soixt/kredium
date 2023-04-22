<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <span class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Create Client') }}
            </span>
            
            <div>
                <x-link :href="route('clients.index')" class="text-gray-500 transition-colors duration-200 hover:text-blue-500 focus:outline-none">
                    {{ __('Go back to Clients') }}
                </x-link>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="post" action="{{ route('clients.store') }}" class="mt-6 space-y-6">
                        @csrf

                        <div>
                            <x-input-label for="first_name" :value="__('First name')" />

                            <x-text-input id="first_name" class="block mt-1 w-full" type="text" name="first_name" required :value="old('first_name')" />

                            <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
                        </div>

                        <div>
                            <x-input-label for="last_name" :value="__('Last name')" />

                            <x-text-input id="last_name" class="block mt-1 w-full" type="text" name="last_name" required :value="old('last_name')" />

                            <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
                        </div>

                        <div>
                            <x-input-label for="email_address" :value="__('Email address')" />

                            <x-text-input id="email_address" class="block mt-1 w-full" type="email" name="email_address" :value="old('email_address')" />

                            <x-input-error :messages="$errors->get('email_address')" class="mt-2" />
                        </div>

                        <div>
                            <x-input-label for="phone_number" :value="__('Phone number')" />

                            <x-text-input id="phone_number" class="block mt-1 w-full" type="text" name="phone_number" :value="old('phone_number')" />

                            <x-input-error :messages="$errors->get('phone_number')" class="mt-2" />
                        </div>

                        <div class="flex items-center gap-4">
                            <x-primary-button>{{ __('Create') }}</x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
