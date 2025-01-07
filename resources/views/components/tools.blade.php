@aware(['isTailwind','isDaisyUI','isBootstrap','isBootstrap'])
@php($toolsAttributes = $this->getToolsAttributesBag())

<div {{
    $toolsAttributes->merge()
        ->class([
            'flex-col' => ($isTailwind || $isDaisyUI || $isBootstrap) && ($toolsAttributes['default-styling'] ?? true),
            'd-flex flex-column' => $isBootstrap && ($toolsAttributes['default-styling'] ?? true)
        ])
        ->except(['default','default-styling','default-colors'])
    }}
>
    {{ $slot }}
</div>
