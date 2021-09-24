# Checker-project
This is the brief documentation of Checker application built utilizing Symfony framework Console Component
## Features

-   ### Setup 
	
	- #### How to setup Checker-project
		
		Project was built using Symfony framework on WAMP server. To setup, clone the github repository inside the appropriate directory of your webserver
		and run the command line tool to execute the below mentioned features

-   ### Check Anagram

    -   #### Check two strings if they are anagrams

        1. console app:check-anagram word anagram
        2. To view help for the above feature you can use this command  : console app:check-anagram --help
        
-   ### Check Palindrome

    -   #### Check if strings is a Palindrome

        1. console app:check-palindrome string
        2. To view help for the above feature you can use this command  : console app:check-palindrome --help

-   ### Check Pangram

    -   #### Check if sentence is pangram (double quote the sentence otherwise CLI will treat it as multiple params)

        1. console app:check-pangram sentence 
        2. To view help for the above feature you can use this command  : console app:check-pangram --help	

-   ### Unit Test
    
	-  #### To Run tests for the application run this command on CLI : php bin\phpunit