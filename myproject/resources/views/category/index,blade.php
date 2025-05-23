@extends('layouts.app')
@section('title', 'Categories')
@section('content')

<div class= "flex justify-end my-4">
    <a href="{{route('category.create')}}" class="bg-blue-600 text-white px-4 py-2 rounded lg">Create Category</a>
</div>
<table class="w-full">
    <tr class="bg-gray-200">
        <th class="p-2 border border-gray-300">Order</th>
        <th class="p-2 border border-gray-300">Category Name</th>
        <th class="p-2 border border-gray-300">Action</th>
    </tr>
    <tr class="text-center">
        <td class="p-2 border">1</td>
        <td class="p-2 border">Category 1</td>
        <td class="p-2 border">
            <a href="" class="bg-blue-600 text-white px-4 py-2 rounded lg">Edit</a>
            <a href="" class="bg-red-600 text-white px-4 py-2 rounded lg">Delete</a>
            </td>
    </tr>
@endsection