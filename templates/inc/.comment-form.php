			{if logged_in}
				<p>Welcome back, {screen_name}.</p>
			{/if}
			{exp:comment:form entry_id="{embed:entry_id}"}
				<ol>
			{if logged_out}
					<li>
						<label for="comments-name">Name<abbr aria-hidden="true" title="required">*</abbr></label>
						<input type="text" id="comments-name" name="name" aria-required="true" required="required" value="{name}" />
					</li>
					<li>
						<label for="comments-email">Email<abbr aria-hidden="true" title="required">*</abbr></label>
						<input type="email" id="comments-email" name="email" aria-required="true" required="required" value="{email}" />
					</li>
					<li>
						<label for="comments-url">URL</label>
						<input type="url" id="comments-url" name="url" value="{url}" />
					</li>
			{/if}
					<li class="textarea">
						<label for="comments-comment">Comments<abbr aria-hidden="true" title="required">*</abbr></label>
						<textarea id="comments-comment" name="comment" cols="50" rows="5" aria-required="true" required="required">{comment}</textarea>
					</li>
			{if logged_out}
					<li class="checkbox">
						<label for="comments-save-info">
							<input type="checkbox" id="comments-save-info" name="save_info" value="yes" {save_info} />
							Remember my personal information
						</label>
					</li>
			{/if}
					<li class="checkbox">
						<label for="comments-notify-me">
							<input type="checkbox" id="comments-notify-me" name="notify_me" value="yes" {notify_me} />
							Notify me of follow-up comments?
						</label>
					</li>
					<li class="submit">
						<input type="hidden" name="RET" value="{embed:return}" />
						<button type="submit" name="submit">Submit</button>
					</li>
				</ol>
			{/exp:comment:form}