@extends('layouts.default')
@section('main')
    <div>
        @php
            $totalPrice = 0;
        @endphp

        @foreach ($bubbleTeas as $bubbleTea)
            <div class="container" style="width: 500px;">
                <table>
                    <span style="font-weight: bold">Article : </span>
                    <span>{{ $bubbleTea->taste }} / </span>
                    <span>{{ $bubbleTea->topping }} / </span>
                    <span>
                        @php
                            $sugarLabels = [
                                'No Sugar (0%)',
                                'Light (5-10%)',
                                'Moderate (25%)',
                                'Standard (50%)',
                                'Half Less (75%)',
                                'Full (100%)'
                            ];
                            $sugarLabel = $sugarLabels[$bubbleTea->sugar - 1];
                        @endphp
                        {{ $sugarLabel }} /
                    </span>
                    <span style="font-weight: bold; color:burlywood;"> [ {{ $bubbleTea->price }} € ]</span>
                </table>
                @php
                    $totalPrice += $bubbleTea->price;
                @endphp
            </div>
        @endforeach

        {{-- Display the total price outside the loop --}}
        <div style="margin-top: 1em; font-weight: bold;">
            Total Price: {{ $totalPrice }} €
        </div>

        <a href="{{ url()->previous() }}" class="btn btn-default" style="margin: 2em;">Back</a>
    </div>
@endsection
