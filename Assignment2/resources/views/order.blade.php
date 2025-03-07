@extends('layout')

@section('title', 'Order Details')

@section('header', 'Order Information')

@section('content')
    <form>
        <label>Customer ID:</label>
        <input type="text" name="customerId" value="{{ $customerId }}"readonly><br>
        <label>Customer Name:</label>
        <input type="text" name="customerName" value="{{ $customerName }}"readonly><br>
        <label>Order No:</label>
        <input type="text" name="orderNo" value="{{ $orderNo }}"readonly><br>
        <label>Date:</label>
        <input type="date" name="date" value="{{ $date }}"><br>
    </form>
@endsection
