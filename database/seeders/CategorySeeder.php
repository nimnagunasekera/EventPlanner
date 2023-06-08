<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $eventCategories = array(
            array(
                'name' => 'Music',
                'description' => 'Events related to music concerts, festivals, and performances.',
            ),
            array(
                'name' => 'Art',
                'description' => 'Events showcasing various forms of art, such as exhibitions, galleries, and installations.',
            ),
            array(
                'name' => 'Sports',
                'description' => 'Events focused on sports activities, tournaments, and competitions.',
            ),
            array(
                'name' => 'Food & Drink',
                'description' => 'Events centered around food and drinks, including festivals, tastings, and cooking classes.',
            ),
            array(
                'name' => 'Technology',
                'description' => 'Events related to technology, innovation, and advancements in various industries.',
            ),
            array(
                'name' => 'Film & Theater',
                'description' => 'Events showcasing films, movie screenings, theater performances, and dramas.',
            ),
            array(
                'name' => 'Fashion',
                'description' => 'Events related to fashion shows, runway collections, and style exhibitions.',
            ),
            array(
                'name' => 'Charity',
                'description' => 'Events organized for charitable purposes, including galas, fundraisers, and awareness campaigns.',
            ),
            array(
                'name' => 'Education',
                'description' => 'Events focused on education and learning, such as conferences, workshops, and seminars.',
            ),
            array(
                'name' => 'Comedy',
                'description' => 'Events featuring stand-up comedy shows, improv performances, and comedic acts.',
            ),
        );

        foreach ($eventCategories as $eventCategory) {
            \App\Models\Category::create($eventCategory);
        }
    }
}
