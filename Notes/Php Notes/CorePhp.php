<?php
//Basic Php Concepts
// https://www.tutorialspoint.com/questions_and_answers.htm
?>
# Introduction Of Php #
	PHP is a server scripting language, and a powerful tool for making dynamic and interactive Web pages.
	PHP is a widely-used, free, and efficient alternative to competitors such as Microsoft's ASP.
	PHP 7 is the latest stable release. 
	
1.What is PHP?
	PHP is an acronym for "PHP: Hypertext Preprocessor"
	PHP is a widely-used, open source scripting language
	PHP scripts are executed on the server
	PHP is free to download and use
	
2.What is a PHP File?
	PHP files can contain text, HTML, CSS, JavaScript, and PHP code
	PHP code are executed on the server, and the result is returned to the browser as plain HTML
	PHP files have extension ".php"
	
3.What Can PHP Do?
	PHP can generate dynamic page content
	PHP can create, open, read, write, delete, and close files on the server
	PHP can collect form data
	PHP can send and receive cookies
	PHP can add, delete, modify data in your database
	PHP can be used to control user-access
	PHP can encrypt data
	
4.Why PHP?
	PHP runs on various platforms (Windows, Linux, Unix, Mac OS X, etc.)
	PHP is compatible with almost all servers used today (Apache, IIS, etc.)
	PHP supports a wide range of databases
	PHP is free. Download it from the official PHP resource: www.php.net
	PHP is easy to learn and runs efficiently on the server side
	
5.What's new in PHP 7
	PHP 7 is much faster than the previous popular stable release (PHP 5.6)
	PHP 7 has improved Error Handling
	PHP 7 supports stricter Type Declarations for function arguments
	PHP 7 supports new operators (like the spaceship operator: <=> )
	and much more! We will cover these changes, and more in the relevant chapters of this tutorial
	PHP 7 has Null Coalescing Operator (??): Provided a shorthand way of handling null values.
	PHP 7 has Anonymous Classes: Enabled the creation of classes without a name.
	
6.Basic PHP Syntax
	A PHP script starts with <?php and ends with ?>:

	<?php
	// PHP code goes here
	?>
	
7.PHP Case Sensitivity
	In PHP, NO keywords (e.g. if, else, while, echo, etc.), classes, functions, and user-defined functions are case-sensitive.
	Php Is partialty case sensitive means-variable name are case sensitive but function name are not case sensitive
	
8.Creating (Declaring) PHP Variables
	In PHP, a variable starts with the $ sign, followed by the name of the variable:

	Example
	<?php
	$txt = "Hello world!";
	$x = 5;
	$y = 10.5;
	?>
	
	# Rules for PHP variables:
		A variable starts with the $ sign, followed by the name of the variable
		A variable name must start with a letter or the underscore character
		A variable name cannot start with a number
		A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
		Variable names are case-sensitive ($age and $AGE are two different variables)

9.PHP Variables Scope
	The scope of a variable is the part of the script where the variable can be referenced/used.
	PHP has three different variable scopes:

	1.local
	2.global
	3.static

	# Global and Local Scope
		# A variable declared outside a function has a GLOBAL SCOPE and can only be accessed outside a function:
	
		Example
		<?php
		$x = 5; // global scope

		function myTest() 
		{
			// using x inside this function will generate an error
			echo "<p>Variable x inside function is: $x</p>";
		} 
		myTest();

		echo "<p>Variable x outside function is: $x</p>";
		?>
		
		# A variable declared within a function has a LOCAL SCOPE and can only be accessed within that function:

		Example
		<?php
		function myTest() 
		{
			$x = 5; // local scope
			echo "<p>Variable x inside function is: $x</p>";
		} 
		myTest();

		// using x outside the function will generate an error
		echo "<p>Variable x outside function is: $x</p>";
		?>
	
	# PHP The static Keyword
		
		Normally, when a function is completed/executed, all of its variables are deleted. However, sometimes we want a local variable NOT to be deleted. We need it for a further job.

		To do this, use the static keyword when you first declare the variable:

		Example
		<?php
		function myTest() 
		{
			static $x = 0;
			echo $x;
			$x++;
		}

		myTest();
		myTest();
		myTest();
		?>
		Output ->   0
					1
					2
					
10.PHP 7 echo and print Statements
	echo and print are more or less the same. They are both used to output data to the screen.
	The differences are small: echo has no return value while print has a return value of 1 so it can be used in expressions. echo can take multiple parameters (although such usage is rare) while print can take one argument. echo is marginally faster than print.
	
	# The PHP echo Statement
		The echo statement can be used with or without parentheses: echo or echo().
		Display Text
		The following example shows how to output text with the echo command (notice that the text can contain HTML markup):

		Example
		<?php
		echo "<h2>PHP is Fun!</h2>";
		echo "Hello world!<br>";
		echo "I'm about to learn PHP!<br>";
		echo "This ", "string ", "was ", "made ", "with multiple parameters.";
		?>
	# The PHP print Statement
		The print statement can be used with or without parentheses: print or print().
		Display Text
		The following example shows how to output text with the print command (notice that the text can contain HTML markup):

		Example
		<?php
		print "<h2>PHP is Fun!</h2>";
		print "Hello world!<br>";
		print "I'm about to learn PHP!";
		?>
11.PHP Data Types
	Variables can store data of different types, and different data types can do different things.
	PHP supports the following data types:
	String
	Integer
	Float (floating point numbers - also called double)
	Boolean
	Array
	Object
	NULL
	Resource
	
	# PHP String
		A string is a sequence of characters, like "Hello world!".
		A string can be any text inside quotes. You can use single or double quotes:
		Example
		<?php 
		$x = "Hello world!";
		$y = 'Hello world!';

		echo $x;
		echo "<br>"; 
		echo $y;
		?>
	# PHP Integer
		An integer data type is a non-decimal number between -2,147,483,648 and 2,147,483,647.
		Rules for integers:     
		An integer must have at least one digit
		An integer must not have a decimal point
		An integer can be either positive or negative
		Integers can be specified in three formats: decimal (10-based), hexadecimal (16-based - prefixed with 0x) or octal (8-based - prefixed with 0)
		In the following example $x is an integer. The PHP var_dump() function returns the data type and value:

		Example
		<?php 
		$x = 5985;
		var_dump($x);
		?>
		
	# PHP Float
		A float (floating point number) is a number with a decimal point or a number in exponential form.
		In the following example $x is a float. The PHP var_dump() function returns the data type and value:
		Example
		<?php 
		$x = 10.365;
		var_dump($x);
		?>
		
	# PHP Boolean
		A Boolean represents two possible states: TRUE or FALSE.
		$x = true;
		$y = false;
		Booleans are often used in conditional testing. You will learn more about conditional testing in a later chapter of this tutorial.
		
	# PHP Array
		An array stores multiple values in one single variable.
		In the following example $cars is an array. The PHP var_dump() function returns the data type and value:
		Example
		<?php 
		$cars = array("Volvo","BMW","Toyota");
		var_dump($cars);
		?>
		
	# PHP Object
		An object is a data type which stores data and information on how to process that data.
		In PHP, an object must be explicitly declared.
		First we must declare a class of object. For this, we use the class keyword. A class is a structure that can contain properties and methods:

		Example
		<?php
		class Car 
		{
			function Car() 
			{
				$this->model = "VW";
			}
		}

		// create an object
		$herbie = new Car();

		// show object properties
		echo $herbie->model;
		?>
	# PHP NULL Value
		Null is a special data type which can have only one value: NULL.
		A variable of data type NULL is a variable that has no value assigned to it.
		Tip: If a variable is created without a value, it is automatically assigned a value of NULL.
		
		Variables can also be emptied by setting the value to NULL:

		Example
		<?php
		$x = "Hello world!";
		$x = null;
		var_dump($x);
		?>
	# PHP Resource
		The special resource type is not an actual data type. It is the storing of a reference to functions and resources external to PHP.

		A common example of using the resource data type is a database call.

		We will not talk about the resource type here, since it is an advanced topic.

12.PHP 7 Strings
	A string is a sequence of characters, like "Hello world!".

	# PHP String Functions
	
		1.Get The Length of a String
			
			The PHP strlen() function returns the length of a string.

			The example below returns the length of the string "Hello world!":

			Example
			<?php
			echo strlen("Hello world!"); // outputs 12
			?>
		
		2.Count The Number of Words in a String
			
			The PHP str_word_count() function counts the number of words in a string:

			Example
			<?php
			echo str_word_count("Hello world!"); // outputs 2
			?>
			
		3.Reverse a String
		
			The PHP strrev() function reverses a string:

			Example
			<?php
			echo strrev("Hello world!"); // outputs !dlrow olleH
			?>
			
		4.Search For a Specific Text Within a String
			
			The PHP strpos() function searches for a specific text within a string.

			If a match is found, the function returns the character position of the first match. If no match is found, it will return FALSE.

			The example below searches for the text "world" in the string "Hello world!":

			Example
			<?php
			echo strpos("Hello world!", "world"); // outputs 6
			?>
			
		5.Replace Text Within a String
		
			The PHP str_replace() function replaces some characters with some other characters in a string.

			The example below replaces the text "world" with "Dolly":

			Example
			<?php
			echo str_replace("world", "Dolly", "Hello world!"); // outputs Hello Dolly!
			?>

13.PHP 7 Constants
	Constants are like variables except that once they are defined they cannot be changed or undefined.

	PHP Constants
	A constant is an identifier (name) for a simple value. The value cannot be changed during the script.

	A valid constant name starts with a letter or underscore (no $ sign before the constant name).

	Note: Unlike variables, constants are automatically global across the entire script.

	Create a PHP Constant
	To create a constant, use the define() function.

	Syntax
	define(name, value, case-insensitive)
	Parameters:

	name: Specifies the name of the constant
	value: Specifies the value of the constant
	case-insensitive: Specifies whether the constant name should be case-insensitive. Default is false
	The example below creates a constant with a case-sensitive name:

	Example
	<?php
	define("GREETING", "Welcome to W3Schools.com!");
	echo GREETING;
	?>
	The example below creates a constant with a case-insensitive name:

	Example
	<?php
	define("GREETING", "Welcome to W3Schools.com!", true);
	echo greeting;
	?>
	
	# PHP7 Constant Arrays
		In PHP7, you can create a Array constant using the define() function.

		The example below creates an Array constant:

		Example
		<?php
		define("cars", [
			"Alfa Romeo",
			"BMW",
			"Toyota"
		]);
		echo cars[0];
		?>
	# Constants are Global
		Constants are automatically global and can be used across the entire script.

		The example below uses a constant inside a function, even if it is defined outside the function:

		Example
		<?php
		define("GREETING", "Welcome to W3Schools.com!");

		function myTest()
		{
			echo GREETING;
		}
		 
		myTest();
		?>
		
14.PHP Operators
	Operators are used to perform operations on variables and values.

	PHP divides the operators in the following groups:

	Arithmetic operators
	Assignment operators
	Comparison operators
	Increment/Decrement operators
	Logical operators
	String operators
	Array operators
	Conditional assignment operators
	
		1.PHP Arithmetic Operators
			The PHP arithmetic operators are used with numeric values to perform common arithmetical operations, such as addition, subtraction, multiplication etc.

			Operator	Name	Example	Result	Show it
			+	Addition	$x + $y	Sum of $x and $y	
			-	Subtraction	$x - $y	Difference of $x and $y	
			*	Multiplication	$x * $y	Product of $x and $y	
			/	Division	$x / $y	Quotient of $x and $y	
			%	Modulus	$x % $y	Remainder of $x divided by $y	
			**
		2.PHP Assignment Operators
			The PHP assignment operators are used with numeric values to write a value to a variable.

			The basic assignment operator in PHP is "=". It means that the left operand gets set to the value of the assignment expression on the right.

			Assignment	Same as...	Description	Show it
			x = y	x = y	The left operand gets set to the value of the expression on the right	
			x += y	x = x + y	Addition	
			x -= y	x = x - y	Subtraction	
			x *= y	x = x * y	Multiplication	
			x /= y	x = x / y	Division	
			x %= y	x = x % y	Modulus	
			
		3.PHP Comparison Operators
			The PHP comparison operators are used to compare two values (number or string):

			Operator	Name	Example	Result	Show it
			==	Equal	$x == $y	Returns true if $x is equal to $y	
			===	Identical	$x === $y	Returns true if $x is equal to $y, and they are of the same type	
			!=	Not equal	$x != $y	Returns true if $x is not equal to $y	
			<>	Not equal	$x <> $y	Returns true if $x is not equal to $y	
			!==	Not identical	$x !== $y	Returns true if $x is not equal to $y, or they are not of the same type	
			>	Greater than	$x > $y	Returns true if $x is greater than $y	
			<	Less than	$x < $y	Returns true if $x is less than $y	
			>=	Greater than or equal to	$x >= $y	Returns true if $x is greater than or equal to $y	
			<=	Less than or equal to	$x <= $y	Returns true if $x is less than or equal to $y	
			<=>	Spaceship	$x <=> $y	Returns an integer less than, equal to, or greater than zero, depending on if $x is less than, equal to, or greater than $y. Introduced in PHP 7.
		
		4.PHP Increment / Decrement Operators
			The PHP increment operators are used to increment a variable's value.

			The PHP decrement operators are used to decrement a variable's value.

			Operator	Name	Description	Show it
			++$x	Pre-increment	Increments $x by one, then returns $x	
			$x++	Post-increment	Returns $x, then increments $x by one	
			--$x	Pre-decrement	Decrements $x by one, then returns $x	
			$x--	Post-decrement	Returns $x, then decrements $x by one
			
		5.PHP Logical Operators
			The PHP logical operators are used to combine conditional statements.

			Operator	Name	Example	Result	Show it
			and	And	$x and $y	True if both $x and $y are true	
			or	Or	$x or $y	True if either $x or $y is true	
			xor	Xor	$x xor $y	True if either $x or $y is true, but not both	
			&&	And	$x && $y	True if both $x and $y are true	
			||	Or	$x || $y	True if either $x or $y is true	
			!	Not	!$x	True if $x is not true
		
		6.PHP String Operators
			PHP has two operators that are specially designed for strings.

			Operator	Name	Example	Result	Show it
			.	Concatenation	$txt1 . $txt2	Concatenation of $txt1 and $txt2	
			.=	Concatenation assignment	$txt1 .= $txt2	Appends $txt2 to $txt1	
			
		7.PHP Array Operators
			The PHP array operators are used to compare arrays.

			Operator	Name	Example	Result	Show it
			+	Union	$x + $y	Union of $x and $y	
			==	Equality	$x == $y	Returns true if $x and $y have the same key/value pairs	
			===	Identity	$x === $y	Returns true if $x and $y have the same key/value pairs in the same order and of the same types	
			!=	Inequality	$x != $y	Returns true if $x is not equal to $y	
			<>	Inequality	$x <> $y	Returns true if $x is not equal to $y	
			!==	Non-identity	$x !== $y	Returns true if $x is not identical to $y
			
		8.PHP Conditional Assignment Operators
			The PHP conditional assignment operators are used to set a value depending on conditions:

			Operator	Name	Example	Result	Show it
			?:	Ternary	$x = expr1 ? expr2 : expr3	Returns the value of $x.
			The value of $x is expr2 if expr1 = TRUE.
			The value of $x is expr3 if expr1 = FALSE	
			??	Null coalescing	$x = expr1 ?? expr2	Returns the value of $x.
			The value of $x is expr1 if expr1 exists, and is not NULL.
			If expr1 does not exist, or is NULL, the value of $x is expr2.
			Introduced in PHP 7
			
15.PHP 7 if...else...elseif Statements
	Conditional statements are used to perform different actions based on different conditions.
	PHP Conditional Statements
	Very often when you write code, you want to perform different actions for different conditions. You can use conditional statements in your code to do this.

	In PHP we have the following conditional statements:

	if statement - executes some code if one condition is true
	if...else statement - executes some code if a condition is true and another code if that condition is false
	if...elseif...else statement - executes different codes for more than two conditions
	switch statement - selects one of many blocks of code to be executed
	
	1. PHP - The if Statement
		The if statement executes some code if one condition is true.

		Syntax
		if (condition) {
			code to be executed if condition is true;
		}
		The example below will output "Have a good day!" if the current time (HOUR) is less than 20:

		Example
		<?php
		$t = date("H");

		if ($t < "20") 
		{
			echo "Have a good day!";
		}
		?>
	2.PHP - The if...else Statement
		The if...else statement executes some code if a condition is true and another code if that condition is false.

		Syntax
		if (condition) {
			code to be executed if condition is true;
		} else {
			code to be executed if condition is false;
		}
		The example below will output "Have a good day!" if the current time is less than 20, and "Have a good night!" otherwise:

		Example
		<?php
		$t = date("H");

		if ($t < "20")
		{
			echo "Have a good day!";
		}
		else 
		{
			echo "Have a good night!";
		}
		?>
	3.PHP - The if...elseif...else Statement
		The if...elseif...else statement executes different codes for more than two conditions.

		Syntax
		if (condition) {
			code to be executed if this condition is true;
		} elseif (condition) {
			code to be executed if first condition is false and this condition is true;
		} else {
			code to be executed if all conditions are false;
		}
		The example below will output "Have a good morning!" if the current time is less than 10, and "Have a good day!" if the current time is less than 20. Otherwise it will output "Have a good night!":

		Example
		<?php
		$t = date("H");

		if ($t < "10") 
		{
			echo "Have a good morning!";
		}
		elseif ($t < "20") 
		{
			echo "Have a good day!";
		} 
		else 
		{
			echo "Have a good night!";
		}
		?>
		
16.PHP - The switch Statement
	
		The switch statement is used to perform different actions based on different conditions.
		The PHP switch Statement
		Use the switch statement to select one of many blocks of code to be executed.

		Syntax
		switch (n) {
			case label1:
				code to be executed if n=label1;
				break;
			case label2:
				code to be executed if n=label2;
				break;
			case label3:
				code to be executed if n=label3;
				break;
			...
			default:
				code to be executed if n is different from all labels;
		}
		This is how it works: First we have a single expression n (most often a variable), that is evaluated once. The value of the expression is then compared with the values for each case in the structure. If there is a match, the block of code associated with that case is executed. Use break to prevent the code from running into the next case automatically. The default statement is used if no match is found.

		Example
		<?php
		$favcolor = "red";

		switch ($favcolor) {
			case "red":
				echo "Your favorite color is red!";
				break;
			case "blue":
				echo "Your favorite color is blue!";
				break;
			case "green":
				echo "Your favorite color is green!";
				break;
			default:
				echo "Your favorite color is neither red, blue, nor green!";
		}
		?>
17.PHP 7 while Loops
	PHP while loops execute a block of code while the specified condition is true.
	PHP Loops
	Often when you write code, you want the same block of code to run over and over again in a row. Instead of adding several almost equal code-lines in a script, we can use loops to perform a task like this.

	In PHP, we have the following looping statements:

	1.while - loops through a block of code as long as the specified condition is true
		do...while - loops through a block of code once, and then repeats the loop as long as the specified condition is true
		for - loops through a block of code a specified number of times
		foreach - loops through a block of code for each element in an array
		The PHP while Loop
		The while loop executes a block of code as long as the specified condition is true.

		Syntax
		while (condition is true) {
			code to be executed;
		}
		The example below first sets a variable $x to 1 ($x = 1). Then, the while loop will continue to run as long as $x is less than, or equal to 5 ($x <= 5). $x will increase by 1 each time the loop runs ($x++):

		Example
		<?php 
		$x = 1; 

		while($x <= 5) 
		{
			echo "The number is: $x <br>";
			$x++;
		}  ?>
	2.The PHP do...while Loop
		The do...while loop will always execute the block of code once, it will then check the condition, and repeat the loop while the specified condition is true.

		Syntax
		do {
			code to be executed;
		} while (condition is true);
		The example below first sets a variable $x to 1 ($x = 1). Then, the do while loop will write some output, and then increment the variable $x with 1. Then the condition is checked (is $x less than, or equal to 5?), and the loop will continue to run as long as $x is less than, or equal to 5:

		Example
		<?php 
		$x = 1; 

		do 
		{
			echo "The number is: $x <br>";
			$x++;
		} 
		while ($x <= 5);
		?>
		Notice that in a do while loop the condition is tested AFTER executing the statements within the loop. This means that the do while loop would execute its statements at least once, even if the condition is false the first time.

		The example below sets the $x variable to 6, then it runs the loop, and then the condition is checked:

		Example
		<?php 
		$x = 6;

		do 
		{
			echo "The number is: $x <br>";
			$x++;
		} 
		while ($x <= 5);
		?>
18.PHP 7 for Loops
	The for loop is used when you know in advance how many times the script should run.

	Syntax
	for (init counter; test counter; increment counter) {
		code to be executed;
	}
	Parameters:

	init counter: Initialize the loop counter value
	test counter: Evaluated for each loop iteration. If it evaluates to TRUE, the loop continues. If it evaluates to FALSE, the loop ends.
	increment counter: Increases the loop counter value
	The example below displays the numbers from 0 to 10:

	Example
	<?php 
	for ($x = 0; $x <= 10; $x++) 
	{
		echo "The number is: $x <br>";
	} 
	?>
	
	2.The PHP foreach Loop
		The foreach loop works only on arrays, and is used to loop through each key/value pair in an array.

		Syntax
		foreach ($array as $value) {
			code to be executed;
		}
		For every loop iteration, the value of the current array element is assigned to $value and the array pointer is moved by one, until it reaches the last array element.

		The following example demonstrates a loop that will output the values of the given array ($colors):

		Example
		<?php 
		$colors = array("red", "green", "blue", "yellow"); 

		foreach ($colors as $value) 
		{
			echo "$value <br>";
		}
		?>
		
19.PHP 7 Functions
	The real power of PHP comes from its functions; it has more than 1000 built-in functions.

	PHP User Defined Functions
	
	Besides the built-in PHP functions, we can create our own functions.

	A function is a block of statements that can be used repeatedly in a program.

	A function will not execute immediately when a page loads.

	A function will be executed by a call to the function.

	Create a User Defined Function in PHP
	A user-defined function declaration starts with the word function:

	Syntax
	function functionName() {
		code to be executed;
	}
	Note: A function name can start with a letter or underscore (not a number).

	Tip: Give the function a name that reflects what the function does!

	Function names are NOT case-sensitive.

	In the example below, we create a function named "writeMsg()". The opening curly brace ( { ) indicates the beginning of the function code and the closing curly brace ( } ) indicates the end of the function. The function outputs "Hello world!". To call the function, just write its name:

	Example
	<?php
	function writeMsg() 
	{
		echo "Hello world!";
	}

	writeMsg(); // call the function
	?>
	
20.PHP is a Loosely Typed Language
	In the example above, notice that we did not have to tell PHP which data type the variable is.

	PHP automatically associates a data type to the variable, depending on its value. Since the data types are not set in a strict sense, you can do things like adding a string to an integer without causing and error.

	In PHP 7, type declarations were added. This gives us an option to specify the data type expected when declaring a function, and by enabling the strict requirement, it will throw a "Fatal Error" on a type mismatch.

	In the following example we try to add a number and a string with without the strict requirement:

	Example
	<?php
	function addNumbers(int $a, int $b)  
	{
		return $a + $b;
	}
	echo addNumbers(5, "5 days"); 
	// since strict is NOT enabled "5 days" is changed to int(5), and it will return 10
	?>
	In the following example we try to add a number and a string with with the strict requirement:

	Example
	<?php declare(strict_types=1); // strict requirement

	function addNumbers(int $a, int $b) 
	{
		return $a + $b;
	}
	echo addNumbers(5, "5 days"); 
	// since strict is enabled and "5 days" is not an integer, an error will be thrown
	?>
	To specify strict we need to set declare(strict_types=1);. This must be the on the very first line of the PHP file. Declaring strict specifies that function calls made in that file must strictly adhere to the specified data types

	The strict declaration can make code easier to read, and it forces things to be used in the intended way.

	Going forward in this tutorial, we will use the strict requirement.
	
21.PHP Default Argument Value
	The following example shows how to use a default parameter. If we call the function setHeight() without arguments it takes the default value as argument:

	Example
	<?php declare(strict_types=1); // strict requirement
	function setHeight(int $minheight = 50) 
	{
		echo "The height is : $minheight <br>";
	}

	setHeight(350);
	setHeight(); // will use the default value of 50
	setHeight(135);
	setHeight(80);
	?>
22.PHP Functions - Returning values
	To let a function return a value, use the return statement:

	Example
	<?php declare(strict_types=1); // strict requirement
	function sum(int $x, int $y) 
	{
		$z = $x + $y;
		return $z;
	}

	echo "5 + 10 = " . sum(5, 10) . "<br>";
	echo "7 + 13 = " . sum(7, 13) . "<br>";
	echo "2 + 4 = " . sum(2, 4); ?>
	
23.PHP Return Type Declarations
	PHP 7 also supports Type Declarations for the return statement. Like with the type declaration for function arguments, by enabling the strict requirement, it will throw a "Fatal Error" on a type mismatch.

	To declare a type for the function return, add a colon ( : ) and the type right before the opening curly ( { )bracket when declaring the function.

	In the following example we specify the return type for the function:
	
	Example
		<?php declare(strict_types=1); // strict requirement
		function addNumbers(float $a, float $b) : float 
		{
			return $a + $b;
		}
		echo addNumbers(1.2, 5.2); 
		?> Output => 6.4
		
24.PHP 7 Arrays
	An array stores multiple values in one single variable:
	
	Example
		<?php
		$cars = array("Volvo", "BMW", "Toyota");
		echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
		?>
		
	1.What is an Array?
		An array is a special variable, which can hold more than one value at a time.

		If you have a list of items (a list of car names, for example), storing the cars in single variables could look like this:

		$cars1 = "Volvo";
		$cars2 = "BMW";
		$cars3 = "Toyota";
		
		However, what if you want to loop through the cars and find a specific one? And what if you had not 3 cars, but 300?

		The solution is to create an array!

		An array can hold many values under a single name, and you can access the values by referring to an index number.
		
	2.Create an Array in PHP
		In PHP, the array() function is used to create an array:

		array();
		
	3.In PHP, there are three types of arrays:
	
		1.Indexed arrays - Arrays with a numeric index
		2.Associative arrays - Arrays with named keys
		3.Multidimensional arrays - Arrays containing one or more arrays
		
		1.PHP Indexed Arrays
			There are two ways to create indexed arrays:

			The index can be assigned automatically (index always starts at 0), like this:

			$cars = array("Volvo", "BMW", "Toyota");
			
			or the index can be assigned manually:

			$cars[0] = "Volvo";
			$cars[1] = "BMW";
			$cars[2] = "Toyota";
			
			The following example creates an indexed array named $cars, assigns three elements to it, and then prints a text containing the array values:

			Example
				<?php
				$cars = array("Volvo", "BMW", "Toyota");
				echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
			?>
			# Get The Length of an Array - The count() Function
				The count() function is used to return the length (the number of elements) of an array:

				Example
					<?php
					$cars = array("Volvo", "BMW", "Toyota");
					echo count($cars);
					?>

			# Loop Through an Indexed Array
				To loop through and print all the values of an indexed array, you could use a for loop, like this:

				Example
					<?php
					$cars = array("Volvo", "BMW", "Toyota");
					$arrlength = count($cars);

					for($x = 0; $x < $arrlength; $x++)
					{
						echo $cars[$x];
						echo "<br>";
					}
				?>
				
		2.PHP Associative Arrays
			Associative arrays are arrays that use named keys that you assign to them.

			There are two ways to create an associative array: 

			$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
			or:

			$age['Peter'] = "35";
			$age['Ben'] = "37";
			$age['Joe'] = "43";
			
			The named keys can then be used in a script:

			Example
				<?php
				$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
				echo "Peter is " . $age['Peter'] . " years old.";
			?>
			
			1.Loop Through an Associative Array
				To loop through and print all the values of an associative array, you could use a foreach loop, like this:

				Example
					<?php
					$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

					foreach($age as $x => $x_value) 
					{
						echo "Key=" . $x . ", Value=" . $x_value;
						echo "<br>";
					}
				?>
				
		3.Multidimensional Arrays
			Multidimensional arrays will be explained in the PHP advanced section.

			Complete PHP Array Reference
			For a complete reference of all array functions, go to our complete PHP Array Reference.
			https://www.w3schools.com/php7/php7_ref_array.asp
			
			The reference contains a brief description, and examples of use, for each function!	
			
		4.implode function
			Join array elements with a string:
			The implode() function returns a string from the elements of an array.
			
			Note: The implode() function accept its parameters in either order. However, for consistency with explode(), you should use the documented order of arguments.

			Note: The separator parameter of implode() is optional. However, it is recommended to always use two parameters for backwards compatibility.

			Note: This function is binary-safe.
			
			#Example
				<?php
					$arr = array("Hello","World","Beautiful","Day!","2019");
					echo implode (" ",$arr); 	
				?>
				
		5.explode function
			Break a string into an array:
			Definition and Usage
			The explode() function breaks a string into an array.

			Note: The "separator" parameter cannot be an empty string.

			Note: This function is binary-safe.

			Syntax
			explode(separator,string,limit)
		
			#Example
				<?php
					$str ="Hello World Beautiful Day! 2019";
					print_r(explode(" ",$str));
					echo "<br>";
					$result = explode(" ",$str);
					echo print_r($result);
				?>
			
25.PHP 7 Sorting Arrays
	The elements in an array can be sorted in alphabetical or numerical order, descending or ascending.
	
	1.PHP - Sort Functions For Arrays
		In this chapter, we will go through the following PHP array sort functions:

		1.sort() - sort arrays in ascending order
		2.rsort() - sort arrays in descending order
		3.asort() - sort associative arrays in ascending order, according to the value		
		4.arsort() - sort associative arrays in descending order, according to the value
		5.ksort() - sort associative arrays in ascending order, according to the key
		6.krsort() - sort associative arrays in descending order, according to the key
			
			1.Sort Array in Ascending Order - sort()
				The following example sorts the elements of the $cars array in ascending alphabetical order:

				Example
					<?php
						$cars = array("Volvo", "BMW", "Toyota");
						sort($cars);
					?>
					<?php
						$numbers = array(4, 6, 2, 22, 11);
						sort($numbers);
					?>
					<?php
						$numbers = array(4, 6, 2, 22, 11);
						sort($numbers);

						$arrlength = count($numbers);
						for($x = 0; $x < $arrlength; $x++) 
						{
							echo $numbers[$x];
							echo "<br>";
						}
					?>
			2.Sort Array in Descending Order - rsort()
				The following example sorts the elements of the $cars array in descending alphabetical order:

				Example
					<?php
						$cars = array("Volvo", "BMW", "Toyota");
						rsort($cars);
					?>
					
					<?php
						$cars = array("Volvo", "BMW", "Toyota");
						rsort($cars);

						$clength = count($cars);
						for($x = 0; $x < $clength; $x++) 
						{
							echo $cars[$x];
							echo "<br>";
						}
					?>
					<?php
						$numbers = array(4, 6, 2, 22, 11);
						rsort($numbers);
					?>
					<?php
						$numbers = array(4, 6, 2, 22, 11);
						rsort($numbers);

						$arrlength = count($numbers);
						for($x = 0; $x < $arrlength; $x++) 
						{
							echo $numbers[$x];
							echo "<br>";
						}
					?>
					
			3.Sort Array (Ascending Order), According to Value - asort()
				The following example sorts an associative array in ascending order, according to the value:

				Example
					<?php
						$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
						asort($age);
					?>
					<?php
						$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
						asort($age);

						foreach($age as $x => $x_value)
						{
							echo "Key=" . $x . ", Value=" . $x_value;
							echo "<br>";
						}
					?>
			4.Sort Array (Descending Order), According to Value - arsort()
				The following example sorts an associative array in descending order, according to the value:

				Example
					<?php
						$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
						arsort($age);
					?>
					<?php
						$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
						arsort($age);

						foreach($age as $x => $x_value) 
						{
							echo "Key=" . $x . ", Value=" . $x_value;
							echo "<br>";
						}
					?>
			5.Sort Array (Ascending Order), According to Key - ksort()
				The following example sorts an associative array in ascending order, according to the key:
				
				Example
					<?php
						$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
						ksort($age);
					?>
					<?php
						$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
						ksort($age);

						foreach($age as $x => $x_value)
						{
							echo "Key=" . $x . ", Value=" . $x_value;
							echo "<br>";
						}
					?>

			6.Sort Array (Descending Order), According to Key - krsort()
				The following example sorts an associative array in descending order, according to the key:

				Example
					<?php
						$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
						krsort($age);
					?>
					<?php
						$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
						krsort($age);

						foreach($age as $x => $x_value) 
						{
							echo "Key=" . $x . ", Value=" . $x_value;
							echo "<br>";
						}
					?>
					
			Complete PHP Array Reference
			For a complete reference of all array functions, go to our complete PHP Array Reference.
			https://www.w3schools.com/php7/php7_ref_array.asp
			
			The reference contains a brief description, and examples of use, for each function!
			
26.PHP 7 Global Variables - Superglobals
	Superglobals were introduced in PHP 4.1.0, and are built-in variables that are always available in all scopes.
	
	1.PHP Global Variables - Superglobals
		Several predefined variables in PHP are "superglobals", which means that they are always accessible, regardless of scope - and you can access them from any function, class or file without having to do anything special.

		The PHP superglobal variables are:

		1.$GLOBALS
		2.$_SERVER
		3.$_REQUEST
		4.$_POST
		5.$_GET
		6.$_FILES
		7.$_ENV
		8.$_COOKIE
		9.$_SESSION
		
			1.PHP $GLOBALS  	
				$GLOBALS is a PHP super global variable which is used to access global variables from anywhere in the PHP script (also from within functions or methods).

				PHP stores all global variables in an array called $GLOBALS[index]. The index holds the name of the variable.

				The example below shows how to use the super global variable $GLOBALS:

				Example
				<?php 
					$x = 75; 
					$y = 25;
					 
					function addition() 
					{ 
						$GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y']; 
					}
					 
					addition(); 
					echo $z; 
				?> Oputput => 100
		
			2.PHP $_SERVER
				$_SERVER is a PHP super global variable which holds information about headers, paths, and script locations.

				The example below shows how to use some of the elements in $_SERVER:

				Example
					<?php 
						echo $_SERVER['PHP_SELF'];
						echo "<br>";
						echo $_SERVER['SERVER_NAME'];
						echo "<br>";
						echo $_SERVER['HTTP_HOST'];
						echo "<br>";
						echo $_SERVER['HTTP_REFERER'];
						echo "<br>";
						echo $_SERVER['HTTP_USER_AGENT'];
						echo "<br>";
						echo $_SERVER['SCRIPT_NAME'];
					?>
					Output =>  /demo/demo_global_server.php
								35.194.26.41
								35.194.26.41
								https://tryphp.w3schools.com/showphp.php?filename=demo_global_server
								Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36 OPR/58.0.3135.127
								/demo/demo_glo
					The following table lists the most important elements that can go inside $_SERVER:

					Element/Code	          					 Description
					$_SERVER['PHP_SELF']			Returns the filename of the currently executing script
					$_SERVER['GATEWAY_INTERFACE']	Returns the version of the Common Gateway Interface (CGI) the server is using
					$_SERVER['SERVER_ADDR']			Returns the IP address of the host server
					$_SERVER['SERVER_NAME']			Returns the name of the host server (such as www.w3schools.com)
					$_SERVER['SERVER_SOFTWARE']		Returns the server identification string (such as Apache/2.2.24)
					$_SERVER['SERVER_PROTOCOL']		Returns the name and revision of the information protocol (such as HTTP/1.1)
					$_SERVER['REQUEST_METHOD']		Returns the request method used to access the page (such as POST)
					$_SERVER['REQUEST_TIME']		Returns the timestamp of the start of the request (such as 1377687496)
					$_SERVER['QUERY_STRING']		Returns the query string if the page is accessed via a query string
					$_SERVER['HTTP_ACCEPT']			Returns the Accept header from the current request
					$_SERVER['HTTP_ACCEPT_CHARSET']	Returns the Accept_Charset header from the current request (such as utf-8,ISO-8859-1)
					$_SERVER['HTTP_HOST']			Returns the Host header from the current request
					$_SERVER['HTTP_REFERER']		Returns the complete URL of the current page (not reliable because not all user-agents support it)
					$_SERVER['HTTPS']	Is the script queried through a secure HTTP protocol
					$_SERVER['REMOTE_ADDR']	Returns the IP address from where the user is viewing the current page
					$_SERVER['REMOTE_HOST']	Returns the Host name from where the user is viewing the current page
					$_SERVER['REMOTE_PORT']	Returns the port being used on the user's machine to communicate with the web server
					$_SERVER['SCRIPT_FILENAME']	Returns the absolute pathname of the currently executing script
					$_SERVER['SERVER_ADMIN']	Returns the value given to the SERVER_ADMIN directive in the web server configuration file (if your script runs on a virtual host, it will be the value defined for that virtual host) (such as someone@w3schools.com)
					$_SERVER['SERVER_PORT']	Returns the port on the server machine being used by the web server for communication (such as 80)
					$_SERVER['SERVER_SIGNATURE']	Returns the server version and virtual host name which are added to server-generated pages
					$_SERVER['PATH_TRANSLATED']	Returns the file system based path to the current script
					$_SERVER['SCRIPT_NAME']	Returns the path of the current script
					$_SERVER['SCRIPT_URI']	Returns the URI of the current page
					
			3.PHP $_REQUEST
				PHP $_REQUEST is used to collect data after submitting an HTML form.

				The example below shows a form with an input field and a submit button. When a user submits the data by clicking on "Submit", the form data is sent to the file specified in the action attribute of the <form> tag. In this example, we point to this file itself for processing form data. If you wish to use another PHP file to process form data, replace that with the filename of your choice. Then, we can use the super global variable $_REQUEST to collect the value of the input field:

				Example
					<html>
					<body>

					<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
					  Name: <input type="text" name="fname">
					  <input type="submit">
					</form>

					<?php
						if ($_SERVER["REQUEST_METHOD"] == "POST") 
						{
							// collect value of input field
							$name = $_REQUEST['fname'];
							if (empty($name)) 
							{
								echo "Name is empty";
							} 
							else 
							{
								echo $name;
							}
						}
					?>

					</body>
					</html>
					
			4.PHP $_POST
				PHP $_POST is widely used to collect form data after submitting an HTML form with method="post". $_POST is also widely used to pass variables.

				The example below shows a form with an input field and a submit button. When a user submits the data by clicking on "Submit", the form data is sent to the file specified in the action attribute of the <form> tag. In this example, we point to the file itself for processing form data. If you wish to use another PHP file to process form data, replace that with the filename of your choice. Then, we can use the super global variable $_POST to collect the value of the input field:

				Example
				<html>
				<body>

				<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
				  Name: <input type="text" name="fname">
				  <input type="submit">
				</form>

				<?php
					if ($_SERVER["REQUEST_METHOD"] == "POST")
					{
						// collect value of input field
						$name = $_POST['fname'];
						if (empty($name))
						{
							echo "Name is empty";
						} 
						else 
						{
							echo $name;
						}
					}
				?>

				</body>
				</html>
				
			5.PHP $_GET
				PHP $_GET can also be used to collect form data after submitting an HTML form with method="get".

				$_GET can also collect data sent in the URL.

				Assume we have an HTML page that contains a hyperlink with parameters:

				<html>
				<body>

				<a href="test_get.php?subject=PHP&web=W3schools.com">Test $GET</a>

				</body>
				</html>
				When a user clicks on the link "Test $GET", the parameters "subject" and "web" are sent to "test_get.php", and you can then access their values in "test_get.php" with $_GET.

				The example below shows the code in "test_get.php":

				Example
				<html>
				<body>

				<?php 
					echo "Study " . $_GET['subject'] . " at " . $_GET['web'];
				?>

				</body>
				</html>
				
27.PHP 7 Form Handling

	1.GET vs. POST
		Both GET and POST create an array (e.g. array( key1 => value1, key2 => value2, key3 => value3, ...)). This array holds key/value pairs, where keys are the names of the form controls and values are the input data from the user.

		Both GET and POST are treated as $_GET and $_POST. These are superglobals, which means that they are always accessible, regardless of scope - and you can access them from any function, class or file without having to do anything special.

		$_GET is an array of variables passed to the current script via the URL parameters.

		$_POST is an array of variables passed to the current script via the HTTP POST method.
	
	2.When to use GET?
		Information sent from a form with the GET method is visible to everyone (all variable names and values are displayed in the URL). GET also has limits on the amount of information to send. The limitation is about 2000 characters. However, because the variables are displayed in the URL, it is possible to bookmark the page. This can be useful in some cases.

		GET may be used for sending non-sensitive data.

		Note: GET should NEVER be used for sending passwords or other sensitive information!

	3.When to use POST?
		Information sent from a form with the POST method is invisible to others (all names/values are embedded within the body of the HTTP request) and has no limits on the amount of information to send.

		Moreover POST supports advanced functionality such as support for multi-part binary input while uploading files to server.

		However, because the variables are not displayed in the URL, it is not possible to bookmark the page.

28.PHP - Validate Name
	The code below shows a simple way to check if the name field only contains letters and whitespace. If the value of the name field is not valid, then store an error message:

	$name = test_input($_POST["name"]);
	if (!preg_match("/^[a-zA-Z ]*$/",$name)) 
	{
	  $nameErr = "Only letters and white space allowed"; 
	}
	
29.PHP - Validate E-mail
	The easiest and safest way to check whether an email address is well-formed is to use PHP's filter_var() function.

	In the code below, if the e-mail address is not well-formed, then store an error message:

	$email = test_input($_POST["email"]);
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
	{
	  $emailErr = "Invalid email format"; 
	}
	
30.PHP - Validate URL
	The code below shows a way to check if a URL address syntax is valid (this regular expression also allows dashes in the URL). If the URL address syntax is not valid, then store an error message:

	$website = test_input($_POST["website"]);
	if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) 
	{
	  $websiteErr = "Invalid URL"; 
	}
	
31.PHP 7 Multidimensional Arrays
	A multidimensional array is an array containing one or more arrays.

	PHP understands multidimensional arrays that are two, three, four, five, or more levels deep. However, arrays more than three levels deep are hard to manage for most people.
	<?php $cars = array
				  (
				  array("Volvo",22,18),
				  array("BMW",15,13),
				  array("Saab",5,2),
				  array("Land Rover",17,15)
				  );
	 ?>
	 
	# Example Of Multidimensional Array
		<?php
			$cars = array(
						array("Volvo",22,18),
						array("BMW",15,13),
						array("Saab",5,2),
						array("Land Rover",17,15)
					);
			 
			for($i=0; $i<4; $i++)
			{
				for($j=0; $j<3; $j++)
				{
					echo $cars[$i][$j]." ";
					echo "<br>";
				}	
			}
		?>
	# Example Of Simple Array
		<?php
		  $cars = array("Volvo",22,18,"BMW",15,13,"Saab",5,2,"Land Rover",17,15);
		 
		  $array_length =count($cars);
		  
		  for($i=0;$i<$array_length;$i++)
		  {
			echo $cars[$i]."<br>";
		  }
		?>
		
	

32.PHP 7 Date and Time
	The PHP date() function is used to format a date and/or a time.

	1. The PHP Date() Function
		Get a Simple Date
		The required format parameter of the date() function specifies how to format the date (or time).

		Here are some characters that are commonly used for dates:

		d - Represents the day of the month (01 to 31)
		m - Represents a month (01 to 12)
		Y - Represents a year (in four digits)
		l (lowercase 'L') - Represents the day of the week
		
		Other characters, like"/", ".", or "-" can also be inserted between the characters to add additional formatting.

		The example below formats today's date in three different ways:

		Example
		<?php
		echo "Today is " . date("Y/m/d") . "<br>";
		echo "Today is " . date("Y.m.d") . "<br>";
		echo "Today is " . date("Y-m-d") . "<br>";
		echo "Today is " . date("l");
		?>
		
	2.Get a Simple Time
		Here are some characters that are commonly used for times:

		H - 24-hour format of an hour (00 to 23)
		h - 12-hour format of an hour with leading zeros (01 to 12)
		i - Minutes with leading zeros (00 to 59)
		s - Seconds with leading zeros (00 to 59)
		a - Lowercase Ante meridiem and Post meridiem (am or pm)
		The example below outputs the current time in the specified format:

		Example
		<?php
			echo "The time is " . date("h:i:s a");
		?> Output=>The time is 12:26:51 pm

33.PHP 7 Include Files
	The include (or require) statement takes all the text/code/markup that exists in the specified file and copies it into the file that uses the include statement.

	Including files is very useful when you want to include the same PHP, HTML, or text on multiple pages of a website.

	PHP include and require Statements
	It is possible to insert the content of one PHP file into another PHP file (before the server executes it), with the include or require statement.

	The include and require statements are identical, except upon failure:

	require will produce a fatal error (E_COMPILE_ERROR) and stop the script
	include will only produce a warning (E_WARNING) and the script will continue
	So, if you want the execution to go on and show users the output, even if the include file is missing, use the include statement. Otherwise, in case of FrameWork, CMS, or a complex PHP application coding, always use the require statement to include a key file to the flow of execution. This will help avoid compromising your application's security and integrity, just in-case one key file is accidentally missing.

	Including files saves a lot of work. This means that you can create a standard header, footer, or menu file for all your web pages. Then, when the header needs to be updated, you can only update the header include file.

	# Syntax
		include 'filename';

		or

		require 'filename';	
	
	# PHP include Examples
		Example 1
			Assume we have a standard footer file called "footer.php", that looks like this:

			<?php
			echo "<p>Copyright &copy; 1999-" . date("Y") . " W3Schools.com</p>";
			?>
			To include the footer file in a page, use the include statement:

		Example
			<html>
			<body>
				<h1>Welcome to my home page!</h1>
				<p>Some text.</p>
				<p>Some more text.</p>
				<?php include 'footer.php';?>
			</body>
			</html>
			
	# PHP include vs. require
		The require statement is also used to include a file into the PHP code.

		However, there is one big difference between include and require; when a file is included with the include statement and PHP cannot find it, the script will continue to execute:

		Example
		<html>
		<body>
			<h1>Welcome to my home page!</h1>
			<?php include 'noFileExists.php';
				echo "I have a $color $car.";
			?>
		</body>
		</html>
			If we do the same example using the require statement, the echo statement will not be executed because the script execution dies after the require statement returned a fatal error:

			Example
		<html>
		<body>

			<h1>Welcome to my home page!</h1>
			<?php require 'noFileExists.php';
			echo "I have a $color $car.";
			?>
		</body>
		</html>
	# Use require when the file is required by the application.
	# Use include when the file is not required and application should continue when file is not found.
	
34.PHP 7 File Handling
	File handling is an important part of any web application. You often need to open and process a file for different tasks.
	
	# PHP Manipulating Files
		PHP has several functions for creating, reading, uploading, and editing files.

		Be careful when manipulating files!

		When you are manipulating files you must be very careful.
		You can do a lot of damage if you do something wrong. Common errors are: editing the wrong file, filling a hard-drive with garbage data, and deleting the content of a file by accident.
		
	1.PHP Open File - fopen()
		A better method to open files is with the fopen() function. This function gives you more options than the readfile() function.
	
		The first parameter of fopen() contains the name of the file to be opened and the second parameter specifies in which mode the file should be opened. The following example also generates a message if the fopen() function is unable to open the specified file:

		Example
			<?php
				$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
				echo fread($myfile,filesize("webdictionary.txt"));
				fclose($myfile);
			?>
		Tip: The fread() and the fclose() functions will be explained below.

		The file may be opened in one of the following modes:
		
	  # Modes	Description
		r	Open a file for read only. File pointer starts at the beginning of the file
		w	Open a file for write only. Erases the contents of the file or creates a new file if it doesn't exist. File pointer starts at the beginning of the file
		a	Open a file for write only. The existing data in file is preserved. File pointer starts at the end of the file. Creates a new file if the file doesn't exist
		x	Creates a new file for write only. Returns FALSE and an error if file already exists
		r+	Open a file for read/write. File pointer starts at the beginning of the file
		w+	Open a file for read/write. Erases the contents of the file or creates a new file if it doesn't exist. File pointer starts at the beginning of the file
		a+	Open a file for read/write. The existing data in file is preserved. File pointer starts at the end of the file. Creates a new file if the file doesn't exist
		x+	Creates a new file for read/write. Returns FALSE and an error if file already exists
		
		# Example Of read file
			<?php 
				$demo_file=fopen("demo2.txt","r");
				echo fread($demo_file,filesize("demo2.txt"));
				fclose($demo_file);
			?>
		# Example Of Write file
			<?php
				$demo_file =fopen("demo2.txt","w");
				$text="Demo write file using for demo2";
				fwrite($demo_file,$text);
				echo "File Write<br>";
				fclose($demo_file);

			?>
		#Example Of append File
			<?php
				$demo_file =fopen("demo2.txt","a");
				$text="Demo write file using for demo3";
				fwrite($demo_file,$text);
				echo "File Write<br>";

				$demo_file =fopen("demo2.txt","r");
				echo fread($demo_file,filesize("demo2.txt"));
				fclose($demo_file);

			?>
		# Example Of delete File
			<?php 
				/* $demo_file=fopen("demo2.txt","r");
				echo fread($demo_file,filesize("demo2.txt"));				
				fclose($demo_file);  */
				$file = "demo2.txt";
				unlink($file);
			?>

35.PHP 7 File Upload

	#Example Of Upload File
		<html>
		<body>
			<form name="fileUp" method="post" action="#" enctype="multipart/form-data">
				<input type="file" name="input_file" id="input_file">
				<input type="submit" name="submit" value="sumbit">
			</form>
		</body>
		</html>
		<?php
			if(isset($_POST['submit']))
			{
				$target_path ="D:/";
				$file_path = $target_path.basename($_FILES['input_file']['name']);
				 
				if(move_uploaded_file($_FILES['input_file']['tmp_name'],$file_path))
				{
					echo "File_uploaded!!!!!!!!";
				}
				else
				{
				   echo "error!!!";
				}
			}
		?>
		
	https://www.w3schools.com/php7/php7_file_upload.asp
	
36.PHP 5 Cookies
	A cookie is often used to identify a user.
	
	1.What is a Cookie?
		A cookie is often used to identify a user. A cookie is a small file that the server embeds on the user's computer. Each time the same computer requests a page with a browser, it will send the cookie too. With PHP, you can both create and retrieve cookie values.
		
	2.Create Cookies With PHP
		A cookie is created with the setcookie() function.

		Syntax
		
			setcookie(name, value, expire, path, domain, secure, httponly);
			
			Only the name parameter is required. All other parameters are optional.
			
	3.PHP Create/Retrieve a Cookie		
		The following example creates a cookie named "user" with the value "John Doe". The cookie will expire after 30 days (86400 * 30). The "/" means that the cookie is available in entire website (otherwise, select the directory you prefer).

		We then retrieve the value of the cookie "user" (using the global variable $_COOKIE). We also use the isset() function to find out if the cookie is set:
		
		Example
		<?php
			$cookie_name = "user";
			$cookie_value = "John Doe";
			setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
		?>
		<html>
		<body>

		<?php
			if(!isset($_COOKIE[$cookie_name])) 
			{
				echo "Cookie named '" . $cookie_name . "' is not set!";
			} 
			else 
			{
				echo "Cookie '" . $cookie_name . "' is set!<br>";
				echo "Value is: " . $_COOKIE[$cookie_name];
			}
		?>

		</body>
		</html>
		Note: The setcookie() function must appear BEFORE the <html> tag.
		
		Note: The value of the cookie is automatically URLencoded when sending the cookie, and automatically decoded when received (to prevent URLencoding, use setrawcookie() instead).
	
	4.Modify a Cookie Value
		To modify a cookie, just set (again) the cookie using the setcookie() function:

		Example
		<?php
			$cookie_name = "user";
			$cookie_value = "Alex Porter";
			setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
		?>
		<html>
		<body>

		<?php
			if(!isset($_COOKIE[$cookie_name])) 
			{
				echo "Cookie named '" . $cookie_name . "' is not set!";
			} 
			else
			{
				echo "Cookie '" . $cookie_name . "' is set!<br>";
				echo "Value is: " . $_COOKIE[$cookie_name];
			}
		?>

		</body>
		</html>
		
	5.Delete a Cookie
		To delete a cookie, use the setcookie() function with an expiration date in the past:

		Example
			<?php
			// set the expiration date to one hour ago
				setcookie("user", "", time() - 3600);
			?>
			<html>
			<body>

			<?php
				echo "Cookie 'user' is deleted.";
			?>

			</body>
			</html>
			
	6.Check if Cookies are Enabled
		The following example creates a small script that checks whether cookies are enabled. First, try to create a test cookie with the setcookie() function, then count the $_COOKIE array variable:
		
		Example
			<?php
				setcookie("test_cookie", "test", time() + 3600, '/');
			?>
			<html>
			<body>

			<?php
				if(count($_COOKIE) > 0)
				{
					echo "Cookies are enabled.";
				} else {
					echo "Cookies are disabled.";
				}
			?>

			</body>
			</html>
		
		#Exercise:
			Create a cookie named "username".

			("username", "John", time() + (86400 * 30), "/");

37.PHP 5 Sessions
	A session is a way to store information (in variables) to be used across multiple pages.

	Unlike a cookie, the information is not stored on the users computer.
	
	1.What is a PHP Session?
		When you work with an application, you open it, do some changes, and then you close it. This is much like a Session. The computer knows who you are. It knows when you start the application and when you end. But on the internet there is one problem: the web server does not know who you are or what you do, because the HTTP address doesn't maintain state.
		
		Session variables solve this problem by storing user information to be used across multiple pages (e.g. username, favorite color, etc). By default, session variables last until the user closes the browser.
		
		So; Session variables hold information about one single user, and are available to all pages in one application.

		Tip: If you need a permanent storage, you may want to store the data in a database.
		
	2.Start a PHP Session
		A session is started with the session_start() function.		
		Session variables are set with the PHP global variable: $_SESSION.
		
		Now, let's create a new page called "demo_session1.php". In this page, we start a new PHP session and set some session variables:
	
		Example
		<?php
		// Start the session
			session_start();
		?>
		<!DOCTYPE html>
		<html>
		<body>

		<?php
			// Set session variables
			$_SESSION["favcolor"] = "green";
			$_SESSION["favanimal"] = "cat";
			echo "Session variables are set.";
		?>

		</body>
		</html>
	Note: The session_start() function must be the very first thing in your document. Before any HTML tags.
	
	3.Get PHP Session Variable Values
		Next, we create another page called "demo_session2.php". From this page, we will access the session information we set on the first page ("demo_session1.php").

		Notice that session variables are not passed individually to each new page, instead they are retrieved from the session we open at the beginning of each page (session_start()).

		Also notice that all session variable values are stored in the global $_SESSION variable:

		Example
		<?php
			session_start();
		?>
		<!DOCTYPE html>
		<html>
		<body>

		<?php
			// Echo session variables that were set on previous page
			echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
			echo "Favorite animal is " . $_SESSION["favanimal"] . ".";
		?>

		</body>
		</html>
		
		#Another way to show all the session variable values for a user session is to run the following code:

		Example
			<?php
				session_start();
			?>
			<!DOCTYPE html>
			<html>
			<body>

			<?php
				print_r($_SESSION);
			?>

			</body>
			</html>
			
	4.Modify a PHP Session Variable
		To change a session variable, just overwrite it:
		
		Example
			<?php
				session_start();
			?>
			<!DOCTYPE html>
			<html>
			<body>

			<?php
				// to change a session variable, just overwrite it 
				$_SESSION["favcolor"] = "yellow";
				print_r($_SESSION);
			?>

			</body>
			</html>
	5.Destroy a PHP Session
		To remove all global session variables and destroy the session, use session_unset() and session_destroy():
		
		Example
			<?php
				session_start();
			?>
			<!DOCTYPE html>
			<html>
			<body>

			<?php
				// remove all session variables
				session_unset(); 

				// destroy the session 
				session_destroy(); 
			?>

			</body>
			</html>
			
38.PHP 7 Filters
	Validating data = Determine if the data is in proper form.

	Sanitizing data = Remove any illegal character from the data.
	
	#The PHP Filter Extension
	PHP filters are used to validate and sanitize external input.

	The PHP filter extension has many of the functions needed for checking user input, and is designed to make data validation easier and quicker.

	The filter_list() function can be used to list what the PHP filter extension offers:

	Example
		<table>
		  <tr>
			<td>Filter Name</td>
			<td>Filter ID</td>
		  </tr>
		  <?php
		  foreach (filter_list() as $id =>$filter) {
			  echo '<tr><td>' . $filter . '</td><td>' . filter_id($filter) . '</td></tr>';
		  }
		  ?>
		</table>
		
	#Example
		<?php
			//filter
			$email='nileshc@miracle.com';
			if(filter_var($email,FILTER_VALIDATE_EMAIL) == TRUE)
			{
				echo $email.' is valid email address<br>';
			}
			else
			{
				echo $email.' is not valid email address<br>';
			} 

			$number=101;
			if(filter_var($number,FILTER_VALIDATE_INT) == TRUE)
			{
				echo $number.' is valid integer number <br>';
			}
			else
			{
				echo $number.' is not valid integer number <br>';
			}

			$url='https://www.miraclecartes.com';
			if(filter_var($url,FILTER_VALIDATE_URL) == TRUE)
			{
				echo $url.' is valid url <br>';
			}
			else
			{
				echo $url.' is not valid url <br>';
			}
		?>

	#Why Use Filters?
		Many web applications receive external input. External input/data can be:

		User input from a form
		Cookies
		Web services data
		Server variables
		Database query results
		
39.PHP 7 Filters Advanced
	Validate an Integer Within a Range
	The following example uses the filter_var() function to check if a variable is both of type INT, and between 1 and 200:

	Example
		<?php
			$int = 122;
			$min = 1;
			$max = 200;

			if (filter_var($int, FILTER_VALIDATE_INT, array("options" => array("min_range"=>$min, "max_range"=>$max))) === false) {
				echo("Variable value is not within the legal range");
			} else {
				echo("Variable value is within the legal range");
			}
		?>

40.Major Differences Between PHP 5 And PHP 7 –
	1.Performance 
		The performance of PHP 7 and PHP 5 is a major difference. Supposing that you have written a PHP code in PHP 5, if you run the same code in both the versions, the performance of PHP 7 will be significantly higher than PHP 5. PHP is powered by Zend engine even since the release of PHP 4. PHP 5 uses Zend II but PHP 7 uses a brand new model of engine called PHP-NG or Next Generation. This new PHPNG engine improves the performance as much as twice with optimized memory usage. This has been proved by the benchmark provided by the company. As a matter of fact, the new engine requires fewer servers to serve the same number of users as before.

	2.Declaring The Return Type –
		In PHP 5, the programmer cannot define the return type of a function or method. This has been a huge drawback in the real-life coding scenario as the programmers were unable to prevent unwanted return types and generate exceptions in otherwise case. Fortunately, PHP 7 allows programmers to declare the return type of the functions as per the expected return value. This is certainly going to make the code robust and accurate. There are four different return types available – bool, int, string, and float.
	
	3.Error Handling and 64-bit Support 
		If you understand the difference between error and exception, you know that it is highly uneasy to handle fatal errors in PHP 5. PHP 7 has eased the process as it has replaced several major errors with exceptions that can be handled effortlessly. This has been achieved with the introduction of the new Engine Exception objects.
		
	4.Anonymous Class –
		One of the major additions to PHP 7 that is not present in PHP 5 is the anonymous class. Even though PHP had object-oriented approach from PHP 5 but it lacked this feature which is very common in other popular object-oriented languages like Java and C#. An anonymous class is used to speed up the execution time. It is suitable when you do not need to execute a class more than once and you do not need to document it in the project document.

	5.New Operators –
		PHP 7 has added a new operator that had been the center of attention when the stable version of PHP 7 came out. It is called spaceship operator that comes with the notation <=> and in the technical term, you can call it combined comparison or three-way comparison operator. The developers are finding the operator extremely useful and they are using it in sorting and various combined comparisons. It works the same as strcmp() and it is considered to be a replacement for the library function version_compare(). It returns 0 when the operands are equal and 1 when the left side is greater than the right and -1 in case of the opposite. If you are used to Perl and Ruby, the operator is already present there.
	
	6.Miscellaneous –
		PHP 7 introduces Group Use Declaration according to which, the programmers will be able to include classes from the same namespace. This is going to save a lot of typing time and will make the code look crisp and readable and debugging will also be easier. PHP 7 has done away with various deprecated functions and unsupported extensions and APIs.
