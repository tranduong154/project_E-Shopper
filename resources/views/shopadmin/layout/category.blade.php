

@extends('shopadmin.layout.master')
@section('content')

<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">Category</h4>
            </div>
            <div class="col-7 align-self-center">
                <div class="d-flex align-items-center justify-content-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Basic Table</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-10">
            <div class="card">
                <div class="card-body">
                    
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th  style="width: 7%;">Edit</th>
                                     <th style="width: 10%;">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                // dd($value);
                                        foreach($data as $value){
                                ?>
                                        <tr>
                                            <th scope="row"><?php echo $value->id; ?></th>
                                            <td><?php echo $value->name; ?></td>
                                            <td><a href="{{url('/admin/category/edit/'.$value->id)}}">Edit</a></td>
                                            <td><a href="{{url('/admin/category/delete/'.$value->id)}}"> Delete</a></td>
                                        </tr>
                                <?php
                                        }

                                ?>
                               
                             
                            </tbody>
                        </table>
                    </div>
                    <h6 class="card-title"><i class="m-r-5 font-18 mdi mdi-numeric-2-box-multiple-outline"></i> Table Without Outside Padding</h6>
                </div>
               
            </div>
        </div>
    </div>
    <tfoot>
        <tr>
            <td colspan="8">
                <a  href="/admin/category/add"><button >Add Category</button></a>
            </td>
        </tr>
    </tfoot>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
    <footer class="footer text-center">
        All Rights Reserved by Nice admin. Designed and Developed by
        <a href="https://wrappixel.com">WrapPixel</a>.
    </footer>
    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->
</div>
@endsection