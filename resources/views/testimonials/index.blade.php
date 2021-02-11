@extends('layouts.dashboard')

@section('styles')
    <style>
        .avatar {
            --size: 2.5rem;
            width: var(--size);
            height: var(--size);
            border-radius: 50%;
            border-width: 4px solid #fff;

        }

    </style>
@endsection




@section('content')


    @if (count($testimonials) < 1)
        {{-- show no value --}}
        @include('includes.no-value')
        <div class="text-center">
            <a href="{{ route('testimonials.create') }}" class="btn btn-primary btn-lg">{{ __('Add a testimonial') }}</a>
        </div>
    @else
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h3 class="text-centered">Testimonials</h3>
                <a href="{{ route('testimonials.create') }}" class="btn btn-sm btn-info">+ new testimonial</a>
            </div>
            <hr>
            <div class="list-group">
                @foreach ($testimonials as $testimonial)
                    <li class="list-group-item">
                        <div class="media">

                            <img src="{{ asset($testimonial->image) }}" alt="{{ $testimonial->author }}"
                                class="img-fluid avatar border border-white mr-3" />
                            <div class="media-body">
                                <h5> {{ $testimonial->author }}</h5>
                                <blockquote class="blockquote">
                                    <p class="card-text small mb-0"><i>{{ $testimonial->body }}</i></p>
                                </blockquote>

                                <a href="{{ route('testimonials.edit', $testimonial->id) }}"
                                    class="btn btn-sm btn-success">edit</a>
                                <button class="btn btn-sm btn-danger" data-id="{{ $testimonial->id }}"
                                    onclick="deleteTestimonial(event)">delete</button>
                            </div>
                        </div>
                    </li>
                @endforeach
            </div>
        </div>
    @endif



    {{-- delete form to handle deletes --}}
    <form method="post" action="" id="delete-form">
        @csrf
        @method('DELETE')
    </form>


@endsection



@section('scripts')
    <script>
        const form = document.querySelector('#delete-form');

        function deleteTestimonial(event) {
            const testimonialId = event.target.dataset.id;
            form.action = `testimonials/${testimonialId}`;
            if (confirm('Are you sure you want to delete this testimonial?')) {
                form.submit();
            }
        }

    </script>
@endsection
