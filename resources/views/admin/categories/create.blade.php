@extends('admin.master')
@section('title', 'Create Categories')


@section('content')
<h1 class="h3 mb-4 text-gray-800">{{ __('admin.add_new_category') }}</h1>
{{-- @section('sub-title', '') --}}

<form action="{{ route('admin.categories.store')}}" method="POST" enctype="multipart/form-data">
    @csrf

    @include('admin.categories._form')

    <div class="d-flex justify-content-between">
        <a href="{{ route('admin.categories.index') }}" class ="btn btn-info">Back</a>
        <button class="btn btn-success"><i class="fas fa-save mr-1 ml-1"></i>{{ __('admin.add_new_category') }}</button>
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

