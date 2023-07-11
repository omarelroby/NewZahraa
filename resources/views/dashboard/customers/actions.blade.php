
<div class="btn-group float-md-right">
            <button class="btn btn-info dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="icon-settings mr-1"></i>Action</button>
            <div class="dropdown-menu">

                <a class="dropdown-item" href="" data-toggle="modal" data-target="#deleteModal{{ $id }}">
                   <i class="fa fa-cart-plus mr-1"></i> delete</a>
{{--                <div class="dropdown-divider"></div>--}}
                    <a class="dropdown-item" href="{{ url("/customers/{$id}/edit") }}">
                    <i class="fa fa-cog mr-1"></i> edit</a>
            </div>
</div>



    <div id="deleteModal{{ $id }}" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Delete</h4>
                </div>
                <div class="modal-body">
                    <p>?Do you sure Delete this Free Videos </p>
                </div>
                <form action="{{ url("/customers/{$id}") }}" method="POST">
                    @method('delete') @csrf
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">close</button>
                        <button type="submit" class="btn btn-danger btn-flat">delete</button>
                    </div>
                </form>
            </div>

        </div>

</div>


