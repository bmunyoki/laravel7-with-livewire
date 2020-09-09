<div>    
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalForm">
        Add Post
    </button>
    
    <!-- Modal -->
    <div class="modal fade" id="modalForm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Save Post</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @livewire('post-form')
                </div>            
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalFormDelete" tabindex="-1" aria-labelledby="modalFormDeletePost" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalFormDeletePost">Delete Item</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h3>Do you wish to continue?</h3>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button wire:click="delete" type="button" class="btn btn-primary">Yes</button>
            </div>
            </div>
        </div>
    </div>

    <div>
        <br />
        @if ($posts->count())
            <table class="table table-striped">
                <thead>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Actions</th>
                </thead>
                <tbody>
                    @foreach ($posts as $item)
                        <tr>
                            <td>{{ $item->title }}</td>
                            <td>{{ $item->content }}</td>
                            <td>
                                <button wire:click="selectItem({{ $item->id }}, 'update')" class="btn btn-sm btn-success">Update</button>
                                <button wire:click="selectItem({{ $item->id }}, 'delete')" class="btn btn-sm btn-danger">Delete</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            {{ $posts->links()}}
        @endif
    </div>    
</div>
