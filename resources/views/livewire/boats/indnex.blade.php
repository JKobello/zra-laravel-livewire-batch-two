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
                <tr>
                    <td>
                        {{ $boat->id }}
                    </td>
                    <td>
                        {{ $boat->name }}
                    </td>
                    <td>
                        {{ $boat->type }}
                    </td>
                    <td>
                        {{ $boat->capacity }}
                    </td>
                    <td>
                        <button wire:click="show({{ $boat }})" class="btn btn-info btn-sm">View</button>
                        <button wire:click="destroy({{ $boat }})" class="btn btn-danger btn-sm">Delete</button>
                    </td>
                </tr>
            @empty
                <tr><td colspan="6" class="text-center">No s available right now.</td></tr>
            @endforelse
        </tbody>
    </table>
</div>
</div>

<!-- <tr :key="$boat->id"></tr>
wire:click="destroy($boat)" -->
