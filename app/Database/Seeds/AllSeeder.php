<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class AllSeeder extends Seeder
{
    public function run()
    {
        // DATA ROLES
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

        // DATA USERS
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

        // DATA COURSES
        $data_courses = [
            [
                'id'            => 1,
                'thumbnail'     => 'base_thumbnail.jpg',
                'name'          => 'CodeIgniter 4',
                'slug'          => 'codeigniter-4',
                'description'   => 'Belajar CodeIgniter 4',
                'module'        => 'base_module.pdf',
                'status'        => 'publish',
                'skill_type'    => 'soft-skill',
                'course_type'   => 'mandatory',
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
                'status'        => 'publish',
                'skill_type'    => 'hard-skill',
                'course_type'   => 'mandatory',
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
                'status'        => 'publish',
                'skill_type'    => 'soft-skill',
                'course_type'   => 'optional',
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
                'status'        => 'publish',
                'skill_type'    => 'soft-skill',
                'course_type'   => 'optional',
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
                'status'        => 'publish',
                'skill_type'    => 'soft-skill',
                'course_type'   => 'optional',
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
                'status'        => 'publish',
                'skill_type'    => 'hard-skill',
                'course_type'   => 'mandatory',
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
                'status'        => 'publish',
                'skill_type'    => 'soft-skill',
                'course_type'   => 'mandatory',
                'published_at'  => Time::now(),
                'created_at'    => Time::now(),
                'updated_at'    => Time::now()
            ],
        ];

        // DATA SUBCOURSES
        $data_subcourses = [];
        $csc = 1;
        for ($i = 1; $i <= 28; $i++) {
            $data_subcourses[] = [
                'id'            => $i,
                'title'         => 'Pre Test',
                'course_id'     => $csc,
                'sequence'      => 1,
                'type'          => 'test',
                'created_at'    => Time::now(),
                'updated_at'    => Time::now()
            ];
            $i = $i + 1;
            $data_subcourses[] = [
                'id'            => $i,
                'title'         => 'Subcourse 1',
                'course_id'     => $csc,
                'sequence'      => 2,
                'type'          => 'video',
                'created_at'    => Time::now(),
                'updated_at'    => Time::now()
            ];
            $i = $i + 1;
            $data_subcourses[] = [
                'id'            => $i,
                'title'         => 'Subcourse 2',
                'course_id'     => $csc,
                'sequence'      => 3,
                'type'          => 'video',
                'created_at'    => Time::now(),
                'updated_at'    => Time::now()
            ];
            $i = $i + 1;
            $data_subcourses[] = [
                'id'            => $i,
                'title'         => 'Post Test',
                'course_id'     => $csc,
                'sequence'      => 4,
                'type'          => 'test',
                'created_at'    => Time::now(),
                'updated_at'    => Time::now()
            ];
            $csc = $csc + 1;
        }

        // DATA VIDEO MATERIALS
        $data_video_materials = [];
        $scv = 1;
        for ($i = 1; $i <= 14; $i++) {
            $scv = $scv + 1;
            $data_video_materials[] = [
                'id'            => $i,
                'subcourse_id'  => $scv,
                'video_url'     => 'XseAIiQY9Hk',
                'created_at'    => Time::now(),
                'updated_at'    => Time::now()
            ];
            $scv = $scv + 1;
            $i = $i + 1;
            $data_video_materials[] = [
                'id'            => $i,
                'subcourse_id'  => $scv,
                'video_url'     => 'XseAIiQY9Hk',
                'created_at'    => Time::now(),
                'updated_at'    => Time::now()
            ];
            $scv = $scv + 2;
        }

        // DATA TEST MATERIALS
        $data_test_materials = [];

        $sct = 1;
        for ($i = 1; $i <= 28; $i++) {
            $data_test_materials[] = [
                'id'            => $i,
                'subcourse_id'  => $sct,
                'sequence'      => 1,
                'content'     => 'PIlih jawaban yang benar',
                'type_test'     => 'pre_test',
                'created_at'    => Time::now(),
                'updated_at'    => Time::now()
            ];
            $i = $i + 1;
            $data_test_materials[] = [
                'id'            => $i,
                'subcourse_id'  => $sct,
                'sequence'      => 2,
                'content'     => 'PIlih jawaban yang benar',
                'type_test'     => 'pre_test',
                'created_at'    => Time::now(),
                'updated_at'    => Time::now()
            ];

            $sct = $sct + 3;
            $i = $i + 1;

            $data_test_materials[] = [
                'id'            => $i,
                'subcourse_id'  => $sct,
                'sequence'      => 1,
                'content'     => 'PIlih jawaban yang benar',
                'type_test'     => 'post_test',
                'created_at'    => Time::now(),
                'updated_at'    => Time::now()
            ];
            $i = $i + 1;
            $data_test_materials[] = [
                'id'            => $i,
                'subcourse_id'  => $sct,
                'sequence'      => 2,
                'content'     => 'PIlih jawaban yang benar',
                'type_test'     => 'post_test',
                'created_at'    => Time::now(),
                'updated_at'    => Time::now()
            ];

            $sct = $sct + 1;
        }

        // DATA OPTION MATERIALS
        $data_option_materials = [];
        for ($i = 1; $i <= 28; $i++) {
            $chars = 'abcd';
            $randomChar = $chars[rand(0, strlen($chars) - 1)];
            $data_option_materials[] = [
                'test_material_id'  => $i,
                'answer'           => 'Pilihan A',
                'correct'        => ($randomChar === 'a') ? 1 : 0,
                'created_at'        => Time::now(),
                'updated_at'        => Time::now()
            ];
            $data_option_materials[] = [
                'test_material_id'  => $i,
                'answer'           => 'Pilihan B',
                'correct'        => ($randomChar === 'b') ? 1 : 0,
                'created_at'        => Time::now(),
                'updated_at'        => Time::now()
            ];
            $data_option_materials[] = [
                'test_material_id'  => $i,
                'answer'           => 'Pilihan C',
                'correct'        => ($randomChar === 'c') ? 1 : 0,
                'created_at'        => Time::now(),
                'updated_at'        => Time::now()
            ];
            $data_option_materials[] = [
                'test_material_id'  => $i,
                'answer'           => 'Pilihan D',
                'correct'        => ($randomChar === 'd') ? 1 : 0,
                'created_at'        => Time::now(),
                'updated_at'        => Time::now()
            ];
        }

        // DATA LEARNING PATHS
        $data_learning_paths = [
            [
                'id'            => 1,
                'thumbnail'     => 'base_thumbnail.jpg',
                'name'          => 'IT Fundamentals',
                'slug'          => 'it-fundamentals',
                'description'   => 'Comprehensive bootcamp covering IT fundamentals.',
                'period'        => 4,
                'status'        => 'publish', 
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
                'status'        => 'publish', 
                'published_at'  => Time::now(),
                'created_at'    => Time::now(),
                'updated_at'    => Time::now()
            ],
        ];

        // DATA LEARNING PATH COURSES
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


        $this->db->table('tb_roles')->insertBatch($data_roles);
        $this->db->table('tb_users')->insertBatch($data_users);
        $this->db->table('tb_courses')->insertBatch($data_courses);
        $this->db->table('tb_subcourses')->insertBatch($data_subcourses);
        $this->db->table('tb_video_materials')->insertBatch($data_video_materials);
        $this->db->table('tb_test_materials')->insertBatch($data_test_materials);
        $this->db->table('tb_option_tests')->insertBatch($data_option_materials);
        $this->db->table('tb_learning_paths')->insertBatch($data_learning_paths);
        $this->db->table('tb_learning_path_courses')->insertBatch($data_learning_path_courses);
    }
}
