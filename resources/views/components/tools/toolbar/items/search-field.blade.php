@aware(['isTailwind','isDaisyUI', 'isBootstrap'])

@if($isDaisyUI)
<label class="input input-sm input-bordered flex items-center gap-2">

    @if($this->hasSearchIcon)
        <x-livewire-tables::tools.toolbar.items.search.icon :searchIcon="$this->getSearchIcon" :searchIconClasses="$this->getSearchIconClasses" :searchIconOtherAttributes="$this->getSearchIconOtherAttributes"  />
    @endif

    <x-livewire-tables::tools.toolbar.items.search.input />

    @if ($this->hasSearch)
        <x-livewire-tables::tools.toolbar.items.search.remove />
    @endif
</label>
@else
<div 
    @class([
        'mb-3 mb-md-0 input-group' => $isBootstrap,
        'rounded-md shadow-sm' => $isTailwind,
        'flex' => !$this->hasSearchIcon,
        'relative inline-flex flex-row' => $this->hasSearchIcon,
    ])>

        @if($this->hasSearchIcon)
            <x-livewire-tables::tools.toolbar.items.search.icon :searchIcon="$this->getSearchIcon" :searchIconClasses="$this->getSearchIconClasses" :searchIconOtherAttributes="$this->getSearchIconOtherAttributes"  />
        @endif

        <x-livewire-tables::tools.toolbar.items.search.input />

        @if ($this->hasSearch)
            <x-livewire-tables::tools.toolbar.items.search.remove />
        @endif
</div>
@endif