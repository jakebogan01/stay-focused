<form action="#" wire:submit.prevent="register">
    <legend class="text-base font-semibold text-gray-900">Block</legend>

    <div class="grid grid-cols-6 gap-6 mt-6">
        <div class="col-span-1 ">
            <label for="time-start" class="block text-sm font-medium text-gray-700">Time Start</label>
            <input wire:model="start" type="time" id="time" name="time" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 shadow-sm sm:text-sm border-gray-300 rounded-md">
            @error('start') <div class="mt-1 text-red-500 text-sm">{{ $message }}</div> @enderror
        </div>

        <div class="col-span-1">
            <label for="time-start" class="block text-sm font-medium text-gray-700">Time End</label>
            <input wire:model="end" type="time" id="time" name="time" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 shadow-sm sm:text-sm border-gray-300 rounded-md">
            @error('end') <div class="mt-1 text-red-500 text-sm">{{ $message }}</div> @enderror

        </div>
    </div>

    <legend class="text-base font-semibold text-gray-900 mt-10">Task</legend>
    <div class="grid grid-cols-6 gap-6 mt-6">
        <div class="col-span-6">
            <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
            <input wire:model="title" type="text" name="title" id="title" autocomplete="title" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            @error('title') <div class="mt-1 text-red-500 text-sm">{{ $message }}</div> @enderror
        </div>


        <div class="col-span-6">
            <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
            <div class="mt-1">
                <textarea wire:model="description" id="description" name="description" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border border-gray-300 rounded-md"></textarea>
            </div>
            @error('description') <div class="mt-1 text-red-500 text-sm">{{ $message }}</div> @enderror
        </div>

        <div class="col-span-6">
            <label for="notes" class="block text-sm font-medium text-gray-700">Notes</label>
            <div class="mt-1">
                <textarea wire:model="note" id="notes" name="notes" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border border-gray-300 rounded-md"></textarea>
            </div>
            @error('note') <div class="mt-1 text-red-500 text-sm">{{ $message }}</div> @enderror
        </div>

        <div class="col-span-6 sm:col-span-2">
            <label for="category" class="block text-sm font-medium text-gray-700">Category</label>
            <select wire:model="category" id="category" name="category" autocomplete="category" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                <option disabled selected value></option>
                @foreach($categories as $category)
                    <option>{{ $category->name }}</option>
                @endforeach
            </select>
            @error('category') <div class="mt-1 text-red-500 text-sm">{{ $message }}</div> @enderror
        </div>

        <div class="col-span-6 sm:col-span-2">
            <label for="priority" class="block text-sm font-medium text-gray-700">Priority</label>
            <select wire:model="priority" id="priority" name="priority" autocomplete="priority" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                <option disabled selected value></option>
                @foreach($priorities as $priority)
                    <option>{{ $priority->name }}</option>
                @endforeach
            </select>
            @error('priority') <div class="mt-1 text-red-500 text-sm">{{ $message }}</div> @enderror
        </div>

        <div class="col-span-6 sm:col-span-2">
            <label for="color" class="block text-sm font-medium text-gray-700">Color</label>
            <select wire:model="color" id="color" name="color" autocomplete="color" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                <option disabled selected value></option>
                @foreach($colors as $color)
                    <option>{{ $color->name }}</option>
                @endforeach
            </select>
            @error('color') <div class="mt-1 text-red-500 text-sm">{{ $message }}</div> @enderror
        </div>

        <div class="col-span-6">
            <div x-data="{ time: 60 }" class="w-full">
                <label for="time" class="block text-sm font-medium text-gray-700" x-text="`Time to spend on task: ` + time + `min`"></label>
                <input wire:model="time" type="range" min="0" max="720" id="time" name="time" x-model="time"
                       class="w-full h-2 bg-[#D2D5DB] appearance-none rounded" step="10"/>
            </div>
        </div>
    </div>

    <fieldset class="mt-6">
        <div class="space-y-4">
            <div class="flex items-start">
                <div class="h-5 flex items-center">
                    <input wire:model="moretime" id="moretime" name="moretime" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                </div>
                <div class="ml-3 text-sm">
                    <label for="moretime" class="font-medium text-gray-700">More Time</label>
                    <p class="text-gray-500">When current task is completed, you'll be asked for more time on that specific task.</p>
                </div>
            </div>
        </div>
    </fieldset>

    <input type="submit" value="Submit" class="mt-10 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-semibold rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
</form>
