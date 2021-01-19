@extends("layouts.app")
{{-- titolo --}}
@section("page-title", "Shop-Online")
{{-- contenuti --}}
@section("content")
    <section id="home">
        <h1>
            HomePage
        </h1>
        <ul>
            @foreach ($dresses as $dress)
                <li>
                    <p>
                        {{ $dress->type }}
                    </p>
                    <p>Colore: {{ $dress->color }}</p>
                    <p>Taglia: {{ $dress->size }}</p>
                    <p>Materiale: {{ $dress->material }}</p>
                    <p>Prezzo: {{ $dress->price }}</p>
                </li>
            @endforeach
        </ul>
    </section>
@endsection
