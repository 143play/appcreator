<?php
class M_creator extends CI_Model
{
    function getAllApps()
    {
        $this->db->select("app.*, category.categoryName, template.templateName");
        $this->db->from("app");
        $this->db->join("category","category.id=app.categoryId");
        $this->db->join("template", "template.id=app.templateId");
        //$this->db->join("platform","platform.id=app.platformId");
        return $this->db->get()->result();
    }

    function addNew($data, $tableName)
    {
        $this->db->insert($tableName, $data);
        return $this->db->insert_id();
    }

    function getAllTemplates()
    {
        $this->db->select("template.*, category.categoryName");
        $this->db->from("template");
        $this->db->join("category", "category.id = template.categoryId");
        return $this->db->get()->result();
    }
}