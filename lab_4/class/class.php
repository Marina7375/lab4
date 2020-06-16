<?php
	
session_start();

class User{

public $name;
public $surname;
public $role;
public $lang;

public function __construct($role, $name,$surname,$lang)
{
	$this->role = $role;
	$this->name = $name;
	$this->surname = $surname;
	$this->lang = $lang;
}
 public  function us()
      { 
   echo lang::trans('Hello').', '.lang::trans($_SESSION['name']).$_SESSION['surname'].', '.lang::trans($_SESSION['role']);}


}

class admin extends User{
	public function hello(){
		parent::us();
	}
	
}

class client extends User{
	public function hello(){
		parent::us();
	}
	
}

class manager extends User{
	public function hello(){
		parent::us();
	}
	
}
class lang {
public static $translate=[
		'ru'=>['Hello'=>'Здравствуйте', '3'=>'админ', '2'=>'менеджер', '1'=>'клиент', 'Афанасий'=>'Афанасий','Данило'=>'Данило','Мария'=>'Мария','Инокендий'=>'Инокендий','Сергей'=>'Сергей','Анна'=>'Анна','Ирина'=>'Ирина','Питер'=>'Питер','Кира'=>'Кира','Владислав'=>'Владислав','Admin_page'=>'Страница администратора', 'Manager_page'=>'Страница менеджера','Client_page'=>'Страница клиента',  'Log out'=>'Выйти','List'=>'Список клиентов','Ok'=>'Выбрать'],
		'en'=>['Hello'=>'Hello','3'=>'admin', '2'=>'manager', '1'=>'client', 'Афанасий'=>'Afanasiy','Данило'=>'Danilo','Мария'=>'Maria','Инокендий'=>'Inokendiy','Сергей'=>'Sergey','Анна'=>'Anna','Ирина'=>'Irina','Питер'=>'Piter','Кира'=>'Kira','Владислав'=>'Vladislav', 'Admin_page'=>'Admin page', 'Manager_page'=>'Manager page','Client_page'=>'Client page','Log out'=>'Log out','List'=>'List','Ok'=>'Ok'],
		'ua'=>['Hello'=>'Здравствуйте','3'=>'адмін','2'=>'менеджер', '1'=>'клієнт','Афанасий'=>'Афанасій','Данило'=>'Данило','Мария'=>'Марія','Инокендий'=>'Інокендій','Сергей'=>'Сергій','Анна'=>'Анна','Ирина'=>'Ірина','Питер'=>'Пітер','Кира'=>'Кіра','Владислав'=>'Владислав','Admin_page'=>'Сторінка адміністратора', 'Manager_page'=>'Сторінка менеджера','Client_page'=>'Сторінка клієнта','Log out'=>'Вийти','List'=>'Список клієнтів','Ok'=>'Вибрати'],
];
//return null;
     public static function trans($text)
    {
        
        return self::$translate[$_SESSION['lang']][$text];
    }

}

function role(){

 switch ($_SESSION['role']) {


  case '1':
  return new client($_SESSION['role'],$_SESSION['name'],$_SESSION['surname'],$_SESSION['lang']);
  break;
  
  case '3':
 return new admin($_SESSION['role'],$_SESSION['name'],$_SESSION['surname'],$_SESSION['lang']);
  break;
  
  
  case '2':
  return new manager($_SESSION['role'],$_SESSION['name'],$_SESSION['surname'],$_SESSION['lang']);
  break;
}
}

	

?>