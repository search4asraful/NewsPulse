@extends('backend.master')

@section('content')
    <main class="main-wrapper">
        <div class="main-content">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <h3>Category Add</h3>
                            <a href="{{ route('category.index') }}" class="btn btn btn-success float-end">Manage</a>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="mb-3">
                                  <label for="name" class="form-label">Category Name</label>
                                  <input type="name" name="name" class="form-control" id="name" placeholder="Enter your category name">
                                </div>
                                <button type="submit" class="btn btn-primary">Add Category</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection