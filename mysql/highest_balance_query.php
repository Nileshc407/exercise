<?php
#1st highest
SELECT max(Current_balance) FROM igain_enrollment_master 

#with details
SELECT `Enrollement_id`,`First_name`,`Last_name`,`Current_balance` FROM `igain_enrollment_master` WHERE Current_balance = (SELECT MAX(Current_balance) FROM igain_enrollment_master)

o/p =>
1281 QALIB BASIMAHIBO  662578

#2ed highest
SELECT max(Current_balance) FROM igain_enrollment_master WHERE Current_balance < (SELECT MAX(Current_balance) FROM igain_enrollment_master)

#with details
SELECT `Enrollement_id`,`First_name`,`Last_name`,`Current_balance` FROM `igain_enrollment_master` WHERE Current_balance = (SELECT MAX(Current_balance) FROM igain_enrollment_master WHERE Current_balance < (SELECT MAX(Current_balance) FROM igain_enrollment_master))

o/p=>
813 Trevor Kanja 384826

#3rd highest
SELECT MAX(Current_balance) FROM igain_enrollment_master WHERE Current_balance < (SELECT MAX(Current_balance) FROM igain_enrollment_master WHERE Current_balance < (SELECT MAX(Current_balance) FROM igain_enrollment_master))

#with details
SELECT `Enrollement_id`,`First_name`,`Last_name`,`Current_balance` FROM `igain_enrollment_master` WHERE Current_balance = (SELECT MAX(Current_balance) FROM igain_enrollment_master WHERE Current_balance < (SELECT MAX(Current_balance) FROM igain_enrollment_master WHERE Current_balance < (SELECT MAX(Current_balance) FROM igain_enrollment_master)))

o/p=>
808 Mohammed Khalid 372775

?>