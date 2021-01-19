@extends("layouts.app")
{{-- titolo --}}
@section("page-title", "Shop-Online")
{{-- contenuti --}}
@section("content")
    <section id="home">
        <div class="container">
            <h1>
                In evidenza
            </h1>
            <div class="card-container">
                @foreach ($dresses as $dress)
                    <div class="card">
                        <h2>
                            {{ $dress->type }}
                        </h2>
                        <p>
                            <strong>
                                Colore:
                            </strong>
                            {{ $dress->color }}
                        </p>
                        <p>
                            <strong>
                                Taglia:
                            </strong>
                            {{ $dress->size }}
                        </p>
                        <p>
                            <strong>
                                Materiale:
                            </strong>
                             {{ $dress->material }}
                        </p>
                        <p>
                            <strong>
                                Prezzo:
                            </strong>
                            {{ $dress->price }} €
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
