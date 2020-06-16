@extends('layouts.app')

@section('content')
<div class="wrapper create-pizza">
    <h1>Create a new pizza</h1>
    <form action="/pizzas" method="POST">
        @csrf
        <label for="name">Your name:</label>
        <input type="text" id="name" name="name">
        <label for="type">Choose pizza type:</label>
        <select name="type" id="type">
            <option value="margarita">Margarita</option>
            <option value="hawaiian">Hawaiian</option>
            <option value="veg supreme">Veg supreme</option>
            <option value="volcano">Volcano</option>
        </select>
        <label for="type">Choose base type:</label>
        <select name="base" id="base">
            <option value="cheese crust">cheese crust</option>
            <option value="garlic crust">garlic crust</option>
            <option value="thin & crispy">thin & crispy</option>
            <option value="thick">thick</option>
        </select>
        <fieldset>
            <label>Extra toppings:</label>
            <input type="checkbox" name="toppings[]" value="mushroom">Muhsroom<br>
            <input type="checkbox" name="toppings[]" value="peppers">Peppers<br>
            <input type="checkbox" name="toppings[]" value="garlic">Garlic<br>
            <input type="checkbox" name="toppings[]" value="olive">Olive<br>
        </fieldset>
        <input type="submit" value="Order Pizza">
    </form>
</div>
@endsection