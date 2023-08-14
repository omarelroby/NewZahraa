
<div class="btn-group float-md-right">
            <button class="btn btn-info dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="icon-settings mr-1"></i>{{__('dashboard.action')}}</button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ url("/group-attachments/{$id}") }}">
                    <i class="fa fa-bookmark mr-1"></i> {{__('dashboard.attachments')}}</a>
                <a class="dropdown-item" href="{{ url("/quizes/{$id}") }}">
                    <i class="fa fa-book mr-1"></i> {{__('dashboard.quizes')}}</a
            </div>
</div>







