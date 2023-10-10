<?php

namespace App\DataTables;

use App\Models\Category;
use App\Models\Country;
use App\Models\Ebook;
use App\Models\Instructor;
use App\Models\InstructorRequests;
use App\Models\Page;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class InstructorsRequestsDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     * @return \Yajra\DataTables\EloquentDataTable
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return datatables()
            ->eloquent($query)

            ->editColumn('country', function($q) {
                return $q->country->name;
            })
            ->editColumn('category', function($q) {
                return $q->category->name;
            })
            ->editColumn('cv', function($q) {
                return '<a href="'.  asset($q->cv) .'">'. "View CV" .'</a>';            })



            ->addColumn('action', 'dashboard.instructor_requests.actions')
            ->rawColumns(['action','cv']);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Category $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(InstructorRequests $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('instructor-requests-table')
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
            Column::make('email')
                ->title(__('dashboard.email')),
            Column::make('phone')
                ->title(__('dashboard.phone')),
            Column::make('country')
                ->title(__('dashboard.country')),
            Column::make('category')
                ->title(__('dashboard.category')),
            Column::make('cv')
                ->title(__('dashboard.cv')),
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
        return 'InstructorsRequests_' . date('YmdHis');
    }
}
