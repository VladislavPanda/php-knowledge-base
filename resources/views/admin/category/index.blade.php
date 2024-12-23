@extends('admin.app')
@section('content')
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Список подкатегорий</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                    @can('edit', \App\Models\SubCategory::class)
                                        <div class="row mb-4">
                                            <div class="col-sm-12 col-md-6">
                                                <button type="submit" class="btn btn-light">Добавить подкатегорию</button>
                                            </div>
                                        </div>
                                    @endcan
                                    {{--                                    <div class="row">--}}
                                    {{--                                        <div class="col-sm-12 col-md-6">--}}
                                    {{--                                            <div class="dt-buttons btn-group flex-wrap">--}}
                                    {{--                                                <button class="btn btn-secondary buttons-copy buttons-html5" tabindex="0" aria-controls="example1" type="button">--}}
                                    {{--                                                    <span>Copy</span>--}}
                                    {{--                                                </button>--}}
                                    {{--                                                <button class="btn btn-secondary buttons-csv buttons-html5" tabindex="0" aria-controls="example1" type="button">--}}
                                    {{--                                                    <span>CSV</span>--}}
                                    {{--                                                </button>--}}
                                    {{--                                                <button class="btn btn-secondary buttons-excel buttons-html5" tabindex="0" aria-controls="example1" type="button">--}}
                                    {{--                                                    <span>Excel</span>--}}
                                    {{--                                                </button>--}}
                                    {{--                                                <button class="btn btn-secondary buttons-pdf buttons-html5" tabindex="0" aria-controls="example1" type="button">--}}
                                    {{--                                                    <span>PDF</span>--}}
                                    {{--                                                </button>--}}
                                    {{--                                                <button class="btn btn-secondary buttons-print" tabindex="0" aria-controls="example1" type="button">--}}
                                    {{--                                                    <span>Print</span>--}}
                                    {{--                                                </button>--}}
                                    {{--                                                <div class="btn-group">--}}
                                    {{--                                                    <button class="btn btn-secondary buttons-collection dropdown-toggle buttons-colvis" tabindex="0" aria-controls="example1" type="button" aria-haspopup="true">--}}
                                    {{--                                                        <span>Column visibility</span>--}}
                                    {{--                                                        <span class="dt-down-arrow"></span>--}}
                                    {{--                                                    </button>--}}
                                    {{--                                                </div>--}}
                                    {{--                                            </div>--}}
                                    {{--                                        </div>--}}
                                    {{--                                        <div class="col-sm-12 col-md-6">--}}
                                    {{--                                            <div id="example1_filter" class="dataTables_filter">--}}
                                    {{--                                                <label>Поиск:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example1">--}}
                                    {{--                                                </label>--}}
                                    {{--                                            </div>--}}
                                    {{--                                        </div>--}}
                                    {{--                                    </div>--}}
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" aria-describedby="example1_info">
                                                <thead>
                                                <tr>
                                                    <th class="sorting sorting_asc col-sm-2" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Номер подкатегории</th>
                                                    <th class="sorting sorting_asc col-sm-10" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Название подкатегории</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($subCategories as $subCategory)
                                                        <tr class="odd">
                                                            <td class="dtr-control sorting_1">{{ $subCategory->getId() }}</td>
                                                            <td><a href="{{ route('subCategory.index', $subCategory->getId()) }}">{{ $subCategory->getTitle() }}</a></td>
                                                            @can('edit', \App\Models\Category::class)
                                                                <td>
                                                                    <button type="submit" class="btn btn-secondary">
                                                                        Редактировать
                                                                    </button>
                                                                </td>
                                                                <td>
                                                                    <button type="submit" class="btn btn-danger">
                                                                        Удалить
                                                                    </button>
                                                                </td>
                                                            @endcan
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                                {{--                                                <tfoot>--}}
                                                {{--                                                    <tr>--}}
                                                {{--                                                        <th rowspan="1" colspan="1">Rendering engine</th>--}}
                                                {{--                                                        <th rowspan="1" colspan="1">Browser</th>--}}
                                                {{--                                                        <th rowspan="1" colspan="1">Platform(s)</th>--}}
                                                {{--                                                        <th rowspan="1" colspan="1">Engine version</th>--}}
                                                {{--                                                        <th rowspan="1" colspan="1">CSS grade</th>--}}
                                                {{--                                                    </tr>--}}
                                                {{--                                                </tfoot>--}}
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-5">
                                            <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">
                                                Showing 1 to 10 of 57 entries
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-7">
                                            <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                                                <ul class="pagination">
                                                    <li class="paginate_button page-item previous disabled" id="example1_previous">
                                                        <a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0" class="page-link">
                                                            Previous
                                                        </a>
                                                    </li>
                                                    <li class="paginate_button page-item active">
                                                        <a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0" class="page-link">
                                                            1
                                                        </a>
                                                    </li>
                                                    <li class="paginate_button page-item ">
                                                        <a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0" class="page-link">
                                                            2
                                                        </a>
                                                    </li>
                                                    <li class="paginate_button page-item ">
                                                        <a href="#" aria-controls="example1" data-dt-idx="3" tabindex="0" class="page-link">
                                                            3
                                                        </a>
                                                    </li>
                                                    <li class="paginate_button page-item ">
                                                        <a href="#" aria-controls="example1" data-dt-idx="4" tabindex="0" class="page-link">
                                                            4
                                                        </a>
                                                    </li>
                                                    <li class="paginate_button page-item ">
                                                        <a href="#" aria-controls="example1" data-dt-idx="5" tabindex="0" class="page-link">
                                                            5
                                                        </a>
                                                    </li>
                                                    <li class="paginate_button page-item ">
                                                        <a href="#" aria-controls="example1" data-dt-idx="6" tabindex="0" class="page-link">
                                                            6
                                                        </a>
                                                    </li>
                                                    <li class="paginate_button page-item next" id="example1_next">
                                                        <a href="#" aria-controls="example1" data-dt-idx="7" tabindex="0" class="page-link">
                                                            Next
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
