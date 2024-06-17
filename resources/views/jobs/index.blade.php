<x-layout>
    <x-slot:heading>
        Jobs page
    </x-slot:heading>

    <div class="space-y-4">
        @foreach($jobs as $job)
            <a href="/jobs/{{$job['id']}}" class="block px4 py-6 border borde-gray-200 rounder-lg">
                <div>
                    <strong class="text-laracasts">{{$job['title']}}:</strong> Pays {{$job['salary']}} per year
                </div>
            </a>
        @endforeach
        <div>
            {{$jobs->links()}}
        </div>
    </div>
</x-layout>
