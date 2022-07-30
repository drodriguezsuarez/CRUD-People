{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CRUD-Basic</title>
    </head>
    <body class="antialiased">
    <h1>People</h1>
    @if ($errors)
    <form action="Person/store" method="Post">
        @csrf
        <label for="">Name</label>
        <input type="text" name="name" value="{{ $person->name }}">
        <br>
        <label for="">LastName</label>
        <input type="text" name="lastname" value="{{ $person->last_name }}">
        <br>
        <label for="">Age</label>
        <input type="text" name="age" value="{{ $person->age }}">
        <br>
        <label for="">Phone</label>
        <input type="tel" name="phone" value="{{ $person->phone }}">
        <br>
        <button>Save</button>
    </form>

    <table style="margin-top:5px">
        <thead>
        <tr>
            <th>Name</th>
            <th>Lastname</th>
            <th>Age</th>
            <th>Phone</th>
            <th>Document</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($people as $person)
                <tr>
                    <td>{{ $person->name }}</td>
                    <td>{{ $person->last_name }}</td>
                    <td>{{ $person->age }}</td>
                    <td>{{ $person->phone }}</td>
                    <td>
                        <a href="Person/delete/{{ $person->id }}">Delete</a>
                        <a href="Person/edit/{{ $person->id }}">Edit</a>
                    </td>
                </tr>    
            @endforeach
        </tbody>
    </table>
    </body>
</html> --}}
