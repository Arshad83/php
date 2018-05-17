#Learning PHP PDO#

PDO allows not to tight down to one database.

## requirement##

> create database
	create table articles

> create config.php file 

###difference between print_r('one argument') and print_r('one argument',true)###
***not proper arrangement with print_r($row) ==>
Array ( [0] => Array ( [id] => 1 [title] => php [subject] => pdo [description] => learning about php pdo ) [1] => Array ( [id] => 2 [title] => java [subject] => jdbc [description] => learning java jbdc ) )
1***


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