@props(['active' => false])
<a {{ $attributes }}
    class="{{ $active
        ? ' text-yellow-400'
        : 'text-gray-300
                 hover:text-red-200 ' }} hover:-translate-x-[4px] hover:-translate-y-[3px]  text-base  px-3 py-2 transition duratioon-300  font-medium"
    aria-current="{{ $active ? 'page' : false }}">{{ $slot }}</a>
