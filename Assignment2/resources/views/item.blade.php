@extends('layout')

@section('title', 'Item Details')

@section('header', 'Item Information')

@section('content')
    <form>
        <label>Item No:</label>
        <input type="text" name="itemNo" value="{{ $itemNo }}"readonly><br>
        <label>Name:</label>
        <input type="text" name="name" value="{{ $name }}"readonly><br>
        <label>Price:</label>
        <input type="text" name="price" value="{{ $price }}"readonly><br>
    </form>
@endsection
