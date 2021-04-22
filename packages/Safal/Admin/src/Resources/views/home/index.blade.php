@extends('admin::layouts.app')

@section('title')
    Admin Home
@endsection

@section('content')
    <div class="bg-white shadow-2xl p-4">
        <h1 class="text-blue-600 text-base font-thin">Welcome admin.</h1>
    </div>
    <div class="flex flex-col md:flex-row md:space-x-2 space-y-2 md:space-y-0 mt-2 px-1 min:h-32">
        <div class="w-full md:w-1/3 bg-white shadow-2xl border-l-8 border-r-2 border-green-600 p-4">
            No of Users
        </div>
        <div class="w-full md:w-1/3 bg-white shadow-2xl border-l-8 border-r-2 border-blue-600 p-4">
            Products
        </div>
        <div class="w-full md:w-1/3 bg-white shadow-2xl border-l-8 border-r-2 border-yellow-600 p-4">
            Sales
        </div>
    </div>
@endsection
