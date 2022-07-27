<div class="btn-group mb-1"> 
    <button type="button"
        class="btn btn-outline-secondary  dropdown-toggle dropdown-toggle-split"
        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span class="sr-only">Toggle Dropdown</span>
    </button>
    <div class="dropdown-menu">
        <a class="dropdown-item" href="{{ route($content.'.edit', $id) }}">
            <i class="fa fa-edit"></i>
            Edit
        </a>
        <a class="dropdown-item" href="{{ route($content.'.edit', $id) }}">
            <i class="fa fa-trash"></i>
            Delete
        </a> 
    </div>
</div>
