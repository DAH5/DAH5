---
article_title: Change Author on Git Commits on Entire GitHub Repository
article_description: Learn how to change the email address and name on all commits in a GitHub-Hosted Repository.
article_author: David Hunter
article_date: 2023-12-27
article_time: 16:30
layout: src/davidhunter/_inc/layout.php
current_page: blog
---

--- metadata.article_description ---

<h2>Step One: Clone Repository as Bare</h2>

<p>Most people host their repository on a remote hosting service like GitHub. This article will assume you have a Git repository hosted on GitHub.</p>

<p>Even if you have the repository already on your machine, you need to clone it again as a bare repository for this to work.</p>

<p><code>git clone --bare git@github.com:username/repository.git</code></p>

<p>This will clone the repository and put it in a folder of the same name with .git on the end to indicate it is a bare repository. If you specified an optional dir name at the end of the above comand, the folder name will be exactly that.</p>

<h2>Step Two: Run Script to Change Author Info</h2>

<p>Below is a script you can run to change the author details. It works by finding all commits with the old info, and updating that info with the new details.</p>

<p>Firstly though, you must change the parts at the top of the script to match your situation.</p>

<pre><code>
git filter-branch --env-filter '<br>
OLD_EMAIL="your.name@email.tld"<br>
CORRECT_NAME="Your Name"<br>
CORRECT_EMAIL="your.name@newemail.tld"<br>
if [ "$GIT_COMMITTER_EMAIL" = "$OLD_EMAIL" ]<br>
then<br>
    &nbsp;&nbsp;&nbsp;&nbsp;export GIT_COMMITTER_NAME="$CORRECT_NAME"<br>
    &nbsp;&nbsp;&nbsp;&nbsp;export GIT_COMMITTER_EMAIL="$CORRECT_EMAIL"<br>
fi<br>
if [ "$GIT_AUTHOR_EMAIL" = "$OLD_EMAIL" ]<br>
then<br>
    &nbsp;&nbsp;&nbsp;&nbsp;export GIT_AUTHOR_NAME="$CORRECT_NAME"<br>
    &nbsp;&nbsp;&nbsp;&nbsp;export GIT_AUTHOR_EMAIL="$CORRECT_EMAIL"<br>
fi<br>
' --tag-name-filter cat -- --branches --tags
</code></pre>

<p>Copy the above into a text editor of your choice. Modify the details at the top, and then copy and paste it into your terminal / command prompt and hit enter to run the script.</p>

<p>You may get a warning, in my experience it is usually safe to ignore this warning. After a moment, it should start rewriting all the commits in the repository.</p>

<p>Confirm these have changed successfully by checking the log.</p>

<p><code>git log</code></p>

<h2>Step Three: Push To Remote</h2>

<p>To make sure these changes take effect not only in our local repository but also our remote one on GitHub, we need to push them to GitHub.</p>

<p>Since we made changes to existing commits, we need to forcefully push these changes to GitHub.</p>

<p><code>git push --force --tags origin 'refs/heads/*'</code></p>

<p>Note that the 'origin' above refers to whatever name you have given your remote, if you have not changed this it will be 'origin' otherwise you will need to update this to match the correct remote name in your case.</p>

<p>Once you have executed the above command, you can safely remove the repository directory from your machine.</p>

<p>If you already had the repository on your machine before making these changes, to make sure the changes properly reflect that, you may want to delete the repository directory and re-clone it as you normally would.</p>

<p>Happy Gitting!</p>
