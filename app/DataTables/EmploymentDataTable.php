<?php

namespace App\DataTables;

use App\Models\Category;
use App\Models\Country;
use App\Models\Course;
use App\Models\CourseIndexes;
use App\Models\CourseOrders;
use App\Models\Ebook;
use App\Models\EbookOrders;
use App\Models\Employment;
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

class EmploymentDataTable extends DataTable
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
            ->editColumn('title', function($q) {
                return $q->title;
            })
            ->editColumn('description', function($q) {
                return strip_tags($q->description) ;
            })
            ->editColumn('qualifications', function($q) {
                return strip_tags($q->qualifications) ;
            })
            ->editColumn('image', function ($q) {
                $url= asset($q->image);
                return '<img src="'.$url.'" border="0" width="150" class="img-rounded" align="center"/>';
            })

            ->addColumn('action', 'dashboard.employment.actions')
            ->rawColumns(['action','qualifications','description','image']);
    }


    public function query(Employment $model): QueryBuilder
    {
         return $model->newQuery();
    }


    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('course-orders-table')
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


    public function getColumns(): array
    {
        return [

            Column::make('id'),
            Column::make('qualifications')
                ->title(__('dashboard.qualifications')),
            Column::make('title')
                ->title(__('dashboard.title')),
            Column::make('description')
                ->title(__('dashboard.description')),
            Column::make('salary')
                ->title(__('dashboard.salary')),
            Column::make('experience')
                ->title(__('dashboard.experience')),
            Column::make('Gender')
                ->title(__('dashboard.Gender')),
            Column::make('job_type')
                ->title(__('dashboard.job_type')),
            Column::make('expiration_date')
                ->title(__('dashboard.expiration_date')),
            Column::make('posted_date')
                ->title(__('dashboard.posted_date')),
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
        return 'EmploymentIndexes_' . date('YmdHis');
    }
}
