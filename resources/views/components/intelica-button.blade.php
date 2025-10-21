@props([
    'variant' => 'primary', // primary, secondary, outline, ghost
    'size' => 'md', // sm, md, lg, xl
    'type' => 'button',
    'href' => null,
    'loading' => false,
    'disabled' => false,
    'icon' => null,
    'iconPosition' => 'left', // left, right
    'class' => '',
])

@php
$baseClasses = match($variant) {
    'primary' => 'intelica-btn-primary',
    'secondary' => 'intelica-btn-secondary',
    'outline' => 'intelica-btn-outline',
    'ghost' => 'bg-transparent hover:bg-intelica-50 text-intelica-600 hover:text-intelica-700',
    default => 'intelica-btn-primary',
};

$sizeClasses = match($size) {
    'sm' => 'px-4 py-2 text-sm',
    'md' => 'px-6 py-3 text-base',
    'lg' => 'px-8 py-4 text-lg',
    'xl' => 'px-10 py-5 text-xl',
    default => 'px-6 py-3 text-base',
};

$classes = collect([
    'inline-flex items-center justify-center font-medium focus:outline-none focus:ring-4 focus:ring-intelica-300 disabled:opacity-50 disabled:cursor-not-allowed transition-all duration-300',
    $baseClasses,
    $sizeClasses,
    $disabled ? 'opacity-50 cursor-not-allowed' : '',
    $class,
])->filter()->implode(' ');

$tag = $href ? 'a' : 'button';
$attributes = $href ? $attributes->merge(['href' => $href]) : $attributes->merge(['type' => $type, 'disabled' => $disabled || $loading]);
@endphp

<{{ $tag }} {{ $attributes->merge(['class' => $classes]) }}>
    @if ($loading)
        <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-current" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
        </svg>
        Loading...
    @else
        @if ($icon && $iconPosition === 'left')
            <i class="{{ $icon }} mr-2"></i>
        @endif

        {{ $slot }}

        @if ($icon && $iconPosition === 'right')
            <i class="{{ $icon }} ml-2"></i>
        @endif
    @endif
</{{ $tag }}>
