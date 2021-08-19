<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<style>
    .display-4 {
        font-size: 3.5rem;
        font-weight: 700;
        line-height: 1;
        letter-spacing: -.02em;
    }

    .section-title {
        margin-bottom: 4.6875rem;
    }

    .card-body {
        flex: 1 1 auto;
        padding: 1.25rem;
    }

    a.mya {
        font-weight: 700 !important;
        font-size: 1.25rem !important;
    }

    h5.myh5 {
        margin-bottom: 0.5rem;
        font-weight: 500;
        line-height: 1.2;
        font-size: 1.125rem;
    }

    .bg-primary-3 {
        background-color: #051b35 !important;
    }

    .divider {
        width: 100%;
        position: relative;
        height: 5vw;
        pointer-events: none;
        -webkit-mask-image: url(data:image/svg+xml;utf8,%3csvg viewBox='0 0 100 100' width='100%' height='100%' xmlns='http://www.w3.org/2000/svg' preserveAspectRatio='none'%3e%3cpath d='M0,0 C16.6666667,66 33.3333333,98 50,98 C66.6666667,98 83.3333333,66 100,0 L100,100 L0,100 L0,0 Z' fill='%23fff'/%3e%3c/svg%3e);
        mask-image: url(data:image/svg+xml;utf8,%3csvg viewBox='0 0 100 100' width='100%' height='100%' xmlns='http://www.w3.org/2000/svg' preserveAspectRatio='none'%3e%3cpath d='M0,0 C16.6666667,66 33.3333333,98 50,98 C66.6666667,98 83.3333333,66 100,0 L100,100 L0,100 L0,0 Z' fill='%23fff'/%3e%3c/svg%3e);
        -webkit-mask-size: 100% 101%;
        mask-size: 100% 101%;
        background: #fff;
    }

    .divider.divider-bottom {
        top: 1px;
    }

    @media (min-width: 992px) section>.divider-bottom {
        margin-top: calc(7.5rem - 5vw);
    }

    @media (min-width: 768px) section>.divider-bottom {
        margin-top: calc(6rem - 5vw);
    }

    section>.divider-bottom {
        margin-top: calc(3.75rem - 5vw);
    }

</style>

<body style="height: 100vh">

    {{-- star section 1 --}}
    <section class="w-100 h-100 d-flex flex-column">
        @include('includes.header')
        <!--end_navbar-->

        <div class="w-100 align-content-stretch d-flex flex-row justify-content-center align-items-center"
            style="flex-grow: 1; background-image: url(https://images.unsplash.com/photo-1554415707-6e8cfc93fe23?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80);background-position: center;background-repeat: no-repeat;background-size: cover">
            <h1 class="w-75 h-50 display-3 text-center d-flex flex-column justify-content-center align-items-center text-white p-1 px-5"
                style="background-color: #00000096">Learning
                is
                what
                got us this
                far and what will take us
                wherever we're
                going.
                <button type="button" class="btn btn-outline-info btn-lg mt-3">Enroll A Course Now</button>
            </h1>
        </div>
    </section>
    {{-- end section 1 --}}

    {{-- star section 2 --}}

    <section class="bg-light py-5">
        <div class="container">

            <div class="row section-title justify-content-center text-center">
                <div class="col-md-9 col-lg-8 col-xl-7">
                    <h2 class="display-4">Top Latest Courses</h2>

                </div>
            </div>

            <div class="row">
                <div class="col-md-6 col-lg-4 mb-3 mb-md-4">
                    <div class="card h-100 hover-box-shadow">
                        <a href="https://www.udemy.com/course/react-with-laravel-build-complete-project/"
                            target="/blank" class="d-block bg-gradient rounded-top">
                            <img class="card-img-top hover-fade-out"
                                src="https://www.easylearningbd.com/image/course1.png" alt="blog.6.image">
                        </a>
                        <div class="card-body">
                            <a class="mya"
                                href="https://www.udemy.com/course/react-with-laravel-build-complete-project/"
                                target="/blank">
                                <h5>React Js A-Z With Laravel - Build Complete Real Life Project
                                </h5>
                            </a>


                        </div>
                        <div class="card-footer d-flex justify-content-between align-items-center">
                            <a class="mya" href="#" class="badge badge-pill badge-danger">Paid Course</a>
                            <div class="text-small text-muted">Udemy</div>
                        </div>
                    </div>
                </div>


                <div class="col-md-6 col-lg-4 mb-3 mb-md-4">
                    <div class="card h-100 hover-box-shadow">
                        <a href="https://www.udemy.com/course/laravel-advance-ecommerce-project/?couponCode=EASYLEARNING"
                            target="/blank" class="d-block bg-gradient rounded-top">
                            <img class="card-img-top hover-fade-out"
                                src="https://www.easylearningbd.com/image/advanceecommerce.png" alt="blog.6.image">
                        </a>
                        <div class="card-body">
                            <a class="class=" mya""
                                href="https://www.udemy.com/course/laravel-advance-ecommerce-project/?couponCode=EASYLEARNING"
                                target="/blank">
                                <h5>Laravel 8 - Build Advance Ecommerce Project A-Z</h5>
                            </a>

                        </div>
                        <div class="card-footer d-flex justify-content-between align-items-center">
                            <a class="mya" href="#" class="badge badge-pill badge-danger">Paid Course</a>
                            <div class="text-small text-muted">Udemy</div>
                        </div>
                    </div>
                </div>



                <div class="col-md-6 col-lg-4 mb-3 mb-md-4">
                    <div class="card h-100 hover-box-shadow">
                        <a href="https://www.udemy.com/course/laravel-advanced-course-build-school-management-system/?referralCode=EB9554D6693F4EF51211"
                            target="/blank" class="d-block bg-gradient rounded-top">
                            <img class="card-img-top hover-fade-out"
                                src="https://www.easylearningbd.com/image/school1.jpg" alt="blog.6.image">
                        </a>
                        <div class="card-body">
                            <a class="mya"
                                href="https://www.udemy.com/course/laravel-advanced-course-build-school-management-system/?referralCode=EB9554D6693F4EF51211"
                                target="/blank">
                                <h5>Laravel 8 - Advance Course Build School Management System
                                </h5>
                            </a>


                        </div>
                        <div class="card-footer d-flex justify-content-between align-items-center">
                            <a class="mya" href="#" class="badge badge-pill badge-danger">Paid Course</a>
                            <div class="text-small text-muted">Udemy</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- end section 2 --}}

    {{-- star section 3 --}}
    <section>
        <div class="container">
            <div class="row section-title justify-content-center text-center">
                <div class="col-md-9 col-lg-8 col-xl-7">
                    <h3 class="display-4">Popular Courses</h3>
                    <div class="lead">Check out of our all Popular Professional Courses</div>
                </div>
            </div>
            <div class="row">








                <div class="col-md-6 col-lg-4 mb-3 mb-md-4">
                    <div class="card h-100 hover-box-shadow">
                        <a href="https://www.udemy.com/course/laravel-6-framework/?referralCode=10BEEE6AB4755A9CBE59"
                            target="/blank" class="d-block bg-gradient rounded-top">
                            <img class="card-img-top hover-fade-out"
                                src="https://www.easylearningbd.com/image/course1.png" alt="blog.6.image">
                        </a>
                        <div class="card-body">
                            <a href="https://www.udemy.com/course/laravel-6-framework/?referralCode=10BEEE6AB4755A9CBE59"
                                target="/blank">
                                <h5>Laravel 6 PHP Framework for Just Beginners</h5>
                            </a>


                        </div>
                        <div class="card-footer d-flex justify-content-between align-items-center">
                            <a href="#" class="badge badge-pill badge-primary">Free Course</a>
                            <div class="text-small text-muted">Udemy</div>
                        </div>
                    </div>
                </div>





                <div class="col-md-6 col-lg-4 mb-3 mb-md-4">
                    <div class="card h-100 hover-box-shadow">
                        <a href="https://www.udemy.com/course/laravel-beginner-to-advance-with-complete-news-portal/?referralCode=3D21CC3F568917C31491"
                            target="/blank" class="d-block bg-gradient rounded-top">
                            <img class="card-img-top hover-fade-out"
                                src="https://www.easylearningbd.com/image/newcourse1.png" alt="blog.6.image">
                        </a>
                        <div class="card-body">
                            <a href="https://www.udemy.com/course/laravel-beginner-to-advance-with-complete-news-portal/?referralCode=3D21CC3F568917C31491"
                                target="/blank">
                                <h5>Laravel 8 Beginner to Advance with Complete News Portal
                                </h5>
                            </a>


                        </div>
                        <div class="card-footer d-flex justify-content-between align-items-center">
                            <a href="#" class="badge badge-pill badge-danger">Paid Course</a>
                            <div class="text-small text-muted">Udemy</div>
                        </div>
                    </div>
                </div>








                <div class="col-md-6 col-lg-4 mb-3 mb-md-4">
                    <div class="card h-100 hover-box-shadow">
                        <a href="https://www.udemy.com/course/django-python-web-development-for-beginner/?referralCode=75418236328D16AB524C"
                            target="/blank" class="d-block bg-gradient rounded-top">
                            <img class="card-img-top hover-fade-out"
                                src="https://www.easylearningbd.com/image/newcourse3.png" alt="blog.6.image">
                        </a>
                        <div class="card-body">
                            <a href="https://www.udemy.com/course/django-python-web-development-for-beginner/?referralCode=75418236328D16AB524C"
                                target="/blank">
                                <h5>Django 3 - Python Backend Web Development For Beginner</h5>
                            </a>

                        </div>
                        <div class="card-footer d-flex justify-content-between align-items-center">
                            <a href="#" class="badge badge-pill badge-danger">Paid Course</a>
                            <div class="text-small text-muted">Udemy</div>
                        </div>
                    </div>
                </div>


                <div class="col-md-6 col-lg-4 mb-3 mb-md-4">
                    <div class="card h-100 hover-box-shadow">
                        <a href="https://www.udemy.com/course/laravel-framework-build-professional-ecommerce/?referralCode=BE24CEE2B8285B6BFE32"
                            target="/blank" class="d-block bg-gradient rounded-top">
                            <img class="card-img-top hover-fade-out"
                                src="https://www.easylearningbd.com/image/coursenew1.png" alt="blog.6.image">
                        </a>
                        <div class="card-body">
                            <a href="https://www.udemy.com/course/laravel-framework-build-professional-ecommerce/?referralCode=BE24CEE2B8285B6BFE32"
                                target="/blank">
                                <h5>Laravel 8 PHP Framework A - Z Build Professional Ecommerce</h5>
                            </a>


                        </div>
                        <div class="card-footer d-flex justify-content-between align-items-center">
                            <a href="#" class="badge badge-pill badge-danger">Paid Course</a>
                            <div class="text-small text-muted">Udemy</div>
                        </div>
                    </div>
                </div>


                <div class="col-md-6 col-lg-4 mb-3 mb-md-4">
                    <div class="card h-100 hover-box-shadow">
                        <a href="https://www.udemy.com/course/react-for-beginner-convert-html-to-react/?referralCode=B99B85C5973F4FB4153D"
                            target="/blank" class="d-block bg-gradient rounded-top">
                            <img class="card-img-top hover-fade-out"
                                src="https://www.easylearningbd.com/image/newcourse4.png" alt="blog.6.image">
                        </a>
                        <div class="card-body">
                            <a href="https://www.udemy.com/course/react-for-beginner-convert-html-to-react/?referralCode=B99B85C5973F4FB4153D"
                                target="/blank">
                                <h5>React JS For Beginner Convert Any HTML Site To React JS</h5>
                            </a>


                        </div>
                        <div class="card-footer d-flex justify-content-between align-items-center">
                            <a href="#" class="badge badge-pill badge-danger">Paid Course</a>
                            <div class="text-small text-muted">Udemy</div>
                        </div>
                    </div>
                </div>


                <div class="col-md-6 col-lg-4 mb-3 mb-md-4">
                    <div class="card h-100 hover-box-shadow">
                        <a href="https://www.udemy.com/course/laravel-vuejs-restful-api-course/?referralCode=998D6ABC15EFF6D76201"
                            target="/blank" class="d-block bg-gradient rounded-top">
                            <img class="card-img-top hover-fade-out"
                                src="https://www.easylearningbd.com/image/coursenew2.png" alt="blog.6.image">
                        </a>
                        <div class="card-body">
                            <a href="https://www.udemy.com/course/laravel-vuejs-restful-api-course/?referralCode=998D6ABC15EFF6D76201"
                                target="/blank">
                                <h5>Laravel 8 Vuejs &amp; RESTful API Course With Complete Project
                                </h5>
                            </a>


                        </div>
                        <div class="card-footer d-flex justify-content-between align-items-center">
                            <a href="#" class="badge badge-pill badge-danger">Paid Course</a>
                            <div class="text-small text-muted">Udemy</div>
                        </div>
                    </div>
                </div>














                <div class="col-md-6 col-lg-4 mb-3 mb-md-4">
                    <div class="card h-100 hover-box-shadow">
                        <a href="https://www.udemy.com/course/opencart-3-ecommerce-opencart-multi-vendor-project/?referralCode=725128FB5714330ACEE4"
                            target="/blank" class="d-block bg-gradient rounded-top">
                            <img class="card-img-top hover-fade-out"
                                src="https://www.easylearningbd.com/image/newcourse2.png" alt="blog.6.image">
                        </a>
                        <div class="card-body">
                            <a href="https://www.udemy.com/course/opencart-3-ecommerce-opencart-multi-vendor-project/?referralCode=725128FB5714330ACEE4"
                                target="/blank">
                                <h5>Opencart 3 Complete Ecommerce Project With Multi Vendor</h5>
                            </a>


                        </div>
                        <div class="card-footer d-flex justify-content-between align-items-center">
                            <a href="#" class="badge badge-pill badge-danger">Paid Course</a>
                            <div class="text-small text-muted">Udemy</div>
                        </div>
                    </div>
                </div>


                <div class="col-md-6 col-lg-4 mb-3 mb-md-4">
                    <div class="card h-100 hover-box-shadow">
                        <a href="https://www.udemy.com/course/php-oop-complete-online-exam-system/?referralCode=059A30F39DAA1DCC77FF"
                            target="/blank" class="d-block bg-gradient rounded-top">
                            <img class="card-img-top hover-fade-out"
                                src="https://www.easylearningbd.com/image/course4.png" alt="blog.6.image">
                        </a>
                        <div class="card-body">
                            <a href="https://www.udemy.com/course/php-oop-complete-online-exam-system/?referralCode=059A30F39DAA1DCC77FF"
                                target="/blank">
                                <h5>PHP OOP Complete Online Exam System with PHP jQuery Ajax</h5>
                            </a>


                        </div>
                        <div class="card-footer d-flex justify-content-between align-items-center">
                            <a href="#" class="badge badge-pill badge-danger">Paid Course</a>
                            <div class="text-small text-muted">Udemy</div>
                        </div>
                    </div>
                </div>



                <div class="col-md-6 col-lg-4 mb-3 mb-md-4">
                    <div class="card h-100 hover-box-shadow">
                        <a href="https://www.udemy.com/course/yii2-php-framework/?referralCode=8E778291CA1E1CB65AB0"
                            target="/blank" class="d-block bg-gradient rounded-top">
                            <img class="card-img-top hover-fade-out"
                                src="https://www.easylearningbd.com/image/course5.png" alt="blog.6.image">
                        </a>
                        <div class="card-body">
                            <a href="https://www.udemy.com/course/yii2-php-framework/?referralCode=8E778291CA1E1CB65AB0"
                                target="/blank">
                                <h5>Yii2 PHP Framework for Beginner to Advance 2019 with Project</h5>
                            </a>


                        </div>
                        <div class="card-footer d-flex justify-content-between align-items-center">
                            <a href="#" class="badge badge-pill badge-danger">Paid Course</a>
                            <div class="text-small text-muted">Udemy</div>
                        </div>
                    </div>
                </div>



                <div class="col-md-6 col-lg-4 mb-3 mb-md-4">
                    <div class="card h-100 hover-box-shadow">
                        <a href="https://www.udemy.com/course/cakephp-complete-project/?referralCode=A3A08903C83D57355760"
                            target="/blank" class="d-block bg-gradient rounded-top">
                            <img class="card-img-top hover-fade-out"
                                src="https://www.easylearningbd.com/image/course6.png" alt="blog.6.image">
                        </a>
                        <div class="card-body">
                            <a href="https://www.udemy.com/course/cakephp-complete-project/?referralCode=A3A08903C83D57355760"
                                target="/blank">
                                <h5>CakePHP for Beginner to Advance with Complete Project 2019</h5>
                            </a>

                        </div>
                        <div class="card-footer d-flex justify-content-between align-items-center">
                            <a href="#" class="badge badge-pill badge-danger">Paid Course</a>
                            <div class="text-small text-muted">Udemy</div>
                        </div>
                    </div>
                </div>










                <div class="col-md-6 col-lg-4 mb-3 mb-md-4">
                    <div class="card h-100 hover-box-shadow">
                        <a href="https://www.udemy.com/course/php-complete-ecommerce-project/?referralCode=9C13BAEE74459B09B6DD"
                            target="/blank" class="d-block bg-gradient rounded-top">
                            <img class="card-img-top hover-fade-out"
                                src="https://www.easylearningbd.com/image/course9.png" alt="blog.6.image">
                        </a>
                        <div class="card-body">
                            <a href="https://www.udemy.com/course/php-complete-ecommerce-project/?referralCode=9C13BAEE74459B09B6DD"
                                target="/blank">
                                <h5>PHP OOP Complete Ecommerce Project Course - 4 Courses in 1</h5>
                            </a>


                        </div>
                        <div class="card-footer d-flex justify-content-between align-items-center">
                            <a href="#" class="badge badge-pill badge-danger">Paid Course</a>
                            <div class="text-small text-muted">Udemy</div>
                        </div>
                    </div>
                </div>



                <div class="col-md-6 col-lg-4 mb-3 mb-md-4">
                    <div class="card h-100 hover-box-shadow">
                        <a href="https://www.udemy.com/course/opencart-3-complete-professional-course/?referralCode=28A1EAEB23CD6D46653B"
                            target="/blank" class="d-block bg-gradient rounded-top">
                            <img class="card-img-top hover-fade-out"
                                src="https://www.easylearningbd.com/image/course12.png" alt="blog.5.image">
                        </a>
                        <div class="card-body">
                            <a href="https://www.udemy.com/course/opencart-3-complete-professional-course/?referralCode=28A1EAEB23CD6D46653B"
                                target="/blank">
                                <h5>OpenCart 3 - Complete Project Professional Ecommerce Course</h5>
                            </a>


                        </div>
                        <div class="card-footer d-flex justify-content-between align-items-center">
                            <a href="#" class="badge badge-pill badge-danger">Paid Course</a>
                            <div class="text-small text-muted">Udemy</div>
                        </div>
                    </div>
                </div>






            </div>
        </div>
        <center>
            <a href="allcourse.html" class="lead"> &gt;&gt; Browse All Courses &lt;&lt; </a>
        </center>
    </section>
    {{-- end section 3 --}}

    {{-- star footer --}}

    <footer class="bg-primary-3 text-white links-white pb-4 footer-1 mt-5 pt-5">
        <div class="container">




            <div class="row section-title justify-content-center text-center">
                <div class="col-md-9 col-lg-8 col-xl-7">
                    <h3 class="display-4">support@easylearningbd.com</h3>

                </div>
            </div>




            {{-- <div class="divider divider-bottom bg-primary-3 mt-5"></div> --}}

            <hr>



            <div
                class="row flex-column flex-lg-row align-items-center justify-content-center justify-content-lg-between text-center text-lg-left">
                <div class="col-auto">
                    <div class="d-flex flex-column flex-sm-row align-items-center text-small">
                        <div class="text-muted">© Copyright 2016 by easy Learning, All Rights Reserved
                        </div>
                    </div>
                </div>



            </div>
        </div>

    </footer>
    {{-- end footer --}}
</body>
<script src="{{ asset('js/app.js') }}"></script>

</html>
