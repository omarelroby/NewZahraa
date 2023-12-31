<?php

namespace App\DataTables;

use App\Models\ApplyJob;
use App\Models\Category;
use App\Models\Country;
use App\Models\Course;
use App\Models\CourseIndexes;
use App\Models\CourseIndexesVideos;
use App\Models\Ebook;
use App\Models\Instructor;
use App\Models\Page;
use App\Models\SessionAppointments;
use App\Models\Subscription;
use App\Models\WithDrawRequest;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Illuminate\Support\Facades\App;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class WithdrawDataTable extends DataTable
{

    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return datatables()
            ->eloquent($query)
            ->editColumn('instructor_id', function($q) {
                return $q->instructor->name;
            })
            ->addColumn('action', 'dashboard.withdraw.actions')
            ->rawColumns(['action']);
    }


    public function query(WithDrawRequest $model): QueryBuilder
    {
         return $model->newQuery();
    }

    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('subscriptions-table')
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
            Column::make('cash')
                ->title(__('dashboard.cash')),
            Column::make('instructor_id')
                ->title(__('dashboard.instructor')),
            Column::make('status')
                ->title(__('dashboard.status')),
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
        return 'Subscriptions_' . date('YmdHis');
    }
}
