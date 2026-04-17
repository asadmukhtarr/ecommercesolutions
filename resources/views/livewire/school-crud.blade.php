<div>

    <h3 class="mb-3">🏫 School CRUD</h3>

    <div class="row g-2 mb-3">

        <div class="col">
            <input type="text" class="form-control" wire:model="school_name" placeholder="School Name">
        </div>

        <div class="col">
            <input type="text" class="form-control" wire:model="address" placeholder="Address">
        </div>

        <div class="col">
            <input type="text" class="form-control" wire:model="contact" placeholder="Contact">
        </div>

        <div class="col">
            <input type="text" class="form-control" wire:model="principal_name" placeholder="Principal Name">
        </div>

        <div class="col">
            @if($school_id)
                <button class="btn btn-warning w-100" wire:click="update">Update</button>
            @else
                <button class="btn btn-primary w-100" wire:click="store">Save</button>
            @endif
        </div>

    </div>

    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th>School</th>
                <th>Address</th>
                <th>Contact</th>
                <th>Principal</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            @foreach($schools as $school)
            <tr>
                <td>{{ $school->school_name }}</td>
                <td>{{ $school->address }}</td>
                <td>{{ $school->contact }}</td>
                <td>{{ $school->principal_name }}</td>
                <td>
                    <button class="btn btn-info btn-sm" wire:click="edit({{ $school->id }})">Edit</button>
                    <button class="btn btn-danger btn-sm" wire:click="delete({{ $school->id }})">Delete</button>
                </td>
            </tr>
            @endforeach
        </tbody>

    </table>

</div>
