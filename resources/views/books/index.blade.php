
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book List</title>
</head>
<body>
    <h1>All Books</h1>

    @if($books->isEmpty())
        <p>No books have been added yet.</p>
    @else
        <ul style="list-style: none; padding: 0;">
            @foreach ($books as $book)
                <li style="display: flex; align-items: center; margin-bottom: 10px;">
                    <img src="{{ $book->cover_image_url }}" alt="{{ $book->title }} cover" style="width: 50px; height: 75px; margin-right: 10px;">
                    <div>
                        <h2 style="margin: 0;">{{ $book->title }}</h2>
                        <p style="margin: 5px 0;">Author: {{ $book->author }}</p>
                        <p style="margin: 5px 0;">Published: {{ $book->published_date }}</p>
                        <a href="{{ route('books.show', $book->id) }}">View Details</a>
                    </div>
                </li>
            @endforeach
        </ul>
    @endif
</body>
</html>
