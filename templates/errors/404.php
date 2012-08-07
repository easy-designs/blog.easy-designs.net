<?php

header("HTTP/1.0 404 Not Found");

?>
{assign_variable:permalink="/archives/{entry_date format='%Y/%m/%d'}/{url_title}"}
{embed=inc/.head}
{embed=inc/.header body_id="errors"}
  <section id="content">
    <section id="main">
      <article>    
        {embed=inc/.nav-archive}
      
        <section id="entries">
          <h1>404 - Page not found</h1>
          <p>Oops! It appears that the page you were looking for does not exist.</p>
         
        </section>
      </article>

  </section>
{embed=inc/.extras}
{embed=inc/.elsewhere}
{embed=inc/.foot}