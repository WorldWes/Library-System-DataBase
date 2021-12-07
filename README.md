# Library-System-DataBase
A web application containing a library sign-up form that connects to a local host MySQL database. This application allows query operations such as insert, update and delete. This application uses multiple languages such as PHP, HTML, Bootstrap, Javascript, and SQL.

Below the sign-up form, there is a table reflecting the live effect each change has on the database. This table also includes the current full table of patrons. The site table is directly connected to the MySQL database patron table, meaning any changes such as insert, update, or delete, will directly change in the database patron table file. 

<img width="1435" alt="Screen Shot 2021-12-06 at 6 18 41 PM" src="https://user-images.githubusercontent.com/91495498/144938282-1b41db02-7b9a-4370-b413-6cab6ed9d89c.png">
<img width="1436" alt="Screen Shot 2021-12-06 at 7 08 32 PM" src="https://user-images.githubusercontent.com/91495498/144942644-02b4a422-c254-47cb-8496-4e3ab56c3d91.png">


# Functionality 
Inside the table there are green edit and red delete buttons. This makes editing or deleting specific records from the patron table more convenient. There is also the option of typing in the firstname of the record you want to delete inside the firstname box and clicking the gray delete button instead.

<img width="173" alt="Screen Shot 2021-12-06 at 6 55 11 PM" src="https://user-images.githubusercontent.com/91495498/144941393-b439a3b3-462d-4200-be43-4904a3521d20.png">


# Build info
At first the only way to update a record in the patron table was to first type the information you wanted to update into the specific sign-up field and then type the information you wanted to update that field with in the box below that. This can still be done with the firstName and firstNameUpdate boxes. The edit button made this more practical by sending the user to another page that allows them to update all information in a specific record at once. This also made the sign-up form appear less cluttered with extra boxes.

<img width="915" alt="Screen Shot 2021-12-06 at 6 57 35 PM" src="https://user-images.githubusercontent.com/91495498/144941577-47e2df64-1600-494f-a76d-ea626cc2021b.png">
