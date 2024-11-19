<flux:table>
    <flux:columns>
        <flux:column>Name</flux:column>
        <flux:column>Date</flux:column>
        <flux:column>Status</flux:column>
        <flux:column>Amount</flux:column>
    </flux:columns>

    <flux:rows>
        @foreach($this->kids as $kid)
            <flux:row>
                <flux:cell>{{ $kid->name }}</flux:cell>
                <flux:cell>Jul 29, 10:45 AM</flux:cell>
                <flux:cell><flux:badge color="green" size="sm" inset="top bottom">Paid</flux:badge></flux:cell>
                <flux:cell variant="strong">$49.00</flux:cell>
            </flux:row>
        @endforeach
    </flux:rows>
</flux:table>
