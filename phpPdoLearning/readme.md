#Learning PHP PDO

PDO allows not to tight down to one database.

## requirement

> create database
	create table articles

> create config.php file 


***not proper arrangement with print_r($row) ==>
Array ( [0] => Array ( [id] => 1 [title] => php [subject] => pdo [description] => learning about php pdo ) [1] => Array ( [id] => 2 [title] => java [subject] => jdbc [description] => learning java jbdc ) )
1 
***

###while using###

***print_r($row,true)==>
Array
(
    [0] => Array
        (
            [id] => 1
            [title] => php
            [subject] => pdo
            [description] => learning about php pdo
        )
    [1] => Array
        (
            [id] => 2
            [title] => java
            [subject] => jdbc
            [description] => learning java jbdc
        )
)***