@props([
    'variant' => 'default', // default, gradient, glass
    'padding' => 'p-6',
    'shadow' => true,
    'hover' => true,
    'rounded' => 'rounded-xl',
    'border' => true,
    'class' => '',
])

@php
$baseClasses = match($variant) {
    'gradient' => 'intelica-card-gradient',
    'glass' => 'intelica-glass-effect',
    default => 'intelica-card',
};

$classes = collect([
    $baseClasses,
    $padding,
    $rounded,
    $shadow ? 'shadow-lg hover:shadow-xl' : '',
    $hover ? 'transition-all duration-300' : '',
    $border && $variant === 'default' ? 'border border-gray-200 dark:border-gray-700' : '',
    $class,
])->filter()->implode(' ');
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>
    @if (isset($header))
        <div class="border-b border-gray-200 dark:border-gray-700 pb-4 mb-4">
            {{ $header }}
        </div>
    @endif

    {{ $slot }}

    @if (isset($footer))
        <div class="border-t border-gray-200 dark:border-gray-700 pt-4 mt-4">
            {{ $footer }}
        </div>
    @endif
</div>
