<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            // 'id' => '1',
            'name' => 'Depression',
            'brief_description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Pariatur consectetur iure qui amet minima ullam quae nemo velit, eos excepturi!',
            'full_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, iste. Libero illo repellat nisi perferendis voluptas! Amet, exercitationem ducimus, fugit deleniti itaque eligendi laborum vero libero illo sapiente fugiat praesentium hic dolores distinctio? Totam optio autem minima unde alias inventore voluptates quas quos, doloribus ex, suscipit voluptatem eligendi ipsa est.',
            'image' => 'serviceImageCover/depression.jpg',
            'created_at' => '2022-10-18 00:00:00',
            'updated_at' => '2022-10-18 00:00:00',
        ]);

        DB::table('services')->insert([
            // 'id' => '1',
            'name' => 'Grief',
            'brief_description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Pariatur consectetur iure qui amet minima ullam quae nemo velit, eos excepturi!',
            'full_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, iste. Libero illo repellat nisi perferendis voluptas! Amet, exercitationem ducimus, fugit deleniti itaque eligendi laborum vero libero illo sapiente fugiat praesentium hic dolores distinctio? Totam optio autem minima unde alias inventore voluptates quas quos, doloribus ex, suscipit voluptatem eligendi ipsa est.',
            'image' => 'serviceImageCover/grief.jpg',
            'created_at' => '2022-10-18 00:00:00',
            'updated_at' => '2022-10-18 00:00:00',
        ]);

        DB::table('services')->insert([
            // 'id' => '1',
            'name' => 'LGBTQ',
            'brief_description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Pariatur consectetur iure qui amet minima ullam quae nemo velit, eos excepturi!',
            'full_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, iste. Libero illo repellat nisi perferendis voluptas! Amet, exercitationem ducimus, fugit deleniti itaque eligendi laborum vero libero illo sapiente fugiat praesentium hic dolores distinctio? Totam optio autem minima unde alias inventore voluptates quas quos, doloribus ex, suscipit voluptatem eligendi ipsa est.',
            'image' => 'serviceImageCover/lgbtq.jpg',
            'created_at' => '2022-10-18 00:00:00',
            'updated_at' => '2022-10-18 00:00:00',
        ]);
    }
}
