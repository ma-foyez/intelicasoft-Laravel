@props([
    'id' => 'modal',
    'size' => 'md', // sm, md, lg, xl, full
    'centered' => true,
    'backdrop' => true,
    'keyboard' => true,
    'title' => null,
    'class' => '',
])

@php
$sizeClasses = match($size) {
    'sm' => 'max-w-sm',
    'md' => 'max-w-md',
    'lg' => 'max-w-lg',
    'xl' => 'max-w-xl',
    'full' => 'max-w-full mx-4',
    default => 'max-w-md',
};

$modalClasses = collect([
    'fixed inset-0 z-50 overflow-y-auto',
    $class,
])->filter()->implode(' ');

$dialogClasses = collect([
    'flex min-h-full items-center justify-center p-4',
    $centered ? 'items-center' : 'items-start pt-20',
])->filter()->implode(' ');

$contentClasses = collect([
    'relative w-full transform overflow-hidden rounded-2xl bg-white dark:bg-gray-900 shadow-2xl transition-all',
    $sizeClasses,
])->filter()->implode(' ');
@endphp

<div
    {{ $attributes->merge(['class' => $modalClasses, 'id' => $id]) }}
    x-data="{ open: false }"
    x-show="open"
    x-on:open-modal-{{ $id }}.window="open = true"
    x-on:close-modal-{{ $id }}.window="open = false"
    x-on:keydown.escape.window="open && {{ $keyboard ? 'open = false' : 'null' }}"
    style="display: none;"
>
    <!-- Backdrop -->
    @if ($backdrop)
        <div
            class="fixed inset-0 bg-black/50 backdrop-blur-sm transition-opacity"
            x-show="open"
            x-transition:enter="ease-out duration-300"
            x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100"
            x-transition:leave="ease-in duration-200"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            @click="open = false"
        ></div>
    @endif

    <!-- Modal Dialog -->
    <div class="{{ $dialogClasses }}">
        <div
            class="{{ $contentClasses }}"
            x-show="open"
            x-transition:enter="ease-out duration-300"
            x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
            x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
            x-transition:leave="ease-in duration-200"
            x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
            x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
        >
            @if ($title)
                <div class="border-b border-gray-200 dark:border-gray-700 px-6 py-4">
                    <div class="flex items-center justify-between">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                            {{ $title }}
                        </h3>
                        <button
                            type="button"
                            class="text-gray-400 hover:text-gray-600 dark:hover:text-gray-300 transition-colors"
                            @click="open = false"
                        >
                            <i class="fas fa-times text-lg"></i>
                        </button>
                    </div>
                </div>
            @endif

            @if (isset($header))
                <div class="border-b border-gray-200 dark:border-gray-700 px-6 py-4">
                    {{ $header }}
                </div>
            @endif

            <div class="px-6 py-4">
                {{ $slot }}
            </div>

            @if (isset($footer))
                <div class="border-t border-gray-200 dark:border-gray-700 px-6 py-4 bg-gray-50 dark:bg-gray-800/50">
                    {{ $footer }}
                </div>
            @endif
        </div>
    </div>
</div>

<script>
// Helper function to open modal
window.openModal = function(modalId) {
    window.dispatchEvent(new CustomEvent('open-modal-' + modalId));
}

// Helper function to close modal
window.closeModal = function(modalId) {
    window.dispatchEvent(new CustomEvent('close-modal-' + modalId));
}
</script>
