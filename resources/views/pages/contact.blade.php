@extends('layouts.app')

@section('content')

<section class="page-header">
    <div class="container">
        <h1 class="fw-bold display-4">Contact Us</h1>
        <p class="lead">Let’s discuss your next AI project.</p>
    </div>
</section>

<section class="section-padding">
    <div class="container">
        <div class="row g-5 align-items-start">

            <div class="col-md-5">
                <h2 class="section-title">Start a Conversation</h2>
                <p>
                    Share your idea, business challenge, or AI project requirement.
                    Our team will review your message and get back to you.
                </p>

                <div class="glass-card mt-4">
                    <p><i class="bi bi-envelope me-2 text-primary"></i> hello@insightnova.ai</p>
                    <p><i class="bi bi-geo-alt me-2 text-primary"></i> Dhaka, Bangladesh</p>
                    <p class="mb-0"><i class="bi bi-clock me-2 text-primary"></i> Response within 24 hours</p>
                </div>
            </div>

            <div class="col-md-7">
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <form action="{{ route('contact.store') }}" method="POST" class="contact-card">
                    @csrf

                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                        @error('name')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" value="{{ old('email') }}">
                        @error('email')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Subject</label>
                        <input type="text" name="subject" class="form-control" value="{{ old('subject') }}">
                        @error('subject')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Message</label>
                        <textarea name="message" class="form-control" rows="5">{{ old('message') }}</textarea>
                        @error('message')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <button type="submit" class="btn-primary-custom w-100">
                        Send Message
                    </button>
                </form>
            </div>

        </div>
    </div>
</section>

@endsection