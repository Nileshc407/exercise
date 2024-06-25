<?php
#Mpesa topup 

SELECT SUM(`Paid_amount`) as Mpesa_paid_amt, SUM(`Mpesa_Paid_Amount`) as Mpesa_topup_amount FROM `igain_transaction` WHERE `Company_id` =9 AND `Trans_type` = 1 AND `Mpesa_TransID` !=""9 AND `Trans_type` = 1 AND `Mpesa_TransID` !=""

#Maintrunk topup

SELECT SUM(`Topup_amount`) as Maintrunk_topup_amt FROM `igain_transaction` WHERE `Company_id` =9 AND `Trans_type` = 1 AND `Mpesa_TransID` =""

#Pos purchase  

SELECT SUM(`Purchase_amount`) as pos_purchase_amt FROM `igain_transaction` WHERE `Company_id` =9 AND `Trans_type`=2 


#Pos reedem

SELECT SUM(`Redeem_points`) as Total_pos_redeem  FROM `igain_transaction` WHERE `Company_id` =9  AND `Trans_type` =2


#Maintrunk redeem 

SELECT SUM(`Redeem_points`) as Total_debit  FROM `igain_transaction` WHERE `Company_id` =9  AND `Trans_type` =3

#Points Liability

SELECT sum(`Topup_amount`) as Issued, SUM(`Redeem_points`) as Used, sum(`Topup_amount`) - SUM(`Redeem_points`) as Liability FROM `igain_transaction` WHERE `Company_id` = 9

?>