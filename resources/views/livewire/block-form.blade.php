<form action="#" wire:submit.prevent="register">
    <legend class="text-base font-semibold text-gray-900">Block</legend>
    <div class="grid grid-cols-6 gap-6 mt-6">
        <div class="col-span-1 ">
            <label for="time-start" class="block text-sm font-medium text-gray-700">Time Start</label>
            <input wire:modle="start" type="time" id="time" name="time" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 shadow-sm sm:text-sm border-gray-300 rounded-md">
        </div>

{{--        <div class="col-span-1">--}}
{{--            <label for="time-start" class="block text-sm font-medium text-gray-700">Time End</label>--}}
{{--            <input type="time" id="time" name="time" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 shadow-sm sm:text-sm border-gray-300 rounded-md">--}}
{{--        </div>--}}
    </div>

{{--    <fieldset class="mt-6">--}}
{{--        <div class="space-y-4">--}}
{{--            <div class="flex items-start">--}}
{{--                <div class="h-5 flex items-center">--}}
{{--                    <input id="comments" name="comments" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">--}}
{{--                </div>--}}
{{--                <div class="ml-3 text-sm">--}}
{{--                    <label for="comments" class="font-medium text-gray-700">Forgiving</label>--}}
{{--                    <p class="text-gray-500">When current task is completed, you'll be asked for more time on that specific task.</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </fieldset>--}}

{{--    <legend class="text-base font-semibold text-gray-900 mt-10">Task</legend>--}}
{{--    <div class="grid grid-cols-6 gap-6 mt-6">--}}
{{--        <div class="col-span-6">--}}
{{--            <label for="title" class="block text-sm font-medium text-gray-700">Title</label>--}}
{{--            <input type="text" name="title" id="title" autocomplete="title" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">--}}
{{--        </div>--}}

{{--        <div class="col-span-6">--}}
{{--            <label for="description" class="block text-sm font-medium text-gray-700">Description</label>--}}
{{--            <div class="mt-1">--}}
{{--                <textarea id="description" name="description" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border border-gray-300 rounded-md"></textarea>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="col-span-6">--}}
{{--            <label for="notes" class="block text-sm font-medium text-gray-700">Notes</label>--}}
{{--            <div class="mt-1">--}}
{{--                <textarea id="notes" name="notes" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border border-gray-300 rounded-md"></textarea>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="col-span-6 sm:col-span-2">--}}
{{--            <label for="category" class="block text-sm font-medium text-gray-700">Category</label>--}}
{{--            <select id="category" name="category" autocomplete="category" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">--}}
{{--                <option>Development</option>--}}
{{--                <option>Production</option>--}}
{{--                <option>Front End</option>--}}
{{--                <option>Back End</option>--}}
{{--            </select>--}}
{{--        </div>--}}

{{--        <div class="col-span-6 sm:col-span-2">--}}
{{--            <label for="priority" class="block text-sm font-medium text-gray-700">Priority</label>--}}
{{--            <select id="priority" name="priority" autocomplete="priority" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">--}}
{{--                <option>High</option>--}}
{{--                <option>Medium</option>--}}
{{--                <option>Low</option>--}}
{{--            </select>--}}
{{--        </div>--}}

{{--        <div class="col-span-6 sm:col-span-2">--}}
{{--            <label for="color" class="block text-sm font-medium text-gray-700">Color</label>--}}
{{--            <select id="color" name="color" autocomplete="color" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">--}}
{{--                <option>Red</option>--}}
{{--                <option>Blue</option>--}}
{{--            </select>--}}
{{--        </div>--}}

{{--        <div class="col-span-6">--}}
{{--            <div x-data="{ time: 120 }" class="w-full">--}}
{{--                <label for="time" class="block text-sm font-medium text-gray-700" x-text="`Time to spend on task: ` + time + `min`"></label>--}}
{{--                <input type="range" min="0" max="240" id="time" name="time" x-model="time"--}}
{{--                       class="w-full h-2 bg-[#D2D5DB] appearance-none rounded" step="10"/>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

    <input type="submit" value="Submit" class="mt-10 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-semibold rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
</form>
