@extends('layouts.dashboard.app')
@section('title','Edit Collection')
@section('content')
<div class="content">
  {{-- head --}}
  <div class="header p-2 pb-3">
    <div class="head">
      <h3>Edit Collection..</h3>
      {{-- <h3>Edit {{$collection->title}}..</h3> --}}
    </div>
    {{-- back to collections --}}
    <div class="add">
      <a href="/auth/collections">
        Collections
      </a>
    </div>
  </div>
  <div class="main">
    <form method="POST" action="/auth/collections/{{$collection->id}}" class="w-100 row m-0 justify-content-around">
      @csrf
      @method('PATCH')
      {{-- save --}}
      <div class="row w-100 mx-0 justify-content-end">
        {{-- submit --}}
        <div class="mx-3">
          <button type="submit" class="btn btn-primary w-100">
            {{ __('Save') }}
          </button>
        </div>
        {{-- back --}}
        <div class="mx-2">
          <a href="/auth/products" class="btn btn-primary w-100 btn-dis">
            {{ __('Discard') }}
          </a>
        </div>
      </div>
      {{-- info --}}
      <div class="mx-3" style="flex-grow:2">
        <div class="form">
          <div class="container">
            {{-- title --}}
            <div class="form-group">
              <label for="title" class="col-md-12">{{ __('Title') }}</label>

              <div class="col-12 col-md-10 ml-md-4">
                <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title"
                  placeholder="Enter Collection title" required>
                {{-- value="{{ $collection->title }}" --}}
                @error('title')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>
            {{-- description --}}
            <div class="form-group">
              <label for="description" class="col-md-12">{{ __('Description') }}</label>

              <div class="col-12 col-md-10 ml-md-4">
                <textarea name="description" class="form-control @error('description') is-invalid @enderror"
                  id="description" rows="5" placeholder="Enter Collection title"></textarea>
                {{-- value="{{ $collection->description }}" --}}
                @error('description')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="mx-3" style="flex-grow:1">
        <div class="form px-4">
          <label>Collection Image</label>
          <div class="imgs">
            {{-- if there is img select --}}
            <div class="img mb-2 m-auto w-100" style="display:none;position:relative;">
              <button type="button" class="close" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <img src="#" id="img" width="215" class="img-thumbnail m-auto" data-toggle="modal" data-target="#showImg">
              {{-- preview Image  --}}
              <div class="modal fade" id="showImg" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header border-none">
                      <button data-dismiss="modal">
                        <span>&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <img src="#" id="prevImg" width="500" class="img-fluid m-auto">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            {{-- img input --}}
            <div class="post-img w-100 my-2 text-center">
              <label for="img-post" data-toggle="tooltip" data-placement="right" title="Upload Img"><span
                  class="btn btn-dark">Add Image</span></label>
              <input type="file" class="{{$errors->has('image') ? 'is-invalid' : ''}}" name="image" id="img-post"
                style="display:none">
              {{-- value="{{ $collection->image }}" --}}
              @error('image')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>
@endsection
@section('script')
<script>
  var simplemde = new SimpleMDE();
</script>
@endsection