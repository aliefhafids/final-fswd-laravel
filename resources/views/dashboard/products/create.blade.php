@extends('dashboard.layouts.main')

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-8 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <form method="post" action="/dashboard/products" class="mb-5" enctype="multipart/form-data">
                            <h4 class="card-title">Product form</h4>
                            <form class="forms-sample">
                                @csrf
                                <div class="form-group">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                                        id="name" name="name" required value="{{ old('name') }}">
                                    @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="price" class="form-label">Price</label>
                                    <input type="text" class="form-control @error('price') is-invalid @enderror"
                                        id="price" name="price" required value="{{ old('price') }}">
                                    @error('price')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="category" class="form-label">Category</label>
                                    <select class="form-select form-select-lg mb-3" name="category_id">
                                        @foreach ($categories as $category)
                                        @if(old('category_id') == $category->id)
                                        <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                                        @else
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endif
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="description" class="form-label">Deskripsi</label>
                                    <textarea type="text" class="form-control @error('description') is-invalid @enderror"
                                        id="description" name="description" rows="5" required value="{{ old('description') }}">
                                    @error('description')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                    </textarea>
                                </div>
                                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
