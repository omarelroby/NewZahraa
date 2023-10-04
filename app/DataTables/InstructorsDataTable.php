<?php

namespace App\DataTables;

use App\Models\Category;
use App\Models\Country;
use App\Models\Ebook;
use App\Models\Instructor;
use App\Models\Page;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class InstructorsDataTable extends DataTable
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
            ->editColumn('name', function($q) {
                return $q->name;
            })
            ->editColumn('email', function($q) {
                return $q->email;
            })
            ->editColumn('phone', function($q) {
                return $q->phone;
            })
            ->editColumn('Attachments', function($q) {
                return '<h6><a href="/dashboard/instructors-attachs/'.  $q->id .'">'. __('dashboard.attachments') .'</a></h6>';
            })
            ->editColumn('status', function ($raw) {
                 if ($raw->status==1)
                {
                    return '<h4 style="color: darkgreen;font-weight: bold;">YES</h4>';
                }
                else
                {
                    return '<h4 style="color: red;font-weight: bold;">NO</h4>';
                }
            })


            ->addColumn('action', 'dashboard.instructor.actions')
            ->rawColumns(['action','Attachments','status']);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Category $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Instructor $model): QueryBuilder
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
                    ->setTableId('instructors-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                     ->orderBy(0)
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
            Column::make('balance')
                ->title(__('dashboard.balance')),
            Column::make('commission_instructor')
                ->title(__('dashboard.commission_instructor')),
            Column::make('Attachments')
                ->title(__('dashboard.attachments')),
            Column::make('status')
                ->title(__('dashboard.active')),
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
        return 'Instructors_' . date('YmdHis');
    }
}
