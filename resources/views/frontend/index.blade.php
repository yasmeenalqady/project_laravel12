@extends('frontend.layout.main')

@section('title', 'الصفحة الرئيسية')

@section('content')
    @include('frontend.homepage.hero')
    @include('frontend.homepage.about')
    @include('frontend.homepage.Our_Story')
    @include('frontend.homepage.Years_of')
    @include('frontend.homepage.history')
    @include('frontend.homepage.Numbers')
    @include('frontend.homepage.services')
    @include('frontend.homepage.Partners')
    
@endsection

<script>
    document.addEventListener('DOMContentLoaded', () => {
  const sections = document.querySelectorAll('.hidden-section');

  const sectionObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('active'); // إظهار العنصر
      }
    });
  }, { threshold: 0.8});

  sections.forEach(section => sectionObserver.observe(section));
});
</script>