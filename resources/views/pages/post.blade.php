@extends('welcome')

@section('content')
    <!-- breadcrumb-area start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_box text-center">
                        <!-- <h2 class="breadcrumb-title">@@title</h2> -->
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active">Post</li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area end -->

    <div id="main-wrapper">
        <div class="site-wrapper-reveal">

            <div class="share-your-thinking-area section-space--ptb_80">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="share-thinking-title">
                                <h2 class="title">Share Your Thinking</h2>
                            </div>
                        </div>
                    </div>

                    <form method="POST" action="{{ route('post.store') }}">
                        @csrf
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="title-write">
                                    <p>Write Your Title</p>
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <input class="write-content-box" id="title" type="text" name="title"
                                    value="{{ old('title') }}" required autocomplete="title" placeholder="Title" autofocus>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3">
                                <div class="title-write">
                                    <p>Description</p>
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <textarea class="write-content-box" id="description" name="description"
                                    value="{{ old('description') }}" required
                                          placeholder="Description" rows="4" cols="100"></textarea>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3">
                                <div class="title-write">
                                    <p>Tags</p>
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <div class="write-content-box">
                                    <div class="post-write-tag">
                                        <a href="#">Design</a>
                                        <a href="#">Technology</a>
                                        <a href="#">Business</a>
                                        <a href="#">Marketing</a>
                                        <a href="#">Company</a>
                                        <a href="#">Creative</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3">
                                <div class="title-write">
                                    <p>Content Privacy</p>
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <div class="write-content-box">
                                    <div class="post-write-trams">
                                        <div class="single-trams">
                                            <div class="title">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                    id="inlineRadio1" value="option1">
                                                <label class="form-check-label" for="inlineRadio1">Age of consent</label>
                                            </div>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry
                                                lorem
                                                Ipsum has been the
                                                standard dummy text ever since the 1500s when anden unknown printer took
                                                galley
                                                type and scrambled
                                                to make a type specimen book. It has and survived not only five centuries,
                                                but
                                                also the leap into
                                                typesetting, remaining essentially and unchanged.</p>
                                        </div>
                                        <div class="single-trams">
                                            <div class="title">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                    id="inlineRadio2" value="option2">
                                                <label class="form-check-label" for="inlineRadio2">Rights to your
                                                    information</label>
                                            </div>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry
                                                lorem
                                                Ipsum has been the
                                                standard dummy text ever since the 1500s when anden unknown printer took
                                                galley
                                                type and scrambled
                                                to make a type specimen book. It has and survived not only five centuries,
                                                but
                                                also the leap into
                                                typesetting, remaining essentially and unchanged.</p>
                                        </div>
                                        <div class="single-trams">
                                            <div class="title">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                    id="inlineRadio3" value="option3">
                                                <label class="form-check-label" for="inlineRadio3">Security and
                                                    retention</label>
                                            </div>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry
                                                lorem
                                                Ipsum has been the
                                                standard dummy text ever since the 1500s when anden unknown printer took
                                                galley
                                                type and scrambled
                                                to make a type specimen book. It has and survived not only five centuries,
                                                but
                                                also the leap into
                                                typesetting, remaining essentially and unchanged.</p>
                                        </div>

                                    </div>

                                </div>

                                <div class="conditon-buttom-wrap">
                                    <p class="conditon-note"><span class="title">Note:</span> Printing and typesetting
                                        industry
                                        lorem Ipsum has been the standard
                                        dummy text ever since the 1500s when anden book.</p>

                                    <div class="button-box">
                                        <button type="submit" class="btn-large btn-primary">Publish Now <i
                                                class="icofont-long-arrow-right"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection
