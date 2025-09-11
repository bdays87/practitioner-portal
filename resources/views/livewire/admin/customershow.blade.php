<div>
    <x-breadcrumbs :items="$breadcrumbs"    class="bg-base-300 p-3 rounded-box mt-2" />
    @can('customers.access')
    <x-card title="{{ $customerprofile->name }} {{ $customerprofile->surname }}" subtitle="{{ $customerprofile->email }} || {{ $customerprofile->phone }}" separator class="mt-5 border-2 border-gray-200">
        <x-slot:menu>
            <livewire:admin.components.wallettopups :currencies="$currencies" :customer="$customerprofile" />
            <livewire:admin.components.walletbalances :customer="$customerprofile" />
           
        </x-slot:menu>
        <x-tabs
    wire:model="tabSelected"
    active-class="bg-primary rounded pt-4 pb-2 !text-white"
    label-class="font-semibold"
    label-div-class="bg-primary/5 rounded pl-2 pt-2 pb-2"
>
    <x-tab name="profile-tab" icon="o-user" label="Personal details">
        <livewire:admin.components.personaldetails :customer="$customerprofile" />
    </x-tab>
    <x-tab name="employment-tab" icon="o-briefcase" label="Employment details">
        <livewire:admin.components.employmentdetails :customer="$customerprofile" />
    </x-tab>
    <x-tab name="contact-tab" icon="o-phone" label="Contact details">
        <livewire:admin.components.contactdetails :customer="$customerprofile" />
    </x-tab>
    <x-tab name="statement-tab" icon="o-document" label="Statement">
        <livewire:admin.components.customerstatements :customer="$customerprofile" />
    </x-tab>
    <x-tab name="onlinepayment-tab" icon="o-credit-card" label="Paynow ">
        <livewire:admin.components.customeronlinepayments :customer="$customerprofile" />
    </x-tab>
    <x-tab name="manualpayment-tab" icon="o-banknotes" label="Manual Payments">
        <livewire:admin.components.manualpayments :customer="$customerprofile" />
    </x-tab>
</x-tabs>

      
    </x-card>
  
  @else
    <x-alert class="alert-error mt-3" title="You do not have permission to view customers." />
    @endcan
</div>
