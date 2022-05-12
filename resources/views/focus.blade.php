<x-app-layout>
    <x-create-modal>
        <livewire:block-form :data="$data" />
    </x-create-modal>

    <!-- This example requires Tailwind CSS v2.0+ -->
    <div class="px-4 sm:px-6 lg:px-8">
        <div class="mt-8 flex flex-col">
            <div class="-my-2 -mx-4 sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                    <div class="shadow-md sm:rounded-lg overflow-hidden">
                        <table class="min-w-full">
                            <thead>
                            <tr>
                                <th scope="col" class="py-3.5 pl-4 pr-4 text-left text-xl font-semibold text-gray-900 sm:pl-6">
                                    Task
                                </th>
                                <th scope="col" class="px-4 py-3.5 text-left text-sm font-semibold text-gray-900"></th>
                                <th scope="col" class="py-3.5 pl-4 pr-4 text-left text-xl font-semibold text-gray-900 sm:pr-6">
                                    Status
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="whitespace-nowrap py-4 pl-4 pr-4 text-sm font-medium text-purple-900 sm:pl-6">
                                    {{ $data['tasks']->first()->title }}
                                </td>
                                <td class="p-4 w-full">
                                    <div class="bg-gray-50 w-full h-5 rounded-full border border-gray-300 overflow-hidden">
                                        <div class="progressWidth bg-green-300 h-full transform transition-all" style="width: 0%;"></div>
                                    </div>
                                </td>
{{--                                <td class="whitespace-nowrap py-4 pl-4 pr-4 text-sm text-gray-500 sm:pr-6">--}}
{{--                                    Member--}}
{{--                                </td>--}}
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-center text-gray-500">
                                    <span class="inline-flex rounded-full bg-orange-200 px-2 text-sm font-semibold leading-5 text-orange-600">
                                        Pending
                                    </span>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
