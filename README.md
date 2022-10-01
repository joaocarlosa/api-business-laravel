# py-project

![Badge em Desenvolvimento](http://img.shields.io/static/v1?label=STATUS&message=IN%20PROGRESS&color=GREEN&style=for-the-badge)

Implementation of a Rest API for company org chart usin PHP8 and Laravel9 



Clone projetct  
```bash
$ git clone https://github.com/johncarll/api-business-laravel.git
```

Run the command to create the migrations
```bash
$ php artisan migrate
```

Run the php server to upload the project:
```bash
$ php artisan serve
```

# Working with company data

* ![GET](https://img.shields.io/badge/-GET-blue) - Listing all company data

```bash
/api/company/all/
```

* ![GET](https://img.shields.io/badge/-GET-blue) - Listing company data by id

```bash
/api/company/{id}
```


* ![POST](https://img.shields.io/badge/-POST-brightgreen) - Register a new company data
```bash
/api/company/{id}
```
```JSON
{
    "company_name": "name"
    
}
```

# Working with manager data

* ![GET](https://img.shields.io/badge/-GET-blue) - Listing all managers data

```bash
/api/manager/all/
```

* ![GET](https://img.shields.io/badge/-GET-blue) - Listing manager data by id

```bash
/api/manager/{id}
```


* ![POST](https://img.shields.io/badge/-POST-brightgreen) - Register a new manater data
```bash
/api/company/
```
```JSON
{
    "name": "john Doe",
    "company_id": "1"    
}
```

# working with collaborator data

* ![GET](https://img.shields.io/badge/-GET-blue) - Listing all collaborator data
```bash
/api/collaborator/
```

* ![GET](https://img.shields.io/badge/-GET-blue) - Listing collaborator information by id

```bash
/api/collaborator/{id}
```

* ![GET](https://img.shields.io/badge/-GET-blue) - List employees of a company
```bash
/api/collaborator/{business}
```

* ![POST](https://img.shields.io/badge/-POST-brightgreen)  - Register data of a new collaborator
```bash
/api/collaborator/{id}
```
```JSON
{
    "name": "John Doe",
    "email": "john@mail.com",
    "manager_id": 1
}
```



* ![DELETE](https://img.shields.io/badge/-DELETE-red) - Delete collaborator
```bash
/api/collaborator/{id}
```


## project structure
```
app
├── controllers           // Our API core handlers
│   ├── CollaboratorController.php  
├── CompanyController.php           
│   └── ManagerController.php      
├── model
│   ├── Collaborator.php             
│   ├── Company.php    
│   └── Manager.php          
└── routes
    └── api.php

```
