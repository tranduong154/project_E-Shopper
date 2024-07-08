

@extends('shopadmin.layout.master')
@section('content')

<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">Country</h4>
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
                                    <th scope="col">ID</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Description</th>
                                    <th  style="width: 7%;">Edit</th>
                                     <th style="width: 10%;">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                               <?php 
                                    foreach ($data as  $value) {
                                        // dd($value['id']);
                                        ?>
                                         <tr>
                                            <th scope="row"><?php  echo $value['id'];  ?></th>
                                            <td><?php  echo $value['title'];  ?></td>
                                            <td><?php  echo $value['image'];  ?></td>
                                            <td><?php  echo $value['ghichu'];  ?></td>
                                            <td><a href="{{url('/admin/blog/editblog/'.$value['id'])}}">Edit</a></td>
                                            <td><a href="{{url('/admin/blog/delete/'.$value['id'])}}"> Delete</a></td>
                                        </tr>
                                       <?php 
                                    }
                                  ?>
                              
                            </tbody>
                        </table>
                    </div>
                </div>
               
            </div>
        </div>
    </div>
    <tfoot>
        <tr>
            <td colspan="8">
                <a  href="/admin/blog/addblog"><button  class="btn btn-success">Add blog</button></a>
            </td>
        </tr>
    </tfoot>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
 
    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->
</div>
@endsection