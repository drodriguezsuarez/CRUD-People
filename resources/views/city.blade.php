<x-app>
    <section class="container">
        <h1>Create City Vue</h1>
        <index-city :cities="{{ $cities }}"></index-city>
    </section>
    {{-- <section class="container">
        <h1 class="text-center mt-4">City</h1>
        @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('city.store') }}" method="Post">
            @csrf
            <div>
                <label for=""><b>Name</b></label>
                <input type="text" class="form-control" name="name" required>
            </div>
            <div class="text-center mt-4">
                <button class="btn btn-success">Save</button>
            </div>
        </form>
        <table class="table">
            <thead>
            <tr>
                <th>Name</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($cities as $city)
                    <tr>
                        <td>{{ $city->name }}</td>
                        <td>
                            <a href="{{ route('city.delete', $city->id) }}" class="btn btn-danger text-white">Delete</a>
                            <a href="{{ route('city.edit', $city) }}" class="btn btn-dark text-white">Edit</a>
                        </td>
                    </tr>    
                @endforeach
            </tbody>
        </table>
    </section>  --}}
</x-app>