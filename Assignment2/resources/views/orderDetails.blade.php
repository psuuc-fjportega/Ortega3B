@extends('layout')

@section('title', 'Order Details')

@section('header', 'Order Details Information')

@section('content')
    <form>
        <label>Transaction No:</label>
        <input type="text" name="transNo" value="{{ $transNo }}"readonly><br>
        <label>Order No:</label>
        <input type="text" name="orderNo" value="{{ $orderNo }}"readonly><br>
        <label>Item ID:</label>
        <input type="text" name="itemId" value="{{ $itemId }}"readonly><br>
        <label>Item Name:</label>
        <input type="text" name="name" value="{{ $name }}"readonly><br>
        <label>Price:</label>
        <input type="text" name="price" value="{{ $price }}"readonly><br>
        <label>Quantity:</label>
        <input type="text" name="qty" value="{{ $qty }}"readonly><br>
    </form>
@endsection
