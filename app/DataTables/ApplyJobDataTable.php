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
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Illuminate\Support\Facades\App;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class ApplyJobDataTable extends DataTable
{

    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return datatables()
            ->eloquent($query)

            ->editColumn('cv', function ($q) {
                $url= asset($q->cv);
                return '<a href="'.$url.'">'.'Cv'.'</a>';
            })
            ->addColumn('action', 'dashboard.apply_job.actions')
            ->rawColumns(['action','cv']);
    }


    public function query(ApplyJob $model): QueryBuilder
    {
         return $model->newQuery();
    }

    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('course-index-videos-table')
                    ->parameters([
                        'responsive' => true,
                      ])
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
        return 'Applyjob_' . date('YmdHis');
    }
}
