{{--
    Template Name: Contact
--}}

@extends('layouts.app')

@section('content')
    @while(have_posts()) @php the_post() @endphp
        <div id="contact-page-container" class="page-container">
            <div class="grid-container">
                <div class="grid-x grid-padding-x">
                    <div id="main-content-container" class="cell medium-7 large 7">
                        @include('partials.page-header')
                        @php(the_content())
                    </div>

                    <div id="sidebar-container" class="cell medium-4 large-4 medium-offset-1 large-offset-1">
                        @if ($address || $phone || $email)
                            <ul class="contact">
                                @if ($address)
                                    <li class="address">
                                        <h6>Address</h6>
                                        {{ $address }}
                                    </li>
                                @endif

                                @if ($phone)
                                    <li class="phone">
                                        <h6>Phone</h6>
                                        {{ $phone }}
                                    </li>
                                @endif

                                @if ($email)
                                    <li class="email">
                                        <h6>Email</h6>
                                        {{ $email }}
                                    </li>
                                @endif
                            </ul>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    @endwhile
@endsection