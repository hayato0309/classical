<?php

use Illuminate\Database\Seeder;

class ConcertsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('concerts')->insert([
            [
                'title' => 'ウィーンフィル来日。ブルックナー。',
                'description' => '2019年9月５日にサントリーホールにて開催。2019年9月５日にサントリーホールにて開催。2019年9月５日にサントリーホールにて開催。2019年9月５日にサントリーホールにて開催。2019年9月５日にサントリーホールにて開催。',
                'type' => 1,
                'image' => 'orchestra.jpg',
                'email' => 'hayato.yokomiya.framgia@gmail.com',
                'password' => '1234abcd'
            ],
            [
                'title' => 'ベルリンフィル来日。幻想交響曲。',
                'description' => '2019年9月５日にサントリーホールにて開催。2019年9月５日にサントリーホールにて開催。2019年9月５日にサントリーホールにて開催。2019年9月５日にサントリーホールにて開催。2019年9月５日にサントリーホールにて開催。',
                'type' => 1,
                'image' => 'orchestra.jpg',
                'email' => 'hayato.yokomiya.framgia@gmail.com',
                'password' => '1234abcd' 
            ],
            [
                'title' => 'ロンドン交響楽団来日。エニグマ変奏曲。',
                'description' => '2019年9月５日にサントリーホールにて開催。2019年9月５日にサントリーホールにて開催。2019年9月５日にサントリーホールにて開催。2019年9月５日にサントリーホールにて開催。2019年9月５日にサントリーホールにて開催。',
                'type' => 1,
                'image' => 'orchestra.jpg',
                'email' => 'hayato.yokomiya.framgia@gmail.com',
                'password' => '1234abcd' 
            ]
        ]);
    }
}
