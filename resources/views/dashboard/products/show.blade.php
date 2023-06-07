@extends('dashboard.layouts.main')

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-8 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Detail Product</h4>
                        <p class="card-description">
                            More information about specific Product
                        </p>
                        <div class="row">
                            <div class="col-md-6">
                                <address>
                                    <p class="font-weight-bold">{{ $product->name }}</p>
                                    <p>
                                        {{ $product->price }}
                                    </p>
                                </address>
                            </div>
                            <div class="col-md-6">
                                <address class="text-info">
                                    <p class="font-weight-bold">
                                        Category
                                    </p>
                                    <p class="mb-2">
                                        {{ $product->category->name }}
                                    </p>
                                    <p class="font-weight-bold">
                                        Description
                                    </p>
                                    <p class="mb-2">
                                        {{ $product->description }}
                                    </p>
                                </address>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Information</h4>
                        <p class="lead">
                            Data dibuat pada {{ $product->created_at }}
                        </p>
                    </div>
                    <div class="card-body">
                        <a href="/dashboard/products/" type="button" class="btn btn-warning btn-rounded btn-fw">
                            <i class="ti-arrow-left btn-icon-prepend"></i>
                            Back</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>


@endsection
