@aware(['component'])

<div @class([
    'flex-col' => $component->isTailwind() || $component->isDaisyUI(),
    'd-flex flex-column ' => ($component->isBootstrap()),
])>
    {{ $slot }}
</div>
