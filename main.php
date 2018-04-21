As far as php concerned, when you're echoing out a string enclosed in "", you can use the variable inside the string 
without having to concatenate. For Example
$message = "Hello $name, how are you";
With Single Quotes, you would write that code as:
$message = 'Hello'.$name.'How are you';
Also just make sure that any string you're echoing out that use quotation marks is using the opposite the version of 
the enclosing marks you started off with. For Instance:
$message = "<a href='filename.php'>Click Here</a>";
IF you use double quotes surrounding the index.php above, it would end the first string and cause error.
