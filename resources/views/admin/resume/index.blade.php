@extends("admin.master")


@section("title",$title)


@section("content")
        <div class="row">
        <div class="col-md-12">
            <div class="page-heading clearfix">
                <h1 class="page-title pull-left">{{ $title }}</h1>
                <a class="btn btn-primary btn-sm btn-add" href="{{route("admin.resume.create")}}">ایجاد</a>
            </div>
        </div>
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-users table-hover">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th> تایتل</th>
                        <th> متن </th>
                        <th>شهر</th>
                        <th>سال شروع</th>
                        <th>سال پایان</th>
                        <th> تایپ</th>
                        <th>  گرید</th>
                        <th>ویرایش</th>
                        <th>حذف</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($items as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->title }}</td>
                            <td style="width: 10vw; display: block;overflow:scroll;height: 10vh">{{ $item->body }}</td>
                            <td>{{ $item->city }}</td>
                            <td>{{ $item->startDate }}</td>
                            <td>{{ $item->endDate }}</td>
                            <td>{{ $item->type }}</td>
                            <td>{{ $item->grade }}</td>
                            <td>
                                <a href="{{ route("admin.resume.edit", $item->id) }}"  class="btn btn-primary btn-outline">ویرایش</a>
                            </td>
                            <td>
                                {{ html()->form("DELETE", route('admin.resume.destroy',$item->id))->open() }}
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
