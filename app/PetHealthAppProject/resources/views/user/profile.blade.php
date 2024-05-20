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
    <div class="menu-box flex-vert bg-menu-user-1">
        <div class="mt-2 mb-auto">
            @foreach ($petList as $pet)
                <a href="{{ route('user.home', ['petId' => $pet->pet_id]) }}" class="px-3 py-2 flex-bes txt-gray">
                    <div class="menu-circle bg-pic-ex"></div>
                    <div class="menu-info">
                        <p class="fs-4 fw-bold">{{ $pet->name }}</p>
                        @if($pet->message)
                            <p class="fs-7">
                                <span>今日の</span>
                                <span>健康状態を</span>
                                <span>記入しましょう</span>
                            </p>
                        @endif
                    </div>
                </a>
            @endforeach
        </div>
        <div class="py-2 text-center bg-menu-user-2 pe-20px">
            <a href="{{ route('user.pet.add') }}" class="m-auto w-75 fs-4 text-white">
                <i class="fs-5 bi bi-plus-circle-fill"></i>
                追加
            </a>
        </div>
        <div class="flex-vert text-center bg-menu-user-3 pe-20px">
            <a href="{{ route('user.profile') }}" class="mx-auto my-2 w-75 fs-4 text-white">会員情報</a>
            <a href="{{ route('user.logout') }}" class="mx-auto mb-2 w-75 fs-4 text-white">ログアウト</a>
        </div>
        <div class="deco bg-main main-shadow"></div>
    </div>
    <div class="main-box flex-vert bg-main">
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
    <div class="pic-box bg-main">
        <img src="{{ asset('static/img/public_cat.png') }}" class="pic main-shadow" alt="top_cat">
    </div>
</body>
</html>