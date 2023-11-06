<?php

namespace App\DataTables;

use App\Http\Controllers\dashboard\BookingAppointmentsController;
use App\Models\BookingAppointments;
use App\Models\Category;
use App\Models\Country;
use App\Models\Course;
use App\Models\CourseIndexes;
use App\Models\CourseIndexesVideos;
use App\Models\Ebook;
use App\Models\Instructor;
use App\Models\Page;
use App\Models\SessionAppointments;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class BookingAppointmentsDataTable extends DataTable
{

    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return datatables()
            ->eloquent($query)
            ->editColumn('appointment_id', function($q) {
                return  date('Y-m-d', strtotime( $q->appointments->date)).'-' .date('g:ia', strtotime($q->appointments->date));
            })
            ->editColumn('country_id', function($q) {
                return $q->country->name;
            })
            ->editColumn('zoom_link', function($q) {
                return '<h6><a href="'.$q->zoom_link.'" target="_blank">'.$q->zoom_link.'</a></h6>';
            })

            ->addColumn('action', 'dashboard.booking_appointments.actions')
            ->rawColumns(['action','video','zoom_link']);
    }


    public function query(BookingAppointments $model): QueryBuilder
    {
         return $model->newQuery();
    }

    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('course-index-videos-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->orderBy(0)
                    ->parameters([
                    'responsive' => true,
                    'autoWidth' => false
                    ])
                    ->selectStyleSingle()
                    ->buttons([
                        Button::make('excel'),
                        Button::make('csv'),
                        Button::make('pdf'),
                        Button::make('print'),
                        Button::make('reset'),
                        Button::make('reload')
                    ]);
    }

    /**
     * Get the dataTable columns definition.
     *
     * @return array
     */
    public function getColumns(): array
    {
        return [

            Column::make('id'),
            Column::make('name')
                ->title(__('dashboard.name')),
            Column::make('phone')
                ->title(__('dashboard.phone')),
            Column::make('email')
                ->title(__('dashboard.email')),
            Column::make('payment_method')
                ->title(__('dashboard.payment_method')),
            Column::make('session_price')
                ->title(__('dashboard.session_price')),
            Column::make('total_price')
                ->title(__('dashboard.total_price')),
            Column::make('zoom_link')
                ->title(__('dashboard.zoom_link')),
            Column::make('appointment_id')
                ->title(__('dashboard.appointments')),
            Column::make('country_id')
                ->title(__('dashboard.country')),
             Column::computed('action')
                 ->title(__('dashboard.action'))
                ->exportable(false)
                ->printable(false)
                ->width(60)
                ->addClass('text-center'),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename(): string
    {
        return 'BookingAppointments_' . date('YmdHis');
    }
}
