<div class="header p-2">
  <div class="head">
    <h3>{{$title}}</h3>
  </div>
  {{-- add product --}}
  @if ($link ?? "")
  <div class="add">
    <a class="btn btn-primary" href="{{$link ?? ''}}">
      {{$Add ?? ""}}
    </a>
  </div>
  @endif
</div>