<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Videos;

class VideosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $video_data = [
            [
                'title' => 'G-Eazy - At Will (Official Video) ft. EST Gee',
                'description' => 'Director: Walker Flocker',
                'author' => 'G-Eazy',
                'like_count' => 82000,
                'dislike_count' => 0,
                'media_url' => 'https://youtu.be/Wsy_-Ym2vi4'
            ],
            [
                'title' => 'Mozart - Requiem',
                'description' => 'Requiem Mass in D Minor',
                'author' => 'madhammu',
                'like_count' => 658000,
                'dislike_count' => 0,
                'media_url' => 'https://youtu.be/Zi8vJ_lMxQI'
            ],
            [
                'title' => 'Beethoven - Moonlight Sonata (FULL)',
                'description' => 'Beethoven - Moonlight Sonata (FULL) -  Piano Sonata No. 14',
                'author' => 'Andrea Romano',
                'like_count' => 1700000,
                'dislike_count' => 0,
                'media_url' => 'https://youtu.be/4Tr0otuiQuU'
            ],
            [
                'title' => '2Pac - Ghetto Gospel (Official Music Video)',
                'description' => 'REMASTERED IN HD!
                Music video by 2Pac performing Ghetto Gospel. (C) 2005 Interscope Records',
                'author' => '2Pac',
                'like_count' => 1000000,
                'dislike_count' => 0,
                'media_url' => 'https://youtu.be/Do5MMmEygsY'
            ],
            [
                'title' => 'KILLSHOT [Official Audio]',
                'description' => 'Kamikaze is out now',
                'author' => 'EminemMusic',
                'like_count' => 6000000,
                'dislike_count' => 0,
                'media_url' => 'https://youtu.be/FxQTY-W6GIo'
            ]

        ];

        foreach ($video_data as $video)
        {
            Videos::create($video);
        }
    }
}
