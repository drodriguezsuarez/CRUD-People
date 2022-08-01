<x-app>
    <section class="container">
        <h1>Create Person</h1>
        <index-person :cities="{{ $cities }}" :people="{{ $people }}"></index-person>
    </section>
    {{-- <section class="container"> 

        <h1 class="text-center mt-4"><b>People</b></h1>
        @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('person.store') }}" method="Post">
            @csrf
            <div>
                <label for=""><b>Name</b></label>
                <input type="text" class="form-control" name="name" required>
            </div>
            <div>
                <label for=""><b>Last Name</b></label> 
                <input type="text" class="form-control" name="last_name" required>
            </div>
            <div>
                <label for=""><b>Age</b></label>
                <input type="text" class="form-control" name="age" required>
            </div>
            <div>
                <label for=""><b>Phone</b></label>
                <input type="tel" class="form-control" name="phone" required>
            </div>
            <div class="mb-2">
                <label for=""><b>City</b></label>
                <select name="city_id" class="form-control" required>
                    @foreach ($cities as $city)
                        <option value="{{ $city->id }}">{{ $city->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="text-center">
                <button class="btn btn-success">Save</button>
            </div>
        </form>

        <table class="table">
            <thead>
            <tr>
                <th>Name</th>
                <th>Last name</th>
                <th>Age</th>
                <th>Phone</th>
                <th>City</th>
                <th>Childrens</th>
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
                        <td>{{ $person->city->name }}</td>
                        <td>
                            @foreach ($person->sons as $son)
                            {{ $son->name }}
                            @endforeach
                        </td>
                        <td>
                            <a href="{{ route('person.delete', $person->id) }}" class="btn btn-danger text-white">Delete</a>
                            <a href="{{ route('person.edit', $person) }}" class="btn btn-dark text-white">Edit</a>
                        </td>
                    </tr>    
                @endforeach
            </tbody>
        </table>
    </section> --}}
</x-app>    