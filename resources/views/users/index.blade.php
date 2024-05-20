<x-app-layout>
    @section('title', 'Admin')
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('Users Management') }}
            </h2>

        </div>
    </x-slot>

    <p>Hello <span class="text-lime-600 text-lg">{{ auth()->user()->name }}</span> , Disini Kamu Bisa Mengelola User</p>
    <div class="mt-4 mb-4">
        <a class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"
            href="{{ route('users.create') }}">
            <x-eos-person-add class="flex-shrink-0 w-5 h-5 inline-block" /> Create New User
        </a>
    </div>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        No
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Username
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Email
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Role
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <span class="sr-only">Edit</span>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $key => $user)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ ++$i }}
                    </th>
                    <td class="px-6 py-4">
                        <x-eos-person-outline-o class="flex-shrink-0 w-5 h-5 inline-block" />
                        {{ $user->name }}
                    </td>
                    <td class="px-6 py-4">
                        <x-eos-email-o class="flex-shrink-0 w-5 h-5 inline-block" />
                        {{ $user->email }}
                    </td>
                    <td class="px-6 py-4">
                        <x-eos-role-binding-o class="flex-shrink-0 w-5 h-5 inline-block" />
                        @if(!empty($user->getRoleNames()))
                        @foreach($user->getRoleNames() as $v)
                        @if ($v == 'Admin')
                        <label
                            class="bg-yellow-100 text-yellow-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-yellow-900 dark:text-yellow-300">{{
                            $v }}</label>
                        @else
                        <label
                            class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">{{
                            $v }}</label>
                        @endif
                        @endforeach
                        @endif
                    </td>
                    @inject('html', 'Spatie\Html\Html')
                    <td class="px-6 py-4 text-right">
                        <a class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"
                            href="{{ route('users.show',$user->id) }}">Show</a>
                        <a class="text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"
                            href="{{ route('users.edit',$user->id) }}">Edit</a>
                        @if ($user->id !== auth()->user()->id)
                        <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Delete</button>
                        </form>
                        @endif


                    </td>
                </tr>

            </tbody>
            @endforeach
        </table>
        <div class="my-4 flex justify-center">
            @include('pagination.index', ['paginator' => $data])
        </div>
    </div>

</x-app-layout>