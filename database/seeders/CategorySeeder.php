<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['category_name' => 'Substance Abuse', 'category_slug' => Str::slug('Substance Abuse'), 'icon' => 'category-icons/robot.png'],
            ['category_name' => 'Cheating Scandal', 'category_slug' => Str::slug('Cheating Scandal'), 'icon' => 'category-icons/padlock.png'],
            ['category_name' => 'Abuse Scandal', 'category_slug' => Str::slug('Abuse Scandal'), 'icon' => 'category-icons/login.png'],
            ['category_name' => 'Mental Health Problems', 'category_slug' => Str::slug('Mental Health Problems'), 'icon' => 'category-icons/cloud-server.png'],
            ['category_name' => 'Cultural Insensitivity/Racism', 'category_slug' => Str::slug('Cultural Insensitivity/Racism'), 'icon' => 'category-icons/smartphone.png'],
            ['category_name' => 'Plagiarism/Theft of Work', 'category_slug' => Str::slug('Plagiarism/Theft of Work'), 'icon' => 'category-icons/console.png'],
            ['category_name' => 'Award Show/Competition Rigging', 'category_slug' => Str::slug('Award Show/Competition Rigging'), 'icon' => 'category-icons/console.png'],
            ['category_name' => 'Feuds/Public Meltdowns', 'category_slug' => Str::slug('Feuds/Public Meltdowns'), 'icon' => 'category-icons/console.png'],
            ['category_name' => 'Faked Deaths/Publicity Stunts', 'category_slug' => Str::slug('Faked Deaths/Publicity Stunts'), 'icon' => 'category-icons/console.png'],
            ['category_name' => 'Body Image/Eating Disorder Exploitation', 'category_slug' => Str::slug('Body Image/Eating Disorder Exploitation'), 'icon' => 'category-icons/console.png'],
            ['category_name' => 'Nepotism/Industry Exploitation', 'category_slug' => Str::slug('Nepotism/Industry Exploitation'), 'icon' => 'category-icons/console.png'],
            ['category_name' => 'Animal Cruelty', 'category_slug' => Str::slug('Animal Cruelty'), 'icon' => 'category-icons/console.png'],
            ['category_name' => 'Political Controversies', 'category_slug' => Str::slug('Political Controversies'), 'icon' => 'category-icons/console.png'],
            ['category_name' => 'Fake Relationships/PR Stunts', 'category_slug' => Str::slug('Fake Relationships/PR Stunts'), 'icon' => 'category-icons/console.png'],
            ['category_name' => 'Charity Fraud', 'category_slug' => Str::slug('Charity Fraud'), 'icon' => 'category-icons/console.png'],
            ['category_name' => 'Cancel Culture Backlash', 'category_slug' => Str::slug('Cancel Culture Backlash'), 'icon' => 'category-icons/console.png'],
            ['category_name' => 'Unethical Brand Deals', 'category_slug' => Str::slug('Unethical Brand Deals'), 'icon' => 'category-icons/console.png'],
            ['category_name' => 'Cultural Appropriation', 'category_slug' => Str::slug('Cultural Appropriation'), 'icon' => 'category-icons/console.png'],
            ['category_name' => 'Grooming', 'category_slug' => Str::slug('Grooming'), 'icon' => 'category-icons/console.png'],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
