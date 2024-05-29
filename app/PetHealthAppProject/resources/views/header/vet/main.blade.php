<div class="menu-box flex-vert bg-menu-vet-1">
        <div class="mt-2 mb-auto">
            @foreach ($userList as $user)
                <div class="my-2 pb-2 me-30px menu-user-section bg-white">
                    <p class="ms-1 py-2 fs-4 fw-bold txt-gray">{{ $user['name'] }}</p>
                    @foreach ($petList as $pet)
                        @if ($pet['user_id'] === $user['user_id'])
                            <a href="{{ route('vet.home', ['petId' => $pet->pet_id]) }}" class="px-3 py-2 flex-bes @if($pet->pet_id == ($petDetails->pet_id ?? null)) bg-menu-vet-3 menu-selected main-shadow txt-white @else txt-gray @endif">
                                <div class="menu-circle bg-pic-ex"></div>
                                <div class="menu-info fs-4 fw-bold">
                                    {{ $pet['name'] }}
                                </div>
                            </a>
                        @endif
                    @endforeach
                </div>
            @endforeach
        </div>
        <div class="flex-vert text-center bg-menu-vet-3 pe-20px">
            <a href="{{ route('vet.profile') }}" class="mx-auto my-2 w-75 fs-4 text-white">会員情報</a>
            <a href="{{ route('vet.logout') }}" class="mx-auto mb-2 w-75 fs-4 text-white">ログアウト</a>
        </div>
    </div>