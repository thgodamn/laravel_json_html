
get доступен по /list и /api/list/
GET:

1) С заменой картинки
http://localhost:8000/api/list?background=https://media.istockphoto.com/photos/choose-the-way-picture-id921878978&depth=1&list[list-1][fdsfds]=4235345&list[list-1][54353]=543543&list[num]=543534  
  
2) Парс rgb  
http://localhost:8000/api/list?background=(1,43,54)&depth=1&list[list-1][fdsfds]=4235345&list[list-1][54353]=543543&list[num]=543534  
  
POST (доступен по /api/list/ - возращает html-код):  

{  
    "background" : "(15,2,5)",  
    "depth" : 1,  
    "list" : {  
        "list-1" : {  
        "fdsfds" : 4235345,  
        "54353": 543543  
        },  
        "num" : 543534  
    }  
}  
