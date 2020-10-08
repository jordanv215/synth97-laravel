<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sevenrestfulexamplesController extends Controller
{
    public function index() {
        // Render a list of a resource.
    }

    public function show() {
        // Show a single resource
    }

    public function create() {
        // Shows a view to create a new resource
            /* domain of the create action is as follows:
                ** At some point you visit a page that has a form
                ** Fill out the title
                ** Fill out the body
                ** click submit
            */
    }

    public function store() {
        // Will persist the resource created in the create form
    }

    public function edit() {
        // Will show a view to edit an existing resource
    }

    public function update() {
        // Persist the edited resource
    }

    public function destroy() {
        // Delete the resource
    }
}
