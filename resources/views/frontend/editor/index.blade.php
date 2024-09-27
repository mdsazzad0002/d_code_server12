@extends('frontend.layouts.master')

{{--  Require all for seo  --}}
@section('title', 'Live Editor  Dengrweb')
@section('short_description', 'Well organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, Python, PHP, Bootstrap, Java, XML and more.')
@section('og_image', static_asset('uploads/BANNER_DATA.jpg'))
@section('keywords', 'HTML, Python, CSS, SQL, JavaScript, How to, PHP, Java, C, C++, C#, jQuery, Bootstrap, Colors, W3.CSS, XML, MySQL, Icons, NodeJS, React, Graphics, Angular, R, AI, Git, Data Science, Code Game, Tutorials, Programming, Web Development, Training, Learning, Quiz, Exercises, Courses, Lessons, References, Examples, Learn to code, Source code, Demos, Tips, Website')



{{--  Require all for seo  --}}

@section('sidebar')
    @foreach ($category as $items)
    <li class="nav-item" role="menuitem">
        <a href="{{ route('category.index', $items->slug) }}" class="nav-link">
            <i class="nav-icon fas fa-newspaper"></i>
            <p>
                {{Str::title($items->name)}}
            </p>
        </a>
    </li>
    @endforeach
@endsection



@section('content')
    <div>
        <iframe class="w-100 hv-80" src="{{ route('editor.source') }}" frameborder="0"></iframe>
    </div>
    <style>
        .hv-80{
            height: 80vh !important;
        }
    </style>
@stop




