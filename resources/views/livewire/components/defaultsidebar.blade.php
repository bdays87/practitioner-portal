<div>
    <x-slot:sidebar drawer="main-drawer" collapsible class="bg-base-200 text-gray-500 border border-r-gray-200">
       <div class="flex justify-center bg-white items-center">
        <img src="{{ asset('logo/logo.jpg') }}" alt="Logo" class="lg:w-30 lg:h-30 w-20 h-20">
       
       </div>
     
    
    {{-- MENU --}}
    <x-menu activate-by-route active-class="bg-blue-300">
    
        <x-menu-separator />
        <x-menu-item title="Dashboard" icon="o-home" link="{{ route('dashboard') }}"  />
        <x-menu-separator />
        <x-menu-item title="Statements" icon="o-document-currency-dollar"   />
        <x-menu-separator />
        <x-menu-item title="Online payments" icon="o-banknotes" />
        <x-menu-separator />
        <x-menu-item title="Contacts" icon="o-phone"  />
        <x-menu-separator />
        <x-menu-item title="Employment details" icon="o-book-open"  />
        <x-menu-separator />
        <x-menu-item title="My cdp" icon="o-bookmark-square"  />
        <x-menu-separator />
        <x-menu-item title="My profile" icon="o-user"  />
        <x-menu-separator />
    

    
    
    </x-menu>
    </x-slot:sidebar>
    </div>
    