<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Student
 * A basic student class with minimum functionality
 *
 * @author Haley
 */
class Student {
    
    function __construct() {
        $this->surname = '';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();
    }
    
    //Adds email to the student
    function add_email($which,$address) {
        $this->emails[$which] = $address;
    }
    
    //Adds a grade to the student
    function add_grade($grade) {
        $this->grades[] = $grade;
    }
    
    //Takes all student grades and returns the average
    function average() {
        $total = 0;
        foreach ($this->grades as $value)
            $total += $value;
        return $total / count($this->grades);
    }
    
    /*Displays the first name, last name, grade average and all
    emails associated with the student*/
    function toString() {
        $result = $this->first_name . ' ' . $this->surname;
        $result .= ' ('.$this->average().")\n";
        foreach($this->emails as $which=>$what)
            $result .= $which . ': '. $what. "\n";
        $result .= "\n";
        return '<pre>'.$result.'</pre>';
    }
}
