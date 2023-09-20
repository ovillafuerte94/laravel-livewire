<div class="max-w-7xl mx-auto px-4 sm:px-6 flex gap-10 py-12">
    <div class="w-64">
        <a href="" class="block w-1full py-4 mb-10 bg-gradient-to-r from-blue-600 to-blue-700 hover:to-blue-700 text-white/90 font-bold text-xs text-center rounded-md">Ask</a>
        <ul>
            @foreach ($categories as $category)
                <li class="mb-2">
                    <a href=""
                        class="p-2 rounded-md flex bg-slate-800 items-center gap-2 text-white/60 hover:text-white font-semibold text-xs capitalize">
                        <span class="w-2 h-2 rounded-full" style="background-color: {{ $category->color }}"></span>
                        {{ $category->name }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
    <div class="w-full">

    </div>
</div>
