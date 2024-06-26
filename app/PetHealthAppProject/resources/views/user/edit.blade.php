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

    <title>User Edit</title>
</head>
<body class="bg-main">
    @include('header.user.main')
    <div class="main-shadow main-box flex-vert bg-main">
        <div class="mx-auto mb-auto">
            <h1 class="txt-user-M fw-bold display-4">会員情報編集</h1>
        </div>
        <form class="flex-vert mx-auto w-75 h-75" action="{{ route('user.edit-process') }}" method="POST">
            @csrf
            <div class="mt-auto">
                <label for="name" class="mb-1 fs-6 txt-user-S">名前</label>
                <input type="text" class="px-2 w-100 fs-5 input_user_field txt-gray" id="name" name="name" value="{{ old('name', $user->name ?? '') }}">
                @if ($errors->has('name'))
                    @foreach($errors->get('name') as $message)
                        <p class="txt-error"> {{ $message }} </p>
                    @endforeach
                @endif
            </div>
            <div class="mt-3">
                <label for="email" class="mb-1 fs-6 txt-user-S">メールアドレス</label>
                <input type="email" class="px-2 w-100 fs-5 input_user_field txt-gray" id="email" name="email" value="{{ old('email', $user->email ?? '') }}">
                @if ($errors->has('email'))
                    @foreach($errors->get('email') as $message)
                        <p class="txt-error"> {{ $message }} </p>
                    @endforeach
                @endif
            </div>
            <div class="mt-3">
                <label for="password" class="mb-1 fs-6 txt-user-S">パスワード</label>
                <input type="password" class="px-2 w-100 fs-5 input_user_field txt-gray" id="password" name="password" value="{{ old('password', '') }}">
                @if ($errors->has('password'))
                    @foreach($errors->get('password') as $message)
                        <p class="txt-error"> {{ $message }} </p>
                    @endforeach
                @endif
            </div>
            <div class="mt-3">
                <label for="newPassword" class="mb-1 fs-6 txt-user-S">新しいパスワード</label>
                <input type="password" class="px-2 w-100 fs-5 input_user_field txt-gray" id="newPassword" name="newPassword" value="{{ old('newPassword', '') }}">
                @if ($errors->has('newPassword'))
                    @foreach($errors->get('newPassword') as $message)
                        <p class="txt-error"> {{ $message }} </p>
                    @endforeach
                @endif
            </div>
            <div class="mt-3 mb-auto fs-5">
                <p class="mb-1 fs-6 txt-user-S">会員ステータス</p>
                @if ($user->status)
                    <p class="mb-0 txt-user-S">あなたは <span class="txt-accent-S">有料会員</span> です</p>
                @else
                    <p class="mb-0 txt-user-S">あなたは <span class="txt-accent-S">無料会員</span> です</p>
                @endif
            </div>
            <div class="mt-auto my-3 text-center">
                @if(session('errorMessages'))
                    <p class="my-2 txt-error">{{ session('errorMessages') }}</p>
                @endif
                @if (session('errorMessages'))
                    <p class="mb-2 txt-error" >{{ session('errorMessages') }}</p>
                @endif
                <button class="py-1 fs-4 rounded-3 btn-user-action" type="submit">更新</button>
            </div>
        </form>
    </div>
    <div class="pic-box bg-white main-shadow">
        <img src="{{ asset('static/img/public_cat.png') }}" class="pic" alt="top_cat">
    </div>
</body>
</html>