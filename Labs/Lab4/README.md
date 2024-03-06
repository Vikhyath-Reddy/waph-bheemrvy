# WAPH-Web Application Programming and Hacking

## Instructor: Dr. Phu Phung

## Student

**Name**: Bheemreddy Vikhyath Reddy

**Email**: bheemrvy@mail.uc.edu

![Vikhyath's headshot](images/headshot.jpg)

## Repository Information

Respository's URL: [https://github.com/Vikhyath-Reddy/waph-bheemrvy](https://github.com/Vikhyath-Reddy/waph-bheemrvy)

# Lab4

## overview

From the Lab4 I gained understandig of PHP Web Application Session managment. From the creation of the session and analyzing it by wireshark and hijacking it between the web browsers. Knowm about session cookies further more and their vernalabilities and how to avoid and handle by HTTPPonly Stream.

Here is the link to the Github repository

[https://github.com/Vikhyath-Reddy/waph-bheemrvy/tree/main/Labs/Lab4](https://github.com/Vikhyath-Reddy/waph-bheemrvy/tree/main/Labs/Lab4).

## Task 1 

### 1a: Deploy and test

Opened the sessiontest.php in both the browsers where the each browser keep track of the individual session count respectively.

![Opening sessiontest.php on firefox](images/figure3.jpg)

![Opening sessiontest.php on Chrome](images/figure4.jpg)

### 1b: Observe the Session-Handshaking using Wireshark

While running the sessiontest.php accessing it by the help of the wireshark. The session handshaking process is captured and can find a link between the users's session and its session cookies.

![ The 1st HTTP request/Response ](images/figure5.jpg)

![AFTER the 1st HTTP Request/Response](images/figure6.jpg)

### 1c: Understanding Session Hijacking

I have loaded the sessiontest.php in the firefox for 14 times them copied the cookied ID into the chrome and loaded and the chrome web browser has been loaded for 15 times continuing from the sessiontest.php loaded in the firefox.

![ Copying Cookie from the firefox browser ](images/figure8.jpg)

![ Attaching Cookie on the chrome console ](images/figure9.jpg)

![ Loading sessiontest.php on chrome browser](images/figure10.jpg)

## Task 2

### 2a: Revised Login System with Session Management

Created a logout.php file and adding logout feature. And added changes to the index.php where auorized login can be done and unauthorized logins are alerted.

![ Login Successful](images/figure11.jpg)

![ Login UnSuccessful](images/figure12.jpg)

![ Redirecting to form.php after login Unsuccessful](images/figure13.jpg)

### 2b: Session Hijacking Attacks

Session hijacked using two web browsers by mean of the cookies from one web browser to another which made login successful in the browser with not authorized credentials.

![ Login successful in firefox and unsuccesful in chrome](images/figure14.jpg)

![ Copying cookie from firefox to chrome ](images/figure15.jpg)

![ Login succesful in chrome](images/figure16.jpg)

## Task 3

### 3a: Data Protection and HTTPS Setup

The https was setup on my browser. SSL certficate is displayed below which provides secured connectionbetween the server and the client. And viewed form.php below using https.

![ Firefox Certficate](images/figure17.jpg)

![ Chrome Certficate](images/figure18.jpg)

![ form.php using https](images/figure19.jpg)

![ Host page by bheemrvy.waph.io](images/figure20.jpg)

### 3b: Securing Session Against Session Hijacking Attacks - setting HttpOnly and Secure flags for cookies

Inserted the sessions security settings for session cookies. Confirming through the browser's developer tools that the HttpOnly and Secure flags are correctly set enhances web application security by reducing the risk of session hijacking. The HttpOnly flag prevents access to cookies via client-side scripts, while the Secure flag ensures cookies are only sent over HTTPS connections. This verification indicates that the application is taking necessary measures to protect user sessions, making it harder for attackers to gain unauthorized access.

![ Can't view the cookies](images/figure21.jpg)

![ Enabling HTTPOnly ensures that session hijacking is prevented.](images/figure23.jpg)

### 3c: Securing Session Against Session Hijacking Attacks - Defense In-Depth

Following the authentication process, browser information was stored in a session variable within the index.php file. The screenshot depicts the defense mechanism, illustrating how to detect and address session hijacking attempts.

![ Alert Hijacking the session.](images/figure24.jpg)
