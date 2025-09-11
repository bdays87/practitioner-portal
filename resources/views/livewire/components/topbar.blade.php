<div>
    <x-nav sticky class="rounded-md border  bg-base-200 text-gray-500 ">
        <x-slot:brand>
            @if(auth()->user()->accounttype_id == 1)
            <livewire:admin.components.searchcustomer />
            @else
            <div>My Portal</div>
            @endif
        </x-slot:brand>
        <x-slot:actions>
            <label for="main-drawer" class="lg:hidden me-3">
                <x-icon name="o-bars-3" class="cursor-pointer" />
            </label>
            <x-button  icon="o-envelope"  class="btn-ghost btn-sm indicator" responsive>
                <span class="indicator-item badge badge-xs badge-error">5</span>
            </x-button>
            <x-button  icon="o-bell"  class="btn-ghost btn-sm indicator" responsive>
                <span class="indicator-item badge badge-xs badge-error">5</span>
            </x-button>
            <div class="hidden gap-3 items-center md:flex">
                <div class="text-right">
                    <div class="text-sm font-medium text-gray-500">{{ auth()->user()->name }}</div>
                    <div class="text-xs text-gray-500">{{ auth()->user()->email }}</div>
                </div>
                <x-avatar src="{{ auth()->user()->avatar ?? '' }}" />
            </div>
            <x-dropdown>
                <x-slot:trigger>
                    <x-button class="btn-ghost btn-sm" icon="o-chevron-down" />
                </x-slot:trigger>
                <x-menu-item title="Profile Settings" class="text-gray-500" icon="o-cog-6-tooth" link="" />
                <x-menu-item 
                    title="Sign Out" 
                    icon="o-arrow-right-on-rectangle" 
                    wire:click="logout"
                    class="text-red-500 hover:text-red-600" />
            </x-dropdown>

        </x-slot:actions>
        
    </x-nav>   
</div>
