<?php
class GraduateModel extends Model{
    public function __construct()
    {
        return parent::__construct();
    }
    public function getEmploymentRatesLast6Months() {
    $this->db->query("
        SELECT MONTHNAME(employment_date) AS month, COUNT(*) AS total
        FROM graduates
        WHERE employment_date >= DATE_SUB(CURDATE(), INTERVAL 6 MONTH)
        GROUP BY MONTH(employment_date)
        ORDER BY MONTH(employment_date)
    ");
    return $this->db->resultSet(); // مصفوفة من الصفوف
}
}