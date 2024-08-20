@extends('_layouts.main')

@section('body')

@if (Session::has('status'))
<div id="alert-box"
    class="mt-2 mb-3 bg-red-100 border border-red-200 text-sm text-red-800 rounded-lg p-4 dark:bg-red-800/10 dark:border-red-900 dark:text-red-500"
    role="alert" tabindex="-1" aria-labelledby="hs-soft-color-success-label">
    <span id="hs-soft-color-success-label" class="font-bold">{{ Session::get('status') }}</span>
</div>
@endif

<div class="relative overflow-x-auto shadow-md ">
    <table class="w-full text-sm text-left rtl:text-right text-black ">
        <thead class="text-xs text-gray-700 uppercase bg-white border-b-2 border-slate-200  ">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Image
                </th>
                <th scope="col" class="px-6 py-3">
                    Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Username
                </th>
                <th scope="col" class="px-6 py-3">
                    Email
                </th>
                <th scope="col" class="px-6 py-3">
                    Tanggal
                </th>
                <th scope="col" class="px-6 py-3">
                    action
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr class="bg-white border-b  ">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        <img src="./storage/{{ $user->image }}"  alt="">
                    </th>
                    <td class="px-6 py-4">
                        {{ $user->name }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $user->username }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $user->email }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $user->created_at->format('j F Y') }}
                    </td>
                    <td class="px-6 py-4 flex mt-5 ">
                        <form action="/users/{{ $user->id }}" method="POST">
                            @method('delete')
                            @csrf
                            <button type="submit" onclick="return confirm('Delete Postingan?')"
                                class="ml-3 flex items-center bg-transparent hover:bg-red-500 text-red-700 font-semibold hover:text-white py-2 px-4 border border-red-500 hover:border-transparent rounded">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2 -ml-0.5" viewbox="0 0 20 20"
                                    fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                        clip-rule="evenodd" />
                                </svg>
                                Delete
                            </button>
                            @endforeach
                        </form>

                    </td>
                </tr>
        </tbody>
    </table>
</div>
@endsection
