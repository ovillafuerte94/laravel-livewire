<div>
    <select
        name="category_id"
        class="bg-slate-800 border-1 border-slate-900 rounded-md w-full text-white/60 text-xs mb-4 capitalize"
    >
        <option value="">Select category</option>
        @foreach ($categories as $category)
            <option
                value="{{ $category->id }}"
                @selected($category->id == $thread->category_id)
            >{{ $category->name }}</option>
        @endforeach
    </select>

    <input
        type="text"
        name="title"
        placeholder="Title"
        value="{{ $thread->title }}"
        class="bg-slate-800 border-1 border-slate-900 rounded-md w-full text-white/60 text-xs mb-4"
    >

    <textarea
        name="body"
        rows="10"
        placeholder="Content"
        class="bg-slate-800 border-1 border-slate-900 rounded-md w-full text-white/60 text-xs mb-4"
    >{{ $thread->body }}</textarea>
</div>
