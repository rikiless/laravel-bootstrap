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
                <div class="card mb-4 border-0">
                    <div class="card-body">
                        <h4 class="card-title">Bitbucket</h4>
                        <p class="card-text">
                            With supporting text below as a natural lead-in to additional content.
                        </p>

                        <a href="" class="btn btn-primary">Connect to Bitbucket</a>
                    </div>
                </div>

                <x-card title="PhpStorm's Live Templates">
                    @if ($flash = session('message'))
                        <div class="alert alert-success">
                            {{ $flash }}
                        </div>
                    @endif

                    <form action="test" method="post">
                        @csrf

                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text"
                                   class="form-control @error('name') is-invalid @enderror @if(session('message')) is-valid @endif)"
                                   id="name"
                                   name="name"
                                   value="{{ old('name') }}"
                                   placeholder="">

                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="surname" class="form-label">Surname</label>
                            <input type="text"
                                   class="form-control @error('surname') is-invalid @enderror @if(session('message')) is-valid @endif"
                                   name="surname"
                                   id="surname"
                                   value="{{ old('surname') }}"
                                   placeholder="">
                            @error('surname')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="select" class="form-label">Select</label>
                                    <x-forms.select :items="$channels" :default="2" empty="Select your favorite TV channel" />
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="select" class="form-label">Multiselect</label>
                                    <x-forms.multiselect :items="$channels" :default="[3,4]"/>
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-warning">Submit</button>
                    </form>
                </x-card>

                <x-card title="GitHub">
                    <a href="" class="btn btn-primary">Refresh Token</a>
                    <a href="" class="btn btn-secondary">Unlink</a>
                </x-card>

                <div class="card mb-4 border-0">
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

                <x-card title="Horizontal Form">
                    <form-components></form-components>
                </x-card>

                <x-card title="Form with Built Validation">
                    <form-validation></form-validation>
                </x-card>

                <form-readonly></form-readonly>

                <x-card title="Trix Editor">
                    <wysiwyg></wysiwyg>
                </x-card>
            </div>
        </div>
    </div>
</div>

<div class="container no-vue">
    <x-card title="Alpine Playground">

        <div id="alert" x-data="{ show: true }">
            <div x-show="show"
                 x-init="setTimeout(() => show = false, 4000)"
                 class="alert alert-success">
                Hello World!
            </div>

            <button @click="show = !show"
                    @click.away="show = false"
                    class="btn"
                    x-bind:class="show ? 'btn-outline-success' : 'btn-success'">
                Toggle
            </button>
        </div>

    </x-card>
</div>

<script src="{{ mix('js/app.js') }}"></script>
<script src="//unpkg.com/alpinejs" defer></script>
</html>
