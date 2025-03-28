

<h1>create New Post microsoft</h1>
<form action="{{ url('property/insert') }}" method="post" ">
    @csrf
    <input type="text" name="title" placeholder="Enter title" value="{{$post->title}}"><br><br>
    <input type="text" name="price" placeholder="Enter price" value="{{$post->price}}"><br><br>
    <input type="text" name="location" placeholder="Enter location" value="{{$post->location}}"><br>
    <input type="text" name="address" placeholder="Enter address" value="{{$post->address}}"><br><br>
    <input type="text" name="area" placeholder="Enter area" value="{{$post->area}}"><br><br>
    <select name="property_type" id="property_type" required>
        <option value="" disabled selected>Choose property type</option>
        <option value="Villa">Villa</option>
        <option value="Apartment">Apartment</option>
        <option value="Land">Land</option>
    </select><br><br>
    <select name="transaction_type" id="transaction_type" required>
        <option value="" disabled selected>Choose Transaction Type</option>
        <option value="Rent">Rent</option>
        <option value="Buy">Buy</option>
        <option value="Sell">Sell</option>
    </select><br><br>
      <input type="text" name="number_of_rooms" placeholder="Enter number_of_rooms" value="{{$post->number_of_rooms}}"><br><br>
    <input type="text" name="detailed_description" placeholder="Enter detailed_description" value="{{$post->detailed_description}}"><br><br>
    <input type="text" name="date_added" placeholder="Enter date_added" value="{{$post->date_added}}"><br><br>

    <input type="url" name="photo" placeholder="Enter photo URL" value="{{$post->photo}}">
    {{-- <input type="text" name="photo" placeholder="Enter photo URL" value="{{$post->photo}}"><br><br> --}}
    <button type="submit">Submit</button>
</form>
`
