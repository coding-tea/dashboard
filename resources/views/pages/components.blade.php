@extends('layouts.layout')

@section('title', 'components')
@section('content')

    <x-card>
        <x-form title="form title"
            description="Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam praesentium nisi a reiciendis, expedita voluptatem sed. Consectetur, consequuntur qui ipsa repellendus quas praesentium, distinctio quaerat rem voluptates pariatur neque laborum?">
            <div class="mb-5">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Your email</label>
                <input type="email" id="email"
                    class=" text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="name@flowbite.com" required />
            </div>
            <div class="mb-5">
                <label for="password" class="block mb-2 text-sm font-medium text-gray-900 ">Your password</label>
                <input type="password" id="password"
                    class=" text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    required />
            </div>
        </x-form>
    </x-card>

@endsection
