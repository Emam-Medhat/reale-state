<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>All Properties</title>

    <style>
        body {
            background-color: #f4f4f4;
        }

        .table-container {
            max-width: 95%;
            margin: 40px auto;
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .table th {
            background-color: #343a40;
            color: white;
        }

        .table tbody tr:hover {
            background-color: #f8f9fa;
        }

        .btn-custom {
            font-size: 14px;
            padding: 6px 12px;
            border-radius: 5px;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
        }

        .btn-danger {
            background-color: #dc3545;
            border: none;
        }

        .img-thumbnail {
            width: 90px;
            height: 60px;
            object-fit: cover;
            border-radius: 5px;
            border: 1px solid #ddd;
        }

        th, td {
            vertical-align: middle;
            text-align: center;
        }
    </style>
</head>

<body>
    @include('home.navbar')

    <div class="table-container">
        <h2 class="text-center mb-4 text-primary">All Properties</h2>

        <table class="table table-striped table-hover text-center">
            <thead>
                <tr>
                    <th></th>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Address</th>
                    <th>Price</th>
                    <th>Area (m²)</th>
                    <th>Property Type</th>
                    <th>Description</th>
                    <th>Rooms</th>
                    <th>Transaction</th>
                    <th>Location</th>
                    <th>Date Added</th>
                    <th>Photo</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                <tr>
                    <td><input type="checkbox" name="post_id[]" value="{{ $post->id }}"></td>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->address }}</td>
                    <td>${{ number_format($post->price, 2) }}</td>
                    <td>{{ $post->area }}</td>
                    <td>{{ ucfirst($post->property_type) }}</td>
                    <td>{{ Str::limit($post->detailed_description, 50) }}</td>
                    <td>{{ $post->number_of_rooms }}</td>
                    <td><span class="badge bg-info">{{ $post->transaction_type }}</span></td>
                    <td>{{ $post->location }}</td>
                    <td>{{ $post->date_added }}</td>
                    <td>
                        <img src="{{ asset('storage/' . $post->photo) }}" alt="Property Image" class="img-thumbnail">
                    </td>
                    <td>
                        <a class="btn btn-primary btn-custom" href="{{ route('property.edit', $post->id) }}">Edit</a>
                        <a class="btn btn-danger btn-custom" href="{{ route('property.delete', $post->id) }}">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
