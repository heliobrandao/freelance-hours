<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => collect(fake()->words(5))->join(''),
            'description' => htmlspecialchars(fake()->randomHtml()),
            'ends_at' => fake()->dateTimeBetween('now', '+3 days'),
            'status' => fake()->randomElement(['open', 'closed']),
            'tech_stack' => fake()->randomElements(['PHP', 'JavaScript', 'Python', 'Ruby', 'Go', 'Java', 'C#', 'C++', 'C', 'Swift', 'Kotlin', 'Rust', 'TypeScript', 'HTML', 'CSS', 'SQL', 'NoSQL', 'Docker', 'Kubernetes', 'AWS', 'Azure', 'GCP', 'Firebase', 'MongoDB', 'MySQL', 'PostgreSQL', 'SQLite', 'Redis', 'Elasticsearch', 'Kafka', 'RabbitMQ', 'Nginx', 'Apache', 'Node.js', 'React', 'Vue', 'Angular', 'Laravel', 'Symfony', 'Django', 'Flask', 'Rails', 'Spring', 'ASP.NET', 'Express', 'Next.js', 'Nuxt.js', 'Gatsby', 'Jekyll', 'Hugo', 'WordPress', 'Drupal', 'Joomla', 'Magento', 'Shopify', 'PrestaShop', 'WooCommerce', 'OpenCart', 'BigCommerce', 'Squarespace', 'Wix', 'Strapi', 'Ghost', 'Keystone', 'Contentful', 'Prismic', 'DatoCMS', 'Sanity', 'ButterCMS', 'Storyblok', 'GraphCMS', 'WordPress VIP', 'Drupal Cloud', 'Magento Commerce', 'Shopify Plus', 'BigCommerce Enterprise', 'Squarespace Commerce', 'Wix eCommerce', 'Strapi Enterprise', 'Ghost Pro', 'Keystone Pro', 'Contentful Enterprise', 'Prismic Enterprise', 'DatoCMS Enterprise', 'Sanity Enterprise', 'ButterCMS Enterprise', 'Storyblok Enterprise', 'GraphCMS Enterprise'], 3),
            'created_by' => \App\Models\User::factory(),
        ];
    }
}
