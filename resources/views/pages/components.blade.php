@extends('layouts.layout')

@section('title', 'components')
@section('content')

    <x-data_table title="table title" description="Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum accusantium corporis illo ducimus, delectus aliquid fugit exercitationem, nam ipsa pariatur omnis, sit laudantium vero? Incidunt omnis aliquam sit delectus? Temporibus?">
        <th scope="col" class="px-6 py-3">
            Product name
        </th>
        <th scope="col" class="px-6 py-3">
            Product name
        </th>
        <th scope="col" class="px-6 py-3">
            Product name
        </th>
        <th scope="col" class="px-6 py-3">
            Product name
        </th>
        <th scope="col" class="px-6 py-3">
            Actions
        </th>
        <x-slot name="body">
            <tr class="bg-white border-b dark:border-gray-700">
                <th scope="row" class="px-6 py-4">
                    Apple MacBook Pro 17"
                </th>
                <td class="px-6 py-4">
                    Silver
                </td>
                <td class="px-6 py-4">
                    Laptop
                </td>
                <td class="px-6 py-4">
                    $2999
                </td>
                <td class="px-6 py-4 text-right">
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                </td>
            </tr>
        </x-slot>
    </x-data_table>

@endsection
