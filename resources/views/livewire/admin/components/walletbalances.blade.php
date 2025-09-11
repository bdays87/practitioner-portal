<div>
    @foreach ($balances as $balance)
    <x-button class="indicator btn btn-primary btn-outline">
       $ {{ $balance['balance'] }}
        <x-badge value="{{ $balance['currency'] }}" class="badge-success badge-sm indicator-item" />
    </x-button>
    @endforeach
</div>
 