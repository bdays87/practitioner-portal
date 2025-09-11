<div>
<x-breadcrumbs :items="$breadcrumbs"    class="bg-base-300 p-3 rounded-box mt-2" />

<x-card title="Application Sessions" separator class="mt-5 border-2 border-gray-200">
    <x-slot:menu>
        <x-button label="New" responsive icon="o-plus" class="btn-outline" @click="$wire.modal = true" />
    </x-slot:menu>

    <x-table :headers="$headers" :rows="$applicationsessions">
        @scope('cell_user', $applicationsession)
        {{ $applicationsession->user->name }} {{ $applicationsession->user->surname }}
        @endscope
        @scope('actions', $applicationsession)
        <div class="flex items-center space-x-2">
            @can('session.modify')
            <x-button icon="o-pencil" class="btn-sm btn-info btn-outline" 
                wire:click="edit({{ $applicationsession->id }})" spinner />
            <x-button icon="o-trash" class="btn-sm btn-outline btn-error" 
                wire:click="delete({{ $applicationsession->id }})" confirm="Are you sure?" spinner />
            @endcan
        </div>
        @endscope
        <x-slot:empty>
            <x-alert class="alert-error" title="No application sessions found." />
        </x-slot:empty>
    </x-table>
</x-card>

<x-modal wire:model="modal"  title="{{ $id ? 'Edit Application Session' : 'New Application Session' }}">
    <x-form wire:submit="{{ $id ? 'update' : 'save' }}">
        <div class="grid gap-2">
        <x-input label="Year" wire:model="year" />
        </div>
     

        <x-slot:actions>
            <x-button label="Cancel" @click="$wire.modal = false" />
            <x-button label="{{ $id ? 'Update' : 'Save' }}" type="submit" class="btn-primary" spinner="save" />
        </x-slot:actions>
    </x-form>
</x-modal>
</div>