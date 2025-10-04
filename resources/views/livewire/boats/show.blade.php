<div>
    <p>
        ID: {{ $boat?-> id }}
    </p>
    <p>
        NAME: {{ $boat?-> name }}
    </p>
    <p>
        TYPE: {{ $boat?-> type }}
    </p>
    <p>
        CAPACITY: {{ $boat?-> capacity }}
    </p>

    <div>
        <button wire:click="goBack()" class="btn btn-secondary btn-sm">Back</button>
        <button wire:click="destroy($boat)" class="btn btn-danger btn-sm">Delete</button>
    </div>
</div>
