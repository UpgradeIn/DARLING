<?php
namespace App\Models;

use CodeIgniter\Model;

class LearningPathCourseModel extends Model
{
    protected $table            = 'tb_learning_path_courses';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['learning_path_id', 'course_id', 'sequence', 'created_at', 'updated_at'];

    // Dates
    protected $useTimestamps = true;

    public function getLearningPathCoursesForUserPage($learning_path_id)
    {
        $builder = $this->db->table($this->table);
        $builder->select('tb_learning_path_courses.sequence, tb_courses.thumbnail as course_thumbnail, tb_courses.name as course_name, tb_courses.slug as course_slug, tb_courses.skill_type as skill_type_course, tb_courses.course_type as course_type');
        $builder->join('tb_courses', 'tb_courses.id = tb_learning_path_courses.course_id');
        $builder->where('tb_learning_path_courses.learning_path_id', $learning_path_id);
        $builder->orderBy('tb_learning_path_courses.sequence', 'ASC');
        return $builder->get()->getResult();
    }
}