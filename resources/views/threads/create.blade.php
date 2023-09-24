<x-app-layout>
    <div class="max-w-4xl mx-auto px-4 sm:px-6 py-12">
        <div class="rounded-md bg-gradient-to-r from-slate-800 to-slate-900 mb-4">
            <div class="p-4">
                <div class="w-full">
                    <h2 class="mb-4 ftext-xl font-semibold text-white/90">
                        Add thread
                    </h2>
                    <form action="{{ route('threads.store') }}" method="post">
                        @csrf

                        @include('threads.form')

                        <input type="submit" value="Add"
                            class="w-full py-4 bg-gradient-to-r from-blue-600 to-blue-700 hover:to-blue-700 text-white/90 font-bold text-xs rounded-md">
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
