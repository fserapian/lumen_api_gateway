<?php

namespace App\Http\Controllers;

use App\Book;
use App\Services\BookService;
use App\Traits\ApiResponsor;
use Illuminate\Http\Request;

class BookController extends Controller
{
    use ApiResponsor;

    /**
     * The service to consume the books microservice
     *
     * @var BookService
     */
    public $bookService;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(BookService $bookService)
    {
        $this->bookService = $bookService;
    }

    // Return a list of books
    public function index()
    {
    }

    // Create a new book
    public function store(Request $request)
    {
    }

    // Return a book by id
    public function show($book)
    {
    }

    // Update a book by id
    public function update(Request $request, $book)
    {
    }

    // Delete a book by id
    public function destroy($book)
    {
    }
}
