<?php

namespace App\DataTables;

use App\Models\Category;
use App\Models\Country;
use App\Models\Course;
use App\Models\CourseIndexes;
use App\Models\Ebook;
use App\Models\Groups;
use App\Models\Instructor;
use App\Models\MaterialGroups;
use App\Models\Materials;
use App\Models\OnlineCourseIndexes;
use App\Models\Page;
use App\Models\Quiz;
use App\Models\QuizGroups;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class QuizesDataTable extends DataTable
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


            ->addColumn('action', 'dashboard.quiz_group.actions')
            ->rawColumns( ['action']);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Category $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(): QueryBuilder
    {
        $quiz=QuizGroups::where('group_id',$this->group_id)->first();
         return Quiz::where('id', $quiz->quiz_id);
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('quizes-group-table')
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
            Column::make('quiz_name')
                ->title(__('dashboard.quiz_name')),
            Column::make('degree')
                ->title(__('dashboard.degree')),
            Column::make('discount')
                ->title(__('dashboard.discount')),
            Column::make('discount_score')
                ->title(__('dashboard.discount_score')),

        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename(): string
    {
        return 'QuizGroups_' . date('YmdHis');
    }
}
