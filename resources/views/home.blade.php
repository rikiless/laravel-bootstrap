<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laravel Bootstrap</title>

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
</head>
<body>
    <div class="container" id="app">
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
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

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
                    <h5 class="card-header border-bottom-0">Invoices</h5>

                    <div class="card-body p-0">
                        <table class="table table-striped table-hover mb-0">
                            <thead>
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
                </div>

                <div class="card mb-4 shadow-sm">
                    <h5 class="card-header">Horizontal Form</h5>
                    <div class="card-body">
                        <custom-form-components></custom-form-components>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm">
                    <h5 class="card-header">Form with Built Validation</h5>
                    <div class="card-body">
                        <form-validation></form-validation>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
