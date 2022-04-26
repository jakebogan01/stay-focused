<form action="#" wire:submit.prevent="register">
    <legend class="text-base font-semibold text-gray-900">Block</legend>

        {{--  THIS 100% WORKS  --}}

    <div class="grid grid-cols-6 gap-6 mt-6">
        <div class="col-span-1 ">
            <label for="time-start" class="block text-sm font-medium text-gray-700">Time Start</label>
            <input wire:model="start" type="time" id="time" name="time" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 shadow-sm sm:text-sm border-gray-300 rounded-md">
        </div>

        <div class="col-span-1">
            <label for="time-start" class="block text-sm font-medium text-gray-700">Time End</label>
            <input wire:model="end" type="time" id="time" name="time" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 shadow-sm sm:text-sm border-gray-300 rounded-md">
        </div>
    </div>

    <fieldset class="mt-6">
        <div class="space-y-4">
            <div class="flex items-start">
                <div class="h-5 flex items-center">
                    <input wire:model="forgiven" id="comments" name="comments" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                </div>
                <div class="ml-3 text-sm">
                    <label for="comments" class="font-medium text-gray-700">Forgiving</label>
                    <p class="text-gray-500">When current task is completed, you'll be asked for more time on that specific task.</p>
                </div>
            </div>
        </div>
    </fieldset>

{{--    this might be in the task-form compopent  --}}
    @livewire('task-form')

    <input type="submit" value="Submit" class="mt-10 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-semibold rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
</form>
