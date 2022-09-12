<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
  
class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function quemsomos()
    {
        return view('quemsomos');
    }
  
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function oquefazemos()
    {
        return view('oquefazemos');
    }
  
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function plannews()
    {
        return view('plannews');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function nossosclientes()
    {
        return view('nossosclientes');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function contato()
    {
        return view('contato');
    }
}