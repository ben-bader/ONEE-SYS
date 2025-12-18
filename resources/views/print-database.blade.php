<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="{{ asset('./img/Onep.png') }}">
    <title>Toutes les tables de la base de données</title>
    <style>
        table { 
            border-collapse: collapse;
            max-width: 100%;
            margin-bottom: 40px; 
            }
        th, td { 
            border: 1px solid #545454;
            padding: 8px; 
            text-align: left; 
            }
        th { 
            background-color: #e5e5e5; 
        }
    </style>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="m-4 font-sans">
    <x-primary-button onclick="window.print()">Imprimer tout les tables</x-primary-button>

    @foreach ($tables as $table)
        <h1 class="my-4 font-semibold text-xl">{{ $table['name'] }}:</h1>
        <table>
            <thead>
                <tr>
                    @foreach ($table['columns'] as $column)
                        <th>{{ $column }}</th>
                    @endforeach
                </tr>
            </thead>
            <tbody>
                @forelse ($table['rows'] as $row)
                    <tr>
                        @foreach ($table['columns'] as $column)
                            <td>{{ $row->$column }}</td>
                        @endforeach
                    </tr>
                @empty
                    <tr><td colspan="{{ count($table['columns']) }}">No data</td></tr>
                @endforelse
            </tbody>
        </table>
    @endforeach
</body>
</html>