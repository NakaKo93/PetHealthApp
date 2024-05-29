<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
    <!-- BootstrapのCSSの読み込み -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- オリジナルなCSSの読み込み -->
        <link href="{{asset('/css/app.css')}}" rel="stylesheet">
    <!-- BootstrapのJSの読み込み -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>

    <title>User Premium</title>
</head>
<body class="bg-main">
    @include('header.user.main')
    <div class="main-shadow main-box flex-vert bg-main">
        <div class="mb-auto mx-auto">
            <h1 class="txt-user-M fw-bold display-4">有料会員登録</h1>
        </div>
        <div class="flex-vert mx-auto w-75 h-75">
            <div class="mt-5 mb-auto">
                <p class="fs-4 txt-user-S">
                    有料会員登録を行うとできる事<br>
                    ・登録できるペットの数が増える<br>
                    ・獣医師に直接相談やメッセージを行える<br>
                </p>
            </div>
            <div>
                <p class="mb-1 fs-6 txt-user-S">会員ステータス</p>
                <p class="mb-0 fs-5 txt-user-S">あなたは <span class="txt-accent-S">無料会員</span> です</p>
            </div>
        </div>
        <div class="mt-auto my-3 text-center">
            @if(session('errorMessages'))
                    <p class="my-2 txt-error">{{ session('errorMessages') }}</p>
            @endif
            <a class="py-1 fs-4 rounded-3 btn-user-action" href="{{ route('user.premium-process') }}">有料登録</a>
        </div>
    <div class="pic-box bg-white main-shadow">
        <img src="{{ asset('static/img/public_cat.png') }}" class="pic" alt="top_cat">
    </div>
</body>
</html>