<?php
1. git configaration
	$ git config --global user.name "Nileshc407"
	$ git config --global user.email nileshchoudhari91@gmail.com

2. get configaration list
	$ git config --list

3.chek address of the remote directory
	$ pwd

4. create folder into directory 
	$ mkdir novacomonline

5.navigate to folder 
	$ cd novacomonline

6. initialization of repository
	$ git init

7.create file 
	$ touch file_name.php

8.open file into notepad
	$ notepad file_name.php

9.get satus of files 
	$ git status

10. To add a file to a Git repository
	$ git add file_name.php 

11.To add all files to a Git repository
	$ git add . 

12. Commit the Changes:
	$ git commit -m "commit message"

13. check log of all files
	$ git log

14. push files from a local repository to a remote repository (GitHub)
	copy remote repository url and paste it in gitbash
	eg. git remote add origin https://github.com/Nileshc407/novacomonline.git
	$ git remote -v
	$ git push -u origin master

	github login popup => enter github user naem and password 
	
	now files will be pushed into the remote repository
?>
