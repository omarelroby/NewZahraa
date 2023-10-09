<?php

namespace App\DataTables;

use App\Models\Category;
use App\Models\Country;
use App\Models\Course;
use App\Models\CourseIndexes;
use App\Models\CourseIndexesVideos;
use App\Models\Ebook;
use App\Models\IndexesVideo;
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

class IndexOfIndexVideosDataTable extends DataTable
{

    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return datatables()
            ->eloquent($query)
            ->editColumn('name(ar)', function($q) {
                return $q->translate('ar')->title;
            })
            ->editColumn('name(en)', function($q) {
                return $q->translate('en')->title ;
            })

            ->addColumn('action', 'dashboard.index_of_videos.actions')
            ->rawColumns(['action','video']);
    }


    public function query(): QueryBuilder
    {
         return IndexesVideo::where('indexes_video_id', $this->index_id);
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
            Column::make('time_from')
                ->title(__('dashboard.minute-from')),
            Column::make('time_to')
                ->title(__('dashboard.minute-to')),
            Column::make('name(en)')
                ->title(__('dashboard.name(en)')),
            Column::make('name(ar)')
                ->title(__('dashboard.name(ar)')),
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
        return 'CoursesIndexVideos_' . date('YmdHis');
    }
}
