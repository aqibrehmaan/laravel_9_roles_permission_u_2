<x-guest-layout>
<div class="mt-12 max-w-6xl mx-auto bg-slate-50 p-4 rounded">

    <div class="flex m-2 p-2">
        <a href="{{ route('posts.index') }}" class="px-4 py-2 bg-indigo-400 hover:bg-indigo-600 rounded">Posts Index</a>
    </div>
    <div class="mx-auto mt-12 max-w-md rounded bg-gray-100 p-6">
        <form action="{{ route('posts.store') }}" class="space-y-5" method="POST">
            @csrf
          <div>
            <label for="title" class="text-xl">Title</label>
            <input id="title" type="text" name="title" class="mt-2 block w-full appearance-none rounded-md border-2 border-gray-100 py-3 px-3 text-gray-800 focus:border-gray-200 focus:text-gray-500 focus:outline-none" />

            @error('title')
                <span class="text-sm text-red-400">{{ $message }}</span>
            @enderror

          </div>

          <div>
            <label for="body" class="text-xl">Body</label>
            <input id="body" type="text" name="body" class="mt-2 block w-full appearance-none rounded-md border-2 border-gray-100 py-3 px-3 text-gray-800 focus:border-gray-200 focus:text-gray-500 focus:outline-none" />

            @error('body')
                <span class="text-sm text-red-400">{{ $message }}</span>
            @enderror

          </div>

          <button type="submit" class="mt-10 w-full rounded-md bg-indigo-400 py-3 font-medium uppercase text-white hover:bg-indigo-600 hover:shadow-none focus:outline-none">Create</button>
        </form>
      </div>

</div>
</x-guest-layout>
