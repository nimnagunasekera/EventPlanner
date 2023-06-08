<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $events = array(
            array(
                'event_name' => 'Music Festival',
                'date' => '2023-07-15',
                'time' => '6:00 PM',
                'duration' => '3 hours',
                'about' => 'Join us for a night of live music and entertainment. Various artists will be performing across different genres.',
                'venue_name' => 'Galle Face Green',
                'address' => 'Galle Road',
                'city' => 'Colombo',
                'price' => 'Rs. 2000',
            ),
            array(
                'event_name' => 'Art Exhibition',
                'date' => '2023-07-20',
                'time' => '10:00 AM',
                'duration' => '5 hours',
                'about' => 'Explore a collection of modern and contemporary artworks from renowned artists. Admission is free.',
                'venue_name' => 'JDA Perera Gallery',
                'address' => 'Horton Place',
                'city' => 'Colombo',
                'price' => 'Free',
            ),
            array(
                'event_name' => 'Fitness Workshop',
                'date' => '2023-07-25',
                'time' => '2:30 PM',
                'duration' => '2 hours',
                'about' => 'Get ready to sweat and improve your fitness level with our high-energy workout sessions led by professional trainers.',
                'venue_name' => 'Power Gym',
                'address' => 'Duplication Road',
                'city' => 'Colombo',
                'price' => 'Rs. 1500',
            ),
            array(
                'event_name' => 'Food Festival',
                'date' => '2023-08-05',
                'time' => '12:00 PM',
                'duration' => '6 hours',
                'about' => 'Indulge in a culinary adventure with a wide range of delicious food options from local restaurants and food vendors.',
                'venue_name' => 'Independence Square',
                'address' => 'Independence Avenue',
                'city' => 'Colombo',
                'price' => 'Rs. 1000',
            ),
            array(
                'event_name' => 'Tech Conference',
                'date' => '2023-08-10',
                'time' => '9:00 AM',
                'duration' => '8 hours',
                'about' => 'Discover the latest trends and innovations in the tech industry through insightful talks, panel discussions, and demos.',
                'venue_name' => 'Nelum Pokuna Mahinda Rajapaksa Theatre',
                'address' => 'Lotus Road',
                'city' => 'Colombo',
                'price' => 'Rs. 5000',
            ),
            array(
                'event_name' => 'Film Screening',
                'date' => '2023-08-15',
                'time' => '8:00 PM',
                'duration' => '2.5 hours',
                'about' => 'Experience the magic of cinema with a special screening of critically acclaimed movies from around the world.',
                'venue_name' => 'Liberty Cinema',
                'address' => 'Dharmapala Mawatha',
                'city' => 'Colombo',
                'price' => 'Rs. 500',
            ),
            array(
                'event_name' => 'Cultural Dance Performance',
                'date' => '2023-08-20',
                'time' => '7:30 PM',
                'duration' => '2 hours',
                'about' => 'Immerse yourself in the rich cultural heritage of Sri Lanka with mesmerizing traditional dance performances.',
                'venue_name' => 'Nelum Pokuna Mahinda Rajapaksa Theatre',
                'address' => 'Lotus Road',
                'city' => 'Colombo',
                'price' => 'Rs. 2500',
            ),
            array(
                'event_name' => 'Fashion Show',
                'date' => '2023-08-25',
                'time' => '7:30 PM',
                'duration' => '2 hours',
                'about' => 'Witness the latest fashion trends on the runway as top designers showcase their stunning collections.',
                'venue_name' => 'Shangri-La Hotel',
                'address' => 'Galle Face',
                'city' => 'Colombo',
                'price' => 'Rs. 3000',
            ),
            array(
                'event_name' => 'Charity Gala',
                'date' => '2023-09-05',
                'time' => '6:30 PM',
                'duration' => '4 hours',
                'about' => 'Support a noble cause by attending our charity gala, featuring live performances, auctions, and gourmet dinner.',
                'venue_name' => 'Cinnamon Grand',
                'address' => 'Galle Road',
                'city' => 'Colombo',
                'price' => 'Rs. 5000',
            ),
            array(
                'event_name' => 'Sports Tournament',
                'date' => '2023-09-10',
                'time' => '10:00 AM',
                'duration' => 'Full day',
                'about' => 'Cheer for your favorite teams as they compete in a thrilling sports tournament with exciting matches.',
                'venue_name' => 'Sinhalese Sports Club Ground',
                'address' => 'Maitland Place',
                'city' => 'Colombo',
                'price' => 'Rs. 1000',
            ),
            array(
                'event_name' => 'Conference on Science',
                'date' => '2023-09-15',
                'time' => '9:00 AM',
                'duration' => '6 hours',
                'about' => 'Explore the frontiers of science and listen to expert speakers discussing breakthrough discoveries and research.',
                'venue_name' => 'Bandaranaike Memorial International Conference Hall',
                'address' => 'Bauddhaloka Mawatha',
                'city' => 'Colombo',
                'price' => 'Rs. 3000',
            ),
            array(
                'event_name' => 'Comedy Show',
                'date' => '2023-09-20',
                'time' => '8:30 PM',
                'duration' => '2 hours',
                'about' => 'Laugh out loud at our comedy show featuring hilarious stand-up performances by popular comedians.',
                'venue_name' => 'Nuga Tree Rooftop Bar',
                'address' => 'Galle Road',
                'city' => 'Colombo',
                'price' => 'Rs. 1500',
            ),
        );

        foreach ($events as $event) {

            //generate a random number between 1 and 10 and add as the category_id to the event array
            $event['category_id'] = rand(1, 10);

            \App\Models\Event::create($event);
        }

    }
}
