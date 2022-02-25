<?php

namespace App;

/**
 * Footer class
 */
class Footer
{
    /**
     * Footer function
     *Displaying Footer
     * @return void
     */
    public function footer()
    {
        return "<div id='footer'>
       <nav>
           <ul id='footer-links'>
               <li><a href='#'>Privacy</a></li>
               <li><a href='#'>Declaimers</a></li>
           </ul>
       </nav>
   </div>";
    }
}
