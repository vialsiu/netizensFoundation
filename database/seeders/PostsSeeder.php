<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Only curated posts
        $posts = [
            [
                'title' => '2NE1’s CL Faces Backlash for Racist Slur',
                'slug' => Str::slug('2NE1’s CL Faces Backlash for Racist Slur'),
                'excerpt' => 'K-pop idol CL sparked controversy after a resurfaced video showed her using a racial slur...',
                'content' => '<p>CL, leader of the now-disbanded group 2NE1, is under fire...</p>',
                'image' => 'posts/cl_thumbnail.jpg',
                'category_id' => 5,
                'author' => 1,
                'is_visible' => 1,
            ],
            [
                'title' => 'Cynthia Erivo and Ariana Grande Shed TEARS During Every Interview',
                'slug' => Str::slug('Cynthia Erivo and Ariana Grande Shed TEARS During Every Interview'),
                'excerpt' => 'During the press tour for *Wicked*, both stars became emotional in nearly every interview segment...',
                'content' => '<p>As the *Wicked* press tour continues, Cynthia Erivo and Ariana Grande have sparked conversations after repeatedly breaking down into tears when discussing their roles and friendship...</p>',
                'image' => 'posts/ariana_cynthia_thumbnail.jpg',
                'category_id' => 8,
                'author' => 1,
                'is_visible' => 1,
            ],            
            [
                'title' => 'Timothée Chalamet Enters Rehab Amidst Substance Abuse Allegations',
                'slug' => Str::slug('Timothée Chalamet Enters Rehab Amidst Substance Abuse Allegations'),
                'excerpt' => 'Acclaimed actor Timothée Chalamet has checked into a rehabilitation facility following reports of substance abuse...',
                'content' => '<p>Sources close to the Oscar-nominated actor confirm he voluntarily entered a luxury rehab center in Malibu after paparazzi footage showed erratic behavior at a Hollywood party last week. Representatives cite "exhaustion" while fans express concern.</p>',
                'image' => 'posts/chalamet_thumbnail.jpg',
                'category_id' => 1,
                'author' => 1,
                'is_visible' => 1,
            ],
            [
                'title' => 'Kim Soo Hyun Denies Underage Dating Accusation',
                'slug' => Str::slug('Kim Soo Hyun Denies Underage Dating Accusation'),
                'excerpt' => 'The "Queen of Tears" star faces controversy after rumors surface about his alleged relationship with a 17-year-old trainee...',
                'content' => '<p>Kim Soo Hyun\'s agency Gold Medalist has issued an urgent statement denying claims made by an anonymous online poster that the actor engaged in inappropriate communication with a minor. </p>
                             <p>"These allegations are completely false and defamatory," said agency representatives. "We’ve filed criminal charges with Seoul Metropolitan Police against the accuser for spreading false information."</p>
                             <p>The controversy began when Dispatch reported alleged KakaoTalk messages between the actor and a high school student, though the authenticity remains unverified. Netizens are divided, with some calling for boycotts of his upcoming drama while others demand evidence.</p>',
                'image' => 'posts/kimsoohyun_thumbnail.jpg',
                'category_id' => 19,
                'author' => 1,
                'is_visible' => 1,
            ],
            [
                'title' => 'Sean "Diddy" Combs Faces Federal Charges in High-Profile Trafficking Trial',
                'slug' => Str::slug('Sean "Diddy" Combs Faces Federal Charges in High-Profile Trafficking Trial'),
                'excerpt' => 'The music mogul arrives at Manhattan federal court as jury selection begins in what prosecutors call "one of the largest celebrity trafficking cases"...',
                'content' => '<p>Combs pleaded not guilty to 12 felony counts including racketeering and interstate trafficking following a 2-year DOJ investigation. </p>
                             <p>Prosecutors allege the Bad Boy Records founder operated a "sophisticated criminal enterprise" that transported minors across state lines. Defense attorney Mark Geragos called the charges "a racially motivated witch hunt targeting hip-hop culture."</p>
                             <p>Key evidence includes sealed testimony from former collaborators and alleged financial transfers to shell companies. If convicted, Combs faces up to 30 years imprisonment.</p>',
                'image' => 'posts/diddy_trial_thumbnail.jpg',
                'category_id' => 3,
                'author' => 1,
                'is_visible' => 1,
            ],
        ];

        foreach ($posts as $post) {
            Post::updateOrCreate(['slug' => $post['slug']], $post);
        }
    }
}
