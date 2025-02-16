@extends('components.layouts.front-layout')

@section('title', 'Tentang Kami')

@section('main')
    <div class="lg:flex lg:items-center lg:justify-center bg-white w-full mx-auto">
        <div class="w-full min-w-screen-xl max-w-screen-xl px-10 pt-20">
            <div class="min-w-0 flex-1 flex flex-col items-start">
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
                                    class="ms-1 text-base font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">Tentang
                                    Kami</a>
                            </div>
                        </li>
                    </ol>
                </nav>

                <h2 class="text-2xl/7 font-bold text-gray-900 sm:truncate sm:text-3xl sm:tracking-tight">Tentang Kami
                </h2>
            </div>
            <div class="mt-5 flex lg:mt-0 lg:ml-4 hidden">
                <span class="hidden sm:block">
                    <button type="button"
                        class="inline-flex items-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 ring-1 shadow-xs ring-gray-300 ring-inset hover:bg-gray-50">
                        <svg class="mr-1.5 -ml-0.5 size-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                            aria-hidden="true" data-slot="icon">
                            <path
                                d="m2.695 14.762-1.262 3.155a.5.5 0 0 0 .65.65l3.155-1.262a4 4 0 0 0 1.343-.886L17.5 5.501a2.121 2.121 0 0 0-3-3L3.58 13.419a4 4 0 0 0-.885 1.343Z" />
                        </svg>
                        Edit
                    </button>
                </span>

                <span class="ml-3 hidden sm:block">
                    <button type="button"
                        class="inline-flex items-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 ring-1 shadow-xs ring-gray-300 ring-inset hover:bg-gray-50">
                        <svg class="mr-1.5 -ml-0.5 size-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                            aria-hidden="true" data-slot="icon">
                            <path
                                d="M12.232 4.232a2.5 2.5 0 0 1 3.536 3.536l-1.225 1.224a.75.75 0 0 0 1.061 1.06l1.224-1.224a4 4 0 0 0-5.656-5.656l-3 3a4 4 0 0 0 .225 5.865.75.75 0 0 0 .977-1.138 2.5 2.5 0 0 1-.142-3.667l3-3Z" />
                            <path
                                d="M11.603 7.963a.75.75 0 0 0-.977 1.138 2.5 2.5 0 0 1 .142 3.667l-3 3a2.5 2.5 0 0 1-3.536-3.536l1.225-1.224a.75.75 0 0 0-1.061-1.06l-1.224 1.224a4 4 0 1 0 5.656 5.656l3-3a4 4 0 0 0-.225-5.865Z" />
                        </svg>
                        View
                    </button>
                </span>

                <span class="sm:ml-3">
                    <button type="button"
                        class="inline-flex items-center rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                        <svg class="mr-1.5 -ml-0.5 size-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"
                            data-slot="icon">
                            <path fill-rule="evenodd"
                                d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                clip-rule="evenodd" />
                        </svg>
                        Publish
                    </button>
                </span>

                <!-- Dropdown -->
                <div class="relative ml-3 sm:hidden">
                    <button type="button"
                        class="inline-flex items-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 ring-1 shadow-xs ring-gray-300 ring-inset hover:ring-gray-400"
                        id="mobile-menu-button" aria-expanded="false" aria-haspopup="true">
                        More
                        <svg class="-mr-1 ml-1.5 size-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                            aria-hidden="true" data-slot="icon">
                            <path fill-rule="evenodd"
                                d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>

                    <!--
                          Dropdown menu, show/hide based on menu state.
                  
                          Entering: "transition ease-out duration-200"
                            From: "transform opacity-0 scale-95"
                            To: "transform opacity-100 scale-100"
                          Leaving: "transition ease-in duration-75"
                            From: "transform opacity-100 scale-100"
                            To: "transform opacity-0 scale-95"
                        -->
                    <div class="absolute right-0 z-10 mt-2 -mr-1 w-48 origin-top-right rounded-md bg-white py-1 ring-1 shadow-lg ring-black/5 focus:outline-hidden"
                        role="menu" aria-orientation="vertical" aria-labelledby="mobile-menu-button" tabindex="-1">
                        <!-- Active: "bg-gray-100 outline-hidden", Not Active: "" -->
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1"
                            id="mobile-menu-item-0">Edit</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1"
                            id="mobile-menu-item-1">View</a>
                    </div>
                </div>
            </div>
            <div class="flex flex-row items-center gap-10 mt-10 pb-10">
                <div class="min-w-fit flex flex-row gap-5">
                    <div class="w-[200px] h-[400px] overflow-hidden rounded-lg mt-10">
                        <img src="https://flowbite.com/docs/images/blog/image-1.jpg" alt="" class="w-full h-full object-cover">
                    </div>
                    <div class="w-[200px] h-[400px] overflow-hidden rounded-lg">
                        <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/2c/b0/b6/2b/apartment-hotels.jpg?w=1200&h=-1&s=1" alt="" class="w-full h-full object-cover">
                    </div>
                </div>
                <div class="w-full text-left">
                    <p class="tracking-wider uppercase font-bold text-blue-700">ABOUT US</p>
                    <h1 class="font-semibold text-3xl tracking-wide text-slate-900 leading-normal">Perusahaan Berbasis Investasi Real Estate dan Venture Capital</h1>
                    <p class="text-gray-500 mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae nobis iusto quia, esse repellat culpa eius, earum obcaecati laboriosam quae quas minus temporibus quasi aliquam quibusdam eaque soluta fuga harum.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
