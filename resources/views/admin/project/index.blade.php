@extends('admin.master')

@section("title", $title)

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="page-heading clearfix">
                <h1 class="page-title pull-left">{{ $title }}</h1>
                <a class="btn btn-primary btn-sm btn-add" href="{{route("admin.project.create")}}">ایجاد</a>
            </div>
        </div>
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-users table-hover">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>نام پروژه</th>
                        <th>لینک عکس</th>
                        <th>توضیخات</th>
                        <th>انتشار</th>
                        <th>ویرایش</th>
                        <th>حذف</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($items as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->title }}</td>
                            <td>
                                <img src="{{$item->imgUrl}}" alt="{{ $item->title }} " style="width: 20rem; object-fit: cover">
                            </td>
                            <td>{{ $item->body }}</td>
                            <td>{{ $item->publish }}</td>
                            <td>
                                <a href="{{ route("admin.project.edit", $item->id) }}"  class="btn btn-primary btn-outline">ویرایش</a>
                            </td>
                            <td>
                                {{ html()->form("DELETE", route('admin.project.destroy',$item->id))->open() }}
                                    <button type="submit" class="btn btn-danger btn-outline">حذف</button>
                                {{ html()->form()->close() }}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="row">
                <div class="col-md-12" style="display: flex;justify-content: center">
                    {{ $items->links() }}
                </div>
            </div>
        </div>
    </div>

@endsection
