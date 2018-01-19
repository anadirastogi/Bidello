Bidello
=======

E-Bidding Website

This website has been written using HTML, CSS, PHP, MySQL and Javascript. 

A) It entails the following features :-

    1) Users can start bids for their items 
    2) Users can participlate in bids 
    3) Winner of the bid will be notified automatically via email as soon as the bid ends 
    
    
B) To set it up
  
    1) Install a Apache-MySQL-PHP software stack depending on your OS
    2) Place the e-bidding folder in the index folder 
    3) Download the data dump to set up database for the website 
  

C) Technical features 
   -Login
   -Check Username availability
   -Login form invalidations (email, mobile, same username & password and etc)  
   -encrypted storage of password 
   -data retention - if there is an error in one field , data of             
    other field is still retained
   -Forgot Password  
   -If user want to bid and are not logged in , it will first direct you to login page and head you back to bidding location
   -Wrote all the queries to extract from information from database
   -Event Scheduler (just like cron job) in MySql to automatically decide the winner as in update winner flag in database as   
    soon as the bid is expired .
   -View Bids , start a new bid 
   -Different categories , Search by popularity , latest bids 
   -Pagination
   
  
D) To know the look and feel of the website, click on this link https://github.com/anadirastogi47/Bidello/blob/master/E-BIDDING.pdf 
