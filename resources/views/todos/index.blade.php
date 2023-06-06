@extends('layouts.app') @section('content')
<body class="bg-slate-200">
    <header class="bg-dark py-4">
        <div class="container">
            <main class="flex justify-between items-center">
                <h1 class="font-bold text-white text-xl md:text-4xl">
                    Hi <span class="text-ylw"> {{ Auth::user()->name }}</span>
                </h1>

                <div class="mt-4" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                                     <i class="fa-solid fa-right-from-bracket font-bold text-white text-xl md:text-4xl"></i>
                        
                    </a>
        
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </main>
        </div>
    </header>
    <section class="pt-4 h-full rounded-md">
        <div class="container">
            <main class="flex justify-start items-center gap-2">
                <i class="fa-solid fa-clipboard-list text-3xl lg:text-6xl text-dsr"></i>
                <div class="">
                    <h3 class="leading-none text-sm lg:text-2xl font-bold text-orange-500">Misi</h3>
                    <h2 class="leading-none font-bold lg:text-xl text-slate-800">Semua Misi</h2>
                </div>
            </main>
            <ul class="pb-28 lg:pt-4">
                @foreach ($todos as $todo)
                <li
                    class="list-none bg-white px-2 py-2 rounded-xl shadow-md mt-4 hover:bg-orange-100 transition duration-300 ease-in-out"
                >
                   
                <div class="lg:container lg:py-4">
                    <h1
                        class="text-slate-800 text-lg lg:text-3xl truncate font-semibold"
                    >
                    {{ $todo->title }}
                    </h1>
                </div>
                <div
                    class="flex justify-between items-center mt-8 lg:container lg:py-4"
                >
                    <main class="flex justify-start items-center gap-1 opacity-50">
                        <i class="fa-regular fa-calendar lg:text-xl"></i>
                        <p class="text-[10px] lg:text-xl mt-[3px] font-semibold">
                            Deadline : <em>{{ $todo->due_date }}</em>
                        </p>
                    </main>
                    <div>
                        <a
                            href="{{ route('todos.edit', $todo->id) }}"
                            class="px-2 py-1 text-xs lg:text-xl bg-dsr rounded-md flex justify-center items-center gap-2 font-medium text-white hover:shadow-lg hover:bg-sky-500 transition duration-300 ease-in-out"
                            ><i class="fa-solid fa-plus"></i>Lihat Detail</a
                        >
                    </div>
                </div>
                </li>
                @endforeach
            </ul>
        </div>
    </section>

    <section class="fixed bottom-0 left-0 w-full py-8">
        <div class="container">
            <div class="flex justify-end gap-4 -mt-16">
                <div
                    class="bg-white shadow-md h-16 w-16 rounded-md flex justify-center items-center border-4 border-slate-200 hover:border-dark transition duration-300 ease-in-out"
                >
                <a href="{{ route('todos.create') }}"><i class="fa-solid fa-plus text-3xl text-dark"></i></a>
                    
                </div>
            </div>
        </div>
    </section>
</body>






















{{-- <body>
    <h1>To Do List</h1>

    <a href="{{ route('todos.create') }}">+</a>

    @if (session('success'))
        <div>{{ session('success') }}</div>
    @endif

    <ul>
        @foreach ($todos as $todo)
            <li>
                <strong>{{ $todo->title }}</strong><br>
                <em>Description:</em> {{ $todo->description }}<br>
                <em>Start Date:</em> {{ $todo->start_date }}<br>
                <em>Due Date:</em> {{ $todo->due_date }}<br>
                <a href="{{ route('todos.edit', $todo->id) }}">Edit</a>
                <form action="{{ route('todos.destroy', $todo->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>


    @guest
    @if (Route::has('login'))
        <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
        </li>
    @endif

    @if (Route::has('register'))
        <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
        </li>
    @endif
@else
    <li class="nav-item dropdown">
        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            {{ Auth::user()->name }}
        </a>

        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
    </li>
@endguest
</body>
</html> --}}
