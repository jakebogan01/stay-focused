<div class="space-y-6">
    <div class="bg-white shadow px-4 py-5 sm:rounded-lg sm:p-6">
        <div class="md:grid md:grid-cols-3 md:gap-6">
            <div class="md:col-span-1">
                <h3 class="text-lg font-medium leading-6 text-gray-900">Test Form</h3>
                <p class="mt-1 text-sm text-gray-500">
                    This form usage is to test the creation of tasks.
                </p>
                <div class="h-full flex items-center justify-center">
                    <img src="https://www.stickers-factory.com/media/catalog/product/cache/1/image/1000x/040ec09b1e35df139433887a97daa66f/1/8/18942_00.png" alt="Testing in progress" class="-mt-24">
                </div>
            </div>
            <div class="mt-5 md:mt-0 md:col-span-2">

                <livewire:block-form :data="$data">

            </div>
        </div>
    </div>
</div>

<div class="mt-10 px-4 sm:px-6 lg:px-8">
    <div class="sm:flex sm:items-center">
        <div class="sm:flex-auto">
            <h1 class="text-xl font-semibold text-gray-900">All Blocks</h1>
        </div>
    </div>
    <div class="mt-2 flex flex-col">
        <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-300">
                        <thead class="bg-gray-50">
                        <tr class="divide-x divide-gray-200">
                            <th scope="col" class="py-3.5 pl-4 pr-4 text-left text-sm font-semibold text-gray-900 sm:pl-6">
                                ID
                            </th>
                            <th scope="col" class="px-4 py-3.5 text-left text-sm font-semibold text-gray-900">
                                Forgiven
                            </th>
                            <th scope="col" class="px-4 py-3.5 text-left text-sm font-semibold text-gray-900">
                                Start Time
                            </th>
                            <th scope="col" class="py-3.5 pl-4 pr-4 text-left text-sm font-semibold text-gray-900 sm:pr-6">
                                End Time
                            </th>
                        </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 bg-white">
{{--                        @foreach($data['blocks'] as $info)--}}
{{--                            <tr class="divide-x divide-gray-200">--}}
{{--                                <td class="whitespace-nowrap py-4 pl-4 pr-4 text-sm font-medium text-gray-900 sm:pl-6">--}}
{{--                                    {{ $info->id }}--}}
{{--                                </td>--}}
{{--                                <td class="whitespace-nowrap p-4 text-sm text-gray-500">--}}
{{--                                    {{ $info->forgiving }}--}}
{{--                                </td>--}}
{{--                                <td class="whitespace-nowrap p-4 text-sm text-gray-500">--}}
{{--                                    {{ $info->starts_at }}--}}
{{--                                </td>--}}
{{--                                <td class="whitespace-nowrap py-4 pl-4 pr-4 text-sm text-gray-500 sm:pr-6">--}}
{{--                                    {{ $info->ends_at }}--}}
{{--                                </td>--}}
{{--                            </tr>--}}
{{--                        @endforeach--}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="my-10 px-4 sm:px-6 lg:px-8">
    <div class="sm:flex sm:items-center">
        <div class="sm:flex-auto">
            <h1 class="text-xl font-semibold text-gray-900">All Tasks</h1>
        </div>
    </div>
    <div class="mt-2 flex flex-col">
        <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-300">
                        <thead class="bg-gray-50">
                        <tr class="divide-x divide-gray-200">
                            <th scope="col" class="py-3.5 pl-4 pr-4 text-left text-sm font-semibold text-gray-900 sm:pl-6">
                                ID
                            </th>
                            <th scope="col" class="px-4 py-3.5 text-left text-sm font-semibold text-gray-900">
                                Title
                            </th>
                            <th scope="col" class="px-4 py-3.5 text-left text-sm font-semibold text-gray-900">
                                Description
                            </th>
                            <th scope="col" class="px-4 py-3.5 text-left text-sm font-semibold text-gray-900">
                                Note
                            </th>
                            <th scope="col" class="px-4 py-3.5 text-left text-sm font-semibold text-gray-900">
                                Category
                            </th>
                            <th scope="col" class="px-4 py-3.5 text-left text-sm font-semibold text-gray-900">
                                Status
                            </th>
                            <th scope="col" class="px-4 py-3.5 text-left text-sm font-semibold text-gray-900">
                                Priority Rating
                            </th>
                            <th scope="col" class="px-4 py-3.5 text-left text-sm font-semibold text-gray-900">
                                Color
                            </th>
                            <th scope="col" class="py-3.5 pl-4 pr-4 text-left text-sm font-semibold text-gray-900 sm:pr-6">
                                Allotted Time
                            </th>
                        </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 bg-white">
{{--                        @foreach($data['tasks'] as $info)--}}
{{--                            <tr class="divide-x divide-gray-200">--}}
{{--                                <td class="whitespace-nowrap py-4 pl-4 pr-4 text-sm font-medium text-gray-900 sm:pl-6">--}}
{{--                                    {{ $info->id }}--}}
{{--                                </td>--}}
{{--                                <td class="whitespace-nowrap p-4 text-sm text-gray-500">--}}
{{--                                    {{ $info->title }}--}}
{{--                                </td>--}}
{{--                                <td class="whitespace-nowrap p-4 text-sm text-gray-500">--}}
{{--                                    {{ $info->description }}--}}
{{--                                </td>--}}
{{--                                <td class="whitespace-nowrap p-4 text-sm text-gray-500">--}}
{{--                                    {{ $info->note }}--}}
{{--                                </td>--}}
{{--                                <td class="whitespace-nowrap p-4 text-sm text-gray-500">--}}
{{--                                    {{ $info->category->name }}--}}
{{--                                </td>--}}
{{--                                <td class="whitespace-nowrap p-4 text-sm text-gray-500">--}}
{{--                                    {{ $info->status->name }}--}}
{{--                                </td>--}}
{{--                                <td class="whitespace-nowrap p-4 text-sm text-gray-500">--}}
{{--                                    {{ $info->priority->name }}--}}
{{--                                </td>--}}
{{--                                <td class="whitespace-nowrap p-4 text-sm text-gray-500">--}}
{{--                                    {{ $info->color->name }}--}}
{{--                                </td>--}}
{{--                                <td class="whitespace-nowrap py-4 pl-4 pr-4 text-sm text-gray-500 sm:pr-6">--}}
{{--                                    {{ $info->allotted_time }}--}}
{{--                                </td>--}}
{{--                            </tr>--}}
{{--                        @endforeach--}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
