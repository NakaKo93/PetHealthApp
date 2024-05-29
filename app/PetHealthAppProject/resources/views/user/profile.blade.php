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

        <script>
            function confirmDeletion(event) {
                // 確認ダイアログを表示
                var result = confirm('本当に退会しますか？この操作は元に戻せません。');
                if (!result) {
                    // ユーザーがキャンセルを選択した場合、デフォルトのリンク動作をキャンセル
                    event.preventDefault();
                }
            }
        </script>

    <title>User profile</title>
</head>
<body class="bg-main">
    @include('header.user.main')
    <div class="main-shadow main-box flex-vert bg-main">
        <div class="mx-auto mb-auto">
            <h1 class="txt-user-M fw-bold display-4">会員情報</h1>
        </div>
        <div class="flex-vert mx-auto w-75 h-75">
            <div class="mt-auto">
                <p class="mb-1 fs-6 txt-user-S">名前</p>
                <p class="px-2 w-100 fs-5 input_user_field txt-gray">{{ $user->name }}</p>
            </div>
            <div class="mt-3">
                <p class="mb-1 fs-6 txt-user-S">メールアドレス</p>
                <p class="px-2 w-100 fs-5 input_user_field txt-gray">{{ $user->email }}</p>
            </div>
            <div class="mt-3 mb-auto fs-5">
                <p class="mb-1 fs-6 txt-user-S">会員ステータス</p>
                @if ($user->status)
                    <p class="mb-0 txt-user-S">あなたは <span class="txt-accent-S">有料会員</span> です</p>
                @else
                <p class="mb-0 txt-user-S">あなたは <span class="txt-accent-S">無料会員</span> です</p>
                @endif
            </div>
        </div>
        <div class="mt-auto my-3 text-center">
            @if(session('errorMessages'))
                <p class="my-2 txt-error">{{ session('errorMessages') }}</p>
            @endif
            <a class="py-1 fs-4 rounded-3 btn-user-action" href="{{ route('user.edit') }}">編集</a>
        </div>
        <div class="text-center">
            <a class="py-1 fs-4 rounded-3 btn-accent-action" href="{{ route('user.delete') }}" onclick="confirmDeletion(event)">退会</a>
        </div>
    </div>
    <div class="pic-box bg-white main-shadow">
        <img src="{{ asset('static/img/public_cat.png') }}" class="pic" alt="top_cat">
    </div>
</body>
</html>