<x-app>
    <section>
        <h1>Edit son</h1>
        <from-son :parents="{{ $parents }}" :sons="{{ $sons }}"></from-son>
    </section>
{{-- <section class="container">

    <form action="{{ route('son.update', $son->id) }}" method="Post">
        @csrf
        <div>
            <label for=""><b>Name</b></label>
            <input type="text" class="form-control" name="name" value="{{ $son->name }}" required>
        </div>
        <div>
            <label for=""><b>Age</b></label>
            <input type="text" class="form-control" name="age" value="{{ $son->age }}" required>
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
</section> --}}
</x-app>