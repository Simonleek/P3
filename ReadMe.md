# Laravel Basics

## Live URL
<http://p3.simonleetoronto.me>

## Description
The goal of this project is to practice the essentials of building a Laravel-based site. 
The following elements are used

- Edited Composer.json with Faker user generation application, and Lorem-Ipsum random text generator.

		"fzaninotto/faker": "1.5.*@dev",
		
		"badcow/lorem-ipsum": "dev-master"
		
- Use Composer install/update to download package to Laravel application
- Update app.php to create alais to the packages
- Updated Routes.php to control routes
- Updated Filters.php to check form input value
- Added P3CSS.css in public folder
- Added _master.blade.php template
- Inherited _master.blade.php and created index.blade.php, lorem.blade.php, and user.blade.php
- Deployed a Laravel app on a live server.


## Demo
N/A

## Details for teaching team

The following views are created for this project:

Blade Template(_master.blade.php)
- Title 
- Css in Head

Home Page (index.blade.php)
- Description 
- Link to Lorem Ipsum Generator
- Description
- Link to Random User Generator
- link to P1 home

Lorem Ipsum Generator (lorem.blade.php)
- Some text
- How many paragraphs
- Generate button

User Generator (user.blade.php)
- some text 
- How many user
- Birthday
- Generate button

The routing table is listed below: 


| Purpose        | Method           | URI  |
| ------------- |:-------------:| -----:|
|Homepage							|Get|						/ |
|Show form Lorem Ipsum Generator 	|Get |					/Lorem/|
|Process form to generate paragraphs |Post|					/Lorem/|
|Show User Generator					|Get|						/User/|
|Process form user generator			|Post| 					/User/	|


## Outside code
The following external packages are used

[https://packagist.org/packages/badcow/lorem-ipsum](https://packagist.org/packages/badcow/lorem-ipsum)  - This package is used to generate random paragraphs 
[https://packagist.org/packages/fzaninotto/faker](https://packagist.org/packages/fzaninotto/faker) - This package is used to generate random users
