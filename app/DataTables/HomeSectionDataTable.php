<?php

namespace App\DataTables;

use App\Models\Category;
use App\Models\Country;
use App\Models\Course;
use App\Models\Ebook;
use App\Models\HomeSection;
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

class HomeSectionDataTable extends DataTable
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
                return strip_tags($q->description);
            })
            ->editColumn('button', function($q) {
                return strip_tags($q->button) ;
            })
            ->addColumn('image', function ($q) {
                $url= asset($q->image);
                return '<img src="'.$url.'" border="0" width="150" class="img-rounded" align="center"/>';
            })


            ->addColumn('action', 'dashboard.home_section.actions')
            ->rawColumns(['action','description','image']);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Category $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(HomeSection $model): QueryBuilder
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
            Column::make('title'),
            Column::make('description'),
            Column::make('button'),
            Column::make('image'),
            Column::computed('action')
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
        return 'HomeSection_' . date('YmdHis');
    }
}
