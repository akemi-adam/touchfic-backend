# About the API

API with Sanctum do touchfic, a project developed during the third period of the Internet Informatics course.

# Endpoints

## Auth

Method | Endpoint | Description
-------- | ---- | -----
POST | http://api/auth/register | Creates a new user 
POST | http://api/auth/login | Log a new user

## Posts

Method | Endpoint | Description
-------- | ---- | -----
GET | http://api/post | Get all posts
POST | http://api/post | Creates a new post
GET | http://api/post/{id} | Get a post
PUT | http://api/post/{id} | Update a post
DELETE | http://api/post/{id} | Delete a post