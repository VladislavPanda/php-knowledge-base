@extends('admin.app')
@section('content')
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-6">
                        <div class="card">
                            <div class="card-header d-flex p-0">
                                <h3 class="card-title p-3">Текст вопроса</h3>
                                <ul class="nav nav-pills ml-auto p-2">
{{--                                    <li class="nav-item"><a class="nav-link active" href="#tab_1" data-toggle="tab">Tab 1</a></li>--}}
{{--                                    <li class="nav-item"><a class="nav-link" href="#tab_2" data-toggle="tab">Tab 2</a></li>--}}
{{--                                    <li class="nav-item"><a class="nav-link" href="#tab_3" data-toggle="tab">Tab 3</a></li>--}}
{{--                                    <li class="nav-item dropdown">--}}
{{--                                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">--}}
{{--                                            Dropdown <span class="caret"></span>--}}
{{--                                        </a>--}}
{{--                                        <div class="dropdown-menu">--}}
{{--                                            <a class="dropdown-item" tabindex="-1" href="#">Action</a>--}}
{{--                                            <a class="dropdown-item" tabindex="-1" href="#">Another action</a>--}}
{{--                                            <a class="dropdown-item" tabindex="-1" href="#">Something else here</a>--}}
{{--                                            <div class="dropdown-divider"></div>--}}
{{--                                            <a class="dropdown-item" tabindex="-1" href="#">Separated link</a>--}}
{{--                                        </div>
                                    </li>--}}
                                </ul>
                            </div>

                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab_1">
                                        {{ $question->getContent() }}
                                    </div>
                                </div>
                                <!-- /.tab-content -->
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card">
                            <div class="card-header d-flex p-0">
                                <h3 class="card-title p-3">Текст вопроса на английском</h3>
                                <ul class="nav nav-pills ml-auto p-2">
                                    {{--                                    <li class="nav-item"><a class="nav-link active" href="#tab_1" data-toggle="tab">Tab 1</a></li>--}}
                                    {{--                                    <li class="nav-item"><a class="nav-link" href="#tab_2" data-toggle="tab">Tab 2</a></li>--}}
                                    {{--                                    <li class="nav-item"><a class="nav-link" href="#tab_3" data-toggle="tab">Tab 3</a></li>--}}
                                    {{--                                    <li class="nav-item dropdown">--}}
                                    {{--                                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">--}}
                                    {{--                                            Dropdown <span class="caret"></span>--}}
                                    {{--                                        </a>--}}
                                    {{--                                        <div class="dropdown-menu">--}}
                                    {{--                                            <a class="dropdown-item" tabindex="-1" href="#">Action</a>--}}
                                    {{--                                            <a class="dropdown-item" tabindex="-1" href="#">Another action</a>--}}
                                    {{--                                            <a class="dropdown-item" tabindex="-1" href="#">Something else here</a>--}}
                                    {{--                                            <div class="dropdown-divider"></div>--}}
                                    {{--                                            <a class="dropdown-item" tabindex="-1" href="#">Separated link</a>--}}
                                    {{--                                        </div>
                                                                        </li>--}}
                                </ul>
                            </div>

                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab_1">
                                        {{ $question->getEnglishContent() }}
                                    </div>
                                </div>
                                <!-- /.tab-content -->
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="card">
                            <div class="card-header d-flex p-0">
                                <h3 class="card-title p-3">Принятый ответ</h3>
                                <ul class="nav nav-pills ml-auto p-2">
                                    {{--                                    <li class="nav-item"><a class="nav-link active" href="#tab_1" data-toggle="tab">Tab 1</a></li>--}}
                                    {{--                                    <li class="nav-item"><a class="nav-link" href="#tab_2" data-toggle="tab">Tab 2</a></li>--}}
                                    {{--                                    <li class="nav-item"><a class="nav-link" href="#tab_3" data-toggle="tab">Tab 3</a></li>--}}
                                    {{--                                    <li class="nav-item dropdown">--}}
                                    {{--                                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">--}}
                                    {{--                                            Dropdown <span class="caret"></span>--}}
                                    {{--                                        </a>--}}
                                    {{--                                        <div class="dropdown-menu">--}}
                                    {{--                                            <a class="dropdown-item" tabindex="-1" href="#">Action</a>--}}
                                    {{--                                            <a class="dropdown-item" tabindex="-1" href="#">Another action</a>--}}
                                    {{--                                            <a class="dropdown-item" tabindex="-1" href="#">Something else here</a>--}}
                                    {{--                                            <div class="dropdown-divider"></div>--}}
                                    {{--                                            <a class="dropdown-item" tabindex="-1" href="#">Separated link</a>--}}
                                    {{--                                        </div>
                                                                        </li>--}}
                                </ul>
                            </div>

                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab_1">
                                        {{ $question->getAcceptedAnswerContent() }}
                                    </div>
                                </div>
                                <!-- /.tab-content -->
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card">
                            <div class="card-header d-flex p-0">
                                <h3 class="card-title p-3">Принятый ответ на английском</h3>
                                <ul class="nav nav-pills ml-auto p-2">
                                    {{--                                    <li class="nav-item"><a class="nav-link active" href="#tab_1" data-toggle="tab">Tab 1</a></li>--}}
                                    {{--                                    <li class="nav-item"><a class="nav-link" href="#tab_2" data-toggle="tab">Tab 2</a></li>--}}
                                    {{--                                    <li class="nav-item"><a class="nav-link" href="#tab_3" data-toggle="tab">Tab 3</a></li>--}}
                                    {{--                                    <li class="nav-item dropdown">--}}
                                    {{--                                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">--}}
                                    {{--                                            Dropdown <span class="caret"></span>--}}
                                    {{--                                        </a>--}}
                                    {{--                                        <div class="dropdown-menu">--}}
                                    {{--                                            <a class="dropdown-item" tabindex="-1" href="#">Action</a>--}}
                                    {{--                                            <a class="dropdown-item" tabindex="-1" href="#">Another action</a>--}}
                                    {{--                                            <a class="dropdown-item" tabindex="-1" href="#">Something else here</a>--}}
                                    {{--                                            <div class="dropdown-divider"></div>--}}
                                    {{--                                            <a class="dropdown-item" tabindex="-1" href="#">Separated link</a>--}}
                                    {{--                                        </div>
                                                                        </li>--}}
                                </ul>
                            </div>

                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab_1">
                                        {{ $question->getAcceptedAnswerEnglishContent() }}
                                    </div>
                                </div>
                                <!-- /.tab-content -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
