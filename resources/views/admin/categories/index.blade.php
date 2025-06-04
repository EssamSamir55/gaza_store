@extends('admin.master')

@section('title', 'All Categories')

@section('content')
<h1 class="h3 mb-4 text-gray-800">{{ __('admin.all_categories') }}</h1>
{{-- @section('sub-title', 'All Categories') --}}
    <a href="{{ route('admin.categories.create') }}" class="btn btn-info mb-2" ><i class="fas fa-save mr-1 ml-1"></i>{{ __('admin.add_new_category') }}</a>

@include('admin.error')

<div class="table-responsive ">
    <table class="table table-bordered table-hover " id="dataTable" width="100%">
        <thead>
            <tr class="bg-dark text-white">
                <th>#</th>
                <th>Image</th>
                <th>Name</th>
                <th>Products Count</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tfoot>
            <tr class="bg-dark text-white">
                <th>#</th>
                <th>Image</th>
                <th>Name</th>
                <th>Products Count</th>
                <th>Actions</th>
            </tr>
        </tfoot>
        <tbody>

            @forelse ($categories as $category)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>
                    <img width="100" src="{{ $category->img_path }}" alt="">
                </td>
                <td>{{ $category->trans_name }}</td>
                <td>5</td>
                <td>
                    <a class="btn btn-sm btn-primary" href="{{ route('admin.categories.edit', $category->id) }}"><i class="fas fa-edit"></i></a>
                        <form class="d-inline" action="{{ route('admin.categories.destroy', $category->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button onclick="return confirm('Are you sure?!')" class="btn btn-sm btn-danger">
                                <i class="fas fa-trash"></i>

                            </button>

                        </form>

                </td>
            </tr>
            @empty
            <tr class="text-center">
                <td colspan="5">No Data Found</td>
            </tr>

            @endforelse
        </tbody>
    </table>
    {{ $categories->links() }}
</div>

@endsection

