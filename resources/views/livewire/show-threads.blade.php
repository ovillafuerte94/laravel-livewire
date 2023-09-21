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
        @foreach ($threads as $thread)
            <div class="rounded-md bg-gradient-to-r from-slate-800 to-slate-900 hover:to-slate-800 mb-4">
                <div class="p-4 flex gap-4">
                    <div>
                        <img src="{{ $thread->user->avatar() }}" alt="{{ $thread->user->name }}" class="rounded-md">
                    </div>
                    <div class="w-full">
                        <h2 class="mb-4 flex items-start justify-between">
                            <a href="" class="text-xl font-semibold text-white/90">
                                {{ $thread->title }}
                            </a>
                            <span class="rounded-full text-sx px-4 capitalize" style="color: {{ $thread->category->color }}; border: 1px solid {{ $thread->category->color }}">
                                {{ $thread->category->name }}
                            </span>
                        </h2>
                        <p class="flex items-center justify-between w-full text-xs">
                            <span class="text-blue-600 font-semibold">
                                {{ $thread->user->name }}
                                <span class="text-white/90">
                                    {{ $thread->created_at->diffForHumans() }}
                                </span>
                            </span>
                            <span class="flex items-center gap-1 text-slate-700">
                                <svg fill="none" class="h-4" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 01.865-.501 48.172 48.172 0 003.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z">
                                    </path>
                                </svg>
                                {{ $thread->replies_count }} replies
                                |
                                <a href="" class="hover:text-white">
                                    Edit
                                </a>
                            </span>
                        </p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
