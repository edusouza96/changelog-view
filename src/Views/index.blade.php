<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Notas de atualização</title>
        <style>
            body {
                background-color: #000;
                color: #fff;
                font-family: system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            }
            section {
                padding: 1em;
            }
            h2{
                color: #00b6d3;
            }
            h1 {
                color: #07ddff;
            }
        </style>
    </head>
    <body>
        <header>
            <h1>Changelog</h1>
            <hr>
        </header>

        <section>
            <article>
                @foreach ($changeLog as $version => $features)
                    <h2>{{ $version }}</h2>
                    @foreach ($features as $feature)
                        <p>{{ $feature }}</p>
                    @endforeach
                @endforeach
            </article>
        </section>
    </body>
</html>
