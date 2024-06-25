<?php 
// find 3rd highest balance / salary

SELECT MAX(`Balance`) FROM igain_enrollment WHERE `Balance` < (SELECT MAX(`Balance`) FROM igain_enrollment WHERE `Balance` < (SELECT MAX(`Balance`) FROM igain_enrollment))


// find max / min 

SELECT * FROM `igain_enrollment` WHERE `id` = (SELECT MAX(`id`) FROM igain_enrollment)

SELECT * FROM `igain_enrollment` WHERE `id` = (SELECT MIN(`id`) FROM igain_enrollment)


// ref https://www.youtube.com/watch?v=AZzTHWF7tEc

//ref https://drive.google.com/file/d/1-GHBE5iSGXMbGXtQP0Z3bzoKnXEGJUrK/view?pli=1

// find montly purchase / sale and sort it by desc order

SELECT Year(`Trans_date`) as Year,Month(`Trans_date`) as Month, SUM(`Purchase_amount`) as PurchaseAmt FROM igain_transaction GROUP BY Year(`Trans_date`),Month(`Trans_date`) ORDER BY PurchaseAmt DESC

// write a query to list the candidate who  possess all required skills for the job. sort the output by id in ascending order

SELECT id, count(skill) as skillcount form application where skill IN('javascipt','php','mysql') group by id having count(skill) = 3 order by id asc

SELECT *, COUNT(`skill`) as skillcount FROM `skill_master` WHERE `skill` IN('php','mysql','javascript') GROUP BY emp_id HAVING COUNT(`skill`) = 3

// BETWEEN 
SELECT * FROM `igain_enrollment_master` WHERE `User_id` = 1 AND `Company_id` = 9 AND `joined_date` = '1970-01-01 03:00:00' AND `source` ='Flat File' AND `last_visit_date` BETWEEN '2023-08-24 00:00:00' AND '2023-08-24 23:59:59'

SELECT COUNT(`Enrollement_id`) as Total_record FROM `igain_enrollment_master` WHERE `User_id` = 1 AND `Company_id` = 9 AND `source` ='Flat File' AND `joined_date` = '1970-01-01 03:00:00' AND `last_visit_date` BETWEEN '2023-08-24 00:00:00' AND '2023-08-24 23:59:59'

SELECT IE.`Enrollement_id`,CONCAT(IE.`First_name`,' ',IE.`Last_name`) as member_name, COUNT(DISTINCT(IT.Bill_no)) as Total_trans FROM `igain_enrollment_master` as IE JOIN `igain_transaction` as IT ON IT.`Enrollement_id` = IE.`Enrollement_id` WHERE IT.Company_id = 7 and IT.Trans_date BETWEEN "2023-09-01:00:00:00" AND "2023-09-02:00:00:00" GROUP BY IT.Enrollement_id  
ORDER BY `IE`.`Enrollement_id`  DESC     


//self join
SELECT CONCAT(e.First_name, ' ',e.Last_name) as customer,CONCAT(m.First_name,' ',m.Last_name) as User FROM igain_enrollment_master e LEFT JOIN igain_enrollment_master m ON e.Create_user_id = m.Enrollement_id;

?>