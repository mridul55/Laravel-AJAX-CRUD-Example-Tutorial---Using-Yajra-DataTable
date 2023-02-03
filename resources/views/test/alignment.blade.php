@extends('test.layout')

@section('main')

<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</p>
    
<br>
{{-- alignment --}}
<p class="text-left">Lorem ipsum dolar sit</p>
<p class="text-center">Lorem ipsum dolar sit</p>
<p class="text-right">Lorem ipsum dolar sit</p>

{{-- Responsive alignment --}}
<p class="text-sm-right">Right aligned on small or large</p>
<p class="text-md-right">Right aligned on small or large</p>
<p class="text-lg-right">Right aligned on small or large</p>
<p class="text-xl-right">Right aligned on small or large</p>
<hr>
<p class="text-sm-left">Left Aligned text on small or large</p>
<p class="text-md-left">Left Aligned text on small or large</p>
<p class="text-lg-left">Left Aligned text on small or large</p>
<p class="text-xl-left">Left Aligned text on small or large</p>

<hr>
<p class="text-sm-center">Left Aligned text on small or large</p>
<p class="text-md-center">Left Aligned text on small or large</p>
<p class="text-lg-center">Left Aligned text on small or large</p>
<p class="text-xl-center">Left Aligned text on small or large</p>
<hr>

<table>

    <tbody style="height: 100px">
        <tr>
        <td class="align-baseline">Baselinr</td>
        <td class="align-top">top</td>
        <td class="align-middle">middle</td>
        <td class="align-bottom">bottom</td>
        <td class="align-text-top">text-bottom</td>
        <td class="align-text-bottom">text-top</td>
        <td>text-buttom</td>
        <td>Baselinr</td>

        </tr>
    </tbody>
</table>
<hr>
<h1 class="d-inline bg-success">Hello</h1>
<h1 class="d-inline bg-success">Goodbye</h1>
<br><br>

<span class="d-block bg-danger">Block</span>
<br><br>
<div class="d-inline-block bg-success">
    <h3>Hello</h3>
    This is inline
</div>
<div class=" d-inline-block bg-primary"> 
    <h3>Hello</h3>
    This is inline
</div>


@endsection 