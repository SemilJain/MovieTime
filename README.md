# MovieTime
## Movie Rating and Reviews Website

Movie­Time is a movie information website where a logged in user can see movie details.
● User can Register and LogIn on the website.
● Watch Trailers of latest Movies.
● Search Movies by name and filter based on Genre.
● User can view Movie Information , Add Reviews and Add movies
     to their List.
● User can manage Account once Logged in.
● Top Rated Movies displayed based on User rating.
● In Theatre Movies can be booked via BookMyShow.

# WORKING
## 1. A Movie Page
A single Movie page contains all the information about the movie, Watch trailer button, add review and add to my list buttons.
Designing and Layou is done by CSS.
Reviews are displayed at the end of the page.
You can’t access this page unless you are logged in.
## 2. Login/Register Forms
We have used Html forms to create a login/register form and Client
side validation is done by javascript.
After submiting the form, values are stored in the database by PHP
and MYSql using queries.
Whenever the user logins PHP is used to check if the credentials
are matching with that of database.
## 3. Adding Reviews/Rating and Mylist updation
After user fills the review and rating form the values of form are
stored in the Review table in database by sql queries.
These reviews are displayed on their respective movie pages as
well as in user’s account.
On clicking ‘Add to List’ The movie gets stored in users table
which can be retrieved.
## 4. Search and Filter(by Genre) movies
All the movies in the database are stored in a list form which
gets filtered every time a key is pressed.This is done using
JavaScript.
All genres are denoted by radio button.On Clicking a particular
radio button filter function is called which shows and hides movie
based on class value assigned to each movie.
## 5. Top Rated Movies
The Movie Pages are assigned id values based on the average user rating given to it which is fetched from the database.
Sorting function is called which sorts the Movie div based on id value assingned in descending order.
## 6.My Account
After logging in ,The user can access his account.
The Account Page contains features like Changing Username, Email Id and Password after validation.
The user can see all his reviews and the movies added to his Mylist.
A Logout Button is provided to logout of Account Page after which the user cannot access most of the features of the web site.
## 7. In Theatres
You will be redirected to BookMyShow after you have selected the
movie currently in theatre and your city name.BookMyShow will open
that movie bookings in the city selected.
