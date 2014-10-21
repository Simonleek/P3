<?php

// Homepage
Route::get('/', function()
{
	return View::make('index');
});
/*
Route::get('/index', function()
{
	return View::make('index');
});*/
// Show form Lorem Ipsum Generator
Route::get('/Lorem', function() {
	return View::make('lorem')
	->with('message','')
	->with('result', array(''));
});

// Process form to generate paragraphs
Route::post('/Lorem', array('before' => 'isNumeric',
function() {
	$query=Input::get('query');
	$generator = new Lorem();
	$paragraphs = $generator->getParagraphs($query);
	return View::make('lorem')
	->with('message',$query.' paragraph(s) generated: ')
	->with('result', $paragraphs);
}));

// Show form User Generator
Route::get('/User', function() {
	return View::make('user')
	->with('message','')
	->with('result', array(''));
});

// Process form to generate User
Route::post('/User', array('before' => 'isNumeric',
function() {
	$query=Input::get('query','incl_bd','incl_pf');
	$incl_bd=Input::get('incl_bd');
	$incl_pf=Input::get('incl_pf');
	$faker = Faker\Factory::create();
	for ($i=0; $i < $query; $i++) {
		$user = $faker->name;
		if($incl_bd){
			$user.='</br>'.$faker->dateTimeThisCentury->format('Y-m-d');
		}
		if ($incl_pf) {
			$user .= '</br>'.$faker->text;
		}
		$users[] = $user;
	}
	return View::make('user')
	->with('message',$query.' user(s) generated: ')
	->with('result', $users);
}));