<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>Laravel Bootstrap</title>

<link rel="stylesheet" href="{{ mix('css/app.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.3/trix.min.css">

<div class="container" id="app">
    <div :class="{ 'vue-wait': isLoading }">
        <div class="row">
            <div class="col-sm-2">
                <ul class="nav nav-pills flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Documentation</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </div>

            <div class="col-sm">
                <div class="card mb-4 shadow-sm">
                    <h5 class="card-header">Bitbucket</h5>
                    <div class="card-body">
                        <p class="card-text">
                            With supporting text below as a natural lead-in to additional content.
                        </p>

                        <a href="" class="btn btn-primary">Connect to Bitbucket</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm">
                    <h5 class="card-header">GitHub</h5>
                    <div class="card-body">
                        <a href="" class="btn btn-primary">Refresh Token</a>
                        <a href="" class="btn btn-secondary">Unlink</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm">
                    <h5 class="card-header">Invoices</h5>
                    <table class="table table-striped table-hover mb-0">
                        <thead class="border-light">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col"></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td class="text-right"><a href="" class="btn btn-sm btn-primary">Download</a></td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td class="text-right"><a href="" class="btn btn-sm btn-primary">Download</a></td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td class="text-right"><a href="" class="btn btn-sm btn-primary">Download</a></td>
                        </tr>
                        </tbody>
                    </table>
                </div>

                <x-card>
                    @slot('title')
                        Horizontal Form
                    @endslot

                    <form-components></form-components>
                </x-card>

                <x-card>
                    @slot('title')
                        Form with Built Validation
                    @endslot

                    <form-validation></form-validation>
                </x-card>

                <form-readonly></form-readonly>

                <x-card>
                    @slot('title')
                        Trix Editor
                    @endslot

                    <wysiwyg></wysiwyg>
                </x-card>
            </div>
        </div>
    </div>
</div>

<script src="{{ mix('js/app.js') }}"></script>
</html>
