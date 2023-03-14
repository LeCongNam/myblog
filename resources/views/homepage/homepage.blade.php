@extends('master.home')

@section('title', 'homepage')

@section('slider')
    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-8 col-md-8">
                <div id="slider">
                    <div id="slider__container" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#slider__container" data-slide-to="0" class="active"></li>
                            <li data-target="#slider__container" data-slide-to="1"></li>
                            <li data-target="#slider__container" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="/storage/images/banner.jpg" alt="First slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <a href="#">
                                        <h5>Công nghệ tuần qua</h5>
                                    </a>
                                    <p>Bài hôm nay mình sẽ hướng dẫn các bạn làm một thứ khá thú vị, cụ thể là làm cái
                                        hiệu ứng cho kiểu Thẻ Bài Magic – Magic Card bằng HTML, CSS và thêm chút
                                        Javascript nhé.
                                    </p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="/storage/images/banner.jpg" alt="Second slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <a href="#">
                                        <h5>Công nghệ tuần qua 2</h5>
                                    </a>
                                    <p>Bài hôm nay mình sẽ hướng dẫn các bạn làm một thứ khá thú vị, cụ thể là làm cái
                                        hiệu ứng cho kiểu Thẻ Bài Magic – Magic Card bằng HTML, CSS và thêm chút
                                        Javascript nhé.
                                    </p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="/storage/images/banner.jpg" alt="Third slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <a href="#">
                                        <h5>Công nghệ tuần qua 3</h5>
                                    </a>
                                    <p>Bài hôm nay mình sẽ hướng dẫn các bạn làm một thứ khá thú vị, cụ thể là làm cái
                                        hiệu ứng cho kiểu Thẻ Bài Magic – Magic Card bằng HTML, CSS và thêm chút
                                        Javascript nhé.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#slider__container" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#slider__container" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 d-none d-sm-none d-md-block d-lg-block">
                <div class="slider__right">
                    <div class="slider__item">
                        <a href="#">
                            <img src="/storage/images/post1.png" alt="">
                        </a>
                    </div>
                    <div class="slider__item">
                        <a href="#">
                            <img src="/storage/images/post2.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('listnews')
    <div class="col-lg-8 col-xs-12 col-sm-12 col-12">
        <div class="list__news">
            @for ($i = 0; $i < 30; $i++)
                <div class="card__news">
                    <a href="/post/{{ $i }}">
                        <img src="/storage/images/post1.png" class="thumb__nail" alt="">
                    </a>
                    <div class="card__body">
                        <a href="#">
                            <h4 class="title">Lộ trình học lập trình từ con số 0</h4>
                        </a>
                        <p class="news__short">
                            Bài viết này sẽ bao gồm thật chi tiết về Lộ trình học lập trình nói chung cũng như
                            lập trình Web nói riêng. Đặc biệt dành cho các bạn mới lần đầu tìm hiểu tới con
                            đường lập trình Web này nha.
                        </p>
                        <div class="card__footer">
                            <i class="fa-regular fa-heart like__post"></i>

                            <p>
                                12-02-2023
                            </p>
                        </div>
                    </div>
                </div>
            @endfor



        </div>
    </div>
@endsection


@section('popular')
    <p class="title mt-lg-5">
        Popular Post
    </p>
    <ul class="popular">
        @for ($i = 0; $i < 5; $i++)
            <li>
                <a href="#">
                    <img src="/storage//images/post1.png" alt="">
                    <div class="detail">
                        <h6>Học lập trình từ con số 0</h6>
                        <span>
                            <i class="fa-solid fa-eye"></i>
                            160
                        </span>
                    </div>
                </a>
            </li>
        @endfor
    </ul>
@endsection


@section('pagination')
    <div class="row justify-content-center mb-3">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link" href="/prev" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                            <span class="sr-only">Previous</span>
                        </a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item disabled"><a class="page-link" href="#">...</a></li>
                    <li class="page-item"><a class="page-link" href="#">7</a></li>
                    <li class="page-item">
                        <a class="page-link" href="/next" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                            <span class="sr-only">Next</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
@endsection
