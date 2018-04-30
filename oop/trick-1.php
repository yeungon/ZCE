<?php
	
class Base {
    function func() {
        echo " Base";}
    function parent() {
        echo " None";} }

class Extended extends Base {
    function Func() {
        echo " Extended"; }
    function Parent() {
        echo PARENT::func(); } }

class Extended2 extends Extended {
    function func() {
        echo " Extended2"; }
    function parent() {
        echo PARENT::Func(); }
    function grandpa () {
        echo PARENT::parent(); } }

$var1 = new Base(); $var2 = new Extended();
$var3 = new Extended2();
$var1->func(); $var2->func();
$var3->func();
$var2->parent(); $var3->parent();
$var3->grandpa();

echo PHP_EOL;