Task-Management-System is developed using html and css for front-end and php,mysql for backend part. It has functionalities like signup,login in the homepage.

In homepage we have a login form which takes email and password. We check the email for its existence. if existed and the password is correct then login will be successful and moved to admin page else if password is wrong then it says enter correct password. If the email dont exist it will add to the database saying user to login again as signp process is successfull.

After login into the user account/admin account he can see the tasks. for every task he has an edit button with which he can travel to edit page, which takes tasks id to edit.php which <a> tag. Using task id we will retrive the data from the database table and fill onto the respected feilds of the form allowing user to edit the feilds which he wanted. After editing he can use update button which will update the details onto the database using update.php file where the taken data from edit.php is uploaded using sql query of update.
  
  Using ADD button in admin page, he can add tasks. the add button takes email with it as we use email to list the specified tasks on the particular user. in the add1.php the feilds are filled and after hitting the add button the  task is added to the task table in add.php where we use sql query of insert with condiiton of email.
  
  using fliter function user can specify his filter to be either completed/pending and hitting the filter button will direct to another page where sql query is used like select using condintion of email and status=filter and list all the matched rows.
  
  using search button it will give the tasks which are matched with the task name under that email.
  
  in entire application email is given atmost priority for making separation and privacy for every separate user. in all the functionalitied email is passed without having the knowledge of the user which is used to update the task, list the tasks and edit aswell.
  
  this is the entire application with functionalities of login, add task, edit task, list task according to due date, filter task, search task using taskname

