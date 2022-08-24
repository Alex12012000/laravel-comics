@foreach ($comics as $details)
    <div class="card">
    
        <div class="product-image">
            <img src="{{ $details['thumb'] }}" alt="{{ $details['type'] }}" >
        </div>

        <div class="text">
            <span>{{ $details['series'] }}</span>
        </div>

    </div>
@endforeach
