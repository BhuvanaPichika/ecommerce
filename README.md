**Aesthetica - Demo**

This demonstrates an E-commerce website using PHP and MYSQL.

This E-commerce website contains Beauty products of different categories like Makeup, Haircare, and Skincare products. The application loads products from an SQL database and displays them. Users can select to display products in a single category. Users can click on any product to get more information including pricing, and images of that particular product. Users can select items and add them to their shopping cart.

**Live Demonstration**

The E-commerce demo can be <http://13.201.13.60/ecommerce>

**HomePage:**
<img width="946" alt="1" src="https://github.com/BhuvanaPichika/ecommerce/assets/99191752/339a5b8b-be53-465d-b94a-fde4a690ea78">

**Getting Started**

- To access the page you need to first log in to the Page if you already have an account.
  <img width="960" alt="5" src="https://github.com/BhuvanaPichika/ecommerce/assets/99191752/21fb692e-2b3d-4a64-b821-8e3b749c029d">


- If you don’t have an account you need to create a user account in Registration Page.
<img width="960" alt="6" src="https://github.com/BhuvanaPichika/ecommerce/assets/99191752/42e800f5-4dab-4183-ba65-4c990ab494ec">


- After registering your data will be stored in the “user\_details” database. So while you are logging into your account your username and password will be cross-checked with the details present in the database.


- On the products page, you will have the image and price of the product so you can quickly add the product to the cart if you require.


**Products Page:**
<img width="947" alt="2" src="https://github.com/BhuvanaPichika/ecommerce/assets/99191752/1ee7e1df-5154-4fd7-a375-434d7828e361">
- When you click on the Add To Cart the product will be added to the Cart Page with price details and these product details will be added to the “cart” database.  

**Cart Page:**
<img width="960" alt="4" src="https://github.com/BhuvanaPichika/ecommerce/assets/99191752/79d51a99-ccc1-41f4-8e32-724580f77e0b">

- After selecting all the products which you require you can checkout the page by clicking on “checkout” so you will be directed to the “Checkout” page.

**Checkout Page:**
<img width="960" alt="3" src="https://github.com/BhuvanaPichika/ecommerce/assets/99191752/cb56a7c5-abd1-421b-9acc-c012b2d1dd4d">

- On the checkout page, you need to enter the details like your Name, Address, Phone number and payment mode.
- After entering the details your details will be automatically entered in the “Order” database.
- And your order will be confirmed.
<img width="960" alt="7" src="https://github.com/BhuvanaPichika/ecommerce/assets/99191752/1accd46f-fd46-41cb-a1f5-d66fb7ea9bcb">




Here each and every data that is fetched or Added will be from their respective Databases.

I have created a Database called **“ecommerce”**  which includes the below tables.

—>**user\_details** -  for storing the details of the user which can be used while logging into the page.

—>**product** - It contains the details of the products including price, image, and product code.

—>**cart** - When a product is added to the cart this cart database will get updated with the product details.

—>**orders** - It contains the user's shipping details when a checkout is completed.

—>**admin -** It contains the details of the admin who can access the admin page.
<img width="960" alt="14" src="https://github.com/BhuvanaPichika/ecommerce/assets/99191752/e83e2ba6-57d1-440f-a110-6560097eccfd">

**Admin Panel**

Admin Panel is used by the Admin who can only have access.

Admin can Add, Update, and Delete the products from the page. They can only manage anything related to the page.

Admin username: Bhuvana

Password: 1234

You can access the admin page from the folder php admin crud in which you will be having **index.php** file.

First, you need to log into the page by providing the admin details that are mentioned above and you will be directed to the Dashboard.
<img width="960" alt="8" src="https://github.com/BhuvanaPichika/ecommerce/assets/99191752/53cb225a-1a30-4b9a-88f1-0600ae779ffe">




**Dashboard**

<img width="948" alt="9" src="https://github.com/BhuvanaPichika/ecommerce/assets/99191752/7a2356f0-86a4-42a8-bbdb-f6e443eea745">

By Logging into the admin page you can see the Dashboard which has Add to Product, View Products, User details, and Orders.

On clicking you will be directed to the respective pages.



**Add To Products Page  -  In this, you can add, delete or update the products in the database.**
<img width="942" alt="10" src="https://github.com/BhuvanaPichika/ecommerce/assets/99191752/97be36b6-7b2d-44c5-ac82-fffe450b69e1">

**View Products Page - In this, you can view all the products that have been added to the database.**
<img width="939" alt="11" src="https://github.com/BhuvanaPichika/ecommerce/assets/99191752/8ad6b8b3-e8ad-4439-9a9d-07ac5978b885">

**User Details -  In this, you can see user list.If you want you can remove the user from the database.**
<img width="851" alt="12" src="https://github.com/BhuvanaPichika/ecommerce/assets/99191752/d06a21e4-3e87-4e6b-a7a9-32803efe5034">

**Orders - In this, you can see the order details from the database.**
<img width="901" alt="13" src="https://github.com/BhuvanaPichika/ecommerce/assets/99191752/163eb379-5aeb-4f76-a557-aa1b88561d2f">

**How To Open Local php files in the Web Browser** 

1. Open the Xampp control panel and start the Apache and Mysql servers.
1. Open localhost in the web browser.
1. Import the database into the MySQL (phpmyadmin).
1. Connect the PHP files with the localhost and open the php files with localhost/index.php in the web browser.


**Deployment in the Aws Ec2 instance**

1. Open Aws and log in to your free tier account.
1. Go to the console and you can see Ec2 click on Ec2.
1. In Ec2 you can see Instances – > Launch Instances.
1. In Launch Instances you need to name the instance and select AMI to Windows.
1. Below you need to create a key pair which will used further.
1. After setting security to ssh, http, and https you will launch the instance.
1. Now your instance will start running.
1. Open the instance and you will see the connect option click on that there you will RDP client.
1. In the RDP client, you need to download the remote desktop and get the password.
1. Copy that password open the remote desktop and paste the password there now you see the remote desktop.
1. In that, you need to install Xampp and copy and paste your files/folder in the htdocs.
1. Use the public Ipv4 address to open the file.

