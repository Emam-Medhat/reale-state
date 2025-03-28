

<h1>create New Post microsoft</h1>
<form action="{{ url('property/insert') }}" method="post" ">
    @csrf
    <input type="text" name="title" placeholder="Enter title"  ><br><br>
    <input type="text" name="price" placeholder="Enter price"  ><br><br>
    <input type="text" name="location" placeholder="Enter location"  ><br>
    <input type="text" name="address" placeholder="Enter address"  ><br><br>
    <input type="text" name="area" placeholder="Enter area"  ><br><br>
    <input type="text" name="property_type" placeholder="Enter property_type"  ><br><br>
    <input type="text" name="number_of_rooms" placeholder="Enter number_of_rooms"  ><br><br>
    <input type="text" name="detailed_description" placeholder="Enter detailed_description"  ><br><br>
    <input type="text" name="transaction_type" placeholder="Enter transaction_type"  ><br><br>
    <input type="text" name="date_added" placeholder="Enter date_added"  ><br><br>

    <input type="url" name="photo" placeholder="Enter photo URL"  >
    {{-- <input type="text" name="photo" placeholder="Enter photo URL"  ><br><br> --}}
    <button type="submit">Submit</button>
</form>
`
