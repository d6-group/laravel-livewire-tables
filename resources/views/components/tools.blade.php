@aware(['component','isTailwind','isDaisyUI','isBootstrap'])

<div @class([
    'flex-col' => $isTailwind || $isDaisyUI,
    'd-flex flex-column ' => ($isBootstrap),
])>
    {{ $slot }}
</div>
