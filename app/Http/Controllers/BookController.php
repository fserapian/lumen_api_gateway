<?php

namespace App\Http\Controllers;

use App\Book;
use App\Services\AuthorService;
use App\Services\BookService;
use App\Traits\ApiResponsor;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class BookController extends Controller {
	use ApiResponsor;

	/**
	 * The service to consume the books microservice
	 *
	 * @var BookService
	 */
	public $bookService;
	public $authorService;

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct(BookService $bookService, AuthorService $authorService) {
		$this->bookService = $bookService;
		$this->authorService = $authorService;
	}

	// Return a list of books
	public function index() {
		return $this->successResponse($this->bookService->obtainBooks());
	}

	// Create a new book
	public function store(Request $request) {
		$author = $this->authorService->obtainAuthor($request->author_id);

		return $this->successResponse(
			$this->bookService->createBook($request->all()),
			Response::HTTP_CREATED
		);
	}

	// Return a book by id
	public function show($book) {
		return $this->successResponse($this->bookService->obtainBook($book));
	}

	// Update a book by id
	public function update(Request $request, $book) {
		return $this->successResponse(
			$this->bookService->editBook($request->all(), $book)
		);
	}

	// Delete a book by id
	public function destroy($book) {
		return $this->successResponse(
			$this->bookService->deleteBook($book)
		);
	}
}
