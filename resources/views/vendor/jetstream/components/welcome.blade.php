<x-create-modal>
    <livewire:block-form :data="$data" />
</x-create-modal>

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
                                Start Time
                            </th>
                            <th scope="col" class="py-3.5 pl-4 pr-4 text-left text-sm font-semibold text-gray-900 sm:pr-6">
                                End Time
                            </th>
                        </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 bg-white">
                        @foreach($data['blocks'] as $block)
                            <tr class="divide-x divide-gray-200">
                                <td class="whitespace-nowrap py-4 pl-4 pr-4 text-sm font-medium text-gray-900 sm:pl-6">
                                    {{ $block->id }}
                                </td>
                                <td class="whitespace-nowrap p-4 text-sm text-gray-500">
                                    {{ $block->starts_at }}
                                </td>
                                <td class="whitespace-nowrap py-4 pl-4 pr-4 text-sm text-gray-500 sm:pr-6">
                                    {{ $block->ends_at }}
                                </td>
                            </tr>
                        @endforeach
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
{{--                            <th scope="col" class="px-4 py-3.5 text-left text-sm font-semibold text-gray-900">--}}
{{--                                Status--}}
{{--                            </th>--}}
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
                        @foreach($data['tasks'] as $task)
                            <tr class="divide-x divide-gray-200">
                                <td class="whitespace-nowrap py-4 pl-4 pr-4 text-sm font-medium text-gray-900 sm:pl-6">
                                    {{ $task->id }}
                                </td>
                                <td class="whitespace-nowrap p-4 text-sm text-gray-500">
                                    {{ $task->title }}
                                </td>
                                <td class="whitespace-nowrap p-4 text-sm text-gray-500">
                                    {{ $task->description }}
                                </td>
                                <td class="whitespace-nowrap p-4 text-sm text-gray-500">
                                    {{ $task->note }}
                                </td>
                                <td class="whitespace-nowrap p-4 text-sm text-gray-500">
                                    {{ $task->category->name }}
                                </td>
{{--                                <td class="whitespace-nowrap p-4 text-sm text-gray-500">--}}
{{--                                    {{ $task->status->name }}--}}
{{--                                </td>--}}
                                <td class="whitespace-nowrap p-4 text-sm text-gray-500">
                                    {{ $task->priority->name }}
                                </td>
                                <td class="whitespace-nowrap p-4 text-sm text-gray-500">
                                    {{ $task->color->name }}
                                </td>
                                <td class="whitespace-nowrap py-4 pl-4 pr-4 text-sm text-gray-500 sm:pr-6">
                                    {{ $task->allotted_time }}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
