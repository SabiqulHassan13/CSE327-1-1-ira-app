<?php

use Illuminate\Database\Seeder;
use App\Course;
use Illuminate\Support\Str;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // course1
        $course1 = Course::create([
            'user_id'       => 1,
            'title'         => 'HTML5 crash course',
            'slug'          => Str::slug('HTML5 crash course', '-'),
            'image'         => 'images/default/html5.jpg',
            'short_text'    => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, est?',
            'long_text'     => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere nihil aliquam voluptatum beatae quibusdam iure temporibus enim, libero voluptatibus odio nemo impedit voluptates provident expedita consequatur quas consectetur? Id, voluptatem!',
            'joinning_code' => 'html5b01',
            'batch_no'      => '01',
            'status'        => 1,
            'started_at'    => now()            
        ]);

        // course2
        $course2 = Course::create([
            'user_id'       => 1,
            'title'         => 'CSS3 crash course',
            'slug'          => Str::slug('CSS3 crash course', '-'),
            'image'         => 'images/default/css3.jpg',
            'short_text'    => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, est?',
            'long_text'     => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere nihil aliquam voluptatum beatae quibusdam iure temporibus enim, libero voluptatibus odio nemo impedit voluptates provident expedita consequatur quas consectetur? Id, voluptatem!',
            'joinning_code' => 'css3b01',
            'batch_no'      => '01',
            'status'        => 1,
            'started_at'    => now()            
        ]);

        // course3
        $course3 = Course::create([
            'user_id'       => 1,
            'title'         => 'JS crash course',
            'slug'          => Str::slug('JS crash course', '-'),
            'image'         => 'images/default/js.png',
            'short_text'    => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, est?',
            'long_text'     => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere nihil aliquam voluptatum beatae quibusdam iure temporibus enim, libero voluptatibus odio nemo impedit voluptates provident expedita consequatur quas consectetur? Id, voluptatem!',
            'joinning_code' => 'jsb01',
            'batch_no'      => '01',
            'status'        => 1,
            'started_at'    => now()            
        ]);
    }
}
