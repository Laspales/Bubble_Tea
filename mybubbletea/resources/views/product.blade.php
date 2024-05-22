@extends('layouts.default')

@if (isset($taste))

@if (session()->has('popup'))
<script>
    window.onload = function() {
        openPopup('Item added to cart');
    }
</script>
@endif
@section('main')

<div style="display:flex">
    <div style="padding: 20px;">
        <img src="{{ asset('storage/'.$taste->image) }}" alt="{{ $taste->name }}" style="width:400px; height:400px">
    </div>
    <div style="display:flex; flex-direction:column; padding:20px; justify-content:space-between">
        <h1 style="text-transform:capitalize">{{ $taste->taste }}</h1>
        <p>{{ $taste->price }} €</p>
        <form action="{{ route('cart_add', $taste->id) }}" method="GET" style="display:flex; flex-direction:column; justify-content:space-between; height:100%">
            <label for="topping">Toppings</label>
            <select name="topping" id="topping">
                @foreach ($toppings as $topping)
                <option value="{{ $topping->id }}">{{ $topping->topping }} : +{{ $topping->price }}€</option>
                @endforeach
            </select>
            <label for="sugar">Sugar : </label>
            <output>3</output>
            <input type="range" name="sugar" id="sugar" value="50%" min="1" max="6" step="1" oninput="updateSugarLabel(this.value)">
            <button class="btn_add_cart" type="submit">Add to cart&nbsp;<i class="fa-solid fa-cart-plus"></i></button>
        </form>
        <a href="{{ url('products') }}" class="btn btn-default" style="margin-top:1em">Back</a>
    </div>
</div>
<div id="popup" class="popup">
    <div class="popup-content">
        <span class="close" onclick="closePopup()">&times;</span>
        <p id="popup-message"></p>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var initialValue = 4; // Adjust this based on the default value

        function updateSugarLabel(value) {
            var labels = [
                'No Sugar (0%)',
                'Light (5-10%)',
                'Moderate (25%)',
                'Standard (50%)',
                'Half Less (75%)',
                'Full (100%)'
            ];

            var label = value === 1 ? labels[0] : labels[value - 1];
            document.querySelector('label[for="sugar"] + output').textContent = label;
        }

        // Set initial label based on the default value
        updateSugarLabel(initialValue);

        // Set the initial value of the range input
        document.getElementById('sugar').value = initialValue;

        // Add input event listener to update the label dynamically
        document.getElementById('sugar').addEventListener('input', function() {
            updateSugarLabel(this.value);
        });
    });

    function openPopup(message) {
        document.getElementById('popup-message').innerHTML = message;
        document.getElementById('popup').style.display = 'block';
    }

    function closePopup() {
        document.getElementById('popup').style.display = 'none';
    }
</script>

@endsection

@endif