<?php


function MySQLIAuth() {


	return [

    
      "localhost",  // mysal host
      "jiangyilong",  // mysql user name
      "EXPLOre1993",  // mysql user pass
      "jiangyilong_wnm608"  // mysql database name


	];
}

function PDOAuth() {


    return [

    
      "mysql:host=localhost;dbname=jiangyilong_wnm608",  // host and database name
      "jiangyilong",  // mysql user name
      "EXPLOre1993",  // mysql user pass
      [PDO::MYSQLA_ATTR_INIT_COMMAND=>"SET NAMES utf8"]


    ];
}