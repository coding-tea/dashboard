<div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 ">
        <caption class="p-5 text-lg font-semibold text-left rtl:text-right text-gray-900 bg-white">
            {{ $title }}
            <p class="mt-1 text-sm font-normal text-gray-500"> {{ $description }} </p>
        </caption>
        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
            <tr>
                @isset($heads)
                    <th class="px-6 py-3">
                        <input type="checkbox"
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 ids" />
                    </th>
                    @foreach ($heads as $item)
                        <th scope="col" class="px-6 py-3">
                            {{ $item->getTitle() }}
                        </th>
                    @endforeach
                    <th scope="col" class="px-6 py-3">
                        Actions
                    </th>
                @endisset
            </tr>
        </thead>
        <tbody>
            @isset($queryBuilder)
                @foreach ($queryBuilder as $item)
                    <tr>
                        <td class="px-6 py-4">
                            <input name="ids[]" type="checkbox" value="{{ $item->id }}"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 ids">
                        </td>
                        <td class="px-6 py-4">
                            {{ $item->name }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $item->email }}
                        </td>
                        <td class="px-6 py-4">
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
    {{ $queryBuilder->links() }}
</div>
