<x-app>
    <section class="container">
        <h1>Create son Vue</h1>
        <index-son :parents="{{ $parents }}" :sons="{{ $sons }}"></index-son>
    </section>    
    {{-- <section class="container"> 

        <h1 class="text-center mt-4">Sons</h1>
        @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('son.store') }}" method="Post">
            @csrf
            <div>
                <label for=""><b>Name</b></label>
                <input type="text" class="form-control" name="name" required>
            </div>
            <div>
                <label for=""><b>Age</b></label>
                <input type="text" class="form-control" name="age" required>
            </div>
            <div class="mb-2">
                <label for=""><b>Parent</b></label>
                <select name="person_id" class="form-control" required>
                    @foreach ($parents as $parent)
                        <option value="{{ $parent->id }}">{{ $parent->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="text-center mt-4">
                <button class="btn btn-success">Save</button>
            </div>
        </form>

        <table class="table">
            <thead>
            <tr>
                <th>Name</th>
                <th>Age</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($sons as $son)
                    <tr>
                        <td>{{ $son->name }}</td>
                        <td>{{ $son->age }}</td>
                        <td>
                            <a href="{{ route('son.delete', $son) }}" class="btn btn-danger text-white">Delete</a>
                            <a href="{{ route('son.edit', $son) }}" class="btn btn-dark text-white">Edit</a>
                        </td>
                    </tr>    
                @endforeach
            </tbody>
        </table>
    </section> --}}
</x-app>