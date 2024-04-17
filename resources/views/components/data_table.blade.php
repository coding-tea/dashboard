<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 ">
        <caption class="p-5 text-lg font-semibold text-left rtl:text-right text-gray-900 bg-white">
            {{ $title }}
            <p class="mt-1 text-sm font-normal text-gray-500"> {{ $description }} </p>
        </caption>
        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
            <tr>
                {{ $slot }}
            </tr>
        </thead>
        <tbody>
            {{ $body }}
        </tbody>
    </table>
</div>
