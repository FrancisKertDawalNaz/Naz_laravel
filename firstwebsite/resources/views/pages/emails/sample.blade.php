@include('partials.header')
@include('partials.nav')
<div class="container py-5">
    <div class="card shadow mx-auto" style="max-width: 600px;">
        <div class="card-body">
            <h2 class="card-title text-primary">{{ $details['subject'] ?? 'Sample Email' }}</h2>
            <p class="card-text">{{ $details['body'] ?? 'This is a sample email content.' }}</p>
        </div>
    </div>
</div>