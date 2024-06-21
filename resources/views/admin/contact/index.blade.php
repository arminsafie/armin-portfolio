@extends('admin.master')

@section('title', $title)
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="page-heading clearfix">
                <h1 class="page-title pull-left">{{ $title }}</h1>
            </div>
        </div>
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-users table-hover">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>نام </th>
                        <th>ایمیل </th>
                        <th>شماره</th>
                        <th>پیام</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($items as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->userName }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->phone }}</td>
                            <td>{{ $item->message }}</td>
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
