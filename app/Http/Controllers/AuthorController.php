<?php

namespace App\Http\Controllers;

use App\Author;
use App\Services\AuthorService;
use App\Traits\ApiResponsor;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    use ApiResponsor;

    /**
     * The service to consume the authors microservice
     *
     * @var AuthorService
     */
    public $authorService;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(AuthorService $authorService)
    {
        $this->authorService = $authorService;
    }

    /**
     *  Return the list of authors
     *  @return Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     *  Create a new author
     *  @return Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    }

    /**
     *  Obtain and show one author
     *  @return Illuminate\Http\Response
     */
    public function show($author)
    {
    }

    /**
     *  Update an existing author
     *  @return Illuminate\Http\Response
     */
    public function update(Request $request,  $author)
    {
    }

    /**
     *  Remove an existing author
     *  @return Illuminate\Http\Response
     */
    public function destroy($author)
    {
    }
}
