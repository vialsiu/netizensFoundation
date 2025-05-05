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
                'title' => "2NE1's CL Faces Backlash for Racist Slur",
                'slug' => Str::slug("2NE1's CL Faces Backlash for Racist Slur"),
                'excerpt' => 'K-pop idol CL sparked controversy after a resurfaced video showed her using a racial slur...',
                'content' => stripslashes('<p>CL, the charismatic former leader of K-pop girl group 2NE1, has found herself at the center of a heated controversy after a decade-old video resurfaced online, showing her rapping along to a song that included a racial slur. The clip, which has been widely circulated on social media platforms like Twitter and TikTok, has reignited long-standing discussions about cultural appropriation and racial insensitivity in the K-pop industry.</p>
            
                <p>In the video, originally recorded during a behind-the-scenes segment from 2014, CL is seen casually singing along to the lyrics of an American hip-hop track that included the N-word. Fans initially brushed off the incident, citing the context of the song. However, amid growing awareness of racial dynamics and anti-Black racism, the clip has received renewed scrutiny. The backlash was swift, with netizens demanding an apology and accountability from the artist.</p>
            
                <p>CL issued a public statement via her Instagram stories, acknowledging the video and expressing regret: "I want to sincerely apologize for my past actions. At the time, I didn’t fully understand the weight and historical context of the word. I’ve grown a lot since then and am continuing to educate myself. I am truly sorry to anyone I have hurt."</p>
            
                <p>While some fans have accepted the apology and praised CL for taking responsibility, others remain skeptical. Several critics have pointed out that this is not the first time K-pop idols have been involved in controversies involving racial insensitivity. “It’s not enough to apologize after getting caught,” one Twitter user wrote. “These artists have a responsibility to be culturally aware, especially when profiting off Black music and culture.”</p>
            
                <p>The incident has also reignited debates within the K-pop fandom about the genre’s global expansion and its complicated relationship with Black culture. Many industry experts argue that while K-pop borrows heavily from hip-hop and R&B, there is a lack of understanding and respect for the origins of these genres. This disconnect often leads to problematic behavior that fans outside of Korea, particularly in the U.S., find unacceptable.</p>
            
                <p>Some fans and commentators have also turned their criticism toward YG Entertainment, CL’s former agency, for what they describe as a failure to provide proper cultural sensitivity training to its artists. “This is a systemic issue,” said one fan on Reddit. “It’s not just about CL—it’s about an industry that encourages imitation without education.”</p>
            
                <p>Meanwhile, defenders of CL have pointed to her long-standing admiration for Black artists and her collaborations with global hip-hop figures like Method Man and Diplo as signs of genuine respect. They argue that while the mistake was serious, her history suggests she is not malicious, just uninformed at the time of the incident.</p>
            
                <p>The controversy comes at a time when the K-pop industry is making a concerted push into Western markets. As Korean artists gain more visibility abroad, they are increasingly being held to international standards of cultural awareness and sensitivity.</p>
            
                <p>Whether this will lead to meaningful change remains to be seen. But one thing is clear: the global K-pop audience is no longer willing to stay silent on issues of race, and artists like CL will be expected to do more than simply entertain—they’ll be expected to learn, grow, and lead by example.</p>'),
                'image' => 'posts/cl_thumbnail.jpg',
                'category_id' => 5,
                'author' => 1,
                'is_visible' => 1,
            ],            
            [
                'title' => 'Cynthia Erivo and Ariana Grande Shed TEARS During Every Interview',
                'slug' => Str::slug('Cynthia Erivo and Ariana Grande Shed TEARS During Every Interview'),
                'excerpt' => 'During the press tour for Wicked, both stars became emotional in nearly every interview segment...',
                'content' => stripslashes('
                    <p>As the <em>Wicked</em> press tour continues, Cynthia Erivo and Ariana Grande have sparked conversations after repeatedly breaking down into tears when discussing their roles and friendship.</p>
            
                    <p>Appearing together on talk shows, red carpets, and fan panels, the emotional bond between the two actresses has become a centerpiece of the film’s promotional campaign. Grande, who plays Glinda, often wiped away tears when talking about her lifelong dream of joining the <em>Wicked</em> universe. “I grew up with these songs,” she said in one emotional interview. “To be here now, sharing this moment with Cynthia, it’s overwhelming.”</p>
            
                    <p>Erivo, who portrays Elphaba, echoed similar sentiments. “This role means everything to me — it’s more than just a performance,” she shared during a press junket. “It’s about identity, about defying expectations. And doing this alongside Ariana, who has become like a sister to me, has made it all the more meaningful.”</p>
            
                    <p>Clips of the two crying together have gone viral, prompting both praise and light-hearted jokes across social media platforms. Some fans dubbed them “the most wholesome co-stars of 2025,” while others speculated on the intensity of the filming process itself contributing to their raw emotions.</p>
            
                    <p>Director Jon M. Chu commented on the emotional nature of the shoot, saying, “We knew from day one that this film was going to touch people, but I never expected the cast to bring so much of their own emotional history into these roles. It’s real, and I think the audience will feel that.”</p>
            
                    <p>Despite the vulnerability on display, the actresses have remained unapologetic about their reactions. “There’s power in showing your heart,” Erivo told a fan at a recent Q&A. “It’s not weakness. It’s love.”</p>
            
                    <p><em>Wicked</em> is scheduled to hit theaters this fall and is already gaining major awards season buzz. Fans are eagerly awaiting the full release, many hoping that the emotional authenticity seen during the press tour will translate into unforgettable on-screen magic.</p>'),
                'image' => 'posts/ariana_cynthia_thumbnail.jpg',
                'category_id' => 8,
                'author' => 1,
                'is_visible' => 1,
            ],
            [
                'title' => 'Timothée Chalamet Enters Rehab Amidst Substance Abuse Allegations',
                'slug' => Str::slug('Timothée Chalamet Enters Rehab Amidst Substance Abuse Allegations'),
                'excerpt' => 'Acclaimed actor Timothée Chalamet has checked into a rehabilitation facility following reports of substance abuse...',
                'content' => stripslashes('<p>Sources close to the Oscar-nominated actor confirm he voluntarily entered a luxury rehab center in Malibu after paparazzi footage raised concerns among fans and media insiders.</p>

<p>Chalamet, 29, has long been praised for his artistic sensitivity and on-screen vulnerability, but recent events have sparked renewed scrutiny of his personal life.</p>

<p>His management team released a brief statement: "Timothée is taking some time to focus on his mental and physical health. We ask that his privacy be respected during this period."</p>

<p>Fans quickly flooded social media with messages of support under trending hashtags like #StayStrongTimothee and #WeLoveYouTimmy.</p>

<p>The incident has reignited conversations about the toll of fame, especially on younger talents who rise to international stardom at an early age.</p>

<p>"It\'s brave of him to step back and ask for help," said Dr. Lena Kapoor, a celebrity wellness specialist. "Far too often, young actors feel pressured to maintain a perfect image."</p>

<p>Chalamet\'s upcoming projects, including the highly anticipated sequel to Dune, are expected to continue as planned following his recovery.</p>

<p>As fans and media alike await updates, the overarching sentiment remains one of empathy and encouragement.</p>'),
                'image' => 'posts/chalamet_thumbnail.jpg',
                'category_id' => 1,
                'author' => 1,
                'is_visible' => 1,
            ],
            [
                'title' => 'Kim Soo Hyun Denies Underage Dating Accusation',
                'slug' => Str::slug('Kim Soo Hyun Denies Underage Dating Accusation'),
                'excerpt' => 'The Queen of Tears star faces controversy after rumors surface about his alleged relationship with a 17-year-old trainee...',
                'content' => stripslashes('
                    <p>Kim Soo Hyun\'s agency Gold Medalist has issued an urgent statement denying claims made by an anonymous online poster that the actor engaged in inappropriate communication with a minor.</p>

                    <p>"These allegations are completely false and defamatory," said agency representatives. "We’ve filed criminal charges with Seoul Metropolitan Police against the accuser for spreading false information."</p>

                    <p>The controversy began when Dispatch reported alleged KakaoTalk messages between the actor and a high school student, though the authenticity remains unverified. Netizens are divided, with some calling for boycotts of his upcoming drama while others demand concrete evidence before drawing conclusions.</p>

                    <p>The online post, which went viral within hours, claimed that Kim had been privately messaging a 17-year-old female trainee at an entertainment company, allegedly using suggestive language and asking for late-night phone calls. The post included blurred screenshots and unverifiable timestamps. No direct evidence of an actual relationship has been presented thus far.</p>

                    <p>Gold Medalist further stated that Kim Soo Hyun has never met or communicated with the alleged individual. "This is a malicious attempt to ruin his career," the agency said.</p>

                    <p>The controversy has left fans devastated, with many expressing confusion and disappointment over the situation. Some are defending Kim, citing his exemplary track record and clean image. "It’s hard to believe these accusations. Kim Soo Hyun has always been respectful," wrote one fan on Twitter. Others are calling for transparency and further investigation into the claims.</p>

                    <p>As of now, no charges have been filed against the actor, and the investigation is ongoing.</p>

                    <p>Kim’s upcoming projects are expected to continue despite the scandal, with most fans rallying behind him in support.</p>'),
                'image' => 'posts/kimsoohyun_thumbnail.jpg',
                'category_id' => 3,
                'author' => 1,
                'is_visible' => 1,
            ],
        ];

        foreach ($posts as $post) {
            $post['content'] = stripslashes($post['content']);  // Remove unwanted slashes
            Post::updateOrCreate(['slug' => $post['slug']], $post);
        }
    }
}
