     {exp:entries_list weblog="blog" site="2" entry_id="{embed:entry_id}" sort="asc" status="open" date_format="%Y/%m/%d"}  
        <ul id="pagination">
          {if previous_entry_id}
          <li class="prev"><a href="/archives/{previous_entry_date}/{previous_entry_url_title}/">Previous Entry:
            <em>{exp:word_limit_plus if_exceeds="6" stop_after="3" the_link=""}{previous_entry_title}{/exp:word_limit_plus}</em>
          </a></li>
          {/if}
          {if next_entry_id}
          <li class="next"><a href="/archives/{next_entry_date}/{next_entry_url_title}/">Next Entry:
            <em>{exp:word_limit_plus if_exceeds="6" stop_after="3" the_link=""}{next_entry_title}{/exp:word_limit_plus}</em>
          </a></li>
          {/if}
        </ul>
      {/exp:entries_list}