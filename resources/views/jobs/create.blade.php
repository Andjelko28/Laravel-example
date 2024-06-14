<x-layout>
    <x-slot:heading>
        Create Job
    </x-slot:heading>
    <p>TODO</p>

    <form method="POST" action="/jobs">
        @csrf

        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base font-semibold leading-7 text-gray-900">Create a new job</h2>
                <p class="mt-1 text-sm leading-6 text-gray-600">We just need a handful of details from you.</p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <x-form-label for="title">Title</x-form-label>
                        <div class="mt-2">
                            <x-form-input name="title" id="title" placeholder="CEO" required></x-form-input>
                            <x-form-error name="title" />
                        </div>
                    </div>


                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="sm:col-span-4">

                            <div class="mt-2">
                                <x-form-label for="salary">Salary</x-form-label>
                                <div
                                    class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                    <input type="text" name="salary" id="salary"
                                        class="block flex-1 border-0 bg-transparent py-1.5  pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                                        placeholder="$50.00 per year" required>
                                </div>
                            </div>

                            <div class="mt-10">
                                <x-form-error name="salary" />
                            </div>


                            <div class="mt-6 flex items-center justify-end gap-x-6">
                                <button type="button"
                                    class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
                                <x-form-button>Save</x-form-button>
                            </div>
    </form>

</x-layout>
