<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <span class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Update Client: ' . $client->fullName) }}
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
                    <div class="relative py-4">
                        <div class="absolute inset-0 flex items-center">
                            <div class="w-full border-b border-gray-300"></div>
                        </div>
                        <div class="relative flex justify-center">
                            <span class="bg-white px-4 text-sm text-gray-500">Personal info</span>
                        </div>
                    </div>
                    <form method="post" action="{{ route('clients.update', $client) }}" class="mb-6 space-y-6">
                        @csrf
                        @method('put')
                        <div>
                            <x-input-label for="first_name" :value="__('First name')" />

                            <x-text-input id="first_name" class="block mt-1 w-full" type="text" name="first_name" require :value="old('first_name', $client->first_name)" />

                            <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
                        </div>

                        <div>
                            <x-input-label for="last_name" :value="__('Last name')" />

                            <x-text-input id="last_name" class="block mt-1 w-full" type="text" name="last_name" required :value="old('first_name', $client->last_name)" />

                            <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
                        </div>

                        <div>
                            <x-input-label for="email_address" :value="__('Email address')" />

                            <x-text-input id="email_address" class="block mt-1 w-full" type="email" name="email_address" :value="old('first_name', $client->email_address ?? '')" />

                            <x-input-error :messages="$errors->get('email_address')" class="mt-2" />
                        </div>

                        <div>
                            <x-input-label for="phone_number" :value="__('Phone number')" />

                            <x-text-input id="phone_number" class="block mt-1 w-full" type="text" name="phone_number" :value="old('first_name', $client->phone_number ?? '')" />

                            <x-input-error :messages="$errors->get('phone_number')" class="mt-2" />
                        </div>

                        <div class="flex items-center gap-4">
                            <x-primary-button>{{ __('Update personal info') }}</x-primary-button>
                        </div>
                    </form>
                    <div class="relative py-4">
                        <div class="absolute inset-0 flex items-center">
                            <div class="w-full border-b border-gray-300"></div>
                        </div>
                        <div class="relative flex justify-center">
                            <span class="bg-white px-4 text-sm text-gray-500">Cash Loan</span>
                        </div>
                    </div>
                    <form method="post" action="{{ route('cash.loan.update', $client) }}" class="mb-6 space-y-6">
                        @csrf
                        @method('put')
                        <div>
                            <x-input-label for="loan_amount" :value="__('Cash loan amount')" />

                            <x-text-input id="loan_amount" class="block mt-1 w-full" type="number" name="loan_amount" require :value="old('loan_amount', $client->cashLoanProduct?->loan_amount ?? '')" />

                            <x-input-error :messages="$errors->get('loan_amount')" class="mt-2" />
                        </div>

                        <div class="flex items-center gap-4">
                            <x-primary-button>{{ __('Update cash loan') }}</x-primary-button>
                        </div>
                    </form>
                    <div class="relative py-4">
                        <div class="absolute inset-0 flex items-center">
                            <div class="w-full border-b border-gray-300"></div>
                        </div>
                        <div class="relative flex justify-center">
                            <span class="bg-white px-4 text-sm text-gray-500">Home Loan</span>
                        </div>
                    </div>
                    <form method="post" action="{{ route('home.loan.update', $client) }}" class="mb-6 space-y-6">
                        @csrf
                        @method('put')
                        <div>
                            <x-input-label for="down_payment_amount" :value="__('Down payment amount')" />

                            <x-text-input id="down_payment_amount" class="block mt-1 w-full" type="number" name="down_payment_amount" require :value="old('down_payment_amount', $client->homeLoanProduct?->down_payment_amount ?? '')" />

                            <x-input-error :messages="$errors->get('down_payment_amount')" class="mt-2" />
                        </div>

                        <div>
                            <x-input-label for="property_value" :value="__('Property value')" />

                            <x-text-input id="property_value" class="block mt-1 w-full" type="number" name="property_value" required :value="old('property_value', $client->homeLoanProduct?->property_value ?? '')" />

                            <x-input-error :messages="$errors->get('property_value')" class="mt-2" />
                        </div>

                        <div class="flex items-center gap-4">
                            <x-primary-button>{{ __('Update home loan') }}</x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>