@props(['active' => false])
<a {{ $attributes }}
    class="{{ $active ? ' text-red-500' : 'text-gray-300
     hover:text-red-200' }} block rounded-md px-3 py-2 text-sm font-medium"
    aria-current="{{ $active ? 'page' : false }}">{{ $slot }}</a>
