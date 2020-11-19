<!DOCTYPE html>
<html>

<head>
    <title>How to Generate QR Code in Laravel 6? - Medikre.com</title>
</head>

<body>

    <div class="visible-print text-center">


        {!! QrCode::size(250)->generate('Malik') !!}

        {{-- <img src="data:image/png;base64, 
        {!!  base64_encode(
            QrCode::format('png')
                ->merge('https://www.seeklogo.net/wp-content/uploads/2016/09/facebook-icon-preview-1.png', 0.3, true)
                ->size(200)
                ->generate('hahahah'),
        ) !!} "> --}}


    </div>

</body>

</html>
