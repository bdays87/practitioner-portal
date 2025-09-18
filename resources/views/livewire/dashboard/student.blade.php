<div>
      <livewire:components.header/>
      <livewire:components.checkcustomer/>
      <livewire:myprofessions/>
      <livewire:admin.components.contactdetails :customer="auth()->user()->customer->customer" />
</div>
