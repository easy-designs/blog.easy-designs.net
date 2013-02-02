<?php

global $TMPL, $OUT;
$OUT->out_type = '403';
$TMPL->template_type = '403';

?>
{assign_variable:permalink="/archives/{entry_date format='%Y/%m/%d'}/{url_title}"}
{embed=inc/.head}
{embed=inc/.header body_id="errors"}
  <section id="content">
    <section id="main">
      <article>    
        {embed=inc/.nav-archive}
      
        <section id="entries">
          <h1>403 - Forbidden</h1>
          <p>Sorry. You&#8217;re not allowed to look at that stuff.</p>
         
        </section>
      </article>

  </section>
{embed=inc/.extras}
{embed=inc/.elsewhere}
{embed=inc/.foot}