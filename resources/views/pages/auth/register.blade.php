@extends('components.layouts.front-layout')

@section('main')




<div class="container min-w-full min-h-screen flex items-center justify-center pt-20 pb-20">
    <form class="min-w-[300px] w-[500px]" action="{{route('register')}}" method="POST">
        @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li class="text-red-600">{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
        @csrf
        <div class="mb-5">
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-slate-900">Your Name</label>
            <input type="text" name="name" id="name" class="shadow-xs bg-white border border-gray-300 text-slate-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white dark:border-slate-300 dark:placeholder-gray-400 dark:text-slate-900 dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-xs-light" placeholder="" required />
          </div>
        <div class="mb-5">
          <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-slate-900">Email</label>
          <input type="text" name="email" id="email" class="shadow-xs bg-white border border-gray-300 text-slate-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white dark:border-slate-300 dark:placeholder-gray-400 dark:text-slate-900 dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-xs-light" placeholder="name@flowbite.com" required />
        </div>
        <div class="mb-5">
          <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-slate-900">Password</label>
          <input type="password" id="password" name="password" class="shadow-xs bg-white border border-gray-300 text-slate-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white dark:border-slate-300 dark:placeholder-gray-400 dark:text-slate-900 dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-xs-light" required />
        </div>
        <div class="mb-5">
            <label for="confirm" class="block mb-2 text-sm font-medium text-gray-900 dark:text-slate-900">Confirmation Password</label>
            <input type="password" id="confirm" name="password_confirmation" class="shadow-xs bg-white border border-gray-300 text-slate-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white dark:border-slate-300 dark:placeholder-gray-400 dark:text-slate-900 dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-xs-light" required />
          </div>
        
          <div class="mb-5">
            <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-slate-900">Phone Number</label>
            <input type="phone" id="phone" name="phone" class="shadow-xs bg-white border border-gray-300 text-slate-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white dark:border-slate-300 dark:placeholder-gray-400 dark:text-slate-900 dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-xs-light" required />
          </div>
       
       
        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Register new account</button>
      </form>
</div>

  

@endsection