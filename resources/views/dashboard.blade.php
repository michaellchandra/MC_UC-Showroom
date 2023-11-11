@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <a href="/addorder" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-download fa-sm text-white-50"></i> New Order</a>
        </div>

        <!-- Content Row -->
        <div class="row">
             
             <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                    <!-- Customer-->
                    <a href="/customers">
                        <div class="card-body mb-3">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
    
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-auto">
                                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">DATA CUSTOMER</div>
                                        </div>
                                        
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </a>

                    <!-- Vehicle-->
                    <a href="/vehicles">
                        <div class="card-body mb-3">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
    
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-auto">
                                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">DATA KENDARAAN</div>
                                        </div>
                                        
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </a>
                    
                </div>
            </div>
        </div>


    </div>
    <!-- /.container-fluid -->
@endsection
