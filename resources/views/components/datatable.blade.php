<div class="relative overflow-x-auto p-5">
    <div class="flex justify-between">
        <div>
            <caption class="p-5 text-lg font-semibold text-left rtl:text-right text-gray-900 bg-white">
                {{ $title }}
                <p class="mt-1 text-sm font-normal text-gray-500"> {{ $description }} </p>
            </caption>
        </div>
        <div>
            <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                type="button">Actions <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 4 4 4-4" />
                </svg>
            </button>
            <!-- Dropdown menu -->
            <div id="dropdown"
                class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                    <li>
                        <a href="#"
                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">add
                            new</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">delete
                            selected</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <table class="w-full text-sm text-left rtl:text-right text-gray-500 mt-5">

        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
            <tr>
                @php
                    $headsItems = [];
                @endphp
                @isset($heads)
                    <th class="px-6 py-3">
                        <input type="checkbox"
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 ids" />
                    </th>
                    @foreach ($heads as $item)
                        <th scope="col" class="px-6 py-3">
                            {{ $item->getTitle() }}
                            @php
                                array_push($headsItems, $item->getTitle());
                            @endphp
                        </th>
                    @endforeach
                    <th scope="col" class="px-6 py-3">
                        Actions
                    </th>
                @endisset
            </tr>
        </thead>
        <tbody>
            {{-- @dd($queryBuilder) --}}
            @isset($queryBuilder)
                @foreach ($queryBuilder->toArray()['data'] as $key => $value)
                    <tr>
                        <td class="px-6 py-4">
                            <input name="ids[]" type="checkbox" value="{{ $key == 'id' ? $value : '' }}"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 ids">
                        </td>

                        @foreach ($value as $itemKey => $itemValue)
                            @if (in_array($itemKey, $headsItems))
                                <td class="px-6 py-4">
                                    {{ $itemValue }}
                                </td>
                            @endif
                        @endforeach

                        <td class="px-6 py-4 text-end">
                            <a href="#"
                                class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100">View</a>
                            <a href="#"
                                class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100"><i
                                    class="bi bi-archive-fill"></i></a>
                        </td>
                    </tr>
                @endforeach
            @endisset
        </tbody>
    </table>

    <div class="mt-5">
        {{ $queryBuilder->links() }}
    </div>
</div>
