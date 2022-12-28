@extends('layout.master')
@section('content')
<main class="form-signin w-100 m-auto pt-5 mt-5">
    <form method="POST" action="{{route('result')}}">
        @csrf
        <h1 class="fw-bold text-center color-black" style="font-size: 32px;">Ask Me Anything!</h1>
        <p class="text-center">By: <img width="100px" style="width: 100px!important"
                src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/4d/OpenAI_Logo.svg/1280px-OpenAI_Logo.svg.png"
                alt="openai_logo"></p>

        <div class="mt-5 mb-3">
            <input type="text" class="form-control p-2" name="text" value="@if (isset($text)) {{$text}} @endif"
                placeholder="Ask Me Anything!" required />
        </div>
        <button id="btnFetch" class="w-100 btn btn-lg text-bg-primary" type="submit"><span
                id="text-search">Search</span>
            <div class="spinner-border spinner-border-sm" role="status" id="spinner" style="display:none;"></div>
        </button>
    </form>

    @if (isset($result))
    <div class="p-5 my-5 text-start" style="border-radius: 14px; background-color: white;">
        <h6 class="fw-bold color-black">Hasil Penelusuran <img width="80px" style="width: 80px!important"
                src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/4d/OpenAI_Logo.svg/1280px-OpenAI_Logo.svg.png"
                alt="openai_logo"> ,</h6>
        <p class="color-black" style="text-align: justify">{{$result}}</p>
    </div>
    @endif
</main>
@endsection