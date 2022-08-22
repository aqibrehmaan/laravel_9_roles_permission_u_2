<x-admin-layout>
    <div class="mt-12 max-w-6xl mx-auto bg-slate-50 p-4 rounded">

        <div class="flex m-2 p-2">
            <a href="{{ route('admin.users.index') }}" class="px-4 py-2 bg-indigo-400 hover:bg-indigo-600 rounded">Back</a>
        </div>
        <div class="mx-auto mt-12 max-w-md rounded bg-gray-100 p-6">
            <form action="{{ route('admin.users.update', $user->id) }}" class="space-y-5" method="POST">
                @csrf
                @method('PUT')
              <div>
                <label for="name" class="text-xl">Name</label>
                <input id="name" type="text" name="name" value="{{ $user->name }}" class="mt-2 block w-full appearance-none rounded-md border-2 border-gray-100 py-3 px-3 text-gray-800 focus:border-gray-200 focus:text-gray-500 focus:outline-none" />

                @error('name')
                    <span class="text-sm text-red-400">{{ $message }}</span>
                @enderror

              </div>

              <div>
                <label for="email" class="text-xl">Email</label>
                <input id="email" type="email" name="email" value="{{ $user->email }}" class="mt-2 block w-full appearance-none rounded-md border-2 border-gray-100 py-3 px-3 text-gray-800 focus:border-gray-200 focus:text-gray-500 focus:outline-none" />

                @error('email')
                    <span class="text-sm text-red-400">{{ $message }}</span>
                @enderror

              </div>

              <div>
                <label for="" class="text-xl" style="max-width: 300px">
                    <span class="text-gray-700">Role</span>
                    <select name="role_id" id="" class="mt-2 block w-full appearance-none rounded-md border-2 border-gray-100 py-3 px-3 text-gray-800 focus:border-gray-200 focus:text-gray-500 focus:outline-none">
                        @foreach ($roles as $role)
                            <option value="{{ $role->id }}" @selected($user->hasRole($role->name))>{{ $role->name }}</option>
                        @endforeach
                    </select>
                  </label>
              </div>

              <button type="submit" class="mt-10 w-full rounded-md bg-indigo-400 py-3 font-medium uppercase text-white hover:bg-indigo-600 hover:shadow-none focus:outline-none">Update</button>
            </form>
          </div>

    </div>
</x-admin-layout>
