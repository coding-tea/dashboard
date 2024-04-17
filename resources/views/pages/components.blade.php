@extends('layouts.layout')

@section('title', 'components')
@section('content')

    <x-card>
        <x-tabs>
            <x-tab id="tab1" tab="tab1-tab"> tab1 </x-tab>
            <x-tab id="tab2" tab="tab2-tab"> tab2 </x-tab>
            <x-tab id="tab3" tab="tab3-tab"> tab3 </x-tab>
        </x-tabs>
        <x-tab_content>
            <x-tab_content_item id="tab1" tab="tab1-tab">
                1. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo, aspernatur maiores vero eaque repellendus
                qui repudiandae amet quaerat alias optio voluptas omnis laborum! Eos sit quibusdam sed error nisi sunt.
            </x-tab_content_item>
            <x-tab_content_item id="tab2" tab="tab2-tab">
                2. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo, aspernatur maiores vero eaque repellendus
                qui repudiandae amet quaerat alias optio voluptas omnis laborum! Eos sit quibusdam sed error nisi sunt.
            </x-tab_content_item>
            <x-tab_content_item id="tab3" tab="tab3-tab">
                3. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo, aspernatur maiores vero eaque repellendus
                qui repudiandae amet quaerat alias optio voluptas omnis laborum! Eos sit quibusdam sed error nisi sunt.
            </x-tab_content_item>
        </x-tab_content>
    </x-card>

@endsection
