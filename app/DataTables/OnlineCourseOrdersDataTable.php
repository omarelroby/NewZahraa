<?php

namespace App\DataTables;

use App\Models\Category;
use App\Models\Country;
use App\Models\Course;
use App\Models\CourseIndexes;
use App\Models\CourseOrders;
use App\Models\Ebook;
use App\Models\EbookOrders;
use App\Models\Instructor;
use App\Models\OnlineCourseOrders;
use App\Models\Page;
use App\Models\PaymentMethod;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class OnlineCourseOrdersDataTable extends DataTable
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
            ->editColumn('online_course', function($q) {
                return $q->course->title;
            })

            ->editColumn('payment_method', function($q) {
                return $q->payment_method->name??'';
            })
            ->addColumn('action', 'dashboard.online_course_orders.actions')
            ->rawColumns(['action']);
    }


    public function query(OnlineCourseOrders $model): QueryBuilder
    {
         return $model->newQuery();
    }


    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('online-course-orders-table')
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
            Column::make('payment_method')
                ->title(__('dashboard.payment_method')),
            Column::make('discount')
                ->title(__('dashboard.discount')),
            Column::make('price')
                ->title(__('dashboard.price')),
            Column::make('status')
                ->title(__('dashboard.status')),
            Column::make('total')
                ->title(__('dashboard.total')),
            Column::make('online_course')
                ->title(__('dashboard.online-course')),
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
        return 'OnlineCourseOrdersIndexes_' . date('YmdHis');
    }
}
