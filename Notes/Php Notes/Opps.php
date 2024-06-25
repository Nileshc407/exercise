<?php
// echo "Opps Concept in php";
// https://php5-tutorial.com/classes/abstract-classes/	?>
<!----------------------Basic concept of opps---------------------------------->
#Object Oriented Programming in PHP
	We can imagine our universe made of different objects like sun, earth, moon etc. Similarly we can imagine our car made of different objects like wheel, steering, gear etc. Same way there is object oriented programming concepts which assume everything as an object and implement a software using different objects.
	
1.Class
	This is a programmer-defined data type, which includes local functions as well as local data. You can think of a class as a template for making many instances of the same kind (or class) of object.
	
2.Object 
	An individual instance of the data structure defined by a class. You define a class once and then make many objects that belong to it. Objects are also known as instance.
	
3.Member Variable
	These are the variables defined inside a class. This data will be invisible to the outside of the class and can be accessed via member functions. These variables are called attribute of the object once an object is created.
	
4.Member function
	These are the function defined inside a class and are used to access object data.
	
5.Inheritance 
	When a class is defined by inheriting existing function of a parent class then it is called inheritance. Here child class will inherit all or few member functions and variables of a parent class.
	
6.Parent class
	 A class that is inherited from by another class. This is also called a base class or super class.
	 
7.Child Class 
	A class that inherits from another class. This is also called a subclass or derived class.
	
8.Polymorphism 
	This is an object oriented concept where same function can be used for different purposes. For example function name will remain same but it take different number of arguments and can do different task.
	
9.Overloading 
	a type of polymorphism in which some or all of operators have different implementations depending on the types of their arguments. Similarly functions can also be overloaded with different implementation.
	
10.Data Abstraction
	Any representation of data in which the implementation details are hidden (abstracted).
	
11.Encapsulation 
	 refers to a concept where we encapsulate all the data and member functions together to form an object.
	 
12.Constructor 
	refers to a special type of function which will be called automatically whenever there is an object formation from a class.
	
13.Destructor 
	refers to a special type of function which will be called automatically whenever an object is deleted or goes out of scope.
<!--------------------------Basic concept of opps------------------------>
<!-------------------------------Opps Start-------------------------------->
1.Class 
	1.What is a Class
		Classes are the blueprints for php objects – more on that later. One of the big differences between functions and classes is that a class contains both data (variables) and functions that form a package called an: 'object'. When you create a variable inside a class, it is called a 'property'.
		
		Syntax 
			Class Class name
			{
			   //Class Body
			}

2.Object
	Objects are also known as instance. Member Variable - These are the variables defined inside a class. ... Member function - These are the function defined inside a class and are used to access object data.

	Inheritance - When a class is defined by inheriting existing function of a parent class then it is called inheritance.
	
	PHP. | Objects. An Object is an individual instance of the data structure defined by a class. We define a class once and then make many objects that belong to it.
	
	#Example Of Class And Object	
		<?php
			class sampleProg
			{
				public $memberVariable = 2019;
				function sample($memberVariable,$sim) 
				{ 
				   echo $memberVariable.'<br>';
				   echo $sim.'<br>';
				}
			}
			$obj=new sampleProg();
			echo $obj->sample(222,2021.20);

		?>
		
3.Visibility mode
	Each method and property has its visibility. There are three types of visibility in PHP. They are declared by keywords public, protected and private. Each one of them controls how a method/property can be accessed by outsiders.
	
	1.Public
		Can be accessed from anywhere - outside the class, inside the class it self and from child classes.
		It allows anyone from outside access its method/property. This is the default visibility in PHP class when no keywords are prefixed to a method/property.
	
	2.Protected
		Can only be accessed from inside the class it self and its child classes
		 It only allows itself or children classes to access its method/property
	
	3.Private
		Can only be accessed from inside the class itself.
		It does not allow anyone except itself to access its method/property.
		
4.Encapsulation 	
	Encapsulation is an OOP (Object Oriented Programming) concept in PHP. Wrapping some data in single unit is called Encapsulation. Encapsulation is used to safe data or information in an object from other it means encapsulation is mainly used for protection purpose. ... Capsule is best example of Encapsulation.
	
	#Example
	     Class is an example of encapsulation
		 <?php
			class sample
			{
			    //Class body
				// echo 'Wrapping a data hear';
			}
		 ?>
		 
5.Constructor 
	is a key part of PHP oops concept. Constructor in PHP is special type of function of a class which is automatically executed as any object of that class is created or instantiated. Constructor is also called magic function because in PHP, magic method is start usually with two underscore characters.
	
	Syntax
	<?php
	   class sample
	   {
	     function __cunstruct()
		 {
		   //body 
		 }
	   }
	?>
	
6.Destructor
	Destructor destroys the objects when they are no longer needed
	Destructor is called when instance of a class is deleted or released
	  Syntax
		<?php
		   class sample
		   {
			 function __destruct()
			 {
			   //body 
			 }
		   }
		?>
		
7.Inheritance 
	Inheritance is one of the most important aspects of OOP. It allows a class to inherit members from another class. Understanding why this is smart without an example can be pretty difficult, so let's start with one of those.

	Imagine that you need to represent various types of animals. You could create a Cat class, a Dog class and so on, but you would probably soon realize that these classes would share quite a bit of functionality. On the other hand, there could be stuff that would have to be specific for each animal. For a case like this, inheritance is really great. The idea is to create a base class, in this case called Animal, and then create a child class for each specific animal you need. Another advantage to this approach is that you will every animal you have will come with the same basic functionality that you can always rely on.
	
	#Example 
		<?php
			class Animal
			{
				public $name;
				public function Greet()
				{
					return "Hello, I'm some sort of animal and my name is " . $this->name."<br>";
				}
			}
			class Dog extends Animal
			{
				public function Greet()
				{
					return "Hello, I'm a dog and my name is " . $this->name."<br>";
				}
			}
			$animal = new Animal();
			$animal->name = "BobB";
			$animal->Greet();

			$animal1 = new Dog();
			$animal1->name = "Bob";
			$animal1->Greet();
		?>
		
8.Abstract classes
	Abstract classes are special because they can never be instantiated. Instead, you typically inherit a set of base functionality from them in a new class. For that reason, they are commonly used as the base classes in a larger class hierarchy. In the chapter on inheritance, we created an Animal class and then a Dog class to inherit from the Animal class. In your project, you may very well decide that no one should be able to instantiate the Animal class, because it's too unspecific, but instead use a specific class inheriting from it. The Animal class will then serve as a base class for our own little collection of animals.

	A method can be marked as abstract as well. As soon as you mark a class function as abstract, you have to define the class as abstract as well - only abstract classes can hold abstract functions. Another consequence is that you don't have to (and can't) write any code for the function - it's a declaration only. You would do this to force anyone inheriting from your abstract class to implement this function and write the proper code for it. If you don't, PHP will throw an error. However, abstract classes can also contain non-abstract methods, which allows you to implement basic functionality in the abstract class. Let's go on with an example. Here is the abstract class:
	
	#Example	
		<?php
			abstract class Animal
			{
				public $name;
				public $age;
				
				public function Describe()
				{
					return $this->name . ", " . $this->age . " years old";    
				}
				abstract public function Greet();
			}
			class Dog extends Animal
			{
				public function Greet()
				{
					return "Woof!<br>";
				}
				public function Describe()
				{
					return parent::Describe() . ", and I'm a dog!<br>";    
				}
			}

			$animal1 = new Dog();
			$animal1->name = "Bob";
			$animal1->age = 28;
			echo $animal1->Describe();
			echo $animal1->Greet();
		?>
		
9.Static classes
	Since a class can be instantiated more than once, it means that the values it holds, are unique to the instance/object and not the class itself. This also means that you can't use methods or variables on a class without instantiating it first, but there is an exception to this rule. Both variables and methods on a class can be declared as static (also referred to as "shared" in some programming languages), which means that they can be used without instantiating the class first. Since this means that a class variable can be accessed without a specific instance, it also means that there will only be one version of this variable. Another consequence is that a static method cannot access non-static variables and methods, since these require an instance of the class.

	In a previous chapter, we wrote a User class. Let's expand it with some static functionality, to see what the fuzz is all about:
	
	#Example
	<?php
		class User
		{
			public static $name = 'Nilesh Choudhari';
			public static $age = 28;
			public static $minimumPasswordLength = 6;
			
			public function Describe()
			{
				return self::$name . " is " . self::$age . " years old";
			}
			
			public static function ValidatePassword($password)
			{
				echo "password - ".$password."<br>";
				if(strlen($password) >= self::$minimumPasswordLength)
				{
					return true;
				}
				else
				{
					return false;
				}
			}
		}

		$password = "test123";
		if(User::ValidatePassword($password))
		{
			echo "Password is valid!<br>";
		} 
		else
		{ 
			echo "Password is NOT valid!<br>";
		}
		echo User::Describe();
	?>
	
	
	What we have done to the class, is adding a single static variable, the $minimumPasswordLength which we set to 6, and then we have added a static function to validate whether a given password is valid. I admit that the validation being performed here is very limited, but obviously it can be expanded. Now, couldn't we just do this as a regular variable and function on the class? Sure we could, but it simply makes more sense to do this statically, since we don't use information specific to one user - the functionality is general, so there's no need to have to instantiate the class to use it.

	As you can see, to access our static variable from our static method, we prefix it with the self keyword, which is like this but for accessing static members and constants. Obviously it only works inside the class, so to call the ValidatePassword() function from outside the class, we use the name of the class. You will also notice that accessing static members require the double-colon operator instead of the -> operator, but other than that, it's basically the same.
	
10.Class constants
	A constant is, just like the name implies, a variable that can never be changed. When you declare a constant, you assign a value to it, and after that, the value will never change. Normally, simple variables are just easier to use, but in certain cases constants are preferable, for instance to signal to other programmers (or your self, in case you forget) that this specific value should not be changed during runtime.

	Class constants are just like regular constants, except for the fact that they are declared on a class and therefore also accessed through this specific class. Just like with static members, you use the double-colon operator to access a class constant. Here is a basic example:
	
	#Example
		<?php
			class User
			{
				const DefaultUsername = "John Doe";
				const MinimumPasswordLength = 6;
			}

			echo "The default username is " . User::DefaultUsername;
			echo "The minimum password length is " . User::MinimumPasswordLength;
		?>
	As you can see, it's much like declaring variables, except there is no access modifier - a constant is always publically available. As required, we immediately assign a value to the constants, which will then stay the same all through execution of the script. To use the constant, we write the name of the class, followed by the double-colon operator and then the name of the constant. That's really all there is to it.
	
11.The "final" keyword
	PHP 5 introduces the final keyword, which prevents child classes from overriding a method by prefixing the definition with final. If the class itself is being defined final then it cannot be extended. Note: Properties and constants cannot be declared final, only classes and methods may be declared as final.
	
	In the previous chapters, we saw how we could let a class inherit from another class. We also saw how you could override a function in an inherited class, to replace the behaviour originally provided. However, in some cases you may want to prevent a class from being inherited from or a function to be overridden. This can be done with the final keyword, which simply causes PHP to throw an error if anyone tries to extend your final class or override your final function.
	
	#Example
	<?php
	final class User
	{
		public final function base()
		{
		   echo 'base function defination';
		}
	}
	$obj=new User();
	$obj->base();
	?>
12.Polymorphism
	In general, polymorphism means the ability to have many forms. If we say it in other words, "Polymorphism describes a pattern in Object Oriented Programming in which a class has varying functionality while sharing a common interfaces.". There are two types of Polymorphism; they are: Compile time (function overloading)
	
	Polymorphism is derived from two Greek words. Poly (meaning many) and morph (meaning forms). Polymorphism is one of the PHP Object Oriented Programming (OOP) features.  In general, polymorphism means the ability to have many forms. If we say it in other words, "Polymorphism describes a pattern in Object Oriented Programming in which a class has varying functionality while sharing a common interfaces.". There are two types of Polymorphism; they are: 
	
	1.Compile time (function overloading)
	2.Run time (function overriding)
	
	Note: But PHP "does not support" compile time polymorphism, which means function overloading and operator overloading.
	
	2.Runtime Polymorphism
		The Runtime polymorphism means that a decision is made at runtime (not compile time) or we can say we can have multiple subtype implements for a super class, function overloading is an example of runtime polymorphism . I will first describe function overloading. When we create a function in a derived class with the same signature (in other words a function has the same name, the same number of arguments and the same type of arguments) as a function in its parent class then it is called method overriding.
		
	#Example of runtime polymorphism in PHP	
		In the example given below we created one base class called Shap. We have inherit the Shap class in three derived classes and the class names are Circle, Triangle and Ellipse. Each class includes function draw to do runtime polymorphism. In the calling process, we have created an array of length 2 and each index of the array is used to create an object of one class. After that we use a loop that is executed for the length of the array and each value of $i is passed to the object array variable called $Val[$i]. So it is executed three times and it will call the draw() method of every class (but those classes have a draw method, whose object is previously created).
		<?php // https://www.c-sharpcorner.com/UploadFile/c63ec5/polymorphism-in-php/
			class shap
			{
				function draw()
				{	
				}
			}
			class circle extends shap{
				function draw()
				{
					echo "Circle has been drawn!!<br>";
				}
			}
			class triangle extends shap
			{
				function draw()
				{
					echo "triangle has been drawn!!<br>";
				}
			}
			class ellipse extends shap
			{
				function draw()
				{
					echo "ellipse has been drawn!!!<br>";
				}
			}
			$val=array(2);
		
			$val[0]=new circle();
			$val[1]=new triangle();
			$val[2]=new ellipse();
			
			for($i=0;$i<3;$i++)
			{
				$val[$i]->draw();
			}
		?>
		
13.Interface		
	Interface declares what methods a class must have without having to implement them. Any class that implements the interface will have to implement details of those declared methods. Interface is not a class, so you can not instantiate an interface. It is useful when you need to enforce some classes to do something.
	
	Key point of interfaces:

	1.Interfaces can include abstract methods and constants, but cannot contain concrete methods and variables.
	
	2.All the methods in the interface must be in the public visibility scope.
	
	3.A class can implement more than one interface, while it can inherit from only one abstract class.
	
	1.interface support multiple inheritance
	2.interface can only contain abstarct methods 
	3.interface can not define variables 
	4.No constructor in interface 
	5.all function must be public

	#Example
	<?php
		interface sampleProg
		{
			const myName = "Nilesh Choudhari";
			public function getName();
		}
		// class sampleChild implements sampleProg
		class sampleChild implements sampleProg
		{
		   public function getName()
		   {
			  echo 'My name is '.sampleChild::myName."<br>";
		   }
		}
		
		$obj=new sampleChild();
		$obj->getName();
		echo sampleChild::myName;
	?>
	
14.Clone Object
      Clone Means Copy of object. Clone keyword are Used to make copy of object
	  #Example
		<?php
			class sampleProg
			{
				public $myName="Nilesh Choudhari";
				public function getName()
				{
					return $this->myName."<br>";
				}
			}
			 $obj=new sampleProg();
			 echo $obj->getName();
			 $obj1=clone $obj;
			 echo $obj1->getName()
		?>
15.trait
	Traits are a mechanism for code reuse in single inheritance languages such as PHP. A Trait is intended to reduce some limitations of single inheritance by enabling a developer to reuse sets of methods freely in several independent classes living in different class hierarchies. The semantics of the combination of Traits and classes is defined in a way which reduces complexity, and avoids the typical problems associated with multiple inheritance and Mixins.

	A Trait is similar to a class, but only intended to group functionality in a fine-grained and consistent way. It is not possible to instantiate a Trait on its own. It is an addition to traditional inheritance and enables horizontal composition of behavior; that is, the application of class members without requiring inheritance.
	
	#Example
		<?php
			class sampleProg
			{
			   public $myName ='Nilesh Choudhari';
			   public function getName()
			   {
				  return $this->myName.'<br>';
			   }
			}
			trait subchild
			{
				public function get_age()
				{
				   echo 'age is 28 years<br>';
				}
			}
			class childClass extends sampleProg
			{
			   public function getName()
			   {	
					echo parent::getName();
					$designation='Php Developer';
					return $this->myName.' '.$designation."<br>";
			   }
			   use subchild;
			}
			$obj=new childClass();
			echo $obj->getName();
			echo $obj->get_age();
		?>
16.Exception Handling 
	1.What is an Exception
		With PHP 5 came a new object oriented way of dealing with errors.

		Exception handling is used to change the normal flow of the code execution if a specified error (exceptional) condition occurs. This condition is called an exception.

		This is what normally happens when an exception is triggered:

		The current code state is saved
		The code execution will switch to a predefined (custom) exception handler function
		Depending on the situation, the handler may then resume the execution from the saved code state, terminate the script execution or continue the script from a different location in the code
		We will show different error handling methods:

		*Basic use of Exceptions
		*Creating a custom exception handler
		*Multiple exceptions
		*Re-throwing an exception
		*Setting a top level exception handler
		
		Note: Exceptions should only be used with error conditions, and should not be used to jump to another place in the code at a specified point.
		
	2.Basic Use of Exceptions
		When an exception is thrown, the code following it will not be executed, and PHP will try to find the matching "catch" block.

		If an exception is not caught, a fatal error will be issued with an "Uncaught Exception" message.

		Lets try to throw an exception without catching it:

	#Try, throw and catch
		To avoid the error from the example above, we need to create the proper code to handle an exception.

		Proper exception code should include:

		1.try - A function using an exception should be in a "try" block. If the exception does not trigger, the code will continue as normal. However if the exception triggers, an exception is "thrown"
		
		2.throw - This is how you trigger an exception. Each "throw" must have at least one "catch"
		
		3.catch - A "catch" block retrieves an exception and creates an object containing the exception information
	
	#Example
		<?php
			function checkNum($number) 
			{
			  if($number>1) 
			  {
				throw new Exception("Value must be 1 or below");
			  }
			  return true;
			}

			try
			{
				checkNum(2);
			}
			catch(Exception $e)
			{
			   echo $e->getMessage();
			}
			finally
			{
				echo "finally block execute";
			}
		?>
		The code above will get error like this:
		
		Value must be 1 or below
		
	#Example explained:
		The code above throws an exception and catches it:

		1.The checkNum() function is created. It checks if a number is greater than 1. If it is, an exception is thrown
		2.The checkNum() function is called in a "try" block
		3.The exception within the checkNum() function is thrown
		The "catch" block retrieves the exception and creates an object ($e) containing the exception information
		4.The error message from the exception is echoed by calling $e->getMessage() from the exception object
		
	However, one way to get around the "every throw must have a catch" rule is to set a top level exception handler to handle errors that slip through.
	
https://www.tutorialspoint.com/php/php_coding_standard.htm