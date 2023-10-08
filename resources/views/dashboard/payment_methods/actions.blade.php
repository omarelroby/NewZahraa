
<div class="btn-group float-md-right">
            <button class="btn btn-info dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="icon-settings mr-1"></i>{{__('dashboard.action')}}</button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ url("/payment-method/{$id}/edit") }}">
                    <i class="fa fa-cog mr-1"></i> {{__('dashboard.edit')}}</a>
                <a class="dropdown-item" href="" data-toggle="modal" data-target="#deleteModal{{ $id }}">
                    <i class="fa fa-cart-plus mr-1"></i> {{__('dashboard.delete')}}</a>
                                <div class="dropdown-divider"></div>

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
                    <p>{{__('dashboard.delete-message')}}  </p>
                </div>
                <form action="{{ url("/payment-method/{$id}")}}" method="POST">
                    @method('delete') @csrf
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">{{__('dashboard.close')}}</button>
                        <button type="submit" class="btn btn-danger btn-flat">{{__('dashboard.delete')}}</button>
                    </div>
                </form>
            </div>

        </div>

</div>


