@foreach ($comics as $details)
    <div class="card">
    
        <a href="{{ route('single_product', $details['id'])}}">
            <div class="product-image">
                <img src="{{ $details['thumb'] }}" alt="{{ $details['type'] }}" >
            </div>
    
            <div class="text">
                <span>{{ $details['series'] }}</span>
            </div>
        </a>

    </div>
@endforeach
