<?php
// model
class Admin extends CI_Model {
     function getAdmin($email)
     {
         return $this->db->query("SELECT * FROM users WHERE email =? AND user_type = 0", array($email))->row_array();
     }
     function get_course_by_id($course_id)
     {
         return $this->db->query("SELECT * FROM courses WHERE id = ?", array($course_id))->row_array();
     }
     function add_course($course)
     {
         $query = "INSERT INTO Courses (title, description, created_at) VALUES (?,?,?)";
         $values = array($course['title'], $course['description'], date("Y-m-d, H:i:s")); 
         return $this->db->query($query, $values);
     }
}
?>