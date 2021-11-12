# REST API Simple Ticketing Application 

<h3> This is the documentation of how to build the REST API </h3>

First thing first, you need to have some required application listed below:
* XAMPP
* Postman

Then clone this repository to your <b>htdocs</b> folder in your local server.

After you cloned this repository to your local server, the next is create new database with name **technicaltest**
Next, open your mysql and import the database [technicaltest](https://github.com/fsngpz/technicalTest/blob/main/technicaltest.sql)

And now, you are ready to build the API. In this repository has five API with different function:
* First is [List Ticket](https://github.com/fsngpz/technicalTest/blob/main/listticket.php). This API is to get list of the tickets but with function Limit. So, you can input the Limit of list data.
* Second is [Add Ticket](https://github.com/fsngpz/technicalTest/blob/main/addticket.php). List Ticket API is used to generate List of the tickets with the limit, but Add Ticket API is used to add the new Ticket with status automatically to be open and the Ticket Number will automatically generated
* Third is [Reply Ticket](https://github.com/fsngpz/technicalTest/blob/main/replyticket.php). After added new Ticket, the next API is Reply Ticket, so the function of this API is to answer the Ticket, then the Ticket Status will automatically Answered.
* Fourth is [Close Ticket](https://github.com/fsngpz/technicalTest/blob/main/closeticket.php). The next API is to close the ticket. So in this API, the input paramater is only the Ticket Number then the Ticket Status is will be Closed
* Last is [Delete Ticket](https://github.com/fsngpz/technicalTest/blob/main/deleteticket.php). The last API is to delete the ticket. Same as the Close Ticket API, the input parameter on this API is only the Ticket Number then the ticket will deleted from databases.
<br></br>
To build the API, you need to open the Postman and create new Collections
![image](https://user-images.githubusercontent.com/91114367/141490323-fe5743c8-6639-42f3-ac27-ab6a8f2f2f8d.png)<br></br>
You can create new collections in any name, then create new request by clicking the + button on the left of your collection tab
![image](https://user-images.githubusercontent.com/91114367/141490819-10d9db03-fe1d-4581-96f1-96a9121eebf1.png)<br></br>
Then make sure the request is `GET`, then paste the URL of [List Ticket](https://github.com/fsngpz/technicalTest/blob/main/listticket.php) API that have been cloned to your local server to the text field beside the `GET` drop down.
![image](https://user-images.githubusercontent.com/91114367/141491321-529ca041-a21f-4251-b97e-959124dee2ca.png)<br></br>
In Key parameter, type **Limit** with Value that you like. The number data that will be showed is based on your input Value. In this case, the input Value is two, so there will be two data that shown.
To run the API, you can click Send button.
![image](https://user-images.githubusercontent.com/91114367/141491938-3f562e09-8062-4d4b-9648-7b7e070fcad0.png)<br></br>
The next is to build [Add Ticket](https://github.com/fsngpz/technicalTest/blob/main/addticket.php) API. Add new request again, then make sure the request is `POST` after that paste the URL of [Add Ticket](https://github.com/fsngpz/technicalTest/blob/main/listticket.php) API. Make sure you selecting the Body Menu the choose `x-www-form-urlencoded`. As shown picture below
![image](https://user-images.githubusercontent.com/91114367/141493008-08782e15-8c7d-44f8-9dbe-f25dbebb726e.png)
<br></br>
Then Key parameter is Subject with Value anything you like. The next Key parameter is Message with anything Value you like. Last is Priority with three options **(High, Medium, Low)**. As shown picture below
![image](https://user-images.githubusercontent.com/91114367/141494316-4e260199-6f65-47a4-ae28-f1852a954f88.png)
After that you can click Send button. There will be message `Success to adding the ticket`.
![image](https://user-images.githubusercontent.com/91114367/141494460-3c919235-714b-48fa-8ddb-9e16fa4b0bf7.png) <br></br>
After you build all the API, dont forget to save all the request into your Collections. It will help you to re-build the API again in the futute. So, you dont need to create new request anymore.
