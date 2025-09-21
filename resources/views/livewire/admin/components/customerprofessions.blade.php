<div>
    <x-card title="Professions" class="mt-5 border-2 border-gray-200" separator>
        <x-slot:menu>
            <x-button icon="o-plus"  class="btn-circle btn-primary" responsive wire:click="$set('addmodal', true)" spinner />
        </x-slot:menu>

                 @if($customer->customerprofessions->count()>0)
               <div class="grid lg:grid-cols-6 gap-0">
                @forelse ($customer->customerprofessions as $customerprofession)
              
                    <div class="border border-gray-200 p-2">{{ $customerprofession->profession->name }}</div>
                    <div class="border border-gray-200 p-2">{{ $customerprofession->registertype->name }}</div>
                    <div class="border border-gray-200 p-2">{{ $customerprofession->customertype->name }}</div>
                    <div class="border border-gray-200 p-2">
                        <x-badge value="{{ $customerprofession->status }}" class="{{ $customerprofession->status=='PENDING' ? 'badge-warning badge-outline badge-sm' : 'badge-success badge-dashed badge-sm' }}" />
                    </div>
                    <div class="border border-gray-200 p-2">
                        @if($customerprofession->applications->count()>0 && $customerprofession->applications->last()->status == 'APPROVED')
                            @if($customerprofession->isCompliant())
                                <x-badge value="Compliant" class="badge-success badge-sm" />
                            @else
                                <x-badge value="Non-Compliant" class="badge-error badge-sm" />
                            @endif
                        @else
                            <x-badge value="N/A" class="badge-neutral badge-sm" />
                        @endif
                    </div>
                    <div class="border border-gray-200 p-2">
                        <div class="flex items-center justify-end space-x-2">
                            @if (strtolower($customerprofession->status) == 'pending')
                            @if($customerprofession->customertype->name=='Student')
                            <x-button icon="o-eye" label="View" class="btn-sm btn-info btn-outline" 
                            link="{{ route('customer.student.show', $customerprofession->uuid) }}" spinner />
                            @else
                            <x-button icon="o-eye" label="Continue" class="btn-sm btn-info btn-outline" 
                           link="{{ route('customer.profession.show', $customerprofession->uuid) }}" spinner />
                           @endif
                           <x-button icon="o-trash" label="Delete" class="btn-sm btn-error btn-outline" 
                           wire:click="delete({{ $customerprofession->id }})" wire:confirm="Are you sure?" spinner />
                           @elseif (strtolower($customerprofession->status) == 'approved')
                                @if($customerprofession->customertype->name=='Student')
                                <x-button icon="o-eye" label="Continue" class="btn-sm btn-info btn-outline" 
                                link="{{ route('customer.student.show', $customerprofession->uuid) }}" spinner />
                                @else
                                 @if($customerprofession->applications->count()>0 && $customerprofession->applications->last()->isExpired())
                                 <x-button icon="o-arrow-path" label="Renew"  class="btn-sm btn-warning"/>
                                 
                                 @endif
                                    <x-button icon="o-arrow-down-tray" label="View" responsive class="btn-sm btn-success" 
                                wire:click="viewapplication({{ $customerprofession->id }})" spinner />
                                             @endif
                           @endif
                        </div>
                    </div>
               
                @empty
                <div>
                    <div class="text-center text-red-500 p-5 font-bold bg-red-50">
                   No profession found.</div>
                </div>
                @endforelse
               </div>
                @else
                <div>
                    <div class="text-center text-red-500 p-5 font-bold bg-red-50">
                        No profession found.</div>
                </div>
                @endif
           
        
    </x-card>
    <x-modal wire:model="addmodal" title="Add Profession" box-class="max-w-4xl" separator>
        @if($errormessage)
        <x-alert class="alert-error" title="Error" :description="$errormessage" />
        @endif
        <x-form wire:submit.prevent="addprofession">
            <div class="grid grid-cols-2 gap-2">
                <x-select placeholder="Profession" label="Profession" wire:model="profession_id" placeholder="Select Profession" :options="$professions" option-label="name" option-value="id" />
                <x-select placeholder="Customertype" label="Customertype" wire:model.live="customertype_id" placeholder="Select Customertype" :options="$customertypes" option-label="name" option-value="id" />
                <x-select placeholder="Registration Type" label="Registration Type" wire:model="registertype_id" placeholder="Select Registration Type" :options="$registertypes" option-label="name" option-value="id" />
                 <x-select placeholder="Employment Status" label="Employment Status" wire:model="employmentstatus_id" placeholder="Select Employment Status" :options="$employmentstatuses" option-label="name" option-value="id" />
                <x-select placeholder="Employment Location" label="Employment Location" wire:model="employmentlocation_id" placeholder="Select Employment Location" :options="$employmentlocations" option-label="name" option-value="id" />
            </div>
            <x-slot:actions>
                <x-button label="Cancel" class="btn-sm btn-outline btn-error" wire:click="$set('addmodal', false)" />
                <x-button label="Save" class="btn-sm btn-info btn-outline" type="submit" spinner="addprofession" />
            </x-slot:actions>
        </x-form>
    </x-modal>

    <x-modal wire:model="openmodal" title="Customer Profession Certificates" separator box-class="max-w-4xl">
               <x-card title="Registration Certificates" separator class="border-2 border-gray-200">
            <table class="table table-zebra">
                <thead>
                    <tr>
                        <th>Certificate number</th>
                        <th>Registration date</th>
                        <th></th>
                    </tr>
                </thead> 
                <tbody>
                    <tr>
                        <td>{{ $customerprofession?->registration?->certificatenumber }}</td>
                        <td>{{ $customerprofession?->registration?->registrationdate }}</td>                        
                        <td class="flex justify-end">
                            <x-button icon="o-arrow-down-tray" label="Download" class="btn-sm btn-info btn-outline" spinner wire:click="downloadregistrationcertificate({{ $customerprofession?->registration?->id }})" />
                                
                        </td>
                    </tr>
                  
                </tbody>
            </table>
        </x-card>
        <x-card title="Application Certificates" separator class="mt-2 border-2 border-gray-200">
            <table class="table table-zebra">
                <thead>
                    <tr>
                        <th>Year</th>
                        <th>Certificate number</th>
                        <th>Registration date</th>
                        <th>Expire date</th>
                        <th>Status</th>

                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($customerprofession->applications??[] as $application)
                    <tr>
                        <td>{{ $application->year }}</td>
                        <td>{{ $application->certificate_number }}</td>
                        <td>{{ $application->registration_date }}</td>                       
                        <td>{{ $application->certificate_expiry_date }}</td>
                        <td>
                            @if($application->isExpired())
                            <x-badge value="EXPIRED" class="badge-error" />
                            @else
                            <x-badge value="VALID" class="badge-success" />
                            @endif  
                        </td>
                        <td class="flex justify-end">
                            @if($application->isExpired())
                            @else
                            <x-button icon="o-arrow-down-tray" label="Download" class="btn-sm btn-info btn-outline" spinner wire:click="downloadpractisingcertificate({{ $application->id }})" />
                            @endif
                           

                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="8">
                            <div class="text-center text-red-500 p-5 font-bold bg-red-50">
                            No application found.</div>
                            </td>
                    </tr>
                    @endforelse
                  
                </tbody>
            </table>
        </x-card>
    </x-modal>
    <x-modal wire:model="adocmodal" title="Renew Application">
        <table class="table table-zebra">
            
        </table>
    </x-modal>
</div>
