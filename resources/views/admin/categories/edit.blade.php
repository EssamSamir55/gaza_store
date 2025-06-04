@extends('admin.master')
@section('title', 'Edit Categories')


@section('content')
<h1 class="h3 mb-4 text-gray-800">{{ __('admin.edit_category') }}</h1>
{{-- @section('sub-title', '') --}}

<form action="{{ route('admin.categories.update', $category->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('put')

    @include('admin.categories._form')

    <div class="d-flex justify-content-between">
        <a href="{{ route('admin.categories.index') }}" class ="btn btn-primary">Back</a>
        <button class="btn btn-info"><i class="fas fa-save mr-1 ml-1"></i>Update</button>
    </div>

</form>


@endsection

@section('js')
<script>
    function showImg(e) {
        const[file] = e.target.files
        if(file) {
            preview.src = URL.createObjectURL(file)
        }
    }
</script>

@endsection

