@extends('main.main')

@section('container')

<div class="coming-soon-container">
    <h1>🚀 Coming Soon!</h1>
    <p>We're working on something amazing. Stay tuned!</p>
    <button onclick="goBack()">Go Back</button>
</div>

<script>
    function goBack() {
        window.history.back();
    }
</script>

@endsection