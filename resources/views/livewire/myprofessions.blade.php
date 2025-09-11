<div>
  @if(auth()->user()->customer)
  <livewire:admin.components.customerprofessions :customer="auth()->user()->customer->customer"/>
  @else
  <div class="text-center">
    <h1 class="text-2xl font-bold">You are not a customer</h1>
  </div>
  @endif
</div>
