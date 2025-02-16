@extends('components.layouts.front-layout')

@section('title', 'Jelajahi')

@section('main')
    <div class="container min-w-full pb-10 min-h-screen">
        <header class="bg-white pt-10">
            <div class="mx-auto max-w-screen-xl px-10 py-8 sm:px-6 sm:py-10 lg:px-8">
                <div class="flex flex-col items-start gap-4 md:justify-between">
                    <div>
                        <nav class="flex mb-2" aria-label="Breadcrumb">
                            <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                                <li class="inline-flex items-center">
                                    <a href="#"
                                        class="inline-flex items-center text-base font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                                        <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                                        </svg>
                                        <span class="">Beranda</span>
                                    </a>
                                </li>
                                <li>
                                    <div class="flex items-center">
                                        <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="m1 9 4-4-4-4" />
                                        </svg>
                                        <a href="#"
                                            class="ms-1 text-base font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">Jelajahi</a>
                                    </div>
                                </li>
                            </ol>
                        </nav>
                        <h1 class="text-2xl font-bold text-gray-900 sm:text-3xl">Jelajahi Hotel</h1>

                        <p class="mt-1.5 text-base text-gray-500">
                            Cari hotel terbaik dengan harga menarik.
                        </p>
                    </div>

                    <div class="w-full flex items-center gap-4 flex-1">
                        <form action="#" class="flex gap-4 w-full grid grid-cols-2">
                            <div class="flex w-full items-center gap-4">
                                <div class="flex-1 flex flex-col gap-2">
                                    <label for="search" class="sr-only">Search</label>
                                    <label for="seach" class="font-semibold">Search</label>
            
                                    <div class="flex flex-row gap-2">
                                        <input type="text" placeholder="Cari Hotel"
                                        class="w-full rounded-md border border-slate-300 bg-slate-100 px-3 py-2.5 text-gray-700 shadow-xs transition focus:border-white focus:ring-3 focus:ring-yellow-400 focus:outline-hidden" />
                                        <button type="submit"
                                            class="group mt-4 flex w-full items-center justify-center gap-2 rounded-md bg-blue-600 px-5 py-3 text-white transition focus:ring-3 focus:ring-yellow-400 focus:outline-hidden sm:mt-0 sm:w-auto">
                                            <span class="text-sm font-medium"> <i class="fa-solid fa-magnifying-glass"></i> </span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full flex flex-row gap-4 pt-1">
                                <div class="w-full flex flex-col gap-2">
                                    <label for="filter_harga" class="font-semibold">Filter Harga</label>
                                    <select name="filter_harga" id="filter_harga" class="bg-slate-100 rounded-md px-3 py-2.5 border border-slate-300 outline-none">
                                        <option value="jokowi">Pilih Harga</option>
                                        <option value="cheap">Terjangkau</option>
                                        <option value="middle">Menengah</option>
                                        <option value="luxury">Mewah</option>
                                    </select>
                                </div>
                                <div class="w-full flex flex-col gap-2">
                                    <label for="filter_tipe_kamar" class="font-semibold">Filter Tipe Kamar</label>
                                    <select name="filter_tipe_kamar" id="filter_tipe_kamar" class="bg-slate-100 rounded-md px-3 py-2.5 border border-slate-300 outline-none">
                                        <option value="jokowi">Pilih Tipe Kamar</option>
                                        <option value="standard">Standard</option>
                                        <option value="deluxe">Deluxe</option>
                                        <option value="suite">Suite</option>
                                    </select>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </header>
        <div class="px-10 pt-10 pb-10 max-w-screen-xl mx-auto">
            <div class="grid grid-cols-3">
                @include('components.card-hotel')
            </div>
        </div>
    </div>
@endsection
