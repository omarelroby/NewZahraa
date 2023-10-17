<?php

namespace App\DataTables;

use App\Models\Category;
use App\Models\Country;
use App\Models\Popup;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
 use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;
class PopupDataTable extends DataTable
{


    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return datatables()
            ->eloquent($query)

            ->addColumn('image', function ($q) {
                return '<img src="'.asset($q->image).'" border="0" width="150" class="img-rounded" align="center"/>';

            })

            ->addColumn('action', 'dashboard.popup.actions')
            ->rawColumns(['action','image' ]);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Category $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Popup $model): QueryBuilder
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
                    ->setTableId('countries-table')
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
            Column::make('link')
                ->title(__('dashboard.link')),
            Column::make('status')
                ->title(__('dashboard.status')),
            Column::make('image')
                ->title(__('dashboard.image')),
            Column::computed(__('action'))
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
        return 'Countries_' . date('YmdHis');
    }
}
