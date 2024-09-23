<x-head />

<body>
    <x-loader />

    @if (session('status'))
        <div class="alert alert-success">
            <div class="mb-4 rounded-lg bg-blue-50 p-4 text-sm text-blue-800 dark:bg-gray-800 dark:text-blue-400"
                role="alert">
                {{ session('status') }}

            </div>
        </div>

        {{-- Remove validation errors from the session after displaying them --}}
        {{ session()->forget('errors') }}
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <div class="mb-4 rounded-lg bg-red-50 p-4 text-sm text-red-800 dark:bg-gray-800 dark:text-red-400"
                role="alert">
                <ul class="list-inside list-disc">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>


        {{-- Remove the status message from the session after displaying it --}}
        {{ session()->forget('status') }}
    @endif






    <x-address />


    <header>
        <x-nav />

        {{ $banner }}
    </header>

    {{ $slot }}




    <x-footer />

    <x-scroll />

</body>

</html>
