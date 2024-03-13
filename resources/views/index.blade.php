@extends('layouts.app')
@section('content')


    <!-- section-1 -->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        @livewire('homepage-slider')
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- end -->
    <!-- section -->
    <div class="container txt-1">
        <div class="row">
            <div class="col-6 divCenter">
                <p>We're helping hand on</p>
                <h1>90,100 children in 120+ Countries.Edit</h1>
            </div>

            <p class="paracen">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati
                tenetur placeat,<br />
                modi ipsa dolores odit perspiciatis excepturi velit deleniti
                voluptatibus vitae?
            </p>
        </div>
    </div>
    <!-- end -->
    <!-- section-start -->
    <div class="container-fluid sec-2">
        <div class="row fourdivs">

            <div class="col-lg-2  Aboutbox3 clsFlexxx col-md-4">
                <i class="fa-solid fa-medal fnt-cn"></i>
                <div class="crts">
                    <h2 ><span class="counter" data-end-value="14800">0</span>+</h2>
                    <p>success Compaign</p>
                </div>
            </div>

            <div class="col-lg-2 clsFlexx col-md-4 Aboutbox4">
                <i class="fa-solid fa-globe fnt-cn"></i>
                <div class="crtss">
                    <h3> <span class="counter" data-end-value="38">0</span>+</h3>
                    <p>hospitals we have</p>
                </div>
            </div>
            <div class="col-lg-2 clsFlexxx col-md-4 Aboutbox3">
                <i class="fa-solid fa-people-roof"></i>
                <div class="crts">
                    <h3> <span class="counter" data-end-value="3">3</span>crore+</h3>
                    <p>Campaign running</p>
                </div>
            </div>
            <div class="col-lg-2 clsFlexx col-md-4 Aboutbox4">
                <i class="fas fa-handshake"></i>

                <div class="crtss">
                    <h3> <span class="counter" data-end-value="148">0</span>lakh+</h3>
                    <p>Customer</p>
                </div>
            </div>
        </div>
    </div>
    <!-- end -->
    <!-- section-2 -->
    <!-- <div class="container project-card">
        <div class="row">
            <h1 class="text-center ">OUR PROJECTS</h1>
            @forelse ($projects as $project)
            <div class="col mt-2">
                <div class="crd">
                    <div class="image">
                        <a href="{{ route('project-details', $project->slug) }}">
                            <figure>
                                <img src="{{ asset('storage/' . $project->image) }}" alt="">
                            </figure>
                        </a>
                        <a href="{{ route('project-details', $project->slug) }}" class="text-center" style="text-decoration: none">
                            <h5>{{ $project->title }}</h5>
                        </a>
                    </div>
                    <div class="content">

                        <p class="">
                            {!! html_entity_decode(Str::limit($project->description , 80)) !!}
                        </p>
                        <a href="{{ route('project-details', $project->slug) }}" id="readMore">
                            <button>Read More
                            </button>
                        </a>
                    </div>
                </div>
            </div>
            @empty
            @endforelse

        </div>
        {{-- <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="crd">
                        <div class="image">
                            <img src=https://i.pinimg.com/originals/a4/7b/a5/a47ba59b4a353e0928ef0551ca44f980.jpg>
                        </div>
                        <div class="content">
                            <h3>This is content</h3>
                            <p>
                                DIn publishing and graphic design, Lorem ipsum is a placeholder
                                text commonly used to demonstrate the visual form of a document
                                or a typeface without relying on meaningful content.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12 mycustommargn">
                    <div class="crd">
                        <div class="image">
                            <img src=https://i.pinimg.com/originals/a4/7b/a5/a47ba59b4a353e0928ef0551ca44f980.jpg>
                        </div>
                        <div class="content">
                            <h3>This is content</h3>
                            <p>
                                DIn publishing and graphic design, Lorem ipsum is a placeholder
                                text commonly used to demonstrate the visual form of a document
                                or a typeface without relying on meaningful content.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mediaQur col-sm-12">
                    <div class="crd">
                        <div class="image">
                            <img src=https://i.pinimg.com/originals/a4/7b/a5/a47ba59b4a353e0928ef0551ca44f980.jpg>
                        </div>
                        <div class="content">
                            <h3>This is content</h3>
                            <p>
                                DIn publishing and graphic design, Lorem ipsum is a placeholder
                                text commonly used to demonstrate the visual form of a document
                                or a typeface without relying on meaningful content.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mediaQur col-sm-12">
                    <div class="crd">
                        <div class="image">
                            <img src=https://i.pinimg.com/originals/a4/7b/a5/a47ba59b4a353e0928ef0551ca44f980.jpg>
                        </div>
                        <div class="content">
                            <h3>This is content</h3>
                            <p>
                                DIn publishing and graphic design, Lorem ipsum is a placeholder
                                text commonly used to demonstrate the visual form of a document
                                or a typeface without relying on meaningful content.
                            </p>
                        </div>
                    </div>
                </div>
            </div> --}}
    </div> -->

    <!-- section-2 end -->
       <div class="container project-main campaignsInner"  style="margin-bottom:5rem">
        <div class="row justify-content-between text-center">
            <h2>Our Campaigns</h2>
            <p>
                Our vision is nothing less than realizing the full potential of the Internet – universal access to
                research
                and education
            </p>
            {{-- COMPAIGN BOX --}}
            @forelse ($projects as $project)
                <div class="col-md-4 mt-3">
                    <div class="campaignBox">
                        <figure>
                            <img src="{{ asset('storage/' . $project->image) }}" alt="">
                        </figure>
                        <div class="campaignboxcontent">
                            <a href="{{ route('project-details', $project->slug) }}"> <h3>{{ $project->title }}</h3></a>
                            <p>{!! html_entity_decode(Str::limit($project->description, 100)) !!}</p>
                            <a href="{{ route('project-details', $project->slug) }}" id="readMore">

                                <button>Read
                                More</button></a>
                        </div>
                    </div>
                </div>
            @empty
                <b>Projects are not available now.</b>
            @endforelse
        </div>

  </div>
    <!-- section renew -->

    <!-- end -->
    <!-- section 3 -->
    <div class="container sec-3 sec_marginB">
        <div class="row">
            <div class="sct-2 col">
                <div class="col-lg-6 col-md-12">
                    <img src="{{ asset('images/maharastra.jpg') }}" alt="" class="crd-img" />
                </div>
                <div class="main-content col-lg-6">
                    <h1>WHO WE ARE</h1>
                    <p class="prg">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquid
                        eius beatae accusantium?Lorem ipsum, dolor sit amet consectetur
                        adipisicing elit. Aliquid eius beatae accusantium?
                    </p>
                    <div>
                        <p class="cnt-prg">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque
                            qui sed dolor tempore placeat rerum, labore quibusdam expedita
                            tenetur dicta . Lorem ipsum dolor sit amet consectetur
                            adipisicing elit. Officia recusandae dolorem magni deserunt,
                            corporis reprehenderit earum est numquam velit soluta accusamus?
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut
                            sapiente, voluptatum nobis fuga doloremque laudantium eum quasi
                            adipisci quia eius odit?Lorem ipsum dolor sit amet consectetur
                            adipisicing elit. Harum ullam assumenda minima, vel consequuntur
                            in commodi doloremque, ea mollitia obcaecati alias ut excepturi
                            ducimus veniam quae provident nesciunt atque magnam. Quisquam?
                        </p>
                    </div>
                    <div class="row icn-bx">
                        <div class="col-4 classFlex">
                            <i class="fa-solid fa-medal fnt-cn"></i>

                            <div class="crt">
                                <h3>148</h3>
                                <p>success Compaign</p>
                            </div>
                        </div>
                        <div class="col-4 classFlex">
                            <i class="fa-solid fa-globe fnt-cn"></i>

                            <div class="crt">
                                <h3>14</h3>
                                <p>cities we are</p>
                            </div>
                        </div>
                        <div class="col-4 classFlex">
                            <i class="fa-solid fa-flag fnt-cn"></i>

                            <div class="crt">
                                <h3>12</h3>
                                <p>Campaign running</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- section end -->
    <div class="container sec-8 sec_marginB">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="orphan-cnt">
                    <img src="{{ asset('images/portfolio-6.jpg') }}" alt="" srcset="" />
                </div>
            </div>
            <div class="col-lg-5 col-md-6">
                <div class="oph-para">
                    <h1>Sponsor An Orphan Child</h1>
                    <p class="oph-cont">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed qui
                        rem ea? Aliquam, iusto. Cumque in nostrum magnam ex iste harum
                        repudiandae labore sit laboriosam vel? Nostrum, voluptates
                        voluptatibus. Ad, neque. Lorem ipsum dolor sit amet consectetur
                        adipisicing elit. Adipisci tempora nesciunt cupiditate dolor!
                        Autem alias unde voluptas minima sequi ea nesciunt?
                    </p>
                    <a href="{{route('donate-now')}}">
                    <button type="button" class="btn btn-outline-success">
                        Donate now
                    </button>
                </a>
                </div>
            </div>
            <div class="col-3 rounded-circle text-center CustomBorder" style="border-width: 4px;">
                <div class="Mycontent text-white">
                    <h1>73%</h1>
                    <p>Donated Now</p>
                </div>
            </div>

        </div>
    </div>
    <!-- end -->
    <!-- start -->
    <div class="container MyCustomCard sec_marginB">
        <div class="row">
            <div class="col-lg-3 col-md-6 mediaQur">
                <div class="card Main-cnt">
                    <img src="{{ asset('images/droplets.png') }}" class="card-img-top CustomImg" alt="..." />
                    <div class="card-body bodyCustom">
                        <p class="card-text text-white">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad
                            quia, eveniet tempore assumenda velit facere minus soluta at
                            aperiam vel laborum.
                        </p>
                        <button class="btn text-white link"><i class="fa-solid fa-arrow-right" style="margin-right: 5px;"></i>Read more</button>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mediaQur">
                <div class="card">
                    <img src="{{ asset('images/deepak-mahajan-8ig-SzHpqDw-unsplash.jpg') }}" class="card-img-top" alt="..." />
                    <div class="card-body mycustomcardBody">
                        <h5 class="card-title text-white">Send donation</h5>
                        <p class="card-text text-white">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            Labore, repellendus veniam.
                        </p>
                        <button class="btn text-white link"><i class="fa-solid fa-arrow-right" style="margin-right: 5px;"></i>Read more</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mediaQur">
                <div class="card">
                    <img src="{{ asset('images/lisboa-ind-VnqagyZWhtk-unsplash.jpg') }}" class="card-img-top sec-img" alt="..." />
                    <div class="card-body mYCustomcard">
                        <h5 class="card-title text-white">Become voluteer</h5>
                        <p class="card-text text-white">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            Labore, repellendus veniam.
                        </p>
                        <button class="btn text-white link"><i class="fa-solid fa-arrow-right" style="margin-right: 5px;"></i>Read more</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mediaQur">
                <div class="card">
                    <img src="{{ asset('images/jd-chow-gutlccGLXKI-unsplash.jpg') }}" class="card-img-top" alt="..." />
                    <div class="card-body Custombody">
                        <h5 class="card-title text-white">John</h5>
                        <p class="card-text text-white">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            Labore, repellendus veniam.
                        </p>
                        <button class="btn text-white link"><i class="fa-solid fa-arrow-right" style="margin-right: 5px;"></i>Read more</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- end -->
    <!-- section-5 start -->
    <div class="container sect-5 sec_marginB">
        <div class="row">
            <div class="col sct-2">
                <div class="col-lg-4 col-md-12">
                    <img src="{{ asset('images/pexels-carlos-espinoza-2269648.jpg') }}" alt="" class="crds-img" />
                </div>
                <div class="main-cont col-lg-8 col-md-12">
                    <h1>NOTE FROM CEO & FOUNDER</h1>
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tenetur
                        praesentium ipsum dolor placeat nihil quos, eum dolore
                        necessitatibus labore dolores culpa consectetur perspiciatis.
                        Nihil ex, tempora quas ea sint harum fuga explicabo ipsa est
                        laborum molestias? Itaque laudantium voluptatum ducimus tenetur
                        natus illum dicta vero dolorem, optio, rem, voluptas libero.<br />
                        Illum iure suscipit dolor fuga fugiat error, tenetur molestiae
                        iste nobis quis optio odio cumque vitae neque eos molestias quos
                        nostrum dicta mollitia ipsam distinctio temporibus! Sit delectus
                        distinctio voluptatem nemo necessitatibus est consectetur nisi
                        aperiam similique nam, placeat fugiat illo quo? Doloremque labore,
                        error repellendus iusto dolor at similique? Lorem, ipsum dolor sit
                        amet consectetur adipisicing elit.Libero corrupti quaerat cum
                        nulla excepturi quod dignissimos neque necessitatibus aliquam.
                        Voluptate corrupti dicta error, natus rem nulla deleniti, deserunt
                        maiores earum architecto iste fugit aspernatur ullam perferendis
                        cumque laborum. Rem numquam incidunt, quo similique exercitationem
                        sapiente ipsum impedit. Assumenda alias explicabo, obcaecati culpa
                        nesciunt quis corrupti delectus enim quae ipsa amet quod sed
                        nostrum doloremque unde fugiat. Dicta earum id voluptatibus
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- section ends -->
    <!-- next-section -->
    <div class="container sect-6">
        <div class="row">
            <h1 class="text-center mb-3">Testimonial</h1>
            <div class="col-lg-3 col-md-6 mediaQur">
                <div class="card">
                    <img src="{{ asset('images/umar-ben-ZGQKW-nIW8o-unsplash.jpg') }}" class="card-img-top sec-img" alt="..." />
                    <div class="card-body">
                        <h5 class="card-title">Alisha</h5>
                        <p class="card-text">Designation</p>

                       <p class="card-para">
                            Donated
                            <span style="color: red; float: right">5000</span>
                        </p>
                        <p>
                            Experience <span style="color: red; float: right">2years</span>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mediaQur">
                <div class="card">
                    <img src="{{ asset('images/deepak-mahajan-8ig-SzHpqDw-unsplash.jpg') }}" class="card-img-top" alt="..." />
                    <div class="card-body">
                        <h5 class="card-title">Deepak</h5>
                        <p class="card-text">Designation</p>
                        <p class="card-para">
                            Donated
                            <span style="color: red; float: right">5000</span>
                        </p>
                        <p>
                            Experience <span style="color: red; float: right">1years</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mediaQur">
                <div class="card">
                    <img src="{{ asset('images/lisboa-ind-VnqagyZWhtk-unsplash.jpg') }}" class="card-img-top sec-img" alt="..." />
                    <div class="card-body">
                        <h5 class="card-title">Lisoba</h5>
                        <p class="card-text">Designation</p>
                         <p class="card-para">
                            Donated
                            <span style="color: red; float: right">5000</span>
                        </p>
                        <p >
                            Experience <span style="color: red; float: right">3years</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mediaQur">
                <div class="card">
                    <img src="{{ asset('images/jd-chow-gutlccGLXKI-unsplash.jpg') }}" class="card-img-top" alt="..." />
                    <div class="card-body">
                        <h5 class="card-title">John</h5>
                        <p class="card-text">Designation</p>
                        <p class="card-para">
                            Donated
                            <span style="color: red; float: right">5000</span>
                        </p>
                        <p>
                            Experience
                            <span style="color: red; float: right">2years</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end -->
    <!-- section -->
    <div class="container bnnerimg sec_marginB">
        <div class="card bg-dark text-white">
            <img src="{{ asset('images/brittani-burns-LCzc79jZGf4-unsplash.jpg') }}" class="card-img footerImg" alt="..." />
            <div class="card-img-overlay MYcard">
                <h5 class="card-title CustomTitle">Card title</h5>
                <p class="card-text footer-txt">
                    This is a wider card with supporting text below as a natural lead-in
                    to additional content. This content is a little bit longer.
                </p>
                <button type="button" class="btn btn-outline-danger text-white CstomBtn">
                    Donate now
                </button>
            </div>
        </div>
    </div>

    <!-- end -->

@endsection