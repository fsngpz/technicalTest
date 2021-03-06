# REST API Simple Ticketing Application 

<h3> This is the documentation of how to build the REST API </h3>

First thing first, you need to have some required application listed below:
* XAMPP
* Postman

Then clone this repository to your <b>htdocs</b> folder in your local server.

After you cloned this repository to your local server, the next is create new database with name **technicaltest**
Next, open your mysql and import the database [technicaltest](https://github.com/fsngpz/technicalTest/blob/main/technicaltest.sql)


And now, you are ready to build the API. In this repository has five API with different function:
* First is [List Ticket](https://github.com/fsngpz/technicalTest/blob/main/API/listticket.php). This API is to get list of the tickets but with function Limit. So, you can input the Limit of list data.
* Second is [Add Ticket](https://github.com/fsngpz/technicalTest/blob/main/API/addticket.php). List Ticket API is used to generate List of the tickets with the limit, but Add Ticket API is used to add the new Ticket with status automatically to be open and the Ticket Number will automatically generated
* Third is [Reply Ticket](https://github.com/fsngpz/technicalTest/blob/main/API/replyticket.php). After added new Ticket, the next API is Reply Ticket, so the function of this API is to answer the Ticket, then the Ticket Status will automatically Answered.
* Fourth is [Close Ticket](https://github.com/fsngpz/technicalTest/blob/main/API/closeticket.php). The next API is to close the ticket. So in this API, the input paramater is only the Ticket Number then the Ticket Status is will be Closed
* Last is [Delete Ticket](https://github.com/fsngpz/technicalTest/blob/main/API/deleteticket.php). The last API is to delete the ticket. Same as the Close Ticket API, the input parameter on this API is only the Ticket Number then the ticket will deleted from databases.
<br></br>
To build the API, you need to open the Postman and create new Collections
![image](https://user-images.githubusercontent.com/91114367/141490323-fe5743c8-6639-42f3-ac27-ab6a8f2f2f8d.png)<br></br>
You can create new collections in any name, then create new request by clicking the + button on the left of your collection tab<br></br>
![image](https://user-images.githubusercontent.com/91114367/141490819-10d9db03-fe1d-4581-96f1-96a9121eebf1.png)<br></br>
Then make sure the request is `GET`, then paste the URL of [List Ticket](https://github.com/fsngpz/technicalTest/blob/main/API/listticket.php) API that have been cloned to your local server to the text field beside the `GET` drop down.
![image](https://user-images.githubusercontent.com/91114367/141491321-529ca041-a21f-4251-b97e-959124dee2ca.png)<br></br>
In Key parameter, type **Limit** with Value that you like. The number data that will be showed is based on your input Value. In this case, the input Value is two, so there will be two data that shown.
To run the API, you can click Send button.<br></br>
In [List Ticket](https://github.com/fsngpz/technicalTest/blob/main/API/listticket.php) API you can track your message by adding the Parameter **ID** and the input Value is the ID Ticket that you want to track the message. <br></br>
![image](https://user-images.githubusercontent.com/91114367/142114541-375cd3af-e8ae-4289-a860-414c7ccb33fd.png)<br></br>
Picture above is the result of function tracking message in [List Ticket](https://github.com/fsngpz/technicalTest/blob/main/API/listticket.php) API. <br></br><br></br>
![image](https://user-images.githubusercontent.com/91114367/141491938-3f562e09-8062-4d4b-9648-7b7e070fcad0.png)<br></br>
The next is to build [Add Ticket](https://github.com/fsngpz/technicalTest/blob/main/API/addticket.php) API. Add new request again, then make sure the request is `POST` after that paste the URL of [Add Ticket](https://github.com/fsngpz/technicalTest/blob/main/listticket.php) API. Make sure you selecting the Body Menu then choose `x-www-form-urlencoded`. As shown picture below
![image](https://user-images.githubusercontent.com/91114367/141493008-08782e15-8c7d-44f8-9dbe-f25dbebb726e.png)
<br></br>
Then Key parameter is Subject with Value anything you like. The next Key parameter is Message with anything Value you like. Last is Priority with three options **(High, Medium, Low)**. As shown picture below
![image](https://user-images.githubusercontent.com/91114367/141494316-4e260199-6f65-47a4-ae28-f1852a954f88.png)<br></br>
After that you can click Send button. There will be message `Success to adding the ticket`.
![image](https://user-images.githubusercontent.com/91114367/141494460-3c919235-714b-48fa-8ddb-9e16fa4b0bf7.png) <br></br>
To make sure the data is Added successfully, you can run the [List Ticket](https://github.com/fsngpz/technicalTest/blob/main/API/listticket.php) API again, then add the Limit.
![image](https://user-images.githubusercontent.com/91114367/141496338-a507b09b-30a6-4e3c-9e57-8d27a55e63f7.png)<br></br>
In this case, the data is already successfully added.

You have successful to build two API, the third API is [Reply Ticket](https://github.com/fsngpz/technicalTest/blob/main/API/replyticket.php). You can create new request. But in this case, the request is using **`PUT`** request. Same as [Add Ticket](https://github.com/fsngpz/technicalTest/blob/main/API/addticket.php) API. First, paste [Reply Ticket](https://github.com/fsngpz/technicalTest/blob/main/replyticket.php) URL then, you need to selecting **Body** Menu then select `x-www-form-urlencoded`. After that the Key parameter will be **`TicketNum`** with Value is existing Ticket Number and another Key is `Message` with Value anything that you want to reply.
![image](https://user-images.githubusercontent.com/91114367/141648048-6053f55f-bf69-47a1-8b21-b8041a46dad5.png)<br></br>
Then check the Ticket is updating or not with [List Ticket](https://github.com/fsngpz/technicalTest/blob/main/API/listticket.php) API.
![image](https://user-images.githubusercontent.com/91114367/141648134-049e45c7-18a8-4c27-976b-ff710b36c2f4.png) <br></br>
In this case, the Ticket is Status is already changed to be Answered

After answered the Ticket. The next thing will be, close the Ticket. So, [Close Ticket](https://github.com/fsngpz/technicalTest/blob/main/API/closeticket.php) API will change the Ticket Status Answered to Close. The request is same as [Reply Ticket](https://github.com/fsngpz/technicalTest/blob/main/API/replyticket.php) API because basically the function is totally the same. Paste the [Close Ticket](https://github.com/fsngpz/technicalTest/blob/main/API/closeticket.php) URL in text field. Then make sure you are in **Body** Menu and select `x-www-form-urlencoded`. Then the Key parameter will be same as [Reply Ticket](https://github.com/fsngpz/technicalTest/blob/main/API/replyticket.php) API that is **TicketNum** and the Value is any Ticket that you want to closed. Then run the API by clicking Send button.
![image](https://user-images.githubusercontent.com/91114367/141498749-e7114e43-4ed2-493b-ba47-244aebb88ce0.png)<br></br>
Then check the Ticket Status is updated or not by running the [List Ticket](https://github.com/fsngpz/technicalTest/blob/main/API/listticket.php) API.
![image](https://user-images.githubusercontent.com/91114367/141499050-2afe1ffe-193b-40ec-8106-e314d1e98938.png)<br></br>

The last API is [Delete Ticket](https://github.com/fsngpz/technicalTest/blob/main/API/deleteticket.php) API. As the name suggests, this API is will delete the Ticket. To run this API you can create new request same as [Close Ticket](https://github.com/fsngpz/technicalTest/blob/main/API/closeticket.php) API. With `PUT` request, then make sure you are in **Body** Menu and select `x-www-form-urlencoded`. Then the Key parameter will be `ID` with the Value of Ticket ID that you want to delete. Then after you inputting Key and Value parameter, you can click Send button.
![image](https://user-images.githubusercontent.com/91114367/141500019-b3ea72ef-17a2-42cd-a6fb-4a0562bb2553.png)<br></br>

Again, after you run the API, you can check is the API successfully executed or not by running the [List Ticket](https://github.com/fsngpz/technicalTest/blob/main/API/listticket.php) again.
![image](https://user-images.githubusercontent.com/91114367/141500389-bd20dc52-adc9-4474-94f0-571c9a313cbc.png)<br></br>


After you build all the API, dont forget to save all the request into your Collections. It will help you to re-build the API again in the futute. So, you dont need to create new request anymore.

So, thats it all of the documentation of how to use the REST API of Simple Ticketing Application.
