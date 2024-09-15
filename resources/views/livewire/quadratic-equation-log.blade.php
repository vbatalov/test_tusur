<div>
    <h1 class="text-xl font-bold my-2">
        История решений квадратного уравнения
    </h1>

    @if(!$data->isEmpty())
    <div
        class="relative flex flex-col w-full h-full overflow-scroll text-gray-700 bg-gray-50     shadow-md rounded-xl bg-clip-border">
        <table class="w-full text-left table-auto min-w-max">
            <thead>
            <tr>
                <th class="p-4 border-b border-blue-gray-100 bg-blue-gray-50">
                    <p class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
                        Запрос
                    </p>
                </th>
                <th class="p-4 border-b border-blue-gray-100 bg-blue-gray-50">
                    <p class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
                        Результат
                    </p>
                </th>
                <th class="p-4 border-b border-blue-gray-100 bg-blue-gray-50">
                    <p class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
                        Когда
                    </p>
                </th>

            </tr>
            </thead>
            <tbody>
            @foreach($data as $value)
                <tr>
                    <td class="p-4 border-b border-blue-gray-50">
                        <p class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
                            {{json_encode($value['data'])}}
                        </p>
                    </td>

                    <td class="p-4 border-b border-blue-gray-50">
                        <p class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
                            {{json_encode($value['result'])}}
                        </p>
                    </td>
                    <td class="p-4 border-b border-blue-gray-50">
                        <p class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
                            {{\Carbon\Carbon::parse($value['created_at'])->diffForHumans()}}
                        </p>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <div class="my-4 mx-2">
        {{$data->links()}}
    </div>

    @else
        История запросов отсутствует
    @endif
</div>
