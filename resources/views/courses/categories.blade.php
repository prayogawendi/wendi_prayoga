@extends('courses.layouts.main')

@section('content')
    <h1 class="text-center text-white">{{ $header }}</h1>
    <div>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="/categories?category={{ request('search') }}">
                    <div class="input-group mt-4">
                        <input type="text" class="form-control" placeholder="Search ..." name="category" value="{{ request('search') }}">
                        <button class="btn text-white" type="submit" style="background-color: #DE1616;">Submit</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="mt-5"></div>
        @if ($categories->count())
            <div class="row mb-5">
                @foreach ($categories as $category)
                    <div class="mt-5 px-5 col-md-6 col-lg-4">
                        <a href="/category/{{ $category->slug }}" class="text-decoration-none">
                            <div class="card h-100">
                                @if ($category->category_wallpaper)
                                    <img src="/storage/{{ $category->category_wallpaper }}" alt="Category Image Wallpaper">
                                @else
                                    <img src="https://source.unsplash.com/300x300/?{{ $category->name }}" class="card-img-top img-thumbnail" alt="Category Unsplash Image Wallpaper">
                                @endif
                                <h2 class="card-body position-absolute fs-4 text-center text-white" style="width: 100%; background-color: rgba(0, 0, 0, 0.7)">{{ $category->name }}</h2>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        @else
            <h4 class="my-5 text-center text-white">No categories yet.</h4>
        @endif
    </div>
@endsection