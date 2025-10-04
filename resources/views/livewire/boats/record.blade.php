
<!-- Child/nested Component -->
<tr :key="$boat->id">
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
