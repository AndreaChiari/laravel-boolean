<div class="col">
    <a href="{{ route('tools.show', $tool['id']) }}">
        <img class="img-fluid" src="{{ $tool['image_url'] }}" alt="{{ $tool['name'] }}">
    </a>
    <p class="text-center text-black mt-2 fw-bold text-uppercase">{{ $tool['name'] }}</p>
</div>
