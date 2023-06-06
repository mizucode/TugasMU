<!-- create.blade.php -->

@extends('layouts.app') @section('content')

<body class="bg-slate-200">
    <header class="bg-dark py-4">
        <div class="container lg:px-16">
            <main class="flex justify-between items-center">
                <h1 class="font-bold text-white text-xl md:text-4xl">
                    Buat Tugas <span class="text-ylw">Kamu</span>
                </h1>
                <a href=""><i
                    class="fa-solid fa-gear font-bold text-white text-xl md:text-4xl"
                ></i></a>
                
            </main>
        </div>
    </header>

    <form  action="{{ route('todos.store') }}" method="POST" class="pt-4  rounded-md">
        @csrf
        <div class="container lg:px-16">
            <section class="w-full py-4 lg:py-0 mb-2 lg:mb-8">
                <div class="container">
                    <div class="relative">
                        <h1
                            class="title-form"
                        >
                            Mau nugas apa?
                        </h1>
                    </div>
                    <div class="bg-text shadow-sm py-8 rounded-b-md">
                        <div class="flex px-4 gap-2 justify-center">
                            <input
                                maxlength="255"
                                ttype="text" name="title" required
                                placeholder="Menaklukan Dunia (⚈∇⚈〃 )"
                                class="font-semibold w-[95%] lg:h-[5rem] mx-auto flex justify-center py-2 px-2 lg:px-8 lg:py-1 text-xs lg:text-2xl border border-primary rounded-md"
                            />
                        </div>
                    </div>
                </div>
            </section>
            <section class="w-full py-4 lg:py-0 mb-2 lg:mb-8">
                <div class="container">
                    <div class="relative">
                        <h1
                            class="title-form"
                        >
                            Tentang apa sih?
                        </h1>
                    </div>
                    <div class="bg-text shadow-sm py-2 rounded-b-md h-[15rem] lg:h-[24rem]">
                        <form class="flex px-4 gap-2">
                            <textarea
                                
                                name="description"
                                placeholder="Tahukah kamu? Otak diciptakan untuk mengingat bukan melupakan, ciptakan kenangan baru untuk melupakan masa lalu hwehehehe（＾ ∀＾）"
                                class="font-semibold flex justify-center w-[95%] mx-auto h-[14rem] lg:h-[20rem] py-2 px-2 text-xs lg:px-4 lg:py-2 lg:text-2xl border border-primary rounded-md"
                            ></textarea>
                        </form>
                    </div>
                </div>
            </section>
            <section class="w-full py-4 lg:py-0 mb-2 lg:mb-8">
                <div class="container">
                    <div class="relative">
                        <h1
                            class="title-form"
                        >
                            Cieee jadian ama tugas (✿˵ ꒡◡꒡˵)
                        </h1>
                    </div>
                    <div
                        class="bg-text shadow-sm py-8 rounded-b-md h-[5rem] flex justify-center items-center"
                    >
                        <div
                            class="flex overflow-hidden px-4 gap-2 justify-center items-center"
                        >
                            <label for="start_date" class="font-semibold whitespace-nowrap lg:text-2xl"
                                >Tanggal Mulai:</label
                            >
                            <input
                                type="date"
                                name="start_date"
                                class="px-4 py-2 bg-slate-200"
                            />
                        </div>
                    </div>
                </div>
            </section>
            <section class="w-full py-4 lg:py-0 mb-2 lg:mb-8">
                <div class="container">
                    <div class="relative">
                        <h1
                            class="title-form text-red-500"
                        >
                            Masa rebahan berakhir
                        </h1>
                    </div>
                    <div
                        class="bg-text shadow-sm py-8 rounded-b-md h-[5rem] flex justify-center items-center"
                    >
                        <div
                            class="flex overflow-hidden px-4 gap-2 justify-center items-center"
                        >
                            <label for="due_date" class="font-semibold whitespace-nowrap lg:text-2xl"
                                >Deadline:</label
                            >
                            <input
                                type="date"
                                name="due_date"
                                class="px-4 py-2 bg-slate-200"
                            />
                        </div>
                    </div>
                </div>
            </section>

            <button
                type="submit"
                class="px-2 lg:px-6 lg:py-4 mt-6 mb-32 py-1 mx-auto text-2xl lg:text-4xl bg-dsr rounded-md flex justify-center items-center gap-2 font-medium text-white hover:shadow-lg hover:bg-sky-500 transition duration-300 ease-in-out"
            >
            <i class="fa-solid fa-floppy-disk"></i> Buat Tugas
            </button>
        </div>
    </form>
</body>


















{{-- <!DOCTYPE html>
<html>
<head>
    <title>Create To Do</title>
</head>
<body>

    <h1>Create To Do</h1>

    <form action="{{ route('todos.store') }}" method="POST">
        @csrf
        <input type="text" name="title" placeholder="Title" required>
        <textarea name="description" placeholder="Description"></textarea>
        <label for="start_date">Start Date:</label>
        <input type="date" name="start_date">
        <label for="due_date">Due Date:</label>
        <input type="date" name="due_date">
        <button type="submit">Create</button>
    </form>
</body>
</html> --}}
