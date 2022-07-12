# docker-compose PHP app

**author**: Olivier Hayot  
**creation date**: 07/05/2022

This project is a basic docker-compose project creating a dev environmment for a php application.  
You can use it to fast develop a php app that works without framework.   
The project requires Docker to work as expected.

## How to use it

You can launch the containers by using the following command:
```bash
    docker-compose up
```

It will create 3 containers:  
- A PHP app: Executing the code written in the "site" folder
- A MySQL Database: Storing your data, you can either create your database by using phpMyAdmin or by writing SQL in the "init.sql" file
- A phpMyAdmin instance: Allows you to acces your database