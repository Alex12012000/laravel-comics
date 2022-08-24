@extends('layout.app')

@section('content')
 
    <section class="main-section">
        <div class="container">
            <div class="content">
                @include('components.card', [
                    'details' => $comics
                ])
            </div>
            <div class="tag">
                <span>CURRENT SERIES</span>
            </div>
        </div>

        <div class="btn blue">
            <span>LOAD MORE</span>
        </div>
    </section>

    @include('components/infobanner')
@endsection



