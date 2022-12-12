# About the API

API with Sanctum do touchfic, a project developed during the third period of the Internet Informatics course.

# Endpoints

## Auth

Method | Endpoint | Description
-------- | ---- | -----
POST | http://localhost:8000/api/auth/register | Creates a new user 
POST | http://localhost:8000/api/auth/login | Log a new user

## Posts

Method | Endpoint | Description
-------- | ---- | -----
GET | http://localhost:8000/api/post | Get all posts
POST | http://localhost:8000/api/post | Creates a new post
GET | http://localhost:8000/api/post/{id} | Get a post
PUT | http://localhost:8000/api/post/{id} | Update a post
DELETE | http://localhost:8000/api/post/{id} | Delete a post