<?php
// namespace cat;

class Header
{
   public function header(){
       return "<div id='header'>
       <h1 id='logo'>Logo</h1>
       <nav>
           <ul id='menu'>
               <li><a href='index.php'>Home</a></li>
               <li><a href='products.php'>Products</a></li>
               <li><a href='contact.php'>Contact</a></li>
               <li><a href='log.php'>Session Destroy</a></li>
           </ul>
       </nav>
   </div>";
   }
    
}
