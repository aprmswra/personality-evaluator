@extends('layouts.layout')

@section('title', 'Test Personality')

@section('content')

<div class="pagetitle">
    <h1>Test Personality</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item">Personality</li>
            <li class="breadcrumb-item active">Test Personality</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section">
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Profile Candidate</h5>

                    <!-- General Form Elements -->
                    <form action="predictPersonality" method="POST" class="needs-validation" novalidate>
                        
                        @csrf

                        <div id="section1">
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Question 1</label>
                                <div class="col-sm-10">
                                <input type="text" name="q1" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Question 2</label>
                                <div class="col-sm-10">
                                <input type="text" name="q2" class="form-control">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                <div id="next1" class="btn btn-primary">Next</div>
                                </div>
                            </div>
                        </div>

                        <div id="section2">
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Question 3</label>
                                <div class="col-sm-10">
                                <input type="text" name="q3" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Question 4</label>
                                <div class="col-sm-10">
                                <input type="text" name="q4" class="form-control">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <div id="next2" class="btn btn-primary">Next</div>
                                </div>
                            </div>
                        </div>

                        <div id="section3">
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Question 5</label>
                                <div class="col-sm-10">
                                <input type="text" name="q5" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Question 6</label>
                                <div class="col-sm-10">
                                <input type="text" name="q6" class="form-control">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <div id="next3" class="btn btn-primary">Next</div>
                                </div>
                            </div>
                        </div>

                        <div id="section4">
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Question 7</label>
                                <div class="col-sm-10">
                                <input type="text" name="q7" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Question 8</label>
                                <div class="col-sm-10">
                                <input type="text" name="q8" class="form-control">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <div id="next4" class="btn btn-primary">Next</div>
                                </div>
                            </div>
                        </div>

                        <div id="section5">
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Question 9</label>
                                <div class="col-sm-10">
                                <input type="text" name="q9" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Question 10</label>
                                <div class="col-sm-10">
                                <input type="text" name="q10" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div id="sectionSubmit">
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </div>

                    </form><!-- End General Form Elements -->

                </div>
            </div>

        </div>
    </div>
</section>

@endsection

@push('js')
    <script>
        $(window).keydown(function(event){
            if(event.keyCode == 13) {
            event.preventDefault();
            return false;
            }
        });
        $( document ).ready(function() {
            $('#section1').show();
            $('#section2').hide();
            $('#section3').hide();
            $('#section4').hide();
            $('#section5').hide();
            $('#sectionSubmit').hide();
        });

        $("#next1").click(function () {
            $('#section1').hide();
            $('#section2').show();
            $('#section3').hide();
            $('#section4').hide();
            $('#section5').hide();
            $('#sectionSubmit').hide();
        })

        $("#next2").click(function () {
            $('#section1').hide();
            $('#section2').hide();
            $('#section3').show();
            $('#section4').hide();
            $('#section5').hide();
            $('#sectionSubmit').hide();
        })

        $("#next3").click(function () {
            $('#section1').hide();
            $('#section2').hide();
            $('#section3').hide();
            $('#section4').show();
            $('#section5').hide();
            $('#sectionSubmit').hide();
        })

        $("#next4").click(function () {
            $('#section1').hide();
            $('#section2').hide();
            $('#section3').hide();
            $('#section4').hide();
            $('#section5').show();
            $('#sectionSubmit').show();
        })
    </script>
@endpush