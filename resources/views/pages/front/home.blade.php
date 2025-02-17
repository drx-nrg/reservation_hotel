@extends('components.layouts.front-layout')

@section('title', 'Beranda')

@section('main')
    <!--
          Heads up! 👋

          This component comes with some `rtl` classes. Please remove them if they are not needed in your project.
        -->

    <section
        class="relative bg-[url(https://images.unsplash.com/photo-1604014237800-1c9102c219da?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80)] z-40 bg-cover bg-center bg-no-repeat">
        <div
            class="absolute inset-0 bg-white/75 sm:bg-transparent sm:from-white/95 sm:to-white/25 ltr:sm:bg-gradient-to-r rtl:sm:bg-gradient-to-l">
        </div>

        <div class="relative mx-auto max-w-screen-xl px-4 py-32 sm:px-6 lg:flex lg:h-screen lg:items-center lg:px-8">
            <div class="max-w-xl text-center ltr:sm:text-left rtl:sm:text-right">
                <h1 class="text-3xl font-extrabold sm:text-5xl">
                    Temukan Tempat Terbaik
                    <strong class="block font-extrabold text-blue-700"> Yang Pernah Ada! </strong>
                </h1>

                <p class="mt-4 max-w-lg sm:text-xl/relaxed">
                    Bagaimana kamar yang anda impikan, temukan disini tanpa harus menunggu dan berperang dengan harga. Kami
                    siap melayani anda
                </p>

                <div class="mt-8 flex flex-wrap gap-4 text-center">
                    <a href="#"
                        class="block w-full rounded-sm bg-blue-600 px-12 py-3 text-sm font-medium text-white shadow-sm hover:bg-blue-700 focus:ring-3 focus:outline-hidden sm:w-auto">
                        Get Started
                    </a>

                    <a href="#"
                        class="block w-full rounded-sm bg-white px-12 py-3 text-sm font-medium text-blue-600 shadow-sm hover:text-blue-700 focus:ring-3 focus:outline-hidden sm:w-auto">
                        Learn More
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!--
      Heads up! 👋

      This component comes with some `rtl` classes. Please remove them if they are not needed in your project.

      Plugins:
        - @tailwindcss/forms
    -->

    <section class="bg-slate-100">
        <div class="p-8 md:p-12 lg:px-16 lg:py-24">
            <div class="mx-auto max-w-lg text-center">
                <h2 class="text-2xl font-bold text-gray-900 md:text-3xl">
                    Menyediakan Berbagai Macam Jenis Hotel Yang Siap Huni
                </h2>

                <p class="hidden text-gray-500 sm:mt-4 sm:block">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae dolor officia blanditiis
                    repellat in, vero, aperiam porro ipsum laboriosam consequuntur exercitationem incidunt
                    tempora nisi?
                </p>
            </div>

            <div class="mx-auto mt-8 max-w-xl">
                <form action="#" class="sm:flex sm:gap-4">
                    <div class="sm:flex-1">
                        <label for="email" class="sr-only">Search</label>

                        <input type="email" placeholder="Cari Hotel"
                            class="w-full rounded-md border-gray-200 bg-white p-3 text-gray-700 shadow-xs transition focus:border-white focus:ring-3 focus:ring-yellow-400 focus:outline-hidden" />
                    </div>

                    <button type="submit"
                        class="group mt-4 flex w-full items-center justify-center gap-2 rounded-md bg-blue-600 px-5 py-3 text-white transition focus:ring-3 focus:ring-yellow-400 focus:outline-hidden sm:mt-0 sm:w-auto">
                        <span class="text-sm font-medium"> <i class="fa-solid fa-magnifying-glass"></i> </span>
                    </button>
                </form>
            </div>
        </div>
    </section>
    <section>
        <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8 bg-white">
            <div class="mx-auto max-w-3xl text-center">
                <h2 class="text-3xl font-bold text-gray-900 sm:text-4xl">Dipercaya Oleh Ribuan Pelanggan</h2>

                <p class="mt-4 text-gray-500 sm:text-xl">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione dolores laborum labore
                    provident impedit esse recusandae facere libero harum sequi.
                </p>
            </div>

            <dl class="mt-6 grid grid-cols-1 gap-4 sm:mt-8 sm:grid-cols-2 lg:grid-cols-4">
                <div class="flex flex-col rounded-lg bg-blue-50 px-4 py-8 text-center">
                    <dt class="order-last text-lg font-medium text-gray-500">Total Sales</dt>

                    <dd class="text-4xl font-extrabold text-blue-600 md:text-5xl">$4.8m</dd>
                </div>

                <div class="flex flex-col rounded-lg bg-blue-50 px-4 py-8 text-center">
                    <dt class="order-last text-lg font-medium text-gray-500">Official Addons</dt>

                    <dd class="text-4xl font-extrabold text-blue-600 md:text-5xl">24</dd>
                </div>

                <div class="flex flex-col rounded-lg bg-blue-50 px-4 py-8 text-center">
                    <dt class="order-last text-lg font-medium text-gray-500">Total Addons</dt>

                    <dd class="text-4xl font-extrabold text-blue-600 md:text-5xl">86</dd>
                </div>

                <div class="flex flex-col rounded-lg bg-blue-50 px-4 py-8 text-center">
                    <dt class="order-last text-lg font-medium text-gray-500">Downloads</dt>

                    <dd class="text-4xl font-extrabold text-blue-600 md:text-5xl">86k</dd>
                </div>
            </dl>
        </div>
    </section>
    <div class="container max-w-screen-xl px-10 pt-10 pb-10 mx-auto">
        <h1 class="font-bold text-3xl">Kamar Terpopuler</h1>
        <p class="text-slate-600 text-base mt-1">List kamar terpopuler dengan jumlah book tertinggi</p>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 mt-3 gap-10">
            @include('components.card-hotel')
            @include('components.card-hotel')
            @include('components.card-hotel')
        </div>
    </div>
@endsection
