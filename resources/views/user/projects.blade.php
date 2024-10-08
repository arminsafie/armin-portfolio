@extends("user.master")


@section("main")
    <!-- Projects Section-->
    <section class="py-5">
        <div class="container px-5 mb-5">
            <div class="text-center mb-5">
                <h1 class="display-5 fw-bolder mb-0">
                    <span class="text-gradient d-inline">Projects</span>
                </h1>
            </div>
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-11 col-xl-9 col-xxl-8">
                    @foreach($items as $item)
                    {{$item->body}}
                        <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                            <div class="card-body p-0">
                                <div class="row">
                                    <div class="col-md-8">
                                    <div class="p-5 d-flex flex-column gap-4"  >
                                        <h2 class="fw-bolder">{{ $item->title }}</h2>
                                        <p>
                                            {{$item->body}}
                                        </p>
                                    </div>
                                    </div>
                                    <div class="col-md-4">

                                    <img
                                        class="w-100"
                                        src="{{ $item->imgUrl }}"
                                        alt="{{$item->title}}"
                                    />
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>
    <!-- Call to action section-->
    <section class="py-5 bg-gradient-primary-to-secondary text-white">
        <div class="container px-5 my-5">
            <div class="text-center">
                <h2 class="display-4 fw-bolder mb-4">
                    Let's build something together
                </h2>
                <a
                    class="btn btn-outline-light btn-lg px-5 py-3 fs-6 fw-bolder"
                    href="{{  route('contact')}}"
                >Contact me</a
                >
            </div>
        </div>
    </section>
@endsection
