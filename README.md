# Word Repeater

##### _Counter of repeated words in a phrase, July 7, 2017_

#### By Larry Taylor

## Description

This web application allows users to input a sentence and a word, and the program will tell the user how many times the word appears in the sentence. This is a practice in using Behavior Driven Development PHP using PHPUnit and with Silex's micro framework and twig templates. it is the second week's solo project in the PHP section of the PHP/React track at Epicodus.

## Setup

Find this github repo at github.com/larryjtaylor/PHP-word-repeater.

In local terminal, type command "git clone [paste URL here]."

Go to www.getcomposer.org and follow the instructions to download, if you have not already done so.

In your terminal, type the command '$ composer install' to install all relevant dependencies.

In your terminal, navigate into the web folder and type the command 'php -S localhost:8000'.

In your browser, type 'localhost:8000' in the address bar to run the program.

## Specifications
* The program will require a user to enter some input in the input field. This is to ensure there is inputted material to work with.
    * Input: \*blank\*
    * Output: Please enter text

* The program will return the number of times a single letter word appears in an inputted string or sentence. This is the shortest and simplest instance of a word that will appear in a sentence.
    * Input: I can't believe I have a monkey!
    * Output: "I" appears 2 times

* The program will return the number of times a multi-letter word appears in an inputted string or sentence. This includes more common words that will appear in a sentence.
    * Input: I am what I am, and that's all that I am
    * Outout: "am" appears 3 times

* The program will return the number of times a number appears in a string or sentence. This will ensure that numbers don't feel left out. They are quite sensitive.
    * Input: My sister turns 9 today, and 9 is a great age!
    * Output: 9 appears 2 times

* The program will return the number of times a word appears in multiple sentences. This will allow whole passages of books, poems, speeches, etc. to be used as the source material.
    * Input: My sister turns nine today. Nine was a great age! Remember when you were nine?
    * Output: "nine" appears 3 times


## Technologies Used

PHP, PHPUnit, Silex, Twig, HTML

### License
This software is licensed under the MIT license.

Copyright &copy; 2017 **_Larry Taylor_**
