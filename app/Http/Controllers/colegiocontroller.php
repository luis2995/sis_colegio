<?php

namespace colegio\Http\Controllers;

use Illuminate\Http\Request;

use colegio\Http\Requests;
use colegio\Http\Controllers\Controller;

class colegiocontroller extends Controller
{
	  public function index(){
	   return view('login');
   }
    public function usuario(){
	   return view('siscol_pagadmin');
   }
   
	  public function registro(){
	   return view('siscolA_gestion_reg');
   }
	  public function validar(){
	   return view('validador');
   }
}
