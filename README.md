# Emojipaste
Create your own emoji site . http://emojipaste.us


<h2>Uploading the files<small> How to upload the files</small></h2>
<hr>
<p>1 - Unzip the archive provided by</p>
<p>2 - Navigate to the "Upload" folder and upload the contents to your webhost</p>

</br>
<h2>Uploading & configuring the database<small> How to add db info and upload</small></h2>
<hr>
<p>1 - Create a database and user, assign the user all database privalages for your database.</p>
<p>2 - Import emoji.sql using phpmyadmin or another database manager, you should now see a new table called emoji containing 995 rows.</p>
<p>3 - Navigate to /includes/database.php and replace "username, password and database" with your database username, password and database name.</p>
<p>4 - If all has gone well your website should now be functional.</p>
</br>

<h2>Configuring the website settings<small> Editing the config file</small></h2>
<hr>
<p>1 - Navigate to your webiste /includes/config.php and open up the file for editing</p>
<p>2 - This file will contain variables for configuring the website such as title, description, url and other options. They are all commented with individual instructions</p>

</br>
