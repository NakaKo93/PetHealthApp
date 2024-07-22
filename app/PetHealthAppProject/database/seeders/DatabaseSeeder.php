<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 
use Illuminate\Support\Str; 
use Illuminate\Support\Facades\Hash; 

class DatabaseSeeder extends Seeder
{
    /**
     * 各テーブルにモデルを使用してデータを入力
     *
     * @return void
     */
    public function run()
    {
        $user1 = User::create([
            [
                'name' => '山田 一郎',
                'email'     => '1@gmail.com',
                'password'  => '111111',
                'status' => true
            ]
        ]);

        $user2 = User::create([
            [
                'name' => '高橋 次郎',
                'email'     => Str::random(10).'@gmail.com',
                'password'  => Hash::make('password'),
                'status' => false
            ]
        ]);
        
        $pets1 = User::create([
            [
                'user_id'   =>  $user1->id,
                'photo_address'     => 'PetHealthAppProject/public/'.Str::random(10),
                'name'  => 'たいよう',
                'age' => 3,
                'gender' => true,
                'type'     => '柴犬',
                'birth'  => '2020/01/01',
                'adoption' => '2022/02/02',
                'memo' => 'こんにちは'
            ]
        ]);

        $pets2 = User::create([
            [
                'user_id'   =>  $user2->id,
                'photo_address'     => 'PetHealthAppProject/public/'.Str::random(10),
                'name'  => 'ふく',
                'age' => 5,
                'gender' => false,
                'type'     => 'スコティッシュフォールド',
                'birth'  => '2023/03/03',
                'adoption' => '2024/04/04',
                //'memo' => ''
            ]
        ]);

        $pets2 = User::create([
            [
                'user_id'   =>  $user2->id,
                'photo_address'     => 'PetHealthAppProject/public/'.Str::random(10),
                'name'  => 'ふく',
                'age' => 5,
                'gender' => false,
                'type'     => 'スコティッシュフォールド',
                'birth'  => '2023/03/03',
                'adoption' => '2024/04/04',
                //'memo' => ''
            ]
        ]);
    }
}
