<header  {{ $attributes->merge(['class' => 'relative z-10']) }}">
    <nav class="container flex items-center justify-between w-full h-40 px-12 mx-auto">
        <div></div>
        <ul class="flex justify-end list-none header-list">
            <li><a class="transition-all duration-200 ease-in hover:underline" href="javascript:">Juegos</a></li>
            <li><a class="transition-all duration-200 ease-in hover:underline" href="javascript:">Videos</a></li>
            <li><a class="transition-all duration-200 ease-in hover:underline" href="javascript:">Arte</a></li>
            <li><a class="transition-all duration-200 ease-in hover:underline" href="javascript:">Blog</a></li>
            <li><a class="transition-all duration-200 ease-in hover:underline" href="javascript:">Nosotros</a></li>
            <li>
                <i class="fas fa-search"></i>
            </li>
            <li>
                <button class="px-6 font-bold transition-all duration-200 ease-in bg-white rounded shadow focus:outline-none text-primary-kids hover:bg-gray-200">
                    <a class="transition-all duration-200 ease-in hover:underline" href="{{route('login')}}">ACCCEDER</a>
                </button>
            </li>
        </ul>
    </nav>
</header>
