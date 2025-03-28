<h1 style="text-align: center; font-size: 24px; margin-bottom: 20px; color: #333;">Create New Property</h1>

<form action="{{ url('property/insert') }}" method="post" style="max-width: 600px; margin: auto; background: #fff; padding: 20px; border-radius: 10px; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);">
    @csrf

    <div style="display: flex; flex-direction: column; gap: 15px;">
        <input type="text" name="title" placeholder="Enter title" required style="padding: 10px; border: 1px solid #ddd; border-radius: 5px;">
        <input type="text" name="price" placeholder="Enter price" required style="padding: 10px; border: 1px solid #ddd; border-radius: 5px;">
        <input type="text" name="location" placeholder="Enter location" required style="padding: 10px; border: 1px solid #ddd; border-radius: 5px;">
        <input type="text" name="address" placeholder="Enter address" required style="padding: 10px; border: 1px solid #ddd; border-radius: 5px;">
        <input type="text" name="area" placeholder="Enter area (m²)" style="padding: 10px; border: 1px solid #ddd; border-radius: 5px;">

        <select name="property_type" required style="padding: 10px; border: 1px solid #ddd; border-radius: 5px; background: #f8f9fa;">
            <option value="" disabled selected>Choose property type</option>
            <option value="Villa">Villa</option>
            <option value="Apartment">Apartment</option>
            <option value="Land">Land</option>
        </select>

        <select name="transaction_type" required style="padding: 10px; border: 1px solid #ddd; border-radius: 5px; background: #f8f9fa;">
            <option value="" disabled selected>Choose Transaction Type</option>
            <option value="Rent">Rent</option>
            <option value="Buy">Buy</option>
            <option value="Sell">Sell</option>
        </select>

        <input type="text" name="number_of_rooms" required placeholder="Enter number of rooms" style="padding: 10px; border: 1px solid #ddd; border-radius: 5px;">
        <textarea name="detailed_description" required placeholder="Enter detailed description" rows="4" style="padding: 10px; border: 1px solid #ddd; border-radius: 5px; resize: none;"></textarea>
        <input type="date" name="date_added" required placeholder="Enter date added" style="padding: 10px; border: 1px solid #ddd; border-radius: 5px;">
        <input type="url" name="photo" required placeholder="Enter photo URL" style="padding: 10px; border: 1px solid #ddd; border-radius: 5px;">

        <button type="submit" style="background-color: #ff5733; color: white; padding: 12px; font-size: 16px; font-weight: bold; border-radius: 5px; cursor: pointer; border: none; transition: 0.3s;">
            Submit Property
        </button>
    </div>
</form>
