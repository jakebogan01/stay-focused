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
                <form action="#" method="POST">
                    <legend class="text-base font-semibold text-gray-900">Block</legend>
                    @livewire('block-form')

                    <legend class="text-base font-semibold text-gray-900 mt-10">Task</legend>
                    <div class="grid grid-cols-6 gap-6 mt-6">
                        <div class="col-span-6">
                            <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                            <input type="text" name="title" id="title" autocomplete="title" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>

                        <div class="col-span-6">
                            <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                            <div class="mt-1">
                                <textarea id="description" name="description" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border border-gray-300 rounded-md"></textarea>
                            </div>
                        </div>

                        <div class="col-span-6">
                            <label for="notes" class="block text-sm font-medium text-gray-700">Notes</label>
                            <div class="mt-1">
                                <textarea id="notes" name="notes" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border border-gray-300 rounded-md"></textarea>
                            </div>
                        </div>

                        <div class="col-span-6 sm:col-span-2">
                            <label for="category" class="block text-sm font-medium text-gray-700">Category</label>
                            <select id="category" name="category" autocomplete="category" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                <option>Development</option>
                                <option>Production</option>
                                <option>Front End</option>
                                <option>Back End</option>
                            </select>
                        </div>

                        <div class="col-span-6 sm:col-span-2">
                            <label for="priority" class="block text-sm font-medium text-gray-700">Priority</label>
                            <select id="priority" name="priority" autocomplete="priority" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                <option>High</option>
                                <option>Medium</option>
                                <option>Low</option>
                            </select>
                        </div>

                        <div class="col-span-6 sm:col-span-2">
                            <label for="color" class="block text-sm font-medium text-gray-700">Color</label>
                            <select id="color" name="color" autocomplete="color" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                <option>Red</option>
                                <option>Blue</option>
                            </select>
                        </div>

                        <div class="col-span-6">
                            <div x-data="{ time: 120 }" class="w-full">
                                <label for="time" class="block text-sm font-medium text-gray-700" x-text="`Time to spend on task: ` + time + `min`"></label>
                                <input type="range" min="0" max="240" id="time" name="time" x-model="time"
                                       class="w-full h-2 bg-[#D2D5DB] appearance-none rounded" step="10"/>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="mt-10 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-semibold rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Submit</button>
                </form>
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
                        @foreach($data['blocks'] as $info)
                            <tr class="divide-x divide-gray-200">
                                <td class="whitespace-nowrap py-4 pl-4 pr-4 text-sm font-medium text-gray-900 sm:pl-6">
                                    {{ $info->id }}
                                </td>
                                <td class="whitespace-nowrap p-4 text-sm text-gray-500">
                                    {{ $info->forgiving }}
                                </td>
                                <td class="whitespace-nowrap p-4 text-sm text-gray-500">
                                    {{ $info->starts_at }}
                                </td>
                                <td class="whitespace-nowrap py-4 pl-4 pr-4 text-sm text-gray-500 sm:pr-6">
                                    {{ $info->ends_at }}
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
                        @foreach($data['tasks'] as $info)
                            <tr class="divide-x divide-gray-200">
                                <td class="whitespace-nowrap py-4 pl-4 pr-4 text-sm font-medium text-gray-900 sm:pl-6">
                                    {{ $info->id }}
                                </td>
                                <td class="whitespace-nowrap p-4 text-sm text-gray-500">
                                    {{ $info->title }}
                                </td>
                                <td class="whitespace-nowrap p-4 text-sm text-gray-500">
                                    {{ $info->description }}
                                </td>
                                <td class="whitespace-nowrap p-4 text-sm text-gray-500">
                                    {{ $info->note }}
                                </td>
                                <td class="whitespace-nowrap p-4 text-sm text-gray-500">
                                    {{ $info->category->name }}
                                </td>
                                <td class="whitespace-nowrap p-4 text-sm text-gray-500">
                                    {{ $info->status->name }}
                                </td>
                                <td class="whitespace-nowrap p-4 text-sm text-gray-500">
                                    {{ $info->priority->name }}
                                </td>
                                <td class="whitespace-nowrap p-4 text-sm text-gray-500">
                                    {{ $info->color->name }}
                                </td>
                                <td class="whitespace-nowrap py-4 pl-4 pr-4 text-sm text-gray-500 sm:pr-6">
                                    {{ $info->allotted_time }}
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
