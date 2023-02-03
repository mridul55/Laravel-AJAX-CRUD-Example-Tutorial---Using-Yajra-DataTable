@extends('test.layout')

@section('main')

<style>
   .row-h1{
    background-color: #f4f4f4;
    height: 250px;
   }
   .item-h1{
    border: 1px solid #333;
   }
</style>

    <h1 class="display-3 text-center my-4">Flex Box </h1>


    <div class="d-flex row-h1 flex-row">
        <div class="p-4 item-h1">Flex Item</div>
        <div class=" p-4 item-h1">Flex Item</div>
        <div class=" p-4 item-h1">Flex Item</div>

    </div>
    <hr>
    
    <div class="d-flex row-h1 flex-row-reverse">
        <div class="p-4 item-h1">Flex Item</div>
        <div class=" p-4 item-h1">Flex Item</div>
        <div class=" p-4 item-h1">Flex Item</div>

    </div>
    <hr>
    
    <div class="d-flex row-h1 flex-row justify-content-start">
        <div class="p-4 item-h1">Flex Item</div>
        <div class=" p-4 item-h1">Flex Item</div>
        <div class=" p-4 item-h1">Flex Item</div>

    </div>
    <hr>
    
    <div class="d-flex row-h1 flex-row justify-content-center">
        <div class="p-4 item-h1">Flex Item</div>
        <div class=" p-4 item-h1">Flex Item</div>
        <div class=" p-4 item-h1">Flex Item</div>

    </div>
    <hr>
    
    <div class="d-flex row-h1 flex-row justify-content-end">
        <div class="p-4 item-h1">Flex Item</div>
        <div class=" p-4 item-h1">Flex Item</div>
        <div class=" p-4 item-h1">Flex Item</div>

    </div>
    <hr>
    
    <div class="d-flex row-h1 flex-row justify-content-around">
        <div class="p-4 item-h1">Flex Item</div>
        <div class=" p-4 item-h1">Flex Item</div>
        <div class=" p-4 item-h1">Flex Item</div>

    </div>
    <hr>
    
    <div class="d-flex row-h1 flex-row justify-content-between">
        <div class="p-4 item-h1">Flex Item</div>
        <div class=" p-4 item-h1">Flex Item</div>
        <div class=" p-4 item-h1">Flex Item</div>

    </div>
    <hr>
    
    <div class="d-flex row-h1 flex-column">
        <div class="p-4 item-h1">Flex Item</div>
        <div class=" p-4 item-h1">Flex Item</div>
        <div class=" p-4 item-h1">Flex Item</div>

    </div>
    <hr>
    
    <div class="d-flex row-h1 flex-column-reverse">
        <div class="p-4 item-h1">Flex Item</div>
        <div class=" p-4 item-h1">Flex Item</div>
        <div class=" p-4 item-h1">Flex Item</div>

    </div>
    <hr>
    
    <div class="d-flex row-h1 flex-column justify-content-end">
        <div class="p-4 item-h1">Flex Item</div>
        <div class=" p-4 item-h1">Flex Item</div>
        <div class=" p-4 item-h1">Flex Item</div>

    </div>
    <hr>
    
    <div class="d-flex row-h1 flex-row align-items-start">
        <div class="p-4 item-h1">Flex Item</div>
        <div class=" p-4 item-h1">Flex Item</div>
        <div class=" p-4 item-h1">Flex Item</div>

    </div>
    <hr>
    
    <div class="d-flex row-h1 flex-row align-items-baseline">
        <div class="p-4 item-h1">Flex Item</div>
        <div class=" p-4 item-h1">Flex Item</div>
        <div class=" p-4 item-h1">Flex Item</div>

    </div>
    <hr>
    
    <div class="d-flex row-h1 flex-row align-items-stretch">
        <div class="p-4 item-h1">Flex Item</div>
        <div class=" p-4 item-h1">Flex Item</div>
        <div class=" p-4 item-h1">Flex Item</div>

    </div>
    <hr>
    
    <div class="d-flex row-h1 flex-row align-items-center align-items-sm-start
    align-items-md-end ">
        <div class="p-4 item-h1">Flex Item</div>
        <div class=" p-4 item-h1">Flex Item</div>
        <div class=" p-4 item-h1">Flex Item</div>
    </div>

    <hr>
    
    <div class="d-flex row-h1 flex-row">
        <div class="p-4 item-h1 align-self-start">Flex Item</div>
        <div class=" p-4 item-h1 align-self-center">Flex Item</div>
        <div class=" p-4 item-h1 align-self-end">Flex Item</div>
        <div class=" p-4 item-h1 align-self-baseline">Flex Item</div>
        <div class=" p-4 item-h1 align-self-stretch">Flex Item</div>

    </div>
@endsection