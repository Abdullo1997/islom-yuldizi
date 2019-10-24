@extends('layouts.front_main')
@section('content')
<section>
        <div id="owl-demo" class="owl-carousel owl-theme">
            <div class="item">
                <img src="{{ asset('frontend/img/start.jpg') }}" alt="The Last of us">
                <div class="mask"></div>
                <div class="texts">
                    <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi, soluta rem vero</h3>
                       <p class="mt-5"> <a href="" class="btn_banner my-5">Batafsil</a></p>
                </div>
            </div>
            <div class="item">
                <img src="{{ asset('frontend/img/start.jpg') }}" alt="The Last of us">
                <div class="mask"></div>
                <div class="texts">
                    <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi, soluta rem vero</h3>
                    <p class="mt-5"> <a href="" class="btn_banner my-5">Batafsil</a></p>
                </div>
            </div>
            <div class="item">
                <img src="{{ asset('frontend/img/start.jpg') }}" alt="The Last of us">
                <div class="mask"></div>
                <div class="texts">
                    <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi, soluta rem vero</h3>
                    <p class="mt-5"> <a href="" class="btn_banner my-5">Batafsil</a></p>
                </div>
            </div>
    </div>
</section>
<section class="section_color_contact">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
               <div class="car p-5">
                <h3 class="py-3" style="color: #0089fa;">"Lorem ipsum dolor sit amet,"</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis reprehenderit ex ducimus, necessitatibus magni nesciunt quod pariatur officiis vel eligendi est odio ipsam eveniet dolorum expedita quos, exercitationem voluptatibus id!</p>
               </div>
            </div>
            <div class="col-md-5 ">
                    <div class="container p-5">
                        <h3 class="text-center font-weight-bold" style="color: #0089fa;">Nomoz Vaqtlari</h3>
                            <div class="owl-carousel owl-theme">
                                    <div class="item">
                                        <h3 class="text-center p-5 border">00 : 00 </h3><p class="text-center font-weight-bold">Bomdod</p>
                                    </div>
                                    <div class="item">
                                        <h3 class="text-center p-5 border">00 : 00</h3><p class="text-center font-weight-bold">Peshin</p>
                                    </div>
                                    <div class="item">
                                        <h3 class="text-center p-5 border">00 : 00</h3><p class="text-center font-weight-bold">Asir</p>
                                    </div>
                                    <div class="item">
                                        <h3 class="text-center p-5 border">00 : 00</h3><p class="text-center font-weight-bold">Shom</p>
                                    </div>
                                    <div class="item">
                                        <h3 class="text-center p-5 border">00 : 00</h3><p class="text-center font-weight-bold">Xufton</p>
                                    </div>
                                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container card">
        <div class="row">
            <div class="col-md-8">
                <div class="">
                        <h4 class="text-center font-weight-bold pt-4  mt-1 border-bottom"><a href="">News</a></h4>
                        <div class="row p-2">
                                <div class="col-md-6">
                                        <div class="card audio_card">
                                                <img src="{{ asset('frontend/img/header_peshin.jpg') }}" alt=""> 
                                                <p class="text-center p-2 "><a href="#">O'zbekiston Qorilar Tilovati O'zbekiston Qorilar Tilovati O'zbekiston Qorilar Tilovati </a></p>
                                                <a href="" class="px-1 border-bottom"><small class="text-secondary">IslomYuldizi.uzO'zbekiston Qorilar Tilovati</small></a>
                                                <p class="px-2"><span><i class="fas fa-eye fa-sm text-primary"></i> 111</span> <span class="float-right"><i class="fas fa-calendar text-primary"></i> 14.10.2019</span></p>
                                            </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card audio_card">
                                        <img src="{{ asset('frontend/img/header_peshin.jpg') }}" alt=""> 
                                        <p class="text-center p-2 "><a href="#">O'zbekiston Qorilar TilovatiO'zbekiston Qorilar TilovatiO'zbekiston Qorilar Tilovati</a></p>
                                        <a href="" class="px-1 border-bottom"><small class="text-secondary">IslomYuldizi.uzO'zbekiston Qorilar Tilovati</small></a>
                                        <p class="px-2"><span style="font-size: small;color:darkgrey;"><i class="fas fa-eye fa-sm text-primary"></i> 111</span> <span class="float-right"><i class="fas fa-calendar text-primary"></i> 14.10.2019</span></p>
                                    </div>
                                </div>
                        </div>
                        <div class="row p-2">
                                <div class="col-md-6">
                                        <div class="card audio_card">
                                                <img src="{{ asset('frontend/img/header_peshin.jpg') }}" alt=""> 
                                                <p class="text-center p-2 text-sm"><a href="#">O'zbekiston Qorilar TilovatiO'zbekiston Qorilar TilovatiO'zbekiston Qorilar TilovatiO'zbekiston Qorilar Tilovati</a></p>
                                                <a href="" class="px-1 border-bottom"><small class="text-secondary">IslomYuldizi.uzO'zbekiston Qorilar Tilovati</small></a>
                                                <p class="px-2"><span><i class="fas fa-eye fa-sm text-primary"></i> 111</span> <span class="float-right"><i class="fas fa-calendar text-primary"></i> 14.10.2019</span></p>
                                            </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card audio_card">
                                        <img src="{{ asset('frontend/img/header_peshin.jpg') }}" alt=""> 
                                        <p class="text-center p-2 "><a href="#">O'zbekiston Qorilar TilovatiO'zbekiston Qorilar TilovatiO'zbekiston Qorilar TilovatiO'zbekiston Qorilar Tilovati</a></p>
                                        <a href="" class="px-1 border-bottom"><small class="text-secondary">IslomYuldizi.uzO'zbekiston Qorilar Tilovati</small></a>
                                        <p class="px-2"><span><i class="fas fa-eye fa-sm text-primary"></i> 111</span> <span class="float-right"><i class="fas fa-calendar text-primary"></i> 14.10.2019</span></p>
                                    </div>
                                </div>
                        </div>
                </div>
            </div>
            <div class="col-md-4"> 
                <div class="">
                        <h3 class="pt-4 font-weight-bold text-center border-bottom"><a href="">Tazkira</a></h3>
                        <div class="box">
                            <p class="text-primary pl-2 pt-3"><a href="" class="text_style">Kun Hadisi</a></p>
                                <div class="pl-2 font-weight-bold text-secondary">Lorem ipsum dolor sit amet</div>
                                <p class="p-2 text_style_p"><a href="">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Architecto sapiente quaerat incidunt cum praesentium laudantium blanditiis a sunt molestiae dicta repellendus optio alias, eius impedit? Incidunt minus cum officiis cupiditate?</a></p>
                        </div>
                        <div class="box">
                            <p class="text-primary pl-2 pt-3"><a href="" class="text_style">Kun Hadisi</a></p>
                                <div class="pl-2 font-weight-bold text-secondary">Lorem ipsum dolor sit amet</div>
                                <p class="p-2 text_style_p"><a href="">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Architecto sapiente quaerat incidunt cum praesentium laudantium blanditiis a sunt molestiae dicta repellendus optio alias, eius impedit? Incidunt minus cum officiis cupiditate?</a></p>
                        </div>
                        <div class="box">
                            <p class="text-primary pl-2 pt-3"><a href="" class="text_style">Kun Hadisi</a></p>
                                <div class="pl-2 font-weight-bold text-secondary">Lorem ipsum dolor sit amet</div>
                                <p class="p-2 text_style_p"><a href="">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Architecto sapiente quaerat incidunt cum praesentium laudantium blanditiis a sunt molestiae dicta repellendus optio alias, eius impedit? Incidunt minus cum officiis cupiditate?</a></p>
                        </div>
                        <div class="box">
                            <p class="text-primary pl-2 pt-3"><a href="" class="text_style">Kun Hadisi</a></p>
                                <div class="pl-2 font-weight-bold text-secondary">Lorem ipsum dolor sit amet</div>
                                <p class="p-2 text_style_p"><a href="">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Architecto sapiente quaerat incidunt cum praesentium laudantium blanditiis a sunt molestiae dicta repellendus optio alias, eius impedit? Incidunt minus cum officiis cupiditate?</a></p>
                        </div>
                       
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section_color_contact2 mt-5">
        <div class="container card pb-5">
                <h2 class="text-center font-weight-bold  pt-3" style="color: #0089fa;">Islom Yuldizi Kanli</h2>
                <br>
                <!-- Nav tabs -->
                <ul class="nav nav-tabs">
                  <li class="nav-item ">
                    <a class="nav-link px-5 text_info font-weight-bold  active" data-toggle="tab" href="#home">Videos</a>
                  </li>
                  <li class="nav-item ">
                    <a class="nav-link px-5 text_info font-weight-bold " data-toggle="tab" href="#menu1">Audios</a>
                  </li>
                  <li class="nav-item ">
                    <a class="nav-link px-5 text_info font-weight-bold " data-toggle="tab" href="#menu2">Juma</a>
                  </li>
                </ul>
              
                <!-- Tab panes -->
                <div class="tab-content">
                  <div id="home" class="container tab-pane active"><br>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-7">
                                        <iframe width="100%" height="400px" style="border: none;"
                                            src="https://www.youtube.com/embed/YGV_DQk2D8Y">
                                        </iframe>
                            </div>
                            <div class="col-md-5">
                                <div class="row border-bottom">
                                    <div class="col-md-4 ">
                                       <p class="p-2">
                                        <a href="" class="">
                                            <img src="{{ asset('frontend/img/islom_logo.jpg') }}"  width="100px" alt="">
                                        </a>
                                       </p>
                                    </div>
                                    <div class="col-md-8">
                                            <p><a href="">Lorem, ipsum dolor sit amet consectetur adipisicing elit</a></p>
                                        <p>
                                            <span><i class="fas fa-calendar"></i> 14.10.2019</span>
                                            <span class="float-right"><i class="fas fa-eye"></i> 2019</span>
                                        </p>

                                    </div>
                                </div>
                                <div class="row border-bottom">
                                    <div class="col-md-4">
                                       <p class="p-2">
                                        <a href="" class="">
                                            <img src="{{ asset('frontend/img/islom_logo.jpg') }}"  width="100px" alt="">
                                        </a>
                                       </p>
                                    </div>
                                    <div class="col-md-8">
                                            <p><a href="">Lorem, ipsum dolor sit amet consectetur adipisicing elit</a></p>
                                        <p>
                                            <span><i class="fas fa-calendar"></i> 14.10.2019</span>
                                            <span class="float-right"><i class="fas fa-eye"></i> 2019</span>
                                        </p>

                                    </div>
                                </div>
                                <div class="row border-bottom">
                                    <div class="col-md-4">
                                       <p class="p-2">
                                        <a href="" class="">
                                            <img src="{{ asset('frontend/img/islom_logo.jpg') }}"  width="100px" alt="">
                                        </a>
                                       </p>
                                    </div>
                                    <div class="col-md-8">
                                            <p><a href="">Lorem, ipsum dolor sit amet consectetur adipisicing elit</a></p>
                                        <p>
                                            <span><i class="fas fa-calendar"></i> 14.10.2019</span>
                                            <span class="float-right"><i class="fas fa-eye"></i> 2019</span>
                                        </p>

                                    </div>
                                </div>
                                <div class="row border-bottom">
                                    <div class="col-md-4">
                                       <p class="p-2">
                                        <a href="" class="">
                                            <img src="{{ asset('frontend/img/islom_logo.jpg') }}"  width="100px" alt="">
                                        </a>
                                       </p>
                                    </div>
                                    <div class="col-md-8">
                                        <p><a href="">Lorem, ipsum dolor sit amet consectetur adipisicing elit</a></p>
                                        <p>
                                            <span><i class="fas fa-calendar"></i> 14.10.2019</span>
                                            <span class="float-right"><i class="fas fa-eye"></i> 2019</span>
                                        </p>

                                    </div>
                                </div>
                                <span class="float-right"><a href="#" class="text_info">All Videos</a></span>
                            </div>
                        </div>
                    </div>
                  </div>
                  <div id="menu1" class="container tab-pane fade"><br>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="card audio_card">
                                    <img src="{{ asset('frontend/img/header_peshin.jpg') }}" alt=""> 
                                    <p class="text-center p-2 border-bottom"><a href="#">O'zbekiston Qorilar Tilovati</a></p>
                                    <a href="" class="px-1">IslomYuldizi.uz</a>
                                    <p class="p-1"><span><i class="fas fa-eye fa-sm text-primary"></i> 111</span> <span class="float-right"><i class="fas fa-calendar text-primary"></i> 14.10.2019</span></p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card audio_card">
                                    <img src="{{ asset('frontend/img/header_peshin.jpg') }}" alt=""> 
                                    <p class="text-center p-2 border-bottom"><a href="#">O'zbekiston Qorilar Tilovati</a></p>
                                    <a href="" class="px-1">IslomYuldizi.uz</a>
                                    <p class="p-1"><span><i class="fas fa-eye fa-sm text-primary"></i> 111</span> <span class="float-right"><i class="fas fa-calendar text-primary"></i> 14.10.2019</span></p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card audio_card">
                                    <img src="{{ asset('frontend/img/header_peshin.jpg') }}" alt=""> 
                                    <p class="text-center p-2 border-bottom"><a href="#">O'zbekiston Qorilar Tilovati</a></p>
                                    <a href="" class="px-1">IslomYuldizi.uz</a>
                                    <p class="p-1"><span><i class="fas fa-eye fa-sm text-primary"></i> 111</span> <span class="float-right"><i class="fas fa-calendar text-primary"></i> 14.10.2019</span></p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card audio_card">
                                    <img src="{{ asset('frontend/img/header_peshin.jpg') }}" alt=""> 
                                    <p class="text-center p-2 border-bottom"><a href="#">O'zbekiston Qorilar Tilovati</a></p>
                                    <a href="" class="px-1">IslomYuldizi.uz</a>
                                    <p class="p-1"><span><i class="fas fa-eye fa-sm text-primary"></i> 111</span> <span class="float-right"><i class="fas fa-calendar text-primary"></i> 14.10.2019</span></p>
                                </div>
                            </div>
                        </div>
                        <span class="float-right p-5"><a href="#" class="text-primary">barcha audio ko'rish</a></span>
                    </div>
                  </div>
                  <div id="menu2" class="container tab-pane fade"><br>
                    <h3>Menu 2</h3>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                  </div>
                </div>
              </div>
              
</section>
<div class="parallax"></div>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12 pt-5">
                <div class="info">
                    <div class="sun">
                        <span class="mid">
                            <img src="{{ asset('frontend/img/1.png') }}" alt="">
                        </span>
                        <span class="ico1">
                            <strong>Kalima</strong>
                        </span>
                        <span class="ico2">
                            <strong>Salat</strong>
                        </span>
                        <span class="ico3">
                            <strong>fasting</strong>
                        </span>
                        <span class="ico4">
                            <strong>zakaat</strong>
                        </span>
                        <span class="ico5">
                            <strong>hajj</strong>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection