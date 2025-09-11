<?php

namespace App\Livewire\Admin\Components;

use App\Interfaces\isuspenseInterface;
use Livewire\Attributes\On;
use Livewire\Component;

class Walletbalances extends Component
{
    public $customer;
    protected $suspenseRepository;
    public function mount($customer)
    {
        $this->customer = $customer;
    }
    public function boot(isuspenseInterface $suspenseRepository)
    {
        $this->suspenseRepository = $suspenseRepository;
    }
    #[On('wallet_refresh')]
    public function getbalances()
    {
        $response = $this->suspenseRepository->getbalances($this->customer->id);
      
        return $response;
    }
    public function render()
    {
        return view('livewire.admin.components.walletbalances', [
            'balances' => $this->getbalances()
        ]);
    }
}
