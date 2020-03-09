@extends('admin.layout.admin-template')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">افزودن ویدیو جدید</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container-fluid">
            @include('admin.layout.validation-errors')
            <div class="card card-default">
                <div class="card-body">
                    <div class="row flex-column">
                        <form action="{{route('episodes.store')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>عنوان</label>
                                <input type="text" class="form-control" name="title">
                            </div>
                            <div class="form-group">
                                <label>دسته بندی</label>
                                <select name="category_id" class="form-control">
                                    @foreach($episode_categories as $episode_category)
                                        <option value="{{$episode_category->id}}">{{$episode_category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>آدرس دمو ویدیو</label>
                                <input type="text" class="form-control" name="demo_video">
                            </div>
                            <div class="form-group">
                                <label>آدرس کامل ویدیو</label>
                                <input type="text" class="form-control" name="full_video">
                            </div>
                            <div class="form-group">
                                <label>مدت زمان</label>
                                <input type="text" class="form-control" name="time">
                            </div>
                            <div class="form-group">
                                <label>آدرس تصویر شاخص</label>
                                <input type="text" class="form-control" name="image">
                            </div>
                            <div class="form-group">
                                <label>توضیحات</label>
                                <textarea class="form-control" rows="3" name="description"></textarea>
                            </div>
                            <button class="btn btn-primary">ایجاد</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection