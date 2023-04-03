@include('layouts.layout')

@section('title', 'Personality Test')

@section('content')

<div class="pagetitle">
    <h1>Form Elements</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item">Forms</li>
            <li class="breadcrumb-item active">Elements</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section">
    <div class="row">
        <div class="col-lg-6">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">General Form Elements</h5>

                    <!-- General Form Elements -->
                    <form>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Text</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                            <input type="email" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                            <input type="password" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputNumber" class="col-sm-2 col-form-label">Phone Number</label>
                            <div class="col-sm-10">
                            <input type="number" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputNumber" class="col-sm-2 col-form-label">CV</label>
                            <div class="col-sm-10">
                            <input class="form-control" type="file" id="formFile">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputDate" class="col-sm-2 col-form-label">Birth of Date</label>
                            <div class="col-sm-10">
                            <input type="date" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Tell me about yourself</label>
                            <div class="col-sm-10">
                            <textarea class="form-control" style="height: 100px"></textarea>
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Gender</label>
                            <div class="col-sm-10">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Open this select menu</option>
                                <option value="M">Male</option>
                                <option value="F">Female</option>
                            </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Submit Button</label>
                            <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Submit Form</button>
                            </div>
                        </div>

                    </form><!-- End General Form Elements -->

                </div>
            </div>

        </div>
    </div>
</section>

@endsection