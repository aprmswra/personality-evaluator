@extends('layouts.layout')

@section('title', 'Candidate')

@section('content')

<div class="pagetitle">
    <h1>Candidate</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item">Candidate</li>
            <li class="breadcrumb-item active">Data</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section">
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">List Candidates</h5>
                    
                    <!-- Table with stripped rows -->
                    <table class="table datatable">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Apply Date</th>
                                <th scope="col">Position</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Brandon Jacob</td>
                                <td>2016-05-25</td>
                                <td>Designer</td>
                                <td>Accepted</td>
                                <td>
                                    <button class="btn btn-sm btn-primary" title="Detail" data-toggle="modal" data-target="#"><i class="bi bi-eye"></i></button>
                                    <button class="btn btn-sm btn-warning" title="Edit" data-toggle="modal" data-target="#"><i class="bi bi-pencil-square"></i></button>
                                    <a href="#" class="btn btn-sm btn-danger hapusData" title="Hapus"><i class="bi bi-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Bridie Kessler</td>
                                <td>2014-12-05</td>
                                <td>Developer</td>
                                <td>In Review</td>
                                <td>
                                    <button class="btn btn-sm btn-primary" title="Detail" data-toggle="modal" data-target="#"><i class="bi bi-eye"></i></button>
                                    <button class="btn btn-sm btn-warning" title="Edit" data-toggle="modal" data-target="#"><i class="bi bi-pencil-square"></i></button>
                                    <a href="#" class="btn btn-sm btn-danger hapusData" title="Hapus"><i class="bi bi-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Ashleigh Langosh</td>
                                <td>2011-08-12</td>
                                <td>Finance</td>
                                <td>Accepted</td>
                                <td>
                                    <button class="btn btn-sm btn-primary" title="Detail" data-toggle="modal" data-target="#"><i class="bi bi-eye"></i></button>
                                    <button class="btn btn-sm btn-warning" title="Edit" data-toggle="modal" data-target="#"><i class="bi bi-pencil-square"></i></button>
                                    <a href="#" class="btn btn-sm btn-danger hapusData" title="Hapus"><i class="bi bi-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>Angus Grady</td>
                                <td>2012-06-11</td>
                                <td>HR</td>
                                <td>Rejected</td>
                                <td>
                                    <button class="btn btn-sm btn-primary" title="Detail" data-toggle="modal" data-target="#"><i class="bi bi-eye"></i></button>
                                    <button class="btn btn-sm btn-warning" title="Edit" data-toggle="modal" data-target="#"><i class="bi bi-pencil-square"></i></button>
                                    <a href="#" class="btn btn-sm btn-danger hapusData" title="Hapus"><i class="bi bi-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>Raheem Lehner</td>
                                <td>2011-04-19</td>
                                <td>Dynamic Division Officer</td>
                                <td>Accepted</td>
                                <td>
                                    <button class="btn btn-sm btn-primary" title="Detail" data-toggle="modal" data-target="#"><i class="bi bi-eye"></i></button>
                                    <button class="btn btn-sm btn-warning" title="Edit" data-toggle="modal" data-target="#"><i class="bi bi-pencil-square"></i></button>
                                    <a href="#" class="btn btn-sm btn-danger hapusData" title="Hapus"><i class="bi bi-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">6</th>
                                <td>Raheem Lehner</td>
                                <td>2011-04-19</td>
                                <td>Dynamic Division Officer</td>
                                <td>Rejected</td>
                                <td>
                                    <button class="btn btn-sm btn-primary" title="Detail" data-toggle="modal" data-target="#"><i class="bi bi-eye"></i></button>
                                    <button class="btn btn-sm btn-warning" title="Edit" data-toggle="modal" data-target="#"><i class="bi bi-pencil-square"></i></button>
                                    <a href="#" class="btn btn-sm btn-danger hapusData" title="Hapus"><i class="bi bi-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">7</th>
                                <td>Raheem Lehner</td>
                                <td>2011-04-19</td>
                                <td>Dynamic Division Officer</td>
                                <td>Rejected</td>
                                <td>
                                    <button class="btn btn-sm btn-primary" title="Detail" data-toggle="modal" data-target="#"><i class="bi bi-eye"></i></button>
                                    <button class="btn btn-sm btn-warning" title="Edit" data-toggle="modal" data-target="#"><i class="bi bi-pencil-square"></i></button>
                                    <a href="#" class="btn btn-sm btn-danger hapusData" title="Hapus"><i class="bi bi-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">8</th>
                                <td>Raheem Lehner</td>
                                <td>2011-04-19</td>
                                <td>Dynamic Division Officer</td>
                                <td>In Review</td>
                                <td>
                                    <button class="btn btn-sm btn-primary" title="Detail" data-toggle="modal" data-target="#"><i class="bi bi-eye"></i></button>
                                    <button class="btn btn-sm btn-warning" title="Edit" data-toggle="modal" data-target="#"><i class="bi bi-pencil-square"></i></button>
                                    <a href="#" class="btn btn-sm btn-danger hapusData" title="Hapus"><i class="bi bi-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">9</th>
                                <td>Raheem Lehner</td>
                                <td>2011-04-19</td>
                                <td>Dynamic Division Officer</td>
                                <td>Rejected</td>
                                <td>
                                    <button class="btn btn-sm btn-primary" title="Detail" data-toggle="modal" data-target="#"><i class="bi bi-eye"></i></button>
                                    <button class="btn btn-sm btn-warning" title="Edit" data-toggle="modal" data-target="#"><i class="bi bi-pencil-square"></i></button>
                                    <a href="#" class="btn btn-sm btn-danger hapusData" title="Hapus"><i class="bi bi-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">10</th>
                                <td>Raheem Lehner</td>
                                <td>2011-04-19</td>
                                <td>Dynamic Division Officer</td>
                                <td>Rejected</td>
                                <td>
                                    <button class="btn btn-sm btn-primary" title="Detail" data-toggle="modal" data-target="#"><i class="bi bi-eye"></i></button>
                                    <button class="btn btn-sm btn-warning" title="Edit" data-toggle="modal" data-target="#"><i class="bi bi-pencil-square"></i></button>
                                    <a href="#" class="btn btn-sm btn-danger hapusData" title="Hapus"><i class="bi bi-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">11</th>
                                <td>Raheem Lehner</td>
                                <td>2011-04-19</td>
                                <td>Dynamic Division Officer</td>
                                <td>In Review</td>
                                <td>
                                    <button class="btn btn-sm btn-primary" title="Detail" data-toggle="modal" data-target="#"><i class="bi bi-eye"></i></button>
                                    <button class="btn btn-sm btn-warning" title="Edit" data-toggle="modal" data-target="#"><i class="bi bi-pencil-square"></i></button>
                                    <a href="#" class="btn btn-sm btn-danger hapusData" title="Hapus"><i class="bi bi-trash"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- End Table with stripped rows -->

                </div>
            </div>

        </div>
    </div>
</section>
    
@endsection