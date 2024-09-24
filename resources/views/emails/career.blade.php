<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Career Application</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f4;
                color: #333;
                line-height: 1.6;
                margin: 0;
                padding: 0;
            }

            .container {
                width: 80%;
                max-width: 600px;
                margin: 20px auto;
                background-color: #fff;
                padding: 20px;
                border-radius: 8px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }

            h1 {
                color: #004085;
                font-size: 24px;
            }

            p {
                margin: 10px 0;
            }

            .highlight {
                font-weight: bold;
            }

            .button {
                display: inline-block;
                background-color: #28a745;
                color: #fff;
                padding: 10px 20px;
                text-decoration: none;
                border-radius: 5px;
                margin-top: 10px;
            }

            .button:hover {
                background-color: #218838;
            }
        </style>
    </head>

    <body>
        <div class="container">
            <h1>Career Application</h1>

            <p><span class="highlight">Name:</span> {{ $details['firstname'] }} {{ $details['surname'] }}</p>
            <p><span class="highlight">Email:</span> {{ $details['email'] }}</p>
            <p><span class="highlight">Phone Number:</span> {{ $details['phone'] }}</p>
            <p><span class="highlight">City:</span> {{ $details['city'] }}</p>

            <p><span class="highlight">Disability Adjustments Requested:</span>
                @if (isset($details['disability_adjustment']) && $details['disability_adjustment'])
                    Yes
                @else
                    No
                @endif
            </p>

            <p><span class="highlight">Cover Letter:</span></p>
            <p>{{ $details['cover_letter'] }}</p>

            <p><span class="highlight">CV:</span> <a class="button"
                    href="{{ asset('storage/' . $details['cv_path']) }}">Download CV</a></p>
        </div>
    </body>

</html>
