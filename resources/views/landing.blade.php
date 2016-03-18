@extends('layouts.app')

@section('page-title','Landing')
@section('body-class','bg-color-light')
@section('content')
<!--========== PAGE CONTENT ==========-->
    <!-- Services v1 -->
    <div class="bg-color-sky-light overflow-h">
        <div class="content-md container">
            <!-- Heading v1 -->
            <div class="heading-v1 text-center margin-b-80">
                <h2 class="heading-v1-title">We Build the real Value!</h2>
                <p class="heading-v1-text">Ark is the most amazing template with powerful customization settings.</p>
            </div>
            <!-- End Heading v1 -->

            <div class="row space-row-10">
                <div class="col-md-4 md-margin-b-20">
                    <!-- Services v1 -->
                    <section class="services-v1">
                        <div class="margin-b-50">
                            <div class="services-v1-icon-wrap radius-circle">
                                <img class="services-v1-icon" src="assets/img/icons/04.png" alt="">
                            </div>
                            <span class="services-v1-subtitle color-base">Time to talk</span>
                            <h3 class="services-v1-title">5 Star Support</h3>
                            <p class="services-v1-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed cursus sapien, vitae fringilla sem. Duis convallis vel nunc at laoreet.</p>
                        </div>
                        <a href="#" class="btn-base-bg btn-base-sm radius-3">Know More</a>
                    </section>
                    <!-- End Services v1 -->
                </div>
                <div class="col-md-4 md-margin-b-20">
                    <!-- Services v1 -->
                    <section class="services-v1">
                        <div class="margin-b-50">
                            <div class="services-v1-icon-wrap radius-circle">
                                <img class="services-v1-icon" src="assets/img/icons/03.png" alt="">
                            </div>
                            <span class="services-v1-subtitle color-red">We expect excellence</span>
                            <h3 class="services-v1-title">Always something new</h3>
                            <p class="services-v1-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed cursus sapien, vitae fringilla sem. Duis convallis vel nunc at laoreet.</p>
                        </div>
                        <a href="#" class="btn-red-bg btn-base-sm radius-3">Know More</a>
                    </section>
                    <!-- End Services v1 -->
                </div>
                <div class="col-md-4">
                    <!-- Services v1 -->
                    <section class="services-v1">
                        <div class="margin-b-50">
                            <div class="services-v1-icon-wrap radius-circle">
                                <img class="services-v1-icon" src="assets/img/icons/02.png" alt="">
                            </div>
                            <span class="services-v1-subtitle color-teal">Make for all devices</span>
                            <h3 class="services-v1-title">Fully responsive</h3>
                            <p class="services-v1-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed cursus sapien, vitae fringilla sem. Duis convallis vel nunc at laoreet.</p>
                        </div>
                        <a href="#" class="btn-teal-bg btn-base-sm radius-3">Know More</a>
                    </section>
                    <!-- End Services v1 -->
                </div>
            </div>
            <!--// end row -->
        </div>
    </div>
    <!-- End Services v1 -->
    <!--========== END PAGE CONTENT ==========-->

@endsection
