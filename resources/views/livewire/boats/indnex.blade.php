<div>
    <table class="table table-bordered">
        <thead style="background-color:red; color:white">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Type</th>
                <th>Cacity</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($boats as $boat)
                <!-- Parent Component -->
                <livewire:boats.record :boat="$boat" :key="$boat->id" />
            @empty
                <tr><td colspan="6" class="text-center">No s available right now.</td></tr>
            @endforelse
        </tbody>
    </table>
</div>
</div>

<!-- <tr :key="$boat->id"></tr>
wire:click="destroy($boat)" -->
