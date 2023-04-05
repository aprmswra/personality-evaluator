@extends('layouts.layout')

@section('title', 'Employee')

@section('content')

<div class="pagetitle">
    <h1>Employee</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item">Employee</li>
            <li class="breadcrumb-item active">Data</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section">
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">List Employees</h5>
                    
                    <!-- Table with stripped rows -->
                    <table class="table datatable">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Position</th>
                                <th scope="col">E-mail</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Brandon Jacob</td>
                                <td>Human Resource</td>
                                <td>brandon@xxx.xxx</td>
                                <td>
                                    <button class="btn btn-sm btn-primary" title="Detail" data-toggle="modal" data-target="#"><i class="bi bi-eye"></i></button>
                                    <button class="btn btn-sm btn-warning" title="Edit" data-toggle="modal" data-target="#"><i class="bi bi-pencil-square"></i></button>
                                    <a href="#" class="btn btn-sm btn-danger hapusData" title="Hapus"><i class="bi bi-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Bridie Kessler</td>
                                <td>Human Capital</td>
                                <td>bridie@xxx.xxx</td>
                                <td>
                                    <button class="btn btn-sm btn-primary" title="Detail" data-toggle="modal" data-target="#"><i class="bi bi-eye"></i></button>
                                    <button class="btn btn-sm btn-warning" title="Edit" data-toggle="modal" data-target="#"><i class="bi bi-pencil-square"></i></button>
                                    <a href="#" class="btn btn-sm btn-danger hapusData" title="Hapus"><i class="bi bi-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Ashleigh Langosh</td>
                                <td>Human Capital</td>
                                <td>ashleigh@xxx.xxx</td>
                                <td>
                                    <button class="btn btn-sm btn-primary" title="Detail" data-toggle="modal" data-target="#"><i class="bi bi-eye"></i></button>
                                    <button class="btn btn-sm btn-warning" title="Edit" data-toggle="modal" data-target="#"><i class="bi bi-pencil-square"></i></button>
                                    <a href="#" class="btn btn-sm btn-danger hapusData" title="Hapus"><i class="bi bi-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>Angus Grady</td>
                                <td>Human Resource</td>
                                <td>angus@xxx.xxx</td>
                                <td>
                                    <button class="btn btn-sm btn-primary" title="Detail" data-toggle="modal" data-target="#"><i class="bi bi-eye"></i></button>
                                    <button class="btn btn-sm btn-warning" title="Edit" data-toggle="modal" data-target="#"><i class="bi bi-pencil-square"></i></button>
                                    <a href="#" class="btn btn-sm btn-danger hapusData" title="Hapus"><i class="bi bi-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>Raheem Lehner</td>
                                <td>Human Capital</td>
                                <td>raheem@xxx.xxx</td>
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