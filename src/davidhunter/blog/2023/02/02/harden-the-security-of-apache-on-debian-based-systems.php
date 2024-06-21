---
article_title: Harden the Security of Apache on Debian based Systems
article_description: Apache is the software used to run a web server, but default installation isn't that secure. Let's harden it!
article_author: David Hunter
article_date: 2023-02-02
article_time: 21:21
layout: src/davidhunter/_inc/base.php
current_page: blog
---

<p>Apache is the software used to run a web server, but default installation isn't that secure. Let's harden it!</p>

<h3>Remove Apache Version</h3>

<p>Open your web browser, go to a site hosted on your server, right click and inspect. Go to the Network tab, you may need to reload the page, then view the response of the page you are accessing, and you should see somewhere that you are using Apache and a version number, and even the Operating System you are using.</p>

<p>Its just a number, right? Wrong! It gives attackers the precise Apache version you are using, which means if they know of a vulnerability in that specific version, they can take advantage of that, and who knows where that might lead. Same goes for the Operating System name, they could use that against you too.</p>

<p>The only person that needs to know this information is you and any other members of your team that do a similar job to you. Outside of that, no one needs to know this, so lets hide it.</p>

<p><b>Step 1:</b> Open the Apache config file using your favourite text editor (e.g. Nano).</p>
<p><code>sudo nano /etc/apache2/apache2.conf</code></p>
<p><b>Step 2:</b> Go down to the bottom of the file, add a comment so you know this is your modification, then add the following lines.</p>

<code><pre>
ServerTokens Prod
ServerSignature Off
</pre></code>

<p>
    <b>ServerTokens:</b> set this to <code>Prod</code> so that the header is production only, therefore only displaying Apache.
    <br>
    <b>ServerSignature:</b> set this to <code>Off</code> so that the version information is hidden.
</p>

<p><b>Step 3:</b> Save the file and restart Apache: <code>sudo systemctl restart apache2</code></p>

<h3>Disable Directory Index Listing</h3>

<p>By default, if you browse to a directory that is empty or has no index file, the contents of that directory will be displayed. This could reveal sensitive parts of your site and be more of a vulnerability than a helping hand. Here is how you disable it.</p>

<p><b>Step 1:</b> Open the Apache config file using your favourite text editor (e.g. Nano).</p>
<p><code>sudo nano /etc/apache2/apache2.conf</code></p>
<p><b>Step 2:</b> Look for the Directory directives and find the one that matches the path for the <code>www</code> directory. It should look like the following.</p>

<code><pre>
&lt;Directory /var/www/&gt;
    # ...
&lt;/Directory&gt;
</pre></code>

<p><b>Step 3:</b> If an <code>Option</code> exists for <code>Indexes</code>, ensure it is set to <code>-Indexes</code>. The minus negates it to ensure it is disabled. Apache will complain if there are other options without a + or - before them, so either remove the other options or ensure they have a + or - accordingly.</p>

<p><b>Step 4:</b> Save the file and restart Apache.</p>
<p><code>sudo systemctl restart apache2</code></p>

<p><b>Step 5:</b> Create an empty directory on your site, attempt to visit it and you should now get the default Apache error 403 Forbidden message. Also if you followed the previous section, the Apache version should be hidden from this page too. You can delete that empty directory if you wish now, as it was only for testing.</p>

<h3>Etag</h3>

<p>This allows remote attackers to gain access to some sensitive information about your server, such as inode number, multipart MIME boundary, and child process through the Etag header.</p>

<p>It is also a required fix for PCI compliance, but regardless a good fix to implement.</p>

<p><b>Step 1:</b> Open the Apache config file using your favourite text editor (e.g. Nano).</p>
<p><code>sudo nano /etc/apache2/apache2.conf</code></p>

<p><b>Step 2:</b> Scroll down to the bottom to where your custom directives are, and add the following line to the file.</p>
<p><code>FileETag None</code></p>

<p><b>Step 3:</b> Save the file and restart Apache.</p>
<p><code>sudo systemctl restart apache2</code></p>

<h3>Run Apache form a Non-Privileged Account</h3>

<p>By default, Apache may run as a special user account, and this could be used by an attacker to cause problems for your site or even your system. It is highly recommended you ensure it runs as a non-privileged user to help protect against this.</p>

<p><b>Step 1:</b> Decide on the name of the user that apache will run as. For this tutorial, I will use <code>apache</code>.</p>
<p><b>Step 2:</b> Add a user and group called <code>apache</code> with the following commands.</p>

<code><pre>
sudo groupadd apache
sudo useradd -g apache apache
</pre></code>

<p>Remember to swap out <code>apache</code> for the user name you chose if you decided on a different one.</p>

<p><b>Step 3:</b> Find your Apache installation directory.</p>
<p><code>sudo which apache2</code></p>

<p><b>Step 4:</b> Change ownership of the Apache installation directory to that of the new user and group you just created.</p>
<p><code>sudo chown -R apache:apache /path/to/apache</code></p>

<p>Swap <code>apache</code> for your chosen user name, and <code>/path/to/apache</code> to the path returned by the previous command.</p>

<p><b>Step 5:</b> Modify the Apache Environment Variables file to set the new user and group.</p>

<code><pre>
sudo nano /etc/apache2/envvars

export APACHE_RUN_USER=apache
export APACHE_RUN_GROUP=apache
</pre></code>

<p>Find the export lines shown above and change the values to the user name and group you created earlier.</p>

<p><b>Step 6:</b> Save the file and restart Apache.</p>
<p><code>sudo systemctl restart apache2</code></p>

<h3>Limit HTTP Request Methods</h3>

<p>By default, Apache can accept many different request methods, most of which are not needed for the majority of sites, so its best to limit these to the ones you will likely need.</p>

<p><b>Step 1:</b> Open the Apache config file using your favourite text editor (e.g. Nano).</p>
<p><code>sudo nano /etc/apache2/apache2.conf</code></p>

<p><b>Step 2:</b> Find the root Directory section, and inside that add the following.</p>

<code><pre>
&lt;LimitExcept GET POST HEAD&gt;
    Deny from All
&lt;/LimitExcept&gt;
</pre></code>

<p>Change <code>GET POST HEAD</code> to the request methods you need. In most cases, these three will be fine.</p>

<p><b>Step 3:</b> Save the file and restart Apache.</p>
<p><code>sudo systemctl restart apache2</code></p>

<h3>Conclusion</h3>

<p>That is about all I have for you for now. I hope it was useful to you. Please check back in the future to remind yourself of these steps and in case I happen to add more.</p>
