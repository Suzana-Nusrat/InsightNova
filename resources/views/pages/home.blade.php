@extends('layouts.app')

@section('content')

<section class="hero-section">
    <div class="container text-center">
        <span class="hero-badge">AI Solutions for Modern Businesses</span>

        <h1 class="hero-title">
            Transforming Ideas Into <span class="gradient-text">Intelligent Solutions</span>
        </h1>

        <p class="hero-text">
            InsightNova helps businesses automate workflows, build AI-powered tools,
            and make smarter decisions through data-driven technology.
        </p>

        <div class="mt-5">
            <a href="/services" class="btn-primary-custom">Explore Services</a>
            <a href="/contact" class="btn-outline-custom">Start a Project</a>
        </div>
    </div>
</section>

<section class="section-padding">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">What We Build</h2>
            <p class="section-subtitle">
                Practical AI solutions designed for startups, institutions, and growing businesses.
            </p>
        </div>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="glass-card">
                    <div class="icon-box"><i class="bi bi-robot"></i></div>
                    <h4>AI Chatbots</h4>
                    <p>Smart assistants for customer support, education, and business communication.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="glass-card">
                    <div class="icon-box"><i class="bi bi-cpu"></i></div>
                    <h4>Machine Learning</h4>
                    <p>Prediction, classification, and recommendation models for real-world use cases.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="glass-card">
                    <div class="icon-box"><i class="bi bi-lightning-charge"></i></div>
                    <h4>Business Automation</h4>
                    <p>Workflow automation systems that reduce manual effort and improve productivity.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-padding stats-section">
    <div class="container">
        <div class="row text-center g-4">
            <div class="col-md-3">
                <div class="stat-number">50+</div>
                <p>Projects Delivered</p>
            </div>
            <div class="col-md-3">
                <div class="stat-number">20+</div>
                <p>Business Clients</p>
            </div>
            <div class="col-md-3">
                <div class="stat-number">95%</div>
                <p>Client Satisfaction</p>
            </div>
            <div class="col-md-3">
                <div class="stat-number">24/7</div>
                <p>AI Support</p>
            </div>
        </div>
    </div>
</section>

<section class="section-padding bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Featured Projects</h2>
            <p class="section-subtitle">
                Selected digital solutions built with practical technology and business-focused design.
            </p>
        </div>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="glass-card">
                    <div class="icon-box"><i class="bi bi-file-earmark-person"></i></div>
                    <h4>Smart CV Analyzer</h4>
                    <p>
                        AI-powered resume analysis system with CV parsing, job description matching,
                        skill gap detection, and ATS-style recommendations.
                    </p>
                    <span class="badge bg-primary-subtle text-primary">AI / NLP</span>
                </div>
            </div>

            <div class="col-md-4">
                <div class="glass-card">
                    <div class="icon-box"><i class="bi bi-heart-pulse"></i></div>
                    <h4>CareConnect</h4>
                    <p>
                        A caregiver service portal that helps users find caregivers, explore services,
                        request bookings, and manage basic care coordination.
                    </p>
                    <span class="badge bg-primary-subtle text-primary">Web Platform</span>
                </div>
            </div>

            <div class="col-md-4">
                <div class="glass-card">
                    <div class="icon-box"><i class="bi bi-stars"></i></div>
                    <h4>InsightNova</h4>
                    <p>
                        A Laravel-based AI startup website with service showcases, responsive UI,
                        and database-driven contact message storage.
                    </p>
                    <span class="badge bg-primary-subtle text-primary">Laravel / Php / MySQL</span>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-padding">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Meet Our Team</h2>
            <p class="section-subtitle">
                A multidisciplinary team focused on AI engineering, product strategy, and scalable software.
            </p>
        </div>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="glass-card text-center">
                    <img src="https://i.pravatar.cc/200?img=32"
                         class="rounded-circle mb-3"
                         width="120"
                         height="120"
                         alt="AI Engineer">
                    <h4>Alex Morgan</h4>
                    <p class="text-muted mb-0">AI Engineer</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="glass-card text-center">
                    <img src="https://i.pravatar.cc/200?img=15"
                         class="rounded-circle mb-3"
                         width="120"
                         height="120"
                         alt="ML Specialist">
                    <h4>Sarah Johnson</h4>
                    <p class="text-muted mb-0">Machine Learning Specialist</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="glass-card text-center">
                    <img src="https://i.pravatar.cc/200?img=12"
                         class="rounded-circle mb-3"
                         width="120"
                         height="120"
                         alt="Business Consultant">
                    <h4>Michael Chen</h4>
                    <p class="text-muted mb-0">Business Consultant</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-padding bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Frequently Asked Questions</h2>
            <p class="section-subtitle">
                Quick answers about our AI services and project workflow.
            </p>
        </div>

        <div class="accordion mx-auto" id="faqAccordion" style="max-width: 850px;">
            <div class="accordion-item">
                <h2 class="accordion-header" id="faqOneHeading">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqOne">
                        What services does InsightNova provide?
                    </button>
                </h2>
                <div id="faqOne" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        InsightNova provides AI chatbot development, machine learning solutions,
                        predictive analytics, business automation, and AI-powered web platforms.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="faqTwoHeading">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqTwo">
                        Can you build custom AI solutions?
                    </button>
                </h2>
                <div id="faqTwo" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Yes. We design and develop custom AI solutions based on business goals,
                        available data, required features, and deployment needs.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="faqThreeHeading">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqThree">
                        How can a business start a project?
                    </button>
                </h2>
                <div id="faqThree" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        A business can submit the contact form with project details. The team reviews
                        the message and responds with the next steps, scope, and suggested solution plan.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-padding dark-section">
    <div class="container text-center">
        <h2 class="fw-bold display-6">Ready to Transform Your Business?</h2>
        <p class="mt-3 text-light">
            Let InsightNova turn your idea into a scalable AI-powered solution.
        </p>
        <a href="/contact" class="btn-primary-custom mt-3">Get Started</a>
    </div>
</section>

@endsection
