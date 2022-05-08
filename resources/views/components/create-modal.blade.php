<div class="flex justify-center">
    <div
        x-show="openModal"
        style="display: none"
        x-on:keydown.escape.prevent.stop="openModal = false"
        role="dialog"
        aria-modal="true"
        x-id="['modal-title']"
        :aria-labelledby="$id('modal-title')"
        class="fixed inset-0 overflow-y-auto z-50"
    >
        <div x-show="openModal" x-transition.opacity class="fixed inset-0 bg-black bg-opacity-50"></div>

        <div
            x-show="openModal" x-transition
            x-on:click="openModal = false"
            class="relative min-h-screen flex items-center justify-center p-4"
        >
            <div
                x-on:click.stop
                x-trap.noscroll.inert="open"
                class="relative max-w-3xl w-full bg-white rounded-xl shadow-lg p-12 overflow-y-auto">
                <h3 class="text-xl font-bold leading-6 text-gray-900 mb-6">
                    Test Form
                </h3>
                {{ $slot }}
            </div>
        </div>
    </div>
</div>
