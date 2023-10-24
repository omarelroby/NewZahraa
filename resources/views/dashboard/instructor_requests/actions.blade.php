
<div class="btn-group float-md-right">
            <button class="btn btn-info dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="icon-settings mr-1"></i>{{__('dashboard.action')}}</button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ url("/accept-request/{$id}") }}" style="color: darkgreen;">
                    <i class="fa fa-check mr-1" style="color: darkgreen;"></i> {{__('dashboard.accept')}}</a>
                <a class="dropdown-item" href="" data-toggle="modal" data-target="#deleteModal{{ $id }}" style="color: red;">
                   <i class="fa fa-cart-plus mr-1"style="color: red;"></i> {{__('dashboard.delete')}}</a>

            </div>
</div>

    <div id="deleteModal{{ $id }}" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">{{__('dashboard.delete')}}</h4>
                </div>
                <div class="modal-body">
                    <p>{{__('dashboard.delete-message')}} </p>
                </div>
                <form action="{{ url("/instructor-requests/{$id}") }}" method="POST">
                    @method('delete') @csrf
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">{{__('dashboard.close')}}</button>
                        <button type="submit" class="btn btn-danger btn-flat">{{__('dashboard.delete')}}</button>
                    </div>
                </form>
            </div>

        </div>

</div>


