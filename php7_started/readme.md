# Getting Started with PHP7
 How to take advantage of PHP7 from PHP5...?
 	- Just replace the PHP5 version with PHP7 version and take the advantage of PHP7
### Basic level Topics 

- Scalar Type Declaration
	- a data type in function as paramater similar to c,c++
		- String,Float,Boolean and Integer

* Return Type Declaration 

* The Null Coalese Operator
	- Return first operand if it is exist and Not null, otherwise return second operand

* The Spaceship Operator

* Session Start Operator
	- session_start() function accepts an array of options to override the session configuration directives set in php.ini. These options supports session.lazy_write, which is by default on and causes PHP to overwrite any session file if the session data has changed.

* Ananymous  classes
	- basically it means that class with no name.
* Filtered unserialization 
	- useful in security. avoid security injection.
* Grouping use


### Advanced Level Topics

* Anonymous Function
	- or closure: can access variables imported from the outside scope without modifying original value.
	- Benefits: Improve code readability , Avoid polluting global namespace.

* Recursive Function

* Interlization(i18n)

* Regular Expression

* Heredoc

* Date and Time

* Dependency Management

* Following Standard PSR

## PHP OOPS

* __constructor() 
	- It is self invoke function when ever object is created.
	- Only one constructor in a class allows.

