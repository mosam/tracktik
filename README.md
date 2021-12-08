# Track Tik 

Question 1: 
Using the code given, create each type of electronic as classes. Every ElectronicItem 
must have a function called maxExtras that limits the number of extras an electronic item
 can have. The extras are a list of electronic items that are attached to another electronic
 item to complement it.

❖	The console can have a maximum of 4 extras
❖	The television has no maximum extras
❖	The microwave can't have any extras
❖	The controller can't have any extras

Create a scenario where a person would buy:

1 console, 2 televisions with different prices and 1 microwave

The console and televisions have extras; those extras are controllers. 
The console has 2 remote controllers and 2 wired controllers. 
The TV #1 has 2 remote controllers and the TV #2 has 1 remote controller.

Sort the items by price and output the total pricing.

Question 2: That person's friend saw her with her new purchase and asked her how much the console and its controllers had cost her. Give the answer.

Please return the test in a compressed PHP file or through an online Git repository (GitHub or similar).

## **Assumtion with my understanding** 

> Television, Console and Microwave are in a group of main items. which have some price value.
> Controller come in group of extra item. Which is complimantory item, so it have zero value.
> You can not insert value from HTML. I have given hard coded value for define the attributes of the products.
   _you can insert product with it's atribute like below code_  
   
	```PHP
	$television1 = new Television(16000,'television',false,['extras'=>[['product'=>$remoteController,'limit'=>2]]]);
	```


> In the answer of second question,  **type** of electronic item is given as a **console**. so you can get only sum of item which has **console** type.
> If you want to get total of other type of items, you need to pass the other type in below given like in index.php file.

	```php
	$typeWiseproduct = $eleItems->getItemsByType('console'); 
	```
