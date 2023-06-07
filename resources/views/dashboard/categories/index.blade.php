@extends('dashboard.layouts.main')

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-9 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Basic Table</h4>
                        <p class="card-description">
                            Add class <code>.table</code>
                        </p>
                        <a href="/dashboard/categories/create" class="btn btn-primary btn-icon-text">
                        <i class="ti-file btn-icon-prepend"></i>    
                        Add Category</a>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Category Name</th>
                                        <th>Code</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $category)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $category->name }}</td>
                                        <td>{{ $category->code }}</td>
                                        <td>
                                            <a href="/dashboard/categories/{{ $category->id }}/edit" type="button"
                                                class="btn btn-outline-secondary btn-sm">edit</a>
                                            <form action="/dashboard/categories/{{ $category->id }}" method="post"
                                                class="d-inline">
                                                @method('delete')
                                                @csrf
                                                <button class="btn btn-outline-secondary btn-sm"
                                                    onclick="return confirm('Are you sure?')">delete<span
                                                        data-feather="x-circle"></span></button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
