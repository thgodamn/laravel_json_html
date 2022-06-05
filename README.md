Скрипт должен поддерживать следующие параметры (как через GET, так и через POST):  
1) background - ссылка на фон (как с http/https, так и без) или параметры фона в формате RGB (например "(0;15;25)" или "(0,1,3)", скобки будут в любом случае)  
2) depth - глубина изначального разворачивания списка (от 1 и выше и в том числе max)  

Из библиотек разрешено использовать только jQuery.  



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
