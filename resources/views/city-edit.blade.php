<x-app>
    <section class="container">
    
        <form action="{{ route('city.update', $city->id) }}" method="Post">
            @csrf
            <div>
                <label for=""><b>Name</b></label>
                <input type="text" class="form-control" name="name" value="{{ $city->name }}" required>
            </div>
            <div class="text-center mt-4">
                <button class="btn btn-success">Save</button>
            </div>
        </form>
    </section>
</x-app>