@extends("user.master")

@section('main')
    <div class="container px-5 my-5">
        <div class="text-center mb-5">
            <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Resume</span></h1>
        </div>
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-11 col-xl-9 col-xxl-8">
                <!-- Experience Section-->
                <section>
                    <div class="row d-flex align-items-center justify-content-between flex-wrap gap-4  my-4">
                        <h2 class=" col-md text-primary fw-bolder mb-0">Experience</h2>
                        
                    </div>
                    {{--   experies card --}}
                    @foreach($items->where("type", "experience") as $item)
                        <div class="card shadow border-0 rounded-4 mb-5">
                            <div class="card-body p-5">
                                <div class="row align-items-center gx-5">
                                    <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                        <div class="bg-light p-4 rounded-4">
                                            <div class="text-primary fw-bolder mb-2">{{ $item->startDate }} - {{ $item->endDate }}</div>
                                            <div class="small fw-bolder">{{ $item->title }}</div>
                                            <div class="small text-muted">{{ $item->company }}</div>
                                            <div class="small text-muted">{{ $item->city }}</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8"><div>{{ $item->body }}</div></div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </section>
                <!-- Education Section-->
                <section>
                    <h2 class="text-secondary fw-bolder mb-4">Education</h2>
                    @foreach($items->where("type", "education") as $item)
                        <div class="card shadow border-0 rounded-4 mb-5">
                            <div class="card-body p-5">
                                <div class="row align-items-center gx-5">
                                    <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                        <div class="bg-light p-4 rounded-4">
                                            <div class="text-secondary fw-bolder mb-2">{{ $item->startDate }} - {{ $item->endDate }}</div>
                                            <div class="mb-2">
                                                <div class="small fw-bolder">{{ $item->company }}</div>
                                                <div class="small text-muted">{{ $item->city }}</div>
                                            </div>
                                            <div class="fst-italic">
                                                <div class="small text-muted">{{ $item->grade }}</div>
                                                <div class="small text-muted">{{ $item->title }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8"><div>{{ $item->body }}</div></div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </section>
                <!-- Divider-->
                <div class="pb-5"></div>
                <!-- Skills Section-->
                <section>
                    <!-- Skillset Card-->
                    <div class="card shadow border-0 rounded-4 mb-5">
                        <div class="card-body p-5">
                            <!-- Professional skills list-->
                            <div class="mb-5">
                                <div class="d-flex align-items-center mb-4">
                                    <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 me-3"><i class="bi bi-tools"></i></div>
                                    <h3 class="fw-bolder mb-0"><span class="text-gradient d-inline">Professional Skills</span></h3>
                                </div>
                                <div class="row row-cols-1 row-cols-md-3 mb-4">
                                    @foreach($skills as $skill)
                                        <div class="col mb-4 ">
                                            <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">{{$skill->skillName}}</div>
                                        </div>
                                    @endforeach

                                </div>

                            </div>
                            <!-- Languages list-->
                            <div class="mb-0">
                                <div class="d-flex align-items-center mb-4">
                                    <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 me-3"><i class="bi bi-code-slash"></i></div>
                                    <h3 class="fw-bolder mb-0"><span class="text-gradient d-inline">Languages</span></h3>
                                </div>
                                <div class="row row-cols-1 row-cols-md-3 mb-4">
                                    @foreach($languages as $language)
                                        <div class="col mb-4"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">{{ $language->languages }}</div></div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
