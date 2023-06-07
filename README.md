**LARAVEL MODERN CONTROLLER**
===
## **Descrizione**

### Esercitazione interagendo con il database utilizzando l’ORM di Laravel.

- Creare un nuovo progetto Laravel 9

- Tramite **phpMyAdmin** creare un nuovo database **laravel_model_controller**

- Importare nel database la tabella **movies** in allegato

- Inserire le credenziali per il database nel file **.env**

- Creare un model Movie

`php artisan make:model Movie`

- Creare un controller che gestirà la rotta **/**

`php artisan make:controller Guest/PageController`

- All’interno della funzione **index()** del controller, recuperare tutti i film dal database e passarli alla view, che quindi li visualizzerà a schermo, tramite delle card.

### **BONUS**

Creare la pagina di dettaglio del film
