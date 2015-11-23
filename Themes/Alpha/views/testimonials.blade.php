@extends('layouts.master')

@section('content')
    <section id="main" class="container">
        <header style="margin-bottom: 0;">
            <h2>Testimonials</h2>
            <p>AsgardCms is great, but don't take our word for it!</p>
        </header>

        <section id="main" style="padding-top: 25px">
            <div class="row">
                <div class="6u 12u(2)">
                   <p>
                       " Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum hic illo iste laudantium libero
                       magnam magni quasi rem . " - <a href="">@someUser</a>
                   </p>
                </div>
                <div class="6u 12u(2)">
                   <p>
                       " Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum hic illo iste laudantium libero
                       magnam magni quasi rem . " - <a href="">@someUser</a>
                   </p>
                </div>
            </div>
        </section>

        <div class="row">
            <div class="6u 12u(2)">
                <a class="button fit icon fa-angle-left" href="{{ route('homepage') }}">
                    Back to homepage
                </a>
            </div>
            <div class="6u 12u(2)">
                <a class="button special fit icon fa-book" href="{{ route('doc.index') }}">
                    Go to the documentation
                </a>
            </div>
        </div>
    </section>

@stop
