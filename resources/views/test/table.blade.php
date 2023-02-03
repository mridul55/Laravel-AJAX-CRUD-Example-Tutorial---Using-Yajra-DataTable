@extends('test.layout')
@section('main')
    
<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td>John</td>
            <td>Doe</td>
            <td>jongDeo@gmail.com</td>

        </tr>
        <tr>
            <th scope="row">2</th>
            <td>John</td>
            <td>Doe</td>
            <td>jongDeo@gmail.com</td>

        </tr>
        <tr>
            <th scope="row">3</th>
            <td>John</td>
            <td>Doe</td>
            <td>jongDeo@gmail.com</td>

        </tr>
    </tbody>
</table>
<hr>
<table class="table table-info table-bordered">
    <thead>
        <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td>John</td>
            <td>Doe</td>
            <td>jongDeo@gmail.com</td>

        </tr>
        <tr>
            <th scope="row">2</th>
            <td>John</td>
            <td>Doe</td>
            <td>jongDeo@gmail.com</td>

        </tr>
        <tr>
            <th scope="row">3</th>
            <td>John</td>
            <td>Doe</td>
            <td>jongDeo@gmail.com</td>

        </tr>
    </tbody>
</table>
<hr>
<table class="table">
    <thead class="table-danger">
        <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td>John</td>
            <td>Doe</td>
            <td>jongDeo@gmail.com</td>

        </tr>
        <tr>
            <th scope="row">2</th>
            <td>John</td>
            <td>Doe</td>
            <td>jongDeo@gmail.com</td>

        </tr>
        <tr>
            <th scope="row">3</th>
            <td>John</td>
            <td>Doe</td>
            <td>jongDeo@gmail.com</td>

        </tr>
    </tbody>
</table>
<hr>
<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td>John</td>
            <td>Doe</td>
            <td>jongDeo@gmail.com</td>

        </tr>
        <tr>
            <th scope="row">2</th>
            <td>John</td>
            <td>Doe</td>
            <td>jongDeo@gmail.com</td>

        </tr>
        <tr>
            <th scope="row">3</th>
            <td>John</td>
            <td>Doe</td>
            <td>jongDeo@gmail.com</td>

        </tr>
    </tbody>
</table>
<table class="table table-sm">
    <thead>
        <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        <tr class="table-info">
            <th scope="row">1</th>
            <td>John</td>
            <td>Doe</td>
            <td>jongDeo@gmail.com</td>

        </tr>
        <tr>
            <th scope="row">2</th>
            <td>John</td>
            <td>Doe</td>
            <td>jongDeo@gmail.com</td>

        </tr>
        <tr>
            <th scope="row">3</th>
            <td>John</td>
            <td>Doe</td>
            <td>jongDeo@gmail.com</td>

        </tr>
    </tbody>
</table>

<nav>
    <ul class="pagination justify-content-center">
        <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
        <li class="page-item active"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="Next">Previous</a></li>

    </ul>
</nav>

@endsection