@extends('layouts.app')

@section('content')

<section class="page-header">
    <div class="container">
        <h1 class="fw-bold display-4">Our Services</h1>
        <p class="lead">AI-powered development services for modern organizations.</p>
    </div>
</section>

<section class="section-padding">
    <div class="container">
        <div class="row g-4">

            @php
                $services = [
                    ['icon' => 'bi-robot', 'title' => 'AI Chatbot Development', 'desc' => 'Conversational assistants for customer support, education, and business service automation.'],
                    ['icon' => 'bi-cpu', 'title' => 'Machine Learning Solutions', 'desc' => 'Custom ML models for prediction, classification, recommendation, and business intelligence.'],
                    ['icon' => 'bi-gear-wide-connected', 'title' => 'Business Automation', 'desc' => 'Automation systems that reduce repetitive work and improve operational efficiency.'],
                    ['icon' => 'bi-bar-chart-line', 'title' => 'Predictive Analytics', 'desc' => 'Data-driven forecasting tools that support smarter strategic decisions.'],
                    ['icon' => 'bi-eye', 'title' => 'Computer Vision', 'desc' => 'Image-based AI solutions for detection, classification, and visual inspection tasks.'],
                    ['icon' => 'bi-stars', 'title' => 'Generative AI Integration', 'desc' => 'AI-powered content, email, report, and productivity tools for business workflows.'],
                ];
            @endphp

            @foreach($services as $service)
                <div class="col-md-4">
                    <div class="glass-card">
                        <div class="icon-box">
                            <i class="bi {{ $service['icon'] }}"></i>
                        </div>
                        <h4>{{ $service['title'] }}</h4>
                        <p>{{ $service['desc'] }}</p>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</section>

@endsection