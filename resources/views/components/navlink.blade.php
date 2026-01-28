@props(['title', 'route' => 'home'])

<a href="{{ route($route) }}"
   class="border-transparent text-[#706f6c] dark:text-[#A1A09A] hover:border-black
   dark:hover:border-white hover:text-[#1b1b18] dark:hover:text-[#EDEDEC] inline-flex items-center px-1 pt-1
   border-b-2 text-sm font-medium transition-all"
>
    {{ $title }}
</a>
