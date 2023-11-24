<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(),
            'thumbnail' => 'skin4.jpg',
            'content' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Vel eum nam nostrum assumenda a sint esse asperiores fugiat, dolorem nihil quae, 
            aliquid corporis minus praesentium ipsum molestiae suscipit doloremque similique iure, 
            tenetur nisi. Nostrum assumenda deleniti minima tenetur eveniet, ea labore. 
            Maxime, necessitatibus numquam. Ullam repellat ex beatae eveniet voluptatem corporis 
            tempore iusto reiciendis qui. Rerum voluptatibus consectetur minima saepe quis. 
            Nostrum architecto sunt reiciendis rerum sed consectetur saepe laboriosam beatae tempora, 
            deserunt nemo alias excepturi quia maiores expedita suscipit commodi at ex inventore. 
            Assumenda rerum blanditiis maiores exercitationem cumque accusantium hic debitis, ut animi 
            eaque, ratione molestiae, aut nesciunt consequatur? Officiis doloremque ducimus 
            necessitatibus reprehenderit nemo maxime fugit blanditiis eveniet iusto consequatur 
            distinctio unde est nesciunt nobis, suscipit natus optio, dolor, at modi accusantium et! 
            Molestias tempore ex quod cumque id corrupti repudiandae obcaecati delectus aut laudantium. 
            Blanditiis iusto voluptate consequuntur quae architecto ipsam nulla iure nam repellendus 
            nostrum, eligendi dignissimos incidunt dolores laudantium praesentium optio dolor debitis 
            cupiditate adipisci magni similique aliquam officiis fugiat! Vel doloremque necessitatibus 
            fugiat, nemo architecto maxime qui sit eius odio nulla velit dolorem consequuntur at esse 
            corporis voluptate reprehenderit. Facere qui officiis quos ullam libero fugiat iusto velit 
            autem, atque sunt sed obcaecati.",
        ];
    }
}
