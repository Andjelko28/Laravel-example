<x-layout>
    <x-slot:heading>
        Register
    </x-slot:heading>

    <form method="POST" action="/register">
        @csrf

        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base font-semibold leading-7 text-gray-900">Create a new job</h2>
                <p class="mt-1 text-sm leading-6 text-gray-600">We just need a handful of details from you.</p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8">
                    <div class="sm:col-span-4">
                        <x-form-label for="first_name">First Name</x-form-label>
                        <div class="mt-2">
                            <x-form-input name="first_name" id="first_name" required></x-form-input>
                            <x-form-error name="first_name" />
                        </div>
                    </div>


                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 ">
                        <div class="sm:col-span-4">

                            <div class="mt-2">
                                <x-form-label for="last_name">Last Name</x-form-label>
                                <div
                                    class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                    <input type="text" name="last_name" id="last_name"
                                        class="block flex-1 border-0 bg-transparent py-1.5  pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                                        required>
                                </div>
                            </div>

                            <div class="mt-10">
                                <x-form-error name="last-name" />
                            </div>

                            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8">
                                <div class="sm:col-span-4">
                                    <x-form-label for="email">Email</x-form-label>
                                    <div class="mt-2">
                                        <x-form-input type="email" name="email" id="email"
                                            required></x-form-input>
                                        <x-form-error name="email" />
                                    </div>
                                </div>

                                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8">
                                    <div class="sm:col-span-4">
                                        <x-form-label for="password">Password</x-form-label>
                                        <div class="mt-2">
                                            <x-form-input name="password" id="password" type="password"
                                                required></x-form-input>
                                            <x-form-error name="password" />
                                        </div>
                                    </div>

                                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8">
                                        <div class="sm:col-span-4">
                                            <x-form-label for="password_confirmation">Confirm password</x-form-label>
                                            <div class="mt-2">
                                                <x-form-input name="password_confirmation" id="password_confirmation"
                                                    type="password" required></x-form-input>
                                                <x-form-error name="password_confirmation" />
                                            </div>
                                        </div>

                                        <div class="mt-6 flex items-center justify-end gap-x-6">
                                            <a href="/" type="button"
                                                class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
                                            <x-form-button>Register</x-form-button>
                                        </div>
                                    </div>
    </form>

</x-layout>
