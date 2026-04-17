<div>

    <h3 class="mb-3">📚 Book CRUD</h3>

    <div class="row g-2 mb-3">
        <div class="col">
            <input type="text" class="form-control" wire:model="title" placeholder="Title">
        </div>

        <div class="col">
            <input type="text" class="form-control" wire:model="author" placeholder="Author">
        </div>

        <div class="col">
            <input type="number" class="form-control" wire:model="price" placeholder="Price">
        </div>

        <div class="col">
            @if($book_id)
                <button class="btn btn-warning w-100" wire:click="update">Update</button>
            @else
                <button class="btn btn-primary w-100" wire:click="store">Save</button>
            @endif
        </div>
    </div>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>Title</th>
                <th>Author</th>
                <th>Price</th>
                <th width="150">Action</th>
            </tr>
        </thead>

        <tbody>
            @foreach($books as $book)
            <tr>
                <td>{{ $book->title }}</td>
                <td>{{ $book->author }}</td>
                <td>{{ $book->price }}</td>
                <td>
                    <button class="btn btn-sm btn-info" wire:click="edit({{ $book->id }})">Edit</button>
                    <button class="btn btn-sm btn-danger" wire:click="delete({{ $book->id }})">Delete</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>

