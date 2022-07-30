<x-app>
    
<section class="container">
    <h1 class="text-center mt-4">Edit person: {{ $person->name }}</h1>
    @if ($errors->any())
<div class="alert alert_danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<form action="{{ route('person.update', $person->id) }}" method="Post">
    @csrf
    <div>
        <label for="">Name</label>
        <input type="text" name="name" value="{{ $person->name }}" class="form-control" required>
    </div>
    <div>
        <label for="">Last Name</label>
        <input type="text" name="last_name" value="{{ $person->last_name }}" class="form-control" required>
    </div>
    <div>
        <label for="">Age</label>
        <input type="text" name="age" value="{{ $person->age }}" class="form-control" required>
    </div>
    <div>
        <label for="">Phone</label>
        <input type="tel" name="phone" value="{{ $person->phone }}" class="form-control" required>
    </div>
    <div class="mb-2">
        <label for=""><b>City</b></label>
        <select name="city_id" class="form-control" required>
            @foreach ($cities as $city)
                <option value="{{ $city->id }}">{{ $city->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="text-center mt-4">
        <button class="btn btn-success">Save</button>
    </div>
</form>
</section>

</x-app>
