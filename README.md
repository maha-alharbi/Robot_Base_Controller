# Robot_Base_Controller
Responsive Control panel for a Robot Arm implemented by PHP5  with Model-View-Controller (MVC) Model and MySQL database for backend. For frontend, HTML5, CSS, JavaScript, and Bootstrap v.5 (latest version) are used to build responsive webpages. In addition, I would note that the "status" column of the "robot_arm" table in the database is for showing the status of the robot whether it is On or Off, so the value 1 means On, and the value 0 means Off. The "data_fetching.php" file is a php page displays the data of the last record saved in "robot_arm" table in the database. The "index.php" file is the Home page, where the user can set the degree values of the 6 motors of the robor arm, each degree value is between 0 and 180. Also, the user has the ability to reset the values of the sliders by press the "Reset" button. Moreover, the "On" button is to set the status to 1, and the "Off" button is to set the status to 0. In addition, there are 5 buttons to set the direction value of the robot base, the direction can be forward, left, right, stop, and backward.

![index2](https://user-images.githubusercontent.com/65139666/124392608-5a9de300-dcff-11eb-80ab-c501bfe94e4c.png)

