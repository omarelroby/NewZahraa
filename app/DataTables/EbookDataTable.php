<?php

namespace App\DataTables;

use App\Models\Category;
use App\Models\Country;
use App\Models\Ebook;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class EbookDataTable extends DataTable
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
            ->editColumn('title(ar)', function($q) {
                return $q->translate('ar')->title ?? ' ' ;
            })
            ->editColumn('title(en)', function($q) {
                return $q->translate('en')->title ?? ' ';
            })
            ->editColumn('price', function($q) {
                return $q->price;
            })

            ->addColumn('image', function ($q) {
                $url= asset($q->image);
                return '<img src="'.$url.'" border="0" width="150" class="img-rounded" align="center"/>';
            })

            ->addColumn('action', 'dashboard.ebook.actions')
            ->rawColumns(['action','image']);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Category $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Ebook $model): QueryBuilder
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
                    ->setTableId('ebooks-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                     ->orderBy(0)
                    ->selectStyleSingle()
                    ->parameters([
                        'responsive' => true,
                        'autoWidth' => false
                      ])
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
            Column::make('title(ar)')
                ->title(__('dashboard.title(ar)')),
            Column::make('title(en)')
                ->title(__('dashboard.title(en)')),
            Column::make('price')
                ->title(__('dashboard.price')),
            Column::make('writer')
                ->title(__('dashboard.writer')),
            Column::make('pages_number')
                ->title(__('dashboard.pages_number')),
            Column::make('image')
                ->title(__('dashboard.image')),
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
        return 'Ebooks_' . date('YmdHis');
    }
}
