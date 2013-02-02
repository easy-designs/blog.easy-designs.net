<?php

global $TMPL, $OUT;
$OUT->out_type = '500';
$TMPL->template_type = '500';

?>
{assign_variable:permalink="/archives/{entry_date format='%Y/%m/%d'}/{url_title}"}
{embed=inc/.head}
{embed=inc/.header body_id="errors"}
  <section id="content">
    <section id="main">
      <article>    
        {embed=inc/.nav-archive}
      
        <section id="entries">
          <h1>500 - Internal Server Error</h1>
          <p>Weird. Looks like there is something wrong with the server.</p>
         
        </section>
      </article>

  </section>
{embed=inc/.extras}
{embed=inc/.elsewhere}
{embed=inc/.foot}