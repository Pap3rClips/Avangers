<?php
$employeesStatement = $mysqlClient->prepare('SELECT * FROM employees');
$employeesStatement->execute();
$employees = $employeesStatement->fetchAll();