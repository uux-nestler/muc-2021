## About MuC 2021

The project is used to demonstrate the interaction between MySQL, Laravel and Quasar as part of the Mobile App Development module at Technische Hochschule Ingolstadt (UXD Master). Therefore, the data used is only demo data (from MuC 2019). 

The goal of the project is to provide a basic framework for the development of an app for MuC 2021.

## Technologies

This example uses the following technology stack:

- **[MAMP](https://eureka.ykyuen.info/2010/10/07/mamp-introduction/)** as our (local) webserver.
- **[MySQL](https://www.tutorialspoint.com/mysql/mysql-introduction.htm)** for storing the data.
- **[Laravel](https://laravel.com/docs/4.2/introduction)** as the web application framework.
- **[Bootstrap](https://getbootstrap.com/docs/4.0/getting-started/introduction/)** for building the frontend of our laravel application.
- **[VueJS](https://vuejs.org/v2/guide/)** for building a single page application.
- **[Quasar](https://quasar.dev/introduction-to-quasar)** for building the frontend of our VueJS app.

Additional we use the following tools:

- **[NPM](https://quasar.dev/introduction-to-quasar)** the package manager from node.
- **[Postman](https://learning.postman.com/docs/getting-started/introduction/)** for testing our API.
- **[git](https://eureka.ykyuen.info/2010/10/07/mamp-introduction/)** for managing our source code.
- **[Netbeans](https://netbeans.org/about/)** or **[Atom](https://flight-manual.atom.io/getting-started/sections/why-atom/)** for editing our source code.


## Installation

After the check out the following steps have to be done:

- Start your (local) Webserver (e.g. MAMP) on port 8887 (do not use port 8080 as we will need it for quasar later on).
- Check the correct configuration of your **[database](https://laravel.com/docs/4.2/database)**
- Run the **[laravel migrations](https://laravel.com/docs/8.x/migrations)** (from your command line)
- Open your **[local website](http://localhost:8887/overview)** in your browser
- Check if you can access **[Overview](http://localhost:8887/overview)**, **[Program](http://localhost:8887/programs)** and **[Misc](http://localhost:8887/Misc)**
- Fill the program via **[Seeding](https://laravel.com/docs/8.x/seeding)** (from your command line) - you should now see some entries in your **[Program](http://localhost:8887/programs)**
- Try to delete, edit and add some program items - if you want to reset the database, you can run the seeding again.
- Open the `quasardev` folder in your command line and run the **[quasar development server](https://quasar.dev/quasar-cli/build-commands)**
- After some seconds the **[MuC Dev Site](http://localhost:8080/#/)**  opens in your browser; this should happen automatically.
- Open the hamburger menu (if it is not opened) and browse through the categories Overview, Program and Misc. Click on some Program items in order to explore the Program detail page.


## Understanding

If the App is running on your localhost try to understand the code:

- Create a new php project in Netbeans **[from existing sources](http://mauricemutetingundi.blogspot.com/2019/01/how-to-open-existing-php-project-in.html)**
- Open the file `quasarapp/src/layouts/MainLayout.vue` in Netbeans.
- Search for the `MuC App` and change it to `MuC 21 App`; check if your changes are visible on the **[MuC Dev Site](http://localhost:8080/#/)**
- **[Run mix](https://laravel.com/docs/8.x/mix)** in Laravel in order to make the App available via **[MAMP](http://localhost:8887/quasar)**; check if you see the new headline. You now can stop your quasar development server (just press `^C` in your command line).

- Try to understand the **[CRUD Controllers](https://laravel.com/docs/8.x/controllers)** and analyse the files `routes/web.php` and `app/Http/Controllers/ProgramsController.php` in Netbeans.
- Try to understand the **[Eloquent Resources](https://laravel.com/docs/8.x/eloquent-resources)** and analyse the the files `routes/api.php` and `app/Http/Controllers/ProgramResource.php` in Netbeans.
- Try to understand the **[Laravel Migrations](https://laravel.com/docs/8.x/migrations)** and analyse the two new files `2020_12_22_170331_drop_participant_table` and `2020_12_22_170616_program_content_to_text` (in the folder `database/migrations`).
- Try to understand the **[Laravel Seeding](https://laravel.com/docs/8.x/seeding)** and anlyse the files `database/data/program.json` and `database/seeders/ProgramSeeder.php`.
- Try to understand the **[Quasar Routing](https://quasar.dev/layout/routing-with-layouts-and-pages)** and analyse the file `quasarapp/src/router/routes.js`.

- Try to understand the **[Laravel Frontend](https://laravel.com/docs/8.x/blade)** and the **[Quasar Frontend](https://quasar.dev/layout/page)** and compare the file `resources/views/overview.blade.php` with `quasarapp/src/pages/Overview.vue` and the file `resources/views/misc.blade.php` with `quasarapp/src/pages/Misc.vue`.
- Try to understand the **[List Rendering](https://vuejs.org/v2/guide/list.html)** and **[Axios](https://vuejs.org/v2/cookbook/using-axios-to-consume-apis.html)** in VueJS and analyse the file `quasarapp/src/pages/Programs.vue`.
- Try to understand the **[Dynamic Route Matching](https://router.vuejs.org/guide/essentials/dynamic-matching.html#reacting-to-params-changes)** in VueJS and analyse how `quasarapp/src/pages/Programs.vue` and `quasarapp/src/pages/ProgramDetail.vue` are connected.


## Understanding

If you understand the basic principles start extending the App:

- Add an additional ressource for the rooms. You have to perform the following steps:
  - Add a new eloquent model
  - Add a migration
  - Add a seeder
  - Add a CRUD controller
  - Add all blade files
  - Add routes to web.php
- Make the rooms readable via the API. You have to perform the following steps:
  - Add a new resource
  - Add routes to api.php
- Add an additional section for the rooms in your App. You have to perform the following steps:
  - Add a new page in Quasar
  - Add the page to your router
  - Link the page from the SideBar
  - Add the API requests in the script
- BONUS: Link the program items with the rooms. You have to perform the following steps:
  - Include a **[foreign key](https://laravel.com/docs/4.2/schema#foreign-keys)** in your program table
  - Change the eloquent model for programs
  - Modify your seeders
  - Modify your blade files
  - Modify your controllers