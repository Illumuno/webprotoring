@extends('general.assets')
@section('title')
    assets
@endsection

@section('pagecontent')
<style>
.input-group{
      padding-right: 0rem;
      padding-left: 50rem;
  }  
</style>

 
 <div id="content-wrapper" class="container">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="mb-4 bg-white navbar navbar-expand navbar-light topbar static-top">
                    <!-- Topbar Search -->
                    <form class="pr-0 my-2 ml-auto mr-auto d-flex d-sm-inline-block form-inline ml-md-1 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="border-0 form-control bg-light small" placeholder="Search"
                                aria-label="Search" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn" type="button">
                                        <i class="fas fa-search fa-sm"></i>
                                    </button>
                                </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="ml-auto navbar-nav">
                        <!-- Nav Item - Alerts -->
                        <li class="mx-1 nav-item dropdown no-arrow">
                            <a class="nav-link" href="#" id="alerts" role="button">
                                <i class="fas fa-bell fa-fw"></i>
                            </a>
                        </li>
                        <a class="nav-link" href="#" id="alerts" role="button">
                            <i class="fa fa-cog"></i>
                            </a>
                    </ul>
                        @endsection