// https://www.sitesbay.com/php-program/php-armstrong-number-program-in-php
// https://www.programiz.com/c-programming/examples/negative-positive-zero

1.Find the Factoral of n number
	<?php
		$fact = 1;
		$n=5;
		for($i=1;$i<=$n;$i++)
		{
			$fact=$fact*$i;
		}
		echo "Factorial is ".$fact;
		
		//5*1=5*2=10*3=30*4=120  o/p =>120
	?>
	

2. Check Given number is even or odd number
	<?php
		$n=4;
		if($n%2==0)
		{
			echo "The number is even number <br>";
		}
		else
		{
			echo "The number is odd number<br>";
		}
		// O/p=> The number is even number
	?>

3.Check Given year is leap year or not 
	<?php
		$year=2019;
		if($year%4==0)
		{
			echo "The year is leap year <br>";
		}
		else
		{
			echo "The year is not leap year<br>";
		}
		// O/p=> The year is not leap year
	?>

4. Find the Largest Number Among Three Numbers
	<?php
		$n1=999;
		$n2=999;
		$n3=9;
		if($n1>=$n2 && $n1>=$n3)
		{
		  echo 'the largest number is $n1: '.$n1;
		}
		if($n2>=$n1 && $n2>=$n3)
		{
		  echo 'the largest number is $n2: '.$n2;
		}
		if($n3>=$n1 && $n3>=$n2)
		{
		  echo 'the largest number is $n3: '.$n3;
		}
		// O/p=> the largest number is $n2: 999
	?>

5.Check if a Number is Positive or Negative Using if...else
	<?php
		$n=-1;

		if($n<0.0)
		{
		  echo 'the number is negative number : '.$n;
		}
		else
		{
		   echo 'the number is possitive number : '.$n;
		}
	// O/p=>the number is negative number : -1
	?>

6.Check Whether a Number is Prime or Not
	A prime number is a positive integer which is divisible only by 1 and itself. For example: 2, 3, 5, 7, 11, 13
	
	<?php
		$n=5;
		$flag=0;

		for($x=2; $x<$n; $x++) 
		{
			if($n%$x ==0) 
			{
				$flag=1;
				break;
			}
		} 
		if($flag==0)
		{
			echo 'the number is prime number : '.$n.'<br>';
		}
		else
		{
			echo 'the number is not prime number : '.$n.'<br>';
		}
	// O/p=> the number is prime number : 5
	?>

7.Program to Check number is Palindrome or not
	An integer is a palindrome if the reverse of that number is equal to the original number.
	53235,1001 is a palindrome number
	
	<?php
		$number=53235;
		$temp=$number;
		$sum=0;
		while(floor($temp))
		{
			$digit=$temp%10;
			$sum=$sum*10+$digit;
			$temp=$temp/10;
		} 
		if($sum==$number)
		{
			echo $number." number is palindrome <br>";
		}
		else
		{
		  echo $number." number is NOT palindrome <br>";
		}
		// O/p=>53235 number is palindrome
	?>
	<?php
		function isPalindrome($number)
		{
			$temp = $number;  
			$sum = 0;
			
			while(floor($temp))
			{
				$digit = $temp % 10;
				$sum = $sum*10 + $digit;
				$temp = $temp/10;
			}
		   
			if($sum == $number)
			{
				return 1;
			}
			else
			{
				return 0;
			}
		}
		
		$num = 53235;
		if(isPalindrome($num))
		{
			echo($num . " is a palindrome number<br>");
		}
		else
		{
			echo($num . " is not a palindrome number<br>");
		} 
	?>
	
8.Check Armstrong Number of three digits
	153,1634 is armstrong number
	https://www.programiz.com/c-programming/examples/check-armstrong-number
	https://www.sitesbay.com/php-program/php-armstrong-number-program-in-php
	<?php
		$number=153;
		$temp=$number;
		$sum=0;
		while($temp!=0)
		{
		   $rem=$temp%10;
		   $sum=$sum+$rem*$rem*$rem;
		   $temp=$temp/10;
		}
		if($number==$sum)
		{
			echo $number." is armstrong number<br>";
		}
		else
		{
		   echo $number." is Not armstrong number<br>";
		}
	?>
	
9.Fibonacci Series Program in PHP
	The simple concept to find fibonacci series is; add two previous term and get next term. Example of Fibonacci Series is; 0 1 1 2 3 5.
	// https://www.sitesbay.com/php-program/php-fibonacci-series-program-in-php
	
	<?php
		$number=6;
		$n1=0;
		$n2=1;
		echo $n1.' '.$n2;
		for($i=2;$i<$number;$i++)
		{
		   $n3=$n1+$n2;
		   echo ' '.$n3;
		   $n1=$n2;
		   $n2=$n3;
		}

		// O/p=>0 1 1 2 3 5
	?>
	
10.Reverse number Program in PHP
	strrev() function is used to reverse any given number in php, but here we perform this operation without using strrev() function and using strrev() function.
	<?php
		$number=6323;
		$sum=0;
		while($number!=0)
		{
			$rem=$number%10;
			$sum=$sum*10+$rem;
			// $number=$number/10;
			$number = (int)($number / 10);
		}
		echo "Reverse number is ".$sum."<br>";
		
		// O/p=> Reverse number is 3236
		?>
		<?php
			$number=123456789;
			$sum = "";
			while($number!=0)
			{
				$rem=$number%10;
				//$sum=$sum*10+$rem;
				// $number=$number/10;
				$sum .= $rem;
				$number = (int)($number / 10);
			}
			echo "Reverse number is ".(int)$sum."<br>";
			
			// O/p=> Reverse number is 987654321
		?>

11.Print the following Pattern Output  
	* 
	* * 
	* * * 
	* * * * 
	* * * * * 
	* * * * * * 
	* * * * * * * 
	* * * * * * * * 
	* * * * * * * * * 
	* * * * * * * * * * 
	
<?php
	$n=10;
		for($i=0;$i<=$n;$i++)
		{
			for($j=0;$j<$i;$j++)
			{
				echo "* ";
			}			
			echo "<br>";	
		}
	?>
	
12. Print the following Output

	* * * * * * * * * * 
	* * * * * * * * * 
	* * * * * * * * 
	* * * * * * * 
	* * * * * * 
	* * * * * 
	* * * * 
	* * * 
	* * 
	* 
<?php
	$n=10;
	$k=10;
		for($i=0;$i<=$n;$i++)
		{
			for($j=0;$j<$k;$j++)
			{
				echo "* ";
			}	
			echo "<br>";
			$k--;			
		}
	?>
	
13 Print the following Output 
	//https://www.sitesbay.com/php-program/php-print-star-pattern-in-php
	
	* 
	* * 
	* * * 
	* * * * 
	* * * * * 
	* * * * * * 
	* * * * * 
	* * * * 
	* * * 
	* * 
	* 
	<?php
		$n=6;
		$k=5;
		for($i=1;$i<=$n;$i++)
		{
			for($j=0;$j<$i;$j++)
			{
			  echo "* ";
			}
			echo "<br>";
		}
		for($i=1;$i<$n;$i++)
		{
			for($j=0;$j<$k;$j++)
			{
			  echo "* ";
			}
			echo "<br>";
			$k--;
		}
	?>
	
14. Print following pattern star Pyramid Size
	
	https://tutorialdeep.com/php/print-pyramid-star-patterns-php/
	https://codeforwin.org/2015/07/star-patterns-program-in-c.html
	
	                *  
                  *   *  
                 *  *  *  
               *  *   *  *  
              *  *  *  *  *  
             *  *  *  *  *  *  
            *  *  *  *  *  *  *  
           *  *  *  *  *  *  *  *  
         *  *  *  *  *  *  *  *  *  
        *  *  *  *  *  *  *  *  *  *  
	<?php
		$n=10;
		for($i=0;$i<$n;$i++)
		{
		   for($j=0;$j<$n-$i;$j++)
		   {
			   echo "&nbsp;&nbsp;";
		   }
		   for($k=0;$k<=$i;$k++)
		   {
			  echo "* &nbsp;";
		   }
		   echo "<br>";
		}
	?>
	
15 print following pattern

   *  *  *  *  *  *  *  *  *  *  *  *  *  *  *  *  *  *  *
      *  *  *  *  *  *  *  *  *  *  *  *  *  *  *  *  *  
         *  *  *  *  *  *  *  *  *  *  *  *  *  *  *  
            *  *  *  *  *  *  *  *  *  *  *  *  *  
               *  *  *  *  *  *  *  *  *  *  *  
                  *  *  *  *  *  *  *  *  *  
                     *  *  *  *  *  *  *  
                        *  *  *  *  *  
                           *  *  *  
                              *  
							  
	<?php
		$rows=9;

		for($i=0; $i<=$rows; $i++)
		{
			for($j=0; $j<=$i; $j++)
			{
				echo "&nbsp; &nbsp;";
			}
		  
			for($j=0; $j<($rows*2 -(2*$i-1)); $j++)
			{
				echo "* &nbsp;";
			}

			echo "<br>";
		}
	?>
	
	https://codeforwin.org/2015/07/reverse-pyramid-star-pattern-in-c.html