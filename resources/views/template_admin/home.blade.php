@include('template_admin.navbar')
@include('template_admin.sidebar')
<!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>@yield('sub-judul')</h1>
            </div>
            @yield('content')
                <div class="section-body">
            </div>
        </section>
    </div>
@include('template_admin.footer')