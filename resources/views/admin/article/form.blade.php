@extends("admin.master")

@section('title', $title)

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading clearfix">
                    <div class="panel-title">{{ $title }}</div>
                </div>
                <!-- panel body -->
                <div class="panel-body">
                    <style>
                        .form-contorl {
                            display: flex;
                            flex-direction: column;
                            gap: 1rem;
                        }

                        .allert-text {
                            font-size: 1.3rem;
                            color: red;
                        }
                    </style>
                    @if ($errors->any())
                        @foreach($errors->all() as $error)
                            <div class="alert alert-danger " role="alert">
                                {{ $error }}
                            </div>
                        @endforeach
                    @endif
                    @if(isset($item))
                        {{ html()->modelForm($item, 'PATCH', route("admin.article.update",$item->id))->class("form-contorl")->open() }}
                    @else
                        {{ html()->form('POST', route('admin.article.store'))->class("form-contorl")->open() }}
                    @endif
                    {{html()->label("title")}}
                    {{ html()->text('title')->class('form-control') }}
                    {{html()->label("imgUrl")}}
                    {{ html()->text('imgUrl')->class('form-control') }}
                    {{ html()->div()->open() }}
                    {{html()->label("publish")}}
                    {{ html()->number('publish')->class('form-control') }}
                    {{ html()->p("فقط ۰ و ۱ وارد کنید***")->class("allert-text") }}
                    {{ html()->div()->close() }}
                    {{html()->label("creator")}}
                    {{ html()->text('creator')->class('form-control') }}
                    {{html()->label("view")}}
                    {{ html()->text('view')->class('form-control') }}
                    {{html()->label("content")}}
                    {{ html()->textarea('content')->class('form-control') }}
                    @if(isset($item))
                        {{ html()->submit('به روز رسانی')->class('btn btn-success') }}
                    @else
                        {{ html()->submit('ثبت ')->class('btn btn-success') }}
                    @endif

                    {{ html()->form()->close() }}
                </div>
            </div>
        </div>
    </div>
@endsection
