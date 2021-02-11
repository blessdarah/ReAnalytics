@extends('layouts.app')

@section('styles')
    <style>
        p {
            line-height: 1.6;
        }

        @media screen and (min-width: 678px) {
            p {
                font-size: 1.125rem;
            }

            #container {
                width: 60% !important;
            }
        }

        @media screen and (min-width: 1024px) {
            #container {
                width: 50rem !important;
            }
        }

    </style>
@endsection



@section('banner')
    <div class="container-fluid banner px-0">
        <img src="https://images.unsplash.com/photo-1577017040065-650ee4d43339?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxzZWFyY2h8MTF8fG9mZmljZXxlbnwwfHwwfA%3D%3D&auto=format&fit=crop&w=500&q=60"
            alt="blog banner image" class="img-fluid banner-image">

        <div class="banner-content">
            <h1 class="font-weight-bold text-primary banner-title text-white">Resources</h1>
            <p class="text-secondary lead mt-2">Available downloadable resources.</p>
        </div>
    </div>
@endsection

@section('content')
    <div class="container my-5" id="container">
        <div class="row">
            <div class="col-md-8 mx-md-auto">
                <ul class="list-group">
                    @forelse ($attachments as $attachment)
                        <li class="list-group-item py-3 py-lg-5">
                            {{ $attachment->name }}
                            <a href="{{ DownloadLink::disk('public')->filePath($attachment->file)->fileName('new-text.txt')->generate() }}"
                                class="btn btn-sm btn-success">download</a>
                        </li>
                    @empty

                    @endforelse
                </ul>
            </div>
        </div>
    </div>
@endsection
