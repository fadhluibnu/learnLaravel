<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // User::create([
        //     'name' => 'Fadhlu Ibnu',
        //     'email' => 'fadhluibnu@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);
        // User::create([
        //     'name' => "Fadhlu Ibnu 'Abbbd",
        //     'email' => 'fadhluibnuabbad@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sit natus autem saepe esse doloribus dolorem recusandae vitae eaque optio modi fugit id eum temporibus, itaque aut amet consectetur ut! Aperiam distinctio dolore dolorum perspiciatis labore deleniti odio obcaecati culpa sequi, quod quia pariatur aspernatur ad eius tempore adipisci voluptates repellendus quibusdam reiciendis unde blanditiis, ipsam commodi. Voluptatum optio in molestiae maiores accusamus excepturi fuga sit aliquid? Ducimus impedit ullam voluptate modi corporis aspernatur necessitatibus! Ipsa molestiae reiciendis aliquam optio totam. Quibusdam aliquam sunt molestias quas magni iusto, architecto consectetur. Tempora totam facilis veniam commodi nihil ad corporis quas nesciunt non?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sit natus autem saepe esse doloribus dolorem recusandae vitae eaque optio modi fugit id eum temporibus, itaque aut amet consectetur ut! Aperiam distinctio dolore dolorum perspiciatis labore deleniti odio obcaecati culpa sequi, quod quia pariatur aspernatur ad eius tempore adipisci voluptates repellendus quibusdam reiciendis unde blanditiis, ipsam commodi. Voluptatum optio in molestiae maiores accusamus excepturi fuga sit aliquid? Ducimus impedit ullam voluptate modi corporis aspernatur necessitatibus! Ipsa molestiae reiciendis aliquam optio totam. Quibusdam aliquam sunt molestias quas magni iusto, architecto consectetur. Tempora totam facilis veniam commodi nihil ad corporis quas nesciunt non?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sit natus autem saepe esse doloribus dolorem recusandae vitae eaque optio modi fugit id eum temporibus, itaque aut amet consectetur ut! Aperiam distinctio dolore dolorum perspiciatis labore deleniti odio obcaecati culpa sequi, quod quia pariatur aspernatur ad eius tempore adipisci voluptates repellendus quibusdam reiciendis unde blanditiis, ipsam commodi. Voluptatum optio in molestiae maiores accusamus excepturi fuga sit aliquid? Ducimus impedit ullam voluptate modi corporis aspernatur necessitatibus! Ipsa molestiae reiciendis aliquam optio totam. Quibusdam aliquam sunt molestias quas magni iusto, architecto consectetur. Tempora totam facilis veniam commodi nihil ad corporis quas nesciunt non?',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sit natus autem saepe esse doloribus dolorem recusandae vitae eaque optio modi fugit id eum temporibus, itaque aut amet consectetur ut! Aperiam distinctio dolore dolorum perspiciatis labore deleniti odio obcaecati culpa sequi, quod quia pariatur aspernatur ad eius tempore adipisci voluptates repellendus quibusdam reiciendis unde blanditiis, ipsam commodi. Voluptatum optio in molestiae maiores accusamus excepturi fuga sit aliquid? Ducimus impedit ullam voluptate modi corporis aspernatur necessitatibus! Ipsa molestiae reiciendis aliquam optio totam. Quibusdam aliquam sunt molestias quas magni iusto, architecto consectetur. Tempora totam facilis veniam commodi nihil ad corporis quas nesciunt non?',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
