<header class="menu-box flex-vert bg-menu-user-1">
    <div class="mt-2 mb-auto">
        @foreach ($petList as $pet)
            <a href="{{ route('user.home', ['petId' => $pet->pet_id]) }}" class="px-3 py-2 flex-bes @if($pet->pet_id == ($petDetails->pet_id ?? null)) bg-menu-user-3 menu-selected main-shadow txt-white @else txt-gray @endif">
                <div class="menu-circle bg-pic-ex"></div>
                <div class="menu-info flex-bes flex-bes-s">
                    @if($pet->message)
                        <i class="fs-5 bi bi-clipboard2-x"></i>
                    @else
                        <i class="fs-5 bi bi-clipboard2-check"></i>
                    @endif
                    <p class="fs-4 ms-2 fw-bold">{{ $pet->name }}</p>
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
</header>