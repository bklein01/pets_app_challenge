Exercise To Show Off Symfony and OOP knowledge
======

----------------
CODING
----------------

1) Set up a program to keep track of cats and dogs (we’ll refer to both collectively as ‘pets’). This program does not need to persist its data between runs; each run starts from a clean slate.

2) Each pet needs to be named, and we need to be able to get back the pet’s current name when asked. Allow for the pet to be named when first created (the creation and initial name should be completed in a single step). The pet should be able to be renamed at any time, and the system needs to keep track of each pet’s past names during while the program is running.

3) Each pet needs to be able to ‘speak’ when asked. By default, the cat says ‘meow’ and the dog says ‘bow-wow’. However, each pet should have the ability to say whatever we ask it to say. If we don’t supply a sound to make, the pet should speak its default.

4) Each pet needs to be able to have an age, and we need to be able to get back the pet’s age when asked. We should be able to set the pet’s initial age during the same step as creating the pet.

5) Every 2 times the pet speaks, the pet should become one year older.

6) Each pet needs to have the ability to tell us what their average name length is. Include the pet’s current name and all past names in the calculation. For example, if a pet was given the names 'Rover' and 'Clifford', then the average should be 6.5.

7) The program needs to do the following things in order, utilizing the pet entities you have created. Any output specified should be on its own line.

a) Create a dog whose initial name is “Santa’s Little Helper” and whose initial age is a random integer between 1 and 3.

b) Create a cat whose initial name is “Snowball II” and whose initial age is a random integer between 3 and 5.

c) Output the dog’s current name and age as follows: “<dog_name> is currently <dog_age> years old.”

d) Output the following line: “<dog_name> says <dog_custom_sound>? Nah, <dog_name> says <dog_default_sound>! Now <dog_name> is <dog_age> years old.” Use ‘meow’ for the dog’s custom sound.

e) Output the following line: “The cat’s name is <cat_name>.”

f) Set the name of the cat to ‘Garfield’.

g) Output the following line: “The cat’s name has been changed to <cat_name>. The average length of the cat’s name is <cat_average_name_length>.”

The full output of the program should be:

Santa's Little Helper is currently <x> years old.
Santa's Little Helper says meow? Nah, Santa's Little Helper says bow-wow! Now Santa's Little Helper is <y> years old.
The cat's name is Snowball II.
The cat's name has been changed to Garfield. The average length of the cat's name is <z>.

... where <x> is the dog’s initial random age, <y> is the dog’s age after speaking twice, and <z> is the the cat's average name length.

----------------
TESTING
----------------

8) Create a test that tests step #5 (the test should verify that each pet increments its age by 1 every 2 times it speaks).

9) Create a test that tests step #6 (the test should verify that we’re able to correctly calculate the average of all names given to the pet).

----------------
SQL
----------------

10) Now we want to persist the state of the cats and dogs to database tables. Write SQL that would create the schema necessary to do so. We need to store not only their current name and age, but also a historical record of previous names for each.

## This file is located at the root called db.sql

----------------
Theory
----------------

11) List some ways to abstract the dogs and cats in your program if you haven't already implemented those abstractions.

-- make a pet abstract class (done already) and store the default sound for each type of pet in the subclass
-- create a pet interface that lists the method definitions that all pet subclasses need to implement 

12) Explain your data modeling strategy for step #10. What performance optimizations did you make / could you make, and what trade-offs do those optimizations incur?
-- I wanted to create a pet type and normalize the relationship between pet table and pet_type table
-- For optimizations, I would add a foreign key between pet and pet_type and pet and pet_name_history
-- Tradeoffs for these optimizations would be more complicated queries. Easier for CRUD operations, more complicated for queries. 

----------------
Program Execution
----------------

# To Run Program:

## php console/bin app:pet-exercise

# To Run Tests

## Install phpunit by composer: sudo composer global require "phpunit/phpunit=3.7.*"

## Run phpunit: phpunit

