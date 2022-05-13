<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::create([
            'name' => 'Dzaki Rozaan',
            'email' => 'dzaki@gmail.com',
            'password' => bcrypt('12345'),
        ]);

        User::create([
            'name' => 'Nathan Anandala',
            'email' => 'nathan@gmail.com',
            'password' => bcrypt('12345'),
        ]);
        User::create([
            'name' => 'Nigel Riyandi',
            'email' => 'nigel@gmail.com',
            'password' => bcrypt('12345'),
        ]);
        Category::create([
            'name' => 'Programming',
            'slug' => 'programming'
        ]);
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);
        Post::create([
            'title' => 'Python For Data Science',
            'slug' => 'python-for-data-science',
            'category_id' => 1,
            'user_id' => 1,
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate voluptates ea corporis eligendi deleniti ratione omnis laudantium? Maiores temporibus numquam corporis nemo recusandae sequi accusamus? Blanditiis, dolorem. Placeat, praesentium distinctio veniam eos maxime sint adipisci modi reprehenderit, esse sed itaque deserunt ipsum officiis, ratione hic. Quisquam voluptas sapiente, fuga et nesciunt quis ullam temporibus assumenda pariatur quod cupiditate, sequi, illum accusamus? Inventore repudiandae necessitatibus eos corporis excepturi ab officiis repellat aliquid distinctio in possimus optio, et ex consectetur accusantium voluptatibus iusto accusamus modi alias, dolores quidem provident veniam vel.',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate voluptates ea corporis eligendi deleniti ratione omnis laudantium? Maiores temporibus numquam corporis nemo recusandae sequi accusamus? Blanditiis, dolorem. Placeat, praesentium distinctio veniam eos maxime sint adipisci modi reprehenderit, esse sed itaque deserunt ipsum officiis, ratione hic. Quisquam voluptas sapiente, fuga et nesciunt quis ullam temporibus assumenda pariatur quod cupiditate, sequi, illum accusamus? Inventore repudiandae necessitatibus eos corporis excepturi ab officiis repellat aliquid distinctio in possimus optio, et ex consectetur accusantium voluptatibus iusto accusamus modi alias, dolores quidem provident veniam vel. Quos enim reprehenderit a dolor quod unde quibusdam, consequatur illo earum est obcaecati voluptate ad libero, voluptas cupiditate optio repellat ipsa pariatur, reiciendis ea blanditiis odio quae quo! Atque corporis quasi aliquam excepturi itaque nemo autem earum tenetur, inventore, asperiores, praesentium pariatur quo tempore quos! Deserunt repudiandae repellendus enim dolor ex quod in adipisci consequatur earum dolores velit ullam, sed sint corporis doloribus explicabo consequuntur. Nesciunt quaerat quam amet, harum commodi.'
        ]);
        Post::create([
            'title' => 'Adobe XD For Web Design',
            'slug' => 'adobe-xd-for-web-design',
            'category_id' => 2,
            'user_id' => 2,
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate voluptates ea corporis eligendi deleniti ratione omnis laudantium? Maiores temporibus numquam corporis nemo recusandae sequi accusamus? Blanditiis, dolorem. Placeat, praesentium distinctio veniam eos maxime sint adipisci modi reprehenderit, esse sed itaque deserunt ipsum officiis, ratione hic. Quisquam voluptas sapiente, fuga et nesciunt quis ullam temporibus assumenda pariatur quod cupiditate, sequi, illum accusamus? Inventore repudiandae necessitatibus eos corporis excepturi.',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate voluptates ea corporis eligendi deleniti ratione omnis laudantium? Maiores temporibus numquam corporis nemo recusandae sequi accusamus? Blanditiis, dolorem. Placeat, praesentium distinctio veniam eos maxime sint adipisci modi reprehenderit, esse sed itaque deserunt ipsum officiis, ratione hic. Quisquam voluptas sapiente, fuga et nesciunt quis ullam temporibus assumenda pariatur quod cupiditate, sequi, illum accusamus? Inventore repudiandae necessitatibus eos corporis excepturi ab officiis repellat aliquid distinctio in possimus optio, et ex consectetur accusantium voluptatibus iusto accusamus modi alias, dolores quidem provident veniam vel. Quos enim reprehenderit a dolor quod unde quibusdam, consequatur illo earum est obcaecati voluptate ad libero, voluptas cupiditate optio repellat ipsa pariatur, reiciendis ea blanditiis odio quae quo! Atque corporis quasi aliquam excepturi itaque nemo autem earum tenetur, inventore, asperiores, praesentium pariatur quo tempore quos! Deserunt repudiandae repellendus enim dolor ex quod in adipisci consequatur earum dolores velit ullam, sed sint corporis doloribus explicabo consequuntur. Nesciunt quaerat quam amet, harum commodi.'
        ]);
        Post::create([
            'title' => 'Javascript For Backend',
            'slug' => 'javascript-for-backend',
            'category_id' => 1,
            'user_id' => 1,
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate voluptates ea corporis eligendi deleniti ratione omnis laudantium? Maiores temporibus numquam corporis nemo recusandae sequi accusamus? Blanditiis, dolorem. Placeat, praesentium distinctio veniam eos maxime sint adipisci modi reprehenderit, esse sed itaque deserunt ipsum officiis, ratione hic. Quisquam voluptas sapiente, fuga et nesciunt quis ullam temporibus assumenda pariatur quod cupiditate, sequi, illum accusamus? Inventore repudiandae necessitatibus eos corporis excepturi ab officiis repellat aliquid distinctio in possimus optio.',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate voluptates ea corporis eligendi deleniti ratione omnis laudantium? Maiores temporibus numquam corporis nemo recusandae sequi accusamus? Blanditiis, dolorem. Placeat, praesentium distinctio veniam eos maxime sint adipisci modi reprehenderit, esse sed itaque deserunt ipsum officiis, ratione hic. Quisquam voluptas sapiente, fuga et nesciunt quis ullam temporibus assumenda pariatur quod cupiditate, sequi, illum accusamus? Inventore repudiandae necessitatibus eos corporis excepturi ab officiis repellat aliquid distinctio in possimus optio, et ex consectetur accusantium voluptatibus iusto accusamus modi alias, dolores quidem provident veniam vel. Quos enim reprehenderit a dolor quod unde quibusdam, consequatur illo earum est obcaecati voluptate ad libero, voluptas cupiditate optio repellat ipsa pariatur, reiciendis ea blanditiis odio quae quo! Atque corporis quasi aliquam excepturi itaque nemo autem earum tenetur, inventore, asperiores, praesentium pariatur quo tempore quos! Deserunt repudiandae repellendus enim dolor ex quod in adipisci consequatur earum dolores velit ullam, sed sint corporis doloribus explicabo consequuntur. Nesciunt quaerat quam amet, harum commodi.'
        ]);
        Post::create([
            'title' => 'Figma Design',
            'slug' => 'figma-design',
            'category_id' => 2,
            'user_id' => 3,
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate voluptates ea corporis eligendi deleniti ratione omnis laudantium? Maiores temporibus numquam corporis nemo recusandae sequi accusamus? Blanditiis, dolorem. Placeat, praesentium distinctio veniam eos maxime sint adipisci modi reprehenderit, esse sed itaque deserunt ipsum officiis, ratione hic. Quisquam voluptas sapiente, fuga et nesciunt quis ullam temporibus assumenda pariatur quod cupiditate, sequi, illum accusamus? Inventore repudiandae necessitatibus eos corporis excepturi ab officiis repellat aliquid distinctio in possimus optio.',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate voluptates ea corporis eligendi deleniti ratione omnis laudantium? Maiores temporibus numquam corporis nemo recusandae sequi accusamus? Blanditiis, dolorem. Placeat, praesentium distinctio veniam eos maxime sint adipisci modi reprehenderit, esse sed itaque deserunt ipsum officiis, ratione hic. Quisquam voluptas sapiente, fuga et nesciunt quis ullam temporibus assumenda pariatur quod cupiditate, sequi, illum accusamus? Inventore repudiandae necessitatibus eos corporis excepturi ab officiis repellat aliquid distinctio in possimus optio, et ex consectetur accusantium voluptatibus iusto accusamus modi alias, dolores quidem provident veniam vel. Quos enim reprehenderit a dolor quod unde quibusdam, consequatur illo earum est obcaecati voluptate ad libero, voluptas cupiditate optio repellat ipsa pariatur, reiciendis ea blanditiis odio quae quo! Atque corporis quasi aliquam excepturi itaque nemo autem earum tenetur, inventore, asperiores, praesentium pariatur quo tempore quos! Deserunt repudiandae repellendus enim dolor ex quod in adipisci consequatur earum dolores velit ullam, sed sint corporis doloribus explicabo consequuntur. Nesciunt quaerat quam amet, harum commodi.'
        ]);
    }
}
