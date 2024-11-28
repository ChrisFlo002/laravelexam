<x-guest-layout>
    <form method="POST" action="/postuser" x-data="{ role: '{{ old('role') ?? $user->role ?? 'admin' }}' }">
        @csrf
        @method('PUT')

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name', $user->name)" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Age -->
        <div>
            <x-input-label for="age" :value="__('Age')" />
            <x-text-input id="age" class="block mt-1 w-full" type="number" name="age" :value="old('age', $user->age)" required autofocus autocomplete="age" />
            <x-input-error :messages="$errors->get('age')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $user->email)" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Role -->
        <div class="mt-4">
            <x-input-label for="role" :value="__('Role')" />
            <select 
                id="role" 
                name="role" 
                x-model="role" 
                class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm"
            >
                <option value="admin">Admin</option>
                <option value="governor">Governor</option>
            </select>
            <x-input-error :messages="$errors->get('role')" class="mt-2" />
        </div>

        <!-- Governor Specific Fields -->
        <template x-if="role === 'governor'">
            <div>
                <!-- States -->
                <div class="mt-4">
                    <x-input-label for="state" :value="__('State')" />
                    <select 
                        id="state" 
                        name="state_id" 
                        class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm"
                    >
                        <option value="">Select State</option>
                        <option value="CA" {{ old('state_id', optional($user->governor)->state_id) == 'CA' ? 'selected' : '' }}>California</option>
                        <option value="NY" {{ old('state_id', optional($user->governor)->state_id) == 'NY' ? 'selected' : '' }}>New York</option>
                        <option value="TX" {{ old('state_id', optional($user->governor)->state_id) == 'TX' ? 'selected' : '' }}>Texas</option>
                        <!-- Add more states as needed -->
                    </select>
                    <x-input-error :messages="$errors->get('state_id')" class="mt-2" />
                </div>

                <!-- Parties -->
                <div class="mt-4">
                    <x-input-label for="party" :value="__('Party')" />
                    <select 
                        id="party" 
                        name="party_id" 
                        class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm"
                    >
                        <option value="">Select Party</option>
                        <option value="Democrat" {{ old('party_id', optional($user->governor)->party_id) == 'Democrat' ? 'selected' : '' }}>Democratic Party</option>
                        <option value="Republican" {{ old('party_id', optional($user->governor)->party_id) == 'Republican' ? 'selected' : '' }}>Republican Party</option>
                        <option value="Independent" {{ old('party_id', optional($user->governor)->party_id) == 'Independent' ? 'selected' : '' }}>Independent</option>
                    </select>
                    <x-input-error :messages="$errors->get('party_id')" class="mt-2" />
                </div>
            </div>
        </template>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation"
                            autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="ms-4">
                {{ __('Update User') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>

@push('scripts')
<script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
@endpush