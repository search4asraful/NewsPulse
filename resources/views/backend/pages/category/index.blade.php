@extends('backend.master')

@section('content')
<main class="main-wrapper">
    <div class="col-md-12">
        <div class="container pt-3">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col" class="col-md-1">SL</th>
                    <th scope="col">Category name</th>
                    <th scope="col" class="col-md-2">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <th scope="row">{{ $loop->index+1 }}</th>
                        <td>{{ $category->name }}</td>
                        <td>
                            <a href="{{ route('category.edit', $category->id) }}"><i class="material-icons-outlined">edit</i></a>
                            <a href="{{ route('category.destroy', $category->id) }}"><i class="material-icons-outlined text-danger">delete</i></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</main>
@endsection