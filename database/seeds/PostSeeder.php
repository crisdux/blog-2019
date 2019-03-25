<?php

use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{

    public function run()
    {
        DB::table('posts')->insert([
            array(
              'title'=>'Mi primer viaje',
              'excerpt'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus aperiam ducimus suscipit harum voluptatum maiores impedit, sed ex atque unde ipsa. Natus, fuga velit unde quaerat deserunt tempora id reiciendis.',
              'body'=> 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Totam natus quam, magnam repellendus laudantium dolorum minus exercitationem iste temporibus aperiam, unde ipsum accusamus omnis, incidunt animi repudiandae nostrum possimus expedita esse laboriosam! Facere pariatur adipisci dolorum ullam eveniet cumque deserunt voluptatum excepturi illum quidem voluptates, maxime atque ab quibusdam ea.',
              'published_at'=>'2019-03-25 05:13:29'
            ),
            array(
                'title'=>'Concierto Radiohead',
                'excerpt'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus aperiam ducimus suscipit harum voluptatum maiores impedit, sed ex atque unde ipsa. Natus, fuga velit unde quaerat deserunt tempora id reiciendis.',
                'body'=> 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Totam natus quam, magnam repellendus laudantium dolorum minus exercitationem iste temporibus aperiam, unde ipsum accusamus omnis, incidunt animi repudiandae nostrum possimus expedita esse laboriosam! Facere pariatur adipisci dolorum ullam eveniet cumque deserunt voluptatum excepturi illum quidem voluptates, maxime atque ab quibusdam ea.',
                'published_at'=>'2019-03-29 05:13:21'
            ),
            array(
                'title'=>'Graduacion',
                'excerpt'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus aperiam ducimus suscipit harum voluptatum maiores impedit, sed ex atque unde ipsa. Natus, fuga velit unde quaerat deserunt tempora id reiciendis.',
                'body'=> 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Totam natus quam, magnam repellendus laudantium dolorum minus exercitationem iste temporibus aperiam, unde ipsum accusamus omnis, incidunt animi repudiandae nostrum possimus expedita esse laboriosam! Facere pariatur adipisci dolorum ullam eveniet cumque deserunt voluptatum excepturi illum quidem voluptates, maxime atque ab quibusdam ea.',
                'published_at'=>'2019-10-25 05:13:21'
            ),
            array(
                'title'=>'Estreno canal',
                'excerpt'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus aperiam ducimus suscipit harum voluptatum maiores impedit, sed ex atque unde ipsa. Natus, fuga velit unde quaerat deserunt tempora id reiciendis.',
                'body'=> 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Totam natus quam, magnam repellendus laudantium dolorum minus exercitationem iste temporibus aperiam, unde ipsum accusamus omnis, incidunt animi repudiandae nostrum possimus expedita esse laboriosam! Facere pariatur adipisci dolorum ullam eveniet cumque deserunt voluptatum excepturi illum quidem voluptates, maxime atque ab quibusdam ea.',
                'published_at'=>'2019-03-09 09:13:21'
            )
        ]);  
    }
}
