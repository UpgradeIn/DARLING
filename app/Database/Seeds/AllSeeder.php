<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class AllSeeder extends Seeder
{
    public function run()
    {
        $data_roles = [
            [
                'name'           => 'officials',
                'description'    => 'pejabat',
                'created_at'     => Time::now(),
                'updated_at'     => Time::now()
            ],
            [
                'name'           => 'operator',
                'description'    => 'admin',
                'created_at'     => Time::now(),
                'updated_at'     => Time::now()
            ],
            [
                'name'           => 'user',
                'description'    => 'pegawai',
                'created_at'     => Time::now(),
                'updated_at'     => Time::now()
            ],
        ];

        $this->db->table('tb_roles')->insertBatch($data_roles);

        $data_users = [
            [
                'email'          => 'officials@gmail.com',
                'password'       => password_hash('fghjkliow', PASSWORD_DEFAULT),
                'role_id'        => 1, // officials
                'fullname'       => 'aku pejabat',
                'created_at'     => Time::now(),
                'updated_at'     => Time::now()
            ],
            [
                'email'          => 'operator@gmail.com',
                'password'       => password_hash('fghjkliow', PASSWORD_DEFAULT),
                'role_id'        => 2, // operator
                'fullname'       => 'aku admin',
                'created_at'     => Time::now(),
                'updated_at'     => Time::now()
            ],
            [
                'email'          => 'fatwa@gmail.com',
                'password'       => password_hash('fghjkliow', PASSWORD_DEFAULT),
                'role_id'        => 3, // user
                'fullname'       => 'Fatwa Fatahillah Fatah',
                'created_at'     => Time::now(),
                'updated_at'     => Time::now()
            ],
        ];

        $this->db->table('tb_users')->insertBatch($data_users);

        $data_courses = [
            [
                'id'            => 1,
                'thumbnail'     => 'base_thumbnail.jpg',
                'name'          => 'CodeIgniter 4',
                'slug'          => 'codeigniter-4',
                'description'   => 'Belajar CodeIgniter 4',
                'module'        => 'base_module.pdf',
                'published_at'  => Time::now(),
                'created_at'    => Time::now(),
                'updated_at'    => Time::now()
            ],
            [
                'id'            => 2,
                'thumbnail'     => 'base_thumbnail.jpg',
                'name'          => 'Laravel 8',
                'slug'          => 'laravel-8',
                'description'   => 'Belajar Laravel 8',
                'module'        => 'base_module.pdf',
                'published_at'  => Time::now(),
                'created_at'    => Time::now(),
                'updated_at'    => Time::now()
            ],
            [
                'id'            => 3,
                'thumbnail'     => 'base_thumbnail.jpg',
                'name'          => 'PHP 8',
                'slug'          => 'php-8',
                'description'   => 'Belajar PHP 8',
                'module'        => 'base_module.pdf',
                'published_at'  => Time::now(),
                'created_at'    => Time::now(),
                'updated_at'    => Time::now()
            ],
            [
                'id'            => 4,
                'thumbnail'     => 'base_thumbnail.jpg',
                'name'          => 'Public Speaking',
                'slug'          => 'public-speaking',
                'description'   => 'Belajar Public Speaking',
                'module'        => 'base_module.pdf',
                'published_at'  => Time::now(),
                'created_at'    => Time::now(),
                'updated_at'    => Time::now()
            ],
            [
                'id'            => 5,
                'thumbnail'     => 'base_thumbnail.jpg',
                'name'          => 'Kepemimpinan',
                'slug'          => 'kepemimpinan',
                'description'   => 'Belajar Kepemimpinan',
                'module'        => 'base_module.pdf',
                'published_at'  => Time::now(),
                'created_at'    => Time::now(),
                'updated_at'    => Time::now()
            ],
            [
                'id'            => 6,
                'thumbnail'     => 'base_thumbnail.jpg',
                'name'          => 'Perawatan Armada',
                'slug'          => 'perawatan-armada',
                'description'   => 'Belajar Perawatan Armada',
                'module'        => 'base_module.pdf',
                'published_at'  => Time::now(),
                'created_at'    => Time::now(),
                'updated_at'    => Time::now()
            ],
            [
                'id'            => 7,
                'thumbnail'     => 'base_thumbnail.jpg',
                'name'          => 'Perawatan Server',
                'slug'          => 'perawatan-server',
                'description'   => 'Belajar Perawatan Server',
                'module'        => 'base_module.pdf',
                'published_at'  => Time::now(),
                'created_at'    => Time::now(),
                'updated_at'    => Time::now()
            ],
        ];
        
        $this->db->table('tb_courses')->insertBatch($data_courses);
        $data_subcourses = [
            [
                'id'            => 1,
                'title'         => 'Introduction to CodeIgniter 4',
                'course_id'     => 1,
                'sequence'      => 1,
                'created_at'    => Time::now(),
                'updated_at'    => Time::now()
            ],
            [
                'id'            => 2,
                'title'         => 'Setting Up CodeIgniter 4',
                'course_id'     => 1,
                'sequence'      => 2,
                'created_at'    => Time::now(),
                'updated_at'    => Time::now()
            ],
            [
                'id'            => 3,
                'title'         => 'Introduction to Laravel 8',
                'course_id'     => 2,
                'sequence'      => 1,
                'created_at'    => Time::now(),
                'updated_at'    => Time::now()
            ],
            [
                'id'            => 4,
                'title'         => 'Setting Up Laravel 8',
                'course_id'     => 2,
                'sequence'      => 2,
                'created_at'    => Time::now(),
                'updated_at'    => Time::now()
            ],
            [
                'id'            => 5,
                'title'         => 'Introduction to PHP 8',
                'course_id'     => 3,
                'sequence'      => 1,
                'created_at'    => Time::now(),
                'updated_at'    => Time::now()
            ],
            [
                'id'            => 6,
                'title'         => 'PHP 8 New Features',
                'course_id'     => 3,
                'sequence'      => 2,
                'created_at'    => Time::now(),
                'updated_at'    => Time::now()
            ],
            [
                'id'            => 7,
                'title'         => 'Public Speaking Basics',
                'course_id'     => 4,
                'sequence'      => 1,
                'created_at'    => Time::now(),
                'updated_at'    => Time::now()
            ],
            [
                'id'            => 8,
                'title'         => 'Advanced Public Speaking Techniques',
                'course_id'     => 4,
                'sequence'      => 2,
                'created_at'    => Time::now(),
                'updated_at'    => Time::now()
            ],
            [
                'id'            => 9,
                'title'         => 'Introduction to Leadership',
                'course_id'     => 5,
                'sequence'      => 1,
                'created_at'    => Time::now(),
                'updated_at'    => Time::now()
            ],
            [
                'id'            => 10,
                'title'         => 'Leadership Styles and Techniques',
                'course_id'     => 5,
                'sequence'      => 2,
                'created_at'    => Time::now(),
                'updated_at'    => Time::now()
            ],
            [
                'id'            => 11,
                'title'         => 'Fleet Maintenance Basics',
                'course_id'     => 6,
                'sequence'      => 1,
                'created_at'    => Time::now(),
                'updated_at'    => Time::now()
            ],
            [
                'id'            => 12,
                'title'         => 'Advanced Fleet Maintenance',
                'course_id'     => 6,
                'sequence'      => 2,
                'created_at'    => Time::now(),
                'updated_at'    => Time::now()
            ],
            [
                'id'            => 13,
                'title'         => 'Introduction to Server Maintenance',
                'course_id'     => 7,
                'sequence'      => 1,
                'created_at'    => Time::now(),
                'updated_at'    => Time::now()
            ],
            [
                'id'            => 14,
                'title'         => 'Advanced Server Maintenance Techniques',
                'course_id'     => 7,
                'sequence'      => 2,
                'created_at'    => Time::now(),
                'updated_at'    => Time::now()
            ],
        ];
        
        $this->db->table('tb_subcourses')->insertBatch($data_subcourses);

        $data_video_materials = [
            [
                'id'            => 1,
                'subcourse_id'  => 1,
                'video_url'     => 'XseAIiQY9Hk',
                'created_at'    => Time::now(),
                'updated_at'    => Time::now()
            ],
            [
                'id'            => 2,
                'subcourse_id'  => 2,
                'video_url'     => 'XseAIiQY9Hk',
                'created_at'    => Time::now(),
                'updated_at'    => Time::now()
            ],
            [
                'id'            => 3,
                'subcourse_id'  => 3,
                'video_url'     => 'XseAIiQY9Hk',
                'created_at'    => Time::now(),
                'updated_at'    => Time::now()
            ],
            [
                'id'            => 4,
                'subcourse_id'  => 4,
                'video_url'     => 'XseAIiQY9Hk',
                'created_at'    => Time::now(),
                'updated_at'    => Time::now()
            ],
            [
                'id'            => 5,
                'subcourse_id'  => 5,
                'video_url'     => 'XseAIiQY9Hk',
                'created_at'    => Time::now(),
                'updated_at'    => Time::now()
            ],
            [
                'id'            => 6,
                'subcourse_id'  => 6,
                'video_url'     => 'XseAIiQY9Hk',
                'created_at'    => Time::now(),
                'updated_at'    => Time::now()
            ],
            [
                'id'            => 7,
                'subcourse_id'  => 7,
                'video_url'     => 'XseAIiQY9Hk',
                'created_at'    => Time::now(),
                'updated_at'    => Time::now()
            ],
            [
                'id'            => 8,
                'subcourse_id'  => 8,
                'video_url'     => 'XseAIiQY9Hk',
                'created_at'    => Time::now(),
                'updated_at'    => Time::now()
            ],
            [
                'id'            => 9,
                'subcourse_id'  => 9,
                'video_url'     => 'XseAIiQY9Hk',
                'created_at'    => Time::now(),
                'updated_at'    => Time::now()
            ],
            [
                'id'            => 10,
                'subcourse_id'  => 10,
                'video_url'     => 'XseAIiQY9Hk',
                'created_at'    => Time::now(),
                'updated_at'    => Time::now()
            ],
            [
                'id'            => 11,
                'subcourse_id'  => 11,
                'video_url'     => 'XseAIiQY9Hk',
                'created_at'    => Time::now(),
                'updated_at'    => Time::now()
            ],
            [
                'id'            => 12,
                'subcourse_id'  => 12,
                'video_url'     => 'XseAIiQY9Hk',
                'created_at'    => Time::now(),
                'updated_at'    => Time::now()
            ],
            [
                'id'            => 13,
                'subcourse_id'  => 13,
                'video_url'     => 'XseAIiQY9Hk',
                'created_at'    => Time::now(),
                'updated_at'    => Time::now()
            ],
            [
                'id'            => 14,
                'subcourse_id'  => 14,
                'video_url'     => 'XseAIiQY9Hk',
                'created_at'    => Time::now(),
                'updated_at'    => Time::now()
            ],
        ];        

        $this->db->table('tb_video_materials')->insertBatch($data_video_materials);

        // $data_test_materials = [];

        // $this->db->table('tb_test_materials')->insertBatch($data_test_materials);
        
        // $data_option_materials = [];

        // $this->db->table('tb_option_tests')->insertBatch($data_option_materials);
    
        $data_learning_paths = [
            [
                'id'            => 1,
                'thumbnail'     => 'base_thumbnail.jpg',
                'name'          => 'IT Fundamentals',
                'slug'          => 'it-fundamentals',
                'description'   => 'Comprehensive bootcamp covering IT fundamentals.',
                'period'        => 4,
                'published_at'  => Time::now(),
                'created_at'    => Time::now(),
                'updated_at'    => Time::now()
            ],
            [
                'id'            => 2,
                'thumbnail'     => 'base_thumbnail.jpg',
                'name'          => 'Marketing',
                'slug'          => 'marketing',
                'description'   => 'Comprehensive bootcamp covering marketing fundamentals.',
                'period'        => 6,
                'published_at'  => Time::now(),
                'created_at'    => Time::now(),
                'updated_at'    => Time::now()
            ],
        ];
        
        $this->db->table('tb_learning_paths')->insertBatch($data_learning_paths);
    
        $data_learning_path_courses = [
            [
                'id'                => 1,
                'learning_path_id'  => 1,
                'course_id'         => 1,
                'sequence'          => 1,
                'created_at'        => Time::now(),
                'updated_at'        => Time::now()
            ],
            [
                'id'                => 2,
                'learning_path_id'  => 1,
                'course_id'         => 2,
                'sequence'          => 2,
                'created_at'        => Time::now(),
                'updated_at'        => Time::now()
            ],
            [
                'id'                => 3,
                'learning_path_id'  => 1,
                'course_id'         => 3,
                'sequence'          => 3,
                'created_at'        => Time::now(),
                'updated_at'        => Time::now()
            ],
            [
                'id'                => 4,
                'learning_path_id'  => 1,
                'course_id'         => 4,
                'sequence'          => 4,
                'created_at'        => Time::now(),
                'updated_at'        => Time::now()
            ],
            [
                'id'                => 5,
                'learning_path_id'  => 2,
                'course_id'         => 5,
                'sequence'          => 1,
                'created_at'        => Time::now(),
                'updated_at'        => Time::now()
            ],
            [
                'id'                => 6,
                'learning_path_id'  => 2,
                'course_id'         => 6,
                'sequence'          => 2,
                'created_at'        => Time::now(),
                'updated_at'        => Time::now()
            ],
            [
                'id'                => 7,
                'learning_path_id'  => 2,
                'course_id'         => 7,
                'sequence'          => 3,
                'created_at'        => Time::now(),
                'updated_at'        => Time::now()
            ],
            [
                'id'                => 8,
                'learning_path_id'  => 2,
                'course_id'         => 4,
                'sequence'          => 4,
                'created_at'        => Time::now(),
                'updated_at'        => Time::now()
            ],
        ];

        $this->db->table('tb_learning_path_courses')->insertBatch($data_learning_path_courses);
    }
}