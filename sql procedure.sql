
select * from sales_inventory.category;
select * from sales_inventory.employees;
select * from sales_inventory.job;
select * from sales_inventory.location;
select * from sales_inventory.manager;
select * from sales_inventory.product;
select * from sales_inventory.supplier;
select * from sales_inventory.type;
select * from sales_inventory.user;

-- Demanding particuar information of people
DELIMITER //

create PROCEDURE getLocation_(in id int)
BEGIN
	SELECT *  FROM sales_inventory.employees where employee_id=id;
    Select * From sales_inventory.location where loc_id=(select location_id from sales_inventory.employees where employee_id=id);
	Select * From sales_inventory.supplier where locatio_id=(select location_id from sales_inventory.employees where employee_id=id);
	
END // 
DELIMITER ;
-- Display using cursor
DELIMITER $$
CREATE PROCEDURE DIS()
BEGIN
DECLARE ID INT DEFAULT 0;
DECLARE FINISHED INT DEFAULT 0;
DECLARE first_name CHAR(20) DEFAULT "";
DECLARE last_name CHAR(20) DEFAULT "";
DECLARE ph_no INT DEFAULT 0;
DECLARE CUREMP CURSOR FOR SELECT * FROM customer;
DECLARE CONTINUE HANDLER FOR NOT FOUND SET FINISHED = 1;
CREATE TEMPORARY table OUTPUT_EMP (Emp_Id int ,cusF_name char(20),cusL_name char(20),CusP_no int);
OPEN CUREMP;
GETREC: LOOP
        FETCH CUREMP INTO ID,first_name,last_name,ph_no;
        IF FINISHED = 1 THEN LEAVE GETREC;
        END IF;
        INSERT INTO OUTPUT_EMP (Emp_Id ,cusF_name ,cusL_name ,CusP_no ) VALUES (ID,first_name,last_name,ph_no);
        -- Select * from OUTPUT_EMP;
        END LOOP GETREC;
        CLOSE CUREMP;
        SELECT * FROM OUTPUT_EMP;
END $$

DELIMITER ;


-- update salary for given id
DELIMITER $$
CREATE PROCEDURE update_salary(IN id int)
BEGIN
   SET SQL_SAFE_UPDATES=0;
  UPDATE sales_inventory.job SET salary = (salary+(0.05*salary)) WHERE job_id=id;
  SELECT * FROM  sales_inventory.job where job_id=id;
END $$
DELIMITER ;

DELIMITER $$
CREATE PROCEDURE DELETE_NAME(IN user_n varchar(20))
BEGIN
DELETE FROM sales_inventory.user WHERE user_name=user_n;
SELECT * FROM EMP_DETAILS;
END $$
DELIMITER ;
SELECT AVG(price),name FROM sales_inventory.product GROUP BY name ;
SELECT * FROM sales_inventory.product WHERE price =  (SELECT MIN(price) FROM product);
Select * From sales_inventory.manager where loc_id=4;
select job_title,avg(salary) AvgSalary from sales_inventory.job group by job_title order by AvgSalary asc;
ALTER TABLE sales_inventory.type drop  type;
Select * from sales_inventory.user;

CALL DELETE_NAME('nam89');
call getLocation_(56789);
call DIS();
call update_salary(678);

