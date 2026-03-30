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
    public function getNewRegistrationsLast6Months() {
    $this->db->query("
        SELECT 
            m.month_num,
            MONTHNAME(DATE_SUB(CURDATE(), INTERVAL (5 - m.idx) MONTH)) AS month_name,
            
            (SELECT COUNT(*) 
             FROM graduates g 
             WHERE MONTH(g.created_at) = m.month_num 
             AND g.created_at >= DATE_SUB(CURDATE(), INTERVAL 6 MONTH)
            ) AS graduates,
            
            (SELECT COUNT(*) 
             FROM companies c 
             WHERE MONTH(c.created_at) = m.month_num 
             AND c.created_at >= DATE_SUB(CURDATE(), INTERVAL 6 MONTH)
            ) AS companies
        FROM (
            SELECT MONTH(DATE_SUB(CURDATE(), INTERVAL 5 MONTH)) AS month_num, 0 AS idx
            UNION SELECT MONTH(DATE_SUB(CURDATE(), INTERVAL 4 MONTH)), 1
            UNION SELECT MONTH(DATE_SUB(CURDATE(), INTERVAL 3 MONTH)), 2
            UNION SELECT MONTH(DATE_SUB(CURDATE(), INTERVAL 2 MONTH)), 3
            UNION SELECT MONTH(DATE_SUB(CURDATE(), INTERVAL 1 MONTH)), 4
            UNION SELECT MONTH(CURDATE()), 5
        ) m
        ORDER BY m.idx
    ");

    return $this->db->resultSet(); // مصفوفة من الصفوف جاهزة للاستخدام
}
}