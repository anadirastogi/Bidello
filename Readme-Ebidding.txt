E-Bidding

There are few authentication feature bugs and styling bugs

Please import database file .

Create a new user and login with it or use existing account 

username - howeez 
password - howeez1@

In E-Bidding website my major contribution was BackEnd work 

1) New User creation - 
   -It has option like "Check Username availability" 
   -Password and username should not be same 
   -encrypted storage of password concat with encrypted username     
    so that there can be users with same password 
   -data retention - if there is an error in one field , data of             
    other field is still retained
   
2) Forgot Password 
3) Login 
4) If user want to bid and are not logged in , it will first direct you to login page and head you back to bidding location

5) Wrote all the queries to extract from information from database
6) Event Scheduler (just like cron job) in MySql to automatically decide the winner as in update winner flag in database as soon as the bid is expired .
7) View Bids , start a new bid 
8) Different categories , Search by popularity , latest bids 
9) Pagination 





 

