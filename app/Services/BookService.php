<?php

namespace App\Services;

use App\Traits\ConsumeExternalService;

class BookService {
	use ConsumeExternalService;

	/**
	 * The base URI to consume the authors service
	 *
	 * @var string
	 */
	public $baseUri;

	public function __construct() {
		$this->baseUri = config('services.books.base_uri');
	}

	/**
	 * Obtain the full list of books from the book service
	 *
	 * @return string
	 */
	public function obtainBooks() {
		return $this->performRequest('GET', '/books');
	}

	/**
	 * Create a book from the book service
	 *
	 * @return string
	 */
	public function createBook($data) {
		return $this->performRequest('POST', '/books', $data);
	}

	public function obtainBook($book) {
		return $this->performRequest('GET', "/books/{$book}");
	}

	/**
	 * Update a book from the book service
	 *
	 * @return string
	 */
	public function editBook($data, $book) {
		return $this->performRequest('PUT', "/books/{$book}", $data);
	}

	/**
	 * Delete a book from the book service
	 *
	 * @return string
	 */
	public function deleteBook($book) {
		return $this->performRequest('DELETE', "/books/{$book}");
	}
}
