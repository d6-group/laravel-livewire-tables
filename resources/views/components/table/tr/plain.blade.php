@aware(['component','isTailwind','isDaisyUI','isBootstrap'])
@props(['customAttributes' => [], 'displayMinimisedOnReorder' => true])

@if ($isTailwind)
    <tr {{ $attributes
            ->merge($customAttributes)
            ->class(['bg-white dark:bg-gray-700 dark:text-white' => $customAttributes['default'] ?? true])
            ->class(['laravel-livewire-tables-reorderingMinimised'])
            ->except('default')
        }}
    >
        {{ $slot }}
    </tr>
@elseif ($isDaisyUI)
    <tr {{ $attributes
            ->merge($customAttributes)
            ->class(['bg-base-100' => $customAttributes['default'] ?? true])
            ->class(['laravel-livewire-tables-reorderingMinimised'])
            ->except('default')
        }}
    >
        {{ $slot }}
    </tr>
@elseif ($isBootstrap)
    <tr {{ $attributes
            ->merge($customAttributes)
            ->class(['' => $customAttributes['default'] ?? true])
            ->class(['laravel-livewire-tables-reorderingMinimised'])
            ->except('default')
        }}
    >
        {{ $slot }}
    </tr>
@endif
