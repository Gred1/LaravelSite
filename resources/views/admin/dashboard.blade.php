@extends('admin.layouts.app_admin')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="jumbotron">
                    <p><span class="badge badge-primary">Категории 0</span></p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="jumbotron">
                    <p><span class="badge badge-primary">Материалы 0</span></p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="jumbotron">
                    <p><span class="badge badge-primary">Постетителей 0</span></p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="jumbotron">
                    <p><span class="badge badge-primary">Сегодня 0</span></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <a class="btn btn-outline-primary btn-lg btn-block" href="#">Создать категорию</a>
                <a href="" class="list-group-item">
                    <h4 class="list-group-item-heading">Категории</h4>
                    <p class="list-group-item-text">
                        Кол-во материалов
                    </p>
                </a>
            </div>
            <div class="col-sm-6">
                <a class="btn btn-outline-primary btn-lg btn-block" href="#">Создать материал</a>
                <a href="" class="list-group-item">
                    <h4 class="list-group-item-heading">Материалы</h4>
                    <p class="list-group-item-text">
                        Категория
                    </p>
                </a>
            </div>
        </div>
    </div>
@endsection