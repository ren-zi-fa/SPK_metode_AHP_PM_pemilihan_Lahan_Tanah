<x-app-layout>
    @section('title', 'Detail User')
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('Detail User') }}
            </h2>

        </div>
    </x-slot>
    

<div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mx-auto">
    <div class="flex flex-col items-center py-10">
        <svg class="w-[50px] h-[50px] text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.4" d="M12 21a9 9 0 1 0 0-18 9 9 0 0 0 0 18Zm0 0a8.949 8.949 0 0 0 4.951-1.488A3.987 3.987 0 0 0 13 16h-2a3.987 3.987 0 0 0-3.951 3.512A8.948 8.948 0 0 0 12 21Zm3-11a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
          </svg>          
        <h5 class="my-2 text-xl font-medium text-gray-900 dark:text-white"> {{ $user->name }}</h5>
        <span class="text-sm text-gray-500 dark:text-gray-400">   <x-eos-email-o class="flex-shrink-0 w-5 h-5 inline-block" /> {{ $user->email }}</span>
        <span class="text-sm text-gray-500 dark:text-gray-400 mt-2">      @if(!empty($user->getRoleNames()))
            @foreach($user->getRoleNames() as $v)
                <label class="bg-yellow-100 text-yellow-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-yellow-900 dark:text-yellow-300"> <x-eos-role-binding-o class="flex-shrink-0 w-5 h-5 inline-block "/> {{ $v }}</label>
            @endforeach
        @endif</span>
        <div class="flex mt-5 md:mt-8">
            <a href="{{ route('users.index') }}" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 rounded-lg">Back</a>
            <a href="{{ route('users.edit',$user->id) }}" class="py-2 px-4 ms-2 text-sm font-medium text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 rounded-lg ">Edit</a>
        </div>
    </div>
</div>

</x-app-layout>